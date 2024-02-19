<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsTrainingLocationAvailable implements RequestInterface
{
    private string $apiKey;

    
    private string $locationID;

    
    private TimeIntervalsList $timeIntervalsList;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $locationID, TimeIntervalsList $timeIntervalsList)
    {
        $this->apiKey = $apiKey;
        $this->locationID = $locationID;
        $this->timeIntervalsList = $timeIntervalsList;
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

    
    public function getLocationID(): string
    {
        return $this->locationID;
    }

    
    public function withLocationID(string $locationID): static
    {
        $new = clone $this;
        $new->locationID = $locationID;

        return $new;
    }

    
    public function getTimeIntervalsList(): TimeIntervalsList
    {
        return $this->timeIntervalsList;
    }

    
    public function withTimeIntervalsList(TimeIntervalsList $timeIntervalsList): static
    {
        $new = clone $this;
        $new->timeIntervalsList = $timeIntervalsList;

        return $new;
    }
}
