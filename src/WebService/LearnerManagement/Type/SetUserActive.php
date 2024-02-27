<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUserActive implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userID;

    
    private bool $active;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $userID, bool $active)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->active = $active;
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

    
    public function getActive(): bool
    {
        return $this->active;
    }

    
    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}
