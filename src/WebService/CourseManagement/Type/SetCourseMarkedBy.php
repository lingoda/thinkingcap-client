<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCourseMarkedBy implements RequestInterface
{
    private string $apiKey;

    
    private string $courseID;

    
    private bool $moderator;

    
    private bool $ta;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $courseID, bool $moderator, bool $ta)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->moderator = $moderator;
        $this->ta = $ta;
    }

    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getCourseID(): string
    {
        return $this->courseID;
    }

    
    public function withCourseID(string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    
    public function getModerator(): bool
    {
        return $this->moderator;
    }

    
    public function withModerator(bool $moderator): static
    {
        $new = clone $this;
        $new->moderator = $moderator;

        return $new;
    }

    
    public function getTa(): bool
    {
        return $this->ta;
    }

    
    public function withTa(bool $ta): static
    {
        $new = clone $this;
        $new->ta = $ta;

        return $new;
    }
}
