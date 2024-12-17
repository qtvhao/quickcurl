```mermaid
flowchart
    %% Application Layer
    subgraph Application Layer
        CreateCourseHandler[CreateCourseHandler]
        CreateCourseCommand[CreateCourseCommand]
        EventDispatcher[EventDispatcher]
    end

    %% Domain Layer
    subgraph Domain Layer
        CourseAggregate[CourseAggregate]
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

    %% Dependencies of CreateCourseHandler
    CreateCourseCommand -->|"CommandBusInterface"| CreateCourseHandler
    CreateCourseHandler -->|"getByUuid() save()"| CourseWriteRepository
    CreateCourseHandler -->|"getByUuid()"| CourseReadRepository

    %% Event Flow
    CourseAggregate --> CourseCreatedEvent

    %% Repository Implementation
    CourseWriteRepository -->  EloquentCourseWriteRepository
    CourseReadRepository --> EloquentCourseReadRepository

    %% Dependants
    CourseController --> CreateCourseCommand
