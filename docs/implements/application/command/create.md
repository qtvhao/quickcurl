```mermaid
flowchart
    %% Application Layer
    subgraph Application Layer
        CreateCourseHandler[CreateCourseHandler]
        CreateCourseCommand[CreateCourseCommand]
    end

    %% Domain Layer
    subgraph Domain Layer
        CourseEntity[CourseEntity]
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
    CreateCourseHandler -->|"getByUuid()"| CourseWriteRepository
    CreateCourseHandler -->|"save()"| CourseWriteRepository
    CreateCourseHandler -->|"getByUuid()"| CourseReadRepository
    CourseEntity --> CourseReadRepository
    CourseWriteRepository --> CourseAggregate

    %% Repository Implementation
    CourseWriteRepository -->  EloquentCourseWriteRepository
    CourseReadRepository --> EloquentCourseReadRepository

    %% Dependants
    CourseController --> CreateCourseCommand
