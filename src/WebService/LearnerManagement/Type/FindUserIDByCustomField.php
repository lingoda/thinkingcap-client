<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByCustomField implements RequestInterface
{
    private string $apiKey;

    
    private string $customFieldID;

    
    private string $customFieldValue;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $customFieldID, string $customFieldValue)
    {
        $this->apiKey = $apiKey;
        $this->customFieldID = $customFieldID;
        $this->customFieldValue = $customFieldValue;
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

    
    public function getCustomFieldValue(): string
    {
        return $this->customFieldValue;
    }

    
    public function withCustomFieldValue(string $customFieldValue): static
    {
        $new = clone $this;
        $new->customFieldValue = $customFieldValue;

        return $new;
    }
}
