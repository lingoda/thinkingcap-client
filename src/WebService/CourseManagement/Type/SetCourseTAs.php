<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCourseTAs implements RequestInterface
{
    private string $apiKey;

    
    private string $courseID;

    
    private string $taList;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $courseID, string $taList)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->taList = $taList;
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

    
    public function getTaList(): string
    {
        return $this->taList;
    }

    
    public function withTaList(string $taList): static
    {
        $new = clone $this;
        $new->taList = $taList;

        return $new;
    }
}
