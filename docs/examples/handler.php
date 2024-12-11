<?php

namespace Application\CommandHandlers;

use Domain\Entities\CourseModule;
use Domain\Repositories\CourseWriteRepositoryInterface;
use Application\Contracts\CommandHandlerInterface;
use Application\Commands\AddCourseModuleCommand;
use Domain\Events\CourseModuleAddedEvent;
use InvalidArgumentException;

class AddCourseModuleHandler implements CommandHandlerInterface
{

    public function __construct(private CourseWriteRepositoryInterface $courseRepo)
    {
      
    }

    public function handle(AddCourseModuleCommand $command): void
    {
        try {
            $course = $this->courseRepo->findCourseById($command->courseId);
        } catch (\Exception $e) {
            throw new \RuntimeException("Failed to retrieve the course: " . $e->getMessage(), 0, $e);
        }

        if (!$course) {
            throw new InvalidArgumentException("Course not found for ID: {$command->courseId}");
        }

        // Validate module properties
        $course->validateNewModule(
            $command->name,
            $command->position,
            $command->state,
            $command->unlock_at
        );

        // Delegate reordering logic to the Course entity
        $course->resolvePositionConflict($command->position);

        // Create and add module
        $newModule = new CourseModule(
            $command->id,
            $command->name,
            $command->position,
            $command->state,
            $command->unlock_at,
            $command->completed_at
        );

        $course->addModule($newModule);

        // Persist changes using Unit of Work
        $this->courseRepo->beginTransaction();
        try {
            $this->courseRepo->save($course);
            $this->courseRepo->commit();
        } catch (\Exception $e) {
            $this->courseRepo->rollback();
            throw $e;
        }

        // Record domain event
        $course->recordEvent(new CourseModuleAddedEvent($command->id, $command->courseId));
    }
}
