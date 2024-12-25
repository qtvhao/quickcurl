CREATE TABLE clips (
    uuid CHAR(36) PRIMARY KEY,
    source_file VARCHAR(255) NOT NULL,
    start_time VARCHAR(20) NOT NULL,
    end_time VARCHAR(20) NOT NULL,
    video_track_id CHAR(36),
    audio_track_id CHAR(36),
    FOREIGN KEY (video_track_id) REFERENCES video_tracks(uuid) ON DELETE CASCADE,
    FOREIGN KEY (audio_track_id) REFERENCES audio_tracks(uuid) ON DELETE CASCADE
);
