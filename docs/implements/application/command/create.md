```mermaid
flowchart TD
    subgraph Application Layer
        CreateCourseHandler[CreateCourseHandler]
        CreateCourseCommand[CreateCourseCommand]
        CourseWriteRepository[CourseWriteRepositoryInterface]
        EventDispatcher[EventDispatcher]
    end

    subgraph Domain Layer
        CourseAggregate[CourseAggregate]
        CourseCreatedEvent[CourseCreatedEvent]
    end

    subgraph Infrastructure Layer
        EloquentCourseRepository[EloquentCourseWriteRepository]
    end

    subgraph Presentation Layer
        CourseController[CourseController]
    end

    %% Dependencies
    CreateCourseHandler --> CreateCourseCommand
    CreateCourseHandler --> CourseWriteRepository
    CreateCourseHandler --> EventDispatcher
    CreateCourseHandler --> CourseAggregate

    %% Event Dependency
    CourseAggregate --> CourseCreatedEvent
    EventDispatcher --> CourseCreatedEvent

    %% Dependant
    CourseController --> CreateCourseHandler
    EloquentCourseRepository --> CourseWriteRepository
