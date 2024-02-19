<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseByCode implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseCode;

    
    private ?string $language;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseCode, ?string $language)
    {
        $this->apiKey = $apiKey;
        $this->courseCode = $courseCode;
        $this->language = $language;
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

    
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    
    public function withLanguage(?string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
