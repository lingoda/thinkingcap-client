<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUserActiveByLookup implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $lookupValue;

    
    private bool $active;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $lookupValue, bool $active)
    {
        $this->apiKey = $apiKey;
        $this->lookupValue = $lookupValue;
        $this->active = $active;
    }

    
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getLookupValue(): ?string
    {
        return $this->lookupValue;
    }

    
    public function withLookupValue(?string $lookupValue): static
    {
        $new = clone $this;
        $new->lookupValue = $lookupValue;

        return $new;
    }

    
    public function getActive(): bool
    {
        return $this->active;
    }

    
    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}
