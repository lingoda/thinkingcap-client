<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetActiveDirectorySynchSettings implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $clientKey;

    
    private ?string $domainID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $clientKey, ?string $domainID)
    {
        $this->apiKey = $apiKey;
        $this->clientKey = $clientKey;
        $this->domainID = $domainID;
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

    
    public function getClientKey(): ?string
    {
        return $this->clientKey;
    }

    
    public function withClientKey(?string $clientKey): static
    {
        $new = clone $this;
        $new->clientKey = $clientKey;

        return $new;
    }

    
    public function getDomainID(): ?string
    {
        return $this->domainID;
    }

    
    public function withDomainID(?string $domainID): static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }
}
