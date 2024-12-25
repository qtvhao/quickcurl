CREATE TABLE timeline (
    uuid CHAR(36) PRIMARY KEY,
    duration VARCHAR(255) NOT NULL,
    playhead_position VARCHAR(255) NOT NULL,
    snap_enabled BOOLEAN NOT NULL
);
