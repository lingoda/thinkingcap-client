<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ValidateTimedSeed implements RequestInterface
{
    private string $apiKey;

    
    private string $seed;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $seed)
    {
        $this->apiKey = $apiKey;
        $this->seed = $seed;
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

    
    public function getSeed(): string
    {
        return $this->seed;
    }

    
    public function withSeed(string $seed): static
    {
        $new = clone $this;
        $new->seed = $seed;

        return $new;
    }
}
