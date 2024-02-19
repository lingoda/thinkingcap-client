<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityListEnrollmentsTruncated implements RequestInterface
{
    private string $apiKey;

    
    private string $userCustomMetadata;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userCustomMetadata)
    {
        $this->apiKey = $apiKey;
        $this->userCustomMetadata = $userCustomMetadata;
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
}
