<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUser implements RequestInterface
{
    private string $apiKey;

    
    private string $userID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userID)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
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

    
    public function getUserID(): string
    {
        return $this->userID;
    }

    
    public function withUserID(string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }
}
