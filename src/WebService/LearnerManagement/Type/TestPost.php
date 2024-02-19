<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TestPost implements RequestInterface
{
    private string $apiKey;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
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
}
