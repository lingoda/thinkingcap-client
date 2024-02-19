<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAvailableCourses implements RequestInterface
{
    private string $apiKey;

    
    private string $courseType;

    
    private string $onlySelfEnrollmentCourse;

    
    private string $programID;

    
    private string $language;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $courseType, string $onlySelfEnrollmentCourse, string $programID, string $language)
    {
        $this->apiKey = $apiKey;
        $this->courseType = $courseType;
        $this->onlySelfEnrollmentCourse = $onlySelfEnrollmentCourse;
        $this->programID = $programID;
        $this->language = $language;
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

    
    public function getCourseType(): string
    {
        return $this->courseType;
    }

    
    public function withCourseType(string $courseType): static
    {
        $new = clone $this;
        $new->courseType = $courseType;

        return $new;
    }

    
    public function getOnlySelfEnrollmentCourse(): string
    {
        return $this->onlySelfEnrollmentCourse;
    }

    
    public function withOnlySelfEnrollmentCourse(string $onlySelfEnrollmentCourse): static
    {
        $new = clone $this;
        $new->onlySelfEnrollmentCourse = $onlySelfEnrollmentCourse;

        return $new;
    }

    
    public function getProgramID(): string
    {
        return $this->programID;
    }

    
    public function withProgramID(string $programID): static
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }

    
    public function getLanguage(): string
    {
        return $this->language;
    }

    
    public function withLanguage(string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
