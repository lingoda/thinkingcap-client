<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateTimedSeed implements RequestInterface
{
    private string $apiKey;

    
    private int $expireSeconds;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, int $expireSeconds)
    {
        $this->apiKey = $apiKey;
        $this->expireSeconds = $expireSeconds;
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

    
    public function getExpireSeconds(): int
    {
        return $this->expireSeconds;
    }

    
    public function withExpireSeconds(int $expireSeconds): static
    {
        $new = clone $this;
        $new->expireSeconds = $expireSeconds;

        return $new;
    }
}
