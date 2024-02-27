<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateECommerceCourseToken implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseCode;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseCode)
    {
        $this->apiKey = $apiKey;
        $this->courseCode = $courseCode;
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

    
    public function getCourseCode(): ?string
    {
        return $this->courseCode;
    }

    
    public function withCourseCode(?string $courseCode): static
    {
        $new = clone $this;
        $new->courseCode = $courseCode;

        return $new;
    }
}
