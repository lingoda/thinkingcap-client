<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseAssignmentsList implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseID;

    
    private ?string $programID;

    
    private ?string $status;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseID, ?string $programID, ?string $status)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->programID = $programID;
        $this->status = $status;
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

    
    public function getCourseID(): ?string
    {
        return $this->courseID;
    }

    
    public function withCourseID(?string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

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

    
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    public function withStatus(?string $status): static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}
