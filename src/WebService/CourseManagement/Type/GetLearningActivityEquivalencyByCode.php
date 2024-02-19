<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityEquivalencyByCode implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $equivalencyCode;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $equivalencyCode)
    {
        $this->apiKey = $apiKey;
        $this->equivalencyCode = $equivalencyCode;
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

    
    public function getEquivalencyCode(): ?string
    {
        return $this->equivalencyCode;
    }

    
    public function withEquivalencyCode(?string $equivalencyCode): static
    {
        $new = clone $this;
        $new->equivalencyCode = $equivalencyCode;

        return $new;
    }
}
