<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDomainUsers implements RequestInterface
{
    private string $apiKey;

    
    private string $domainID;

    
    private bool $includeInactive;

    
    private bool $includeMetadata;

    
    private bool $includeDomains;

    
    private int $offset;

    
    private int $take;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $domainID, bool $includeInactive, bool $includeMetadata, bool $includeDomains, int $offset, int $take)
    {
        $this->apiKey = $apiKey;
        $this->domainID = $domainID;
        $this->includeInactive = $includeInactive;
        $this->includeMetadata = $includeMetadata;
        $this->includeDomains = $includeDomains;
        $this->offset = $offset;
        $this->take = $take;
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

    
    public function getDomainID(): string
    {
        return $this->domainID;
    }

    
    public function withDomainID(string $domainID): static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    
    public function getIncludeInactive(): bool
    {
        return $this->includeInactive;
    }

    
    public function withIncludeInactive(bool $includeInactive): static
    {
        $new = clone $this;
        $new->includeInactive = $includeInactive;

        return $new;
    }

    
    public function getIncludeMetadata(): bool
    {
        return $this->includeMetadata;
    }

    
    public function withIncludeMetadata(bool $includeMetadata): static
    {
        $new = clone $this;
        $new->includeMetadata = $includeMetadata;

        return $new;
    }

    
    public function getIncludeDomains(): bool
    {
        return $this->includeDomains;
    }

    
    public function withIncludeDomains(bool $includeDomains): static
    {
        $new = clone $this;
        $new->includeDomains = $includeDomains;

        return $new;
    }

    
    public function getOffset(): int
    {
        return $this->offset;
    }

    
    public function withOffset(int $offset): static
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    
    public function getTake(): int
    {
        return $this->take;
    }

    
    public function withTake(int $take): static
    {
        $new = clone $this;
        $new->take = $take;

        return $new;
    }
}
