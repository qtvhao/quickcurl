```mermaid
flowchart
    %% Domain Layer
    subgraph CommandBusComponent["CommandBusInterface"]
        CommandBus["CommandBus"]
        CommandBus2["CommandBus"]
    end

    subgraph DomainLayer2["Domain Layer"]
        NotificationCreatedEvent["NotificationCreatedEvent"]
    end
    subgraph DomainLayer["Domain Layer"]
        CourseCreatedEvent["CourseCreatedEvent"]
        CourseAggregate["CourseAggregate"]
    end

    %% Application Layer
    subgraph ApplicationLayer["Application Layer"]
        CreateCourseHandler["CreateCourseHandler"]
        NotifyFinanceTeamHandler["NotifyFinanceTeamHandler"]
        ProcessManager["CourseCreatedProcessManager"]
        ConditionFreeCourse{"Yes/No?"}
        DispatchCommand["Dispatch NotifyFinanceTeamCommand"]
    end
    
    subgraph EventBusComponent["EventBusInterface"]
        EventBus["EventBus"]
        EventBus2["EventBus"]
    end

    %% Connections
    %% Command Flow
    CommandBus2 --> CreateCourseHandler
    CourseAggregate -->|"releaseEvents()"| CourseCreatedEvent
    CreateCourseHandler -->|"publishEvent()"| EventBus
    NotifyFinanceTeamHandler -->|"publishEvent()"| EventBus2
    CourseCreatedEvent --> CreateCourseHandler
    NotificationCreatedEvent --> NotifyFinanceTeamHandler

    %% Event Flow
    EventBus -->|Dispatches| ProcessManager
    ProcessManager --> ConditionFreeCourse

    %% Branching Logic
    ConditionFreeCourse -->|Yes| SendEmail

    ConditionFreeCourse -->|No| DispatchCommand
    DispatchCommand --> CommandBus
    CommandBus --> NotifyFinanceTeamHandler



