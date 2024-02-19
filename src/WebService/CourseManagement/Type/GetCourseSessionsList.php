<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseSessionsList implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseID)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
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
}
