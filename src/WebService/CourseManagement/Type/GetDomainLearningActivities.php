<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDomainLearningActivities implements RequestInterface
{
    private string $apiKey;

    
    private string $onlyDomainID;

    
    private string $learningActivityTypeFilter;

    
    private bool $includeInactive;

    
    private bool $includeMetadata;

    
    private int $offset;

    
    private int $take;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $onlyDomainID, string $learningActivityTypeFilter, bool $includeInactive, bool $includeMetadata, int $offset, int $take)
    {
        $this->apiKey = $apiKey;
        $this->onlyDomainID = $onlyDomainID;
        $this->learningActivityTypeFilter = $learningActivityTypeFilter;
        $this->includeInactive = $includeInactive;
        $this->includeMetadata = $includeMetadata;
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

    
    public function getOnlyDomainID(): string
    {
        return $this->onlyDomainID;
    }

    
    public function withOnlyDomainID(string $onlyDomainID): static
    {
        $new = clone $this;
        $new->onlyDomainID = $onlyDomainID;

        return $new;
    }

    
    public function getLearningActivityTypeFilter(): string
    {
        return $this->learningActivityTypeFilter;
    }

    
    public function withLearningActivityTypeFilter(string $learningActivityTypeFilter): static
    {
        $new = clone $this;
        $new->learningActivityTypeFilter = $learningActivityTypeFilter;

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
