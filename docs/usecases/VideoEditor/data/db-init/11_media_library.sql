CREATE TABLE media_library (
    uuid CHAR(36) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    project_id CHAR(36) NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects (uuid) ON DELETE CASCADE
);

CREATE TABLE media_file (
    uuid CHAR(36) PRIMARY KEY,
    library_id CHAR(36) NOT NULL,
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(500) NOT NULL,
    file_type VARCHAR(50) NOT NULL,
    file_size FLOAT,
    uploaded_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (library_id) REFERENCES media_library (uuid) ON DELETE CASCADE
);

CREATE TABLE media_category (
    uuid CHAR(36) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(255)
);

CREATE TABLE media_file_category (
    file_uuid CHAR(36) NOT NULL,
    category_uuid CHAR(36) NOT NULL,
    PRIMARY KEY (file_uuid, category_uuid),
    FOREIGN KEY (file_uuid) REFERENCES media_file (uuid) ON DELETE CASCADE,
    FOREIGN KEY (category_uuid) REFERENCES media_category (uuid) ON DELETE CASCADE
);
