CREATE TABLE video_tracks (
    uuid CHAR(36) PRIMARY KEY,
    timeline_id CHAR(36) NOT NULL,
    layer INTEGER NOT NULL,
    opacity FLOAT NOT NULL DEFAULT 1.0,
    FOREIGN KEY (timeline_id) REFERENCES timeline(uuid) ON DELETE CASCADE
);
