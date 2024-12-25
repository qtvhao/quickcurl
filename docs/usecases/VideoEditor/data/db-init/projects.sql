CREATE TABLE projects (
    uuid CHAR(36) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    creation_date DATE NOT NULL,
    last_modified_date DATE NOT NULL
);
