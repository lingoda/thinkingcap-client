<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseStudentsList implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseID;

    
    private ?string $programID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseID, ?string $programID)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
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
}
