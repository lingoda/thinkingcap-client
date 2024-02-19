<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLMSUserAutoLoginURLByUsername implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userName;

    
    private ?string $domainID;

    
    private ?string $returnUrl;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $userName, ?string $domainID, ?string $returnUrl)
    {
        $this->apiKey = $apiKey;
        $this->userName = $userName;
        $this->domainID = $domainID;
        $this->returnUrl = $returnUrl;
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

    
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    
    public function withUserName(?string $userName): static
    {
        $new = clone $this;
        $new->userName = $userName;

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

    
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    
    public function withReturnUrl(?string $returnUrl): static
    {
        $new = clone $this;
        $new->returnUrl = $returnUrl;

        return $new;
    }
}
