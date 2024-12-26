CREATE TABLE project_tags (
    uuid CHAR(36) PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE project_tag_mapping (
    project_uuid CHAR(36) NOT NULL,
    tag_uuid CHAR(36) NOT NULL,
    PRIMARY KEY (project_uuid, tag_uuid),
    FOREIGN KEY (project_uuid) REFERENCES projects(uuid) ON DELETE CASCADE,
    FOREIGN KEY (tag_uuid) REFERENCES project_tags(uuid) ON DELETE CASCADE
);
