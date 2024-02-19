<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserByEmail implements RequestInterface
{
    private string $apiKey;

    
    private string $userEmail;

    
    private bool $includeMetadata;

    
    private bool $includeDomains;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userEmail, bool $includeMetadata, bool $includeDomains)
    {
        $this->apiKey = $apiKey;
        $this->userEmail = $userEmail;
        $this->includeMetadata = $includeMetadata;
        $this->includeDomains = $includeDomains;
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

    
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    
    public function withUserEmail(string $userEmail): static
    {
        $new = clone $this;
        $new->userEmail = $userEmail;

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
