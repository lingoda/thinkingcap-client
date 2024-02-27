<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserByID implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userID;

    
    private bool $includeMetadata;

    
    private bool $includeDomains;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $userID, bool $includeMetadata, bool $includeDomains)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->includeMetadata = $includeMetadata;
        $this->includeDomains = $includeDomains;
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

    
    public function getUserID(): ?string
    {
        return $this->userID;
    }

    
    public function withUserID(?string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

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
}
