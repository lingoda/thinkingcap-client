<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByUserName implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userName;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $userName)
    {
        $this->apiKey = $apiKey;
        $this->userName = $userName;
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
}
