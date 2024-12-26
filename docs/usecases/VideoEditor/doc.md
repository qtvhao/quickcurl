```plaintext
src/
├── Application/       <-- Application services and use cases
├── Domain/            <-- Core business logic and rules
│   ├── Aggregates/    <-- Aggregate roots and their boundaries
│   ├── Contracts/     <-- Interfaces for repositories or domain services
│   ├── Entities/      <-- Business entities with unique identities
│   └── ValueObjects/  <-- Immutable value objects
├── Infrastructure/    <-- Technical implementation (DB, APIs, etc.)
└── Presentation/      <-- User-facing code (Controllers, Views, etc.)
```
