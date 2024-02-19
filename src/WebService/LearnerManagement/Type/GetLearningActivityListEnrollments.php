<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityListEnrollments implements RequestInterface
{
    private string $apiKey;

    
    private string $userCustomMetadata;

    
    private string $customFieldIDs;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userCustomMetadata, string $customFieldIDs)
    {
        $this->apiKey = $apiKey;
        $this->userCustomMetadata = $userCustomMetadata;
        $this->customFieldIDs = $customFieldIDs;
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

    
    public function getUserCustomMetadata(): string
    {
        return $this->userCustomMetadata;
    }

    
    public function withUserCustomMetadata(string $userCustomMetadata): static
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }

    
    public function getCustomFieldIDs(): string
    {
        return $this->customFieldIDs;
    }

    
    public function withCustomFieldIDs(string $customFieldIDs): static
    {
        $new = clone $this;
        $new->customFieldIDs = $customFieldIDs;

        return $new;
    }
}
