<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTrainingLocationsList implements RequestInterface
{
    private string $apiKey;

    
    private string $programID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $programID)
    {
        $this->apiKey = $apiKey;
        $this->programID = $programID;
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
}
