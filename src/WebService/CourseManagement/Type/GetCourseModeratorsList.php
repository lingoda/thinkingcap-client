<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseModeratorsList implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $type;

    
    private ?string $programID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $type, ?string $programID)
    {
        $this->apiKey = $apiKey;
        $this->type = $type;
        $this->programID = $programID;
    }

    
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getType(): ?string
    {
        return $this->type;
    }

    
    public function withType(?string $type): static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    
    public function getProgramID(): ?string
    {
        return $this->programID;
    }

    
    public function withProgramID(?string $programID): static
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }
}
