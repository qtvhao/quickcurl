```mermaid
flowchart LR
    %% Application Layer
    subgraph Application Layer
        CreateCourseHandler[CreateCourseHandler]
        CreateCourseCommand[CreateCourseCommand]
        EventDispatcher[EventDispatcher]
    end

    %% Domain Layer
    subgraph Domain Layer
        CourseAggregate[CourseAggregate]
        CourseCreatedEvent[CourseCreatedEvent]
        CourseWriteRepository[CourseWriteRepositoryInterface]
        CourseReadRepository[CourseReadRepositoryInterface]
    end

    %% Infrastructure Layer
    subgraph Infrastructure Layer
        EloquentCourseWriteRepository[EloquentCourseWriteRepository]
        EloquentCourseReadRepository[EloquentCourseReadRepository]
    end

    %% Presentation Layer
    subgraph Presentation Layer
        CourseController[CourseController]
    end

    %% Dependencies
    CreateCourseHandler --> CreateCourseCommand
    CreateCourseHandler --> CourseWriteRepository
    CreateCourseHandler --> CourseReadRepository
    CreateCourseHandler --> EventDispatcher
    CreateCourseHandler --> CourseAggregate

    %% Event Flow
    CourseAggregate --> CourseCreatedEvent
    EventDispatcher --> CourseCreatedEvent

    %% Repository Implementation
    EloquentCourseWriteRepository --> CourseWriteRepository
    EloquentCourseReadRepository --> CourseReadRepository

    %% Dependants
    CourseController --> CreateCourseHandler

