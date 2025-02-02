CREATE TABLE timecode (
    uuid CHAR(36) PRIMARY KEY,
    time VARCHAR(12) NOT NULL,
    clip_id CHAR(36) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (clip_id) REFERENCES clips(uuid) ON DELETE CASCADE
);
