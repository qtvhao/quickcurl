```mermaid
flowchart TD
    %% Layer Definitions
    subgraph Domain_Layer["Domain Layer"]
        CourseAggregate["Course Aggregate"] 
        CourseCreatedEvent["Course Created Event"]
    end

    subgraph Application_Layer["Application Layer"]
        EventBus["Event Bus"] 
        ProcessManager["Process Manager"]
    end

    subgraph Infrastructure_Layer["Infrastructure Layer"]
        ExternalServices["External Services\n(Email, Cache, Logging, etc.)"]
    end

    %% Connections
    CourseAggregate -->|Generates| CourseCreatedEvent
    CourseCreatedEvent -->|Publishes| EventBus
    EventBus -->|Dispatches| ProcessManager
    ProcessManager -->|Executes Side Effects| ExternalServices
