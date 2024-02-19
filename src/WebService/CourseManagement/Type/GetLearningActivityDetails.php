<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityDetails implements RequestInterface
{
    private string $apiKey;

    
    private string $activityID;

    
    private string $customFieldIDs;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $activityID, string $customFieldIDs)
    {
        $this->apiKey = $apiKey;
        $this->activityID = $activityID;
        $this->customFieldIDs = $customFieldIDs;
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

    
    public function getActivityID(): string
    {
        return $this->activityID;
    }

    
    public function withActivityID(string $activityID): static
    {
        $new = clone $this;
        $new->activityID = $activityID;

        return $new;
    }

    
    public function getCustomFieldIDs(): string
    {
        return $this->customFieldIDs;
    }

    
    public function withCustomFieldIDs(string $customFieldIDs): static
    {
        $new = clone $this;
        $new->customFieldIDs = $customFieldIDs;

        return $new;
    }
}
