<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUserByLookup implements RequestInterface
{
    private string $apiKey;

    
    private string $lookupValue;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $lookupValue)
    {
        $this->apiKey = $apiKey;
        $this->lookupValue = $lookupValue;
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

    
    public function getLookupValue(): string
    {
        return $this->lookupValue;
    }

    
    public function withLookupValue(string $lookupValue): static
    {
        $new = clone $this;
        $new->lookupValue = $lookupValue;

        return $new;
    }
}
