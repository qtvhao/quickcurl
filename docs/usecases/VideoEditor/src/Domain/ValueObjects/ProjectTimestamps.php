<?php

namespace Qtvhao\VideoEditor\Domain\ValueObjects;

class ProjectTimestamps
{
    public function __construct(
        private string $creationDate,
        private string $lastModifiedDate
    ) {}

    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    public function setCreationDate(string $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    public function setLastModifiedDate(string $lastModifiedDate): void
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }
}
