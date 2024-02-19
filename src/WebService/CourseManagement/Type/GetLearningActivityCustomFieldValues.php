<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityCustomFieldValues implements RequestInterface
{
    private string $apiKey;

    
    private string $learningActivityID;

    
    private string $customFieldID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $learningActivityID, string $customFieldID)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
        $this->customFieldID = $customFieldID;
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

    
    public function getLearningActivityID(): string
    {
        return $this->learningActivityID;
    }

    
    public function withLearningActivityID(string $learningActivityID): static
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    
    public function getCustomFieldID(): string
    {
        return $this->customFieldID;
    }

    
    public function withCustomFieldID(string $customFieldID): static
    {
        $new = clone $this;
        $new->customFieldID = $customFieldID;

        return $new;
    }
}
