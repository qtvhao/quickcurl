<?php

namespace Qtvhao\VideoEditor\Domain\Entities;

use Qtvhao\VideoEditor\Domain\ValueObjects\ProjectTimestamps;

class Project
{
    public function __construct(
        private string $uuid,
        private string $name,
        private ProjectTimestamps $timestamps
    ) {}

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTimestamps(): ProjectTimestamps
    {
        return $this->timestamps;
    }

    public function setTimestamps(ProjectTimestamps $timestamps): void
    {
        $this->timestamps = $timestamps;
    }
}
