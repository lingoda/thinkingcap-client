<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTrainingLocation implements RequestInterface
{
    private string $apiKey;

    
    private string $locationID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $locationID)
    {
        $this->apiKey = $apiKey;
        $this->locationID = $locationID;
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
}
