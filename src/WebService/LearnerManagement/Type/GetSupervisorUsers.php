<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSupervisorUsers implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $supervisorID;

    
    private bool $includeInactive;

    
    private bool $includeMetadata;

    
    private int $offset;

    
    private int $take;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $supervisorID, bool $includeInactive, bool $includeMetadata, int $offset, int $take)
    {
        $this->apiKey = $apiKey;
        $this->supervisorID = $supervisorID;
        $this->includeInactive = $includeInactive;
        $this->includeMetadata = $includeMetadata;
        $this->offset = $offset;
        $this->take = $take;
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

    
    public function getSupervisorID(): ?string
    {
        return $this->supervisorID;
    }

    
    public function withSupervisorID(?string $supervisorID): static
    {
        $new = clone $this;
        $new->supervisorID = $supervisorID;

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
