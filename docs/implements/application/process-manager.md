```mermaid
flowchart LR
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
    subgraph ApplicationLayer2["Application Layer"]
        NotifyFinanceTeamHandler["NotifyFinanceTeamHandler"]
        ProcessManager2["NotificationCreatedProcessManager"]
    end
    subgraph ApplicationLayer["Application Layer"]
        CreateCourseHandler["CreateCourseHandler"]
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
    EventBus2 -->|Dispatches| ProcessManager2
    ProcessManager --> ConditionFreeCourse

    %% Branching Logic
    ConditionFreeCourse -->|Yes| SendEmail

    ConditionFreeCourse -->|No| DispatchCommand
    DispatchCommand --> CommandBus
    CommandBus --> NotifyFinanceTeamHandler




