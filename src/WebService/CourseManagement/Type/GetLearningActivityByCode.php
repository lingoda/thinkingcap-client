<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityByCode implements RequestInterface
{
    private string $apiKey;

    
    private string $learningActivityCode;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $learningActivityCode)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityCode = $learningActivityCode;
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

    
    public function getLearningActivityCode(): string
    {
        return $this->learningActivityCode;
    }

    
    public function withLearningActivityCode(string $learningActivityCode): static
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }
}
