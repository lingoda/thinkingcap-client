<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersByScreenName implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $screenName;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $screenName)
    {
        $this->apiKey = $apiKey;
        $this->screenName = $screenName;
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

    
    public function getScreenName(): ?string
    {
        return $this->screenName;
    }

    
    public function withScreenName(?string $screenName): static
    {
        $new = clone $this;
        $new->screenName = $screenName;

        return $new;
    }
}
