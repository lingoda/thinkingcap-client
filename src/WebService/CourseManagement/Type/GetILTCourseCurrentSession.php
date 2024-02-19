<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetILTCourseCurrentSession implements RequestInterface
{
    private string $apiKey;

    
    private string $courseID;

    
    private string $timestamp;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $courseID, string $timestamp)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->timestamp = $timestamp;
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

    
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    
    public function withTimestamp(string $timestamp): static
    {
        $new = clone $this;
        $new->timestamp = $timestamp;

        return $new;
    }
}
