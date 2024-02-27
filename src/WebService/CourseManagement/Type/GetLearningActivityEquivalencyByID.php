<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityEquivalencyByID implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $equivalencyID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $equivalencyID)
    {
        $this->apiKey = $apiKey;
        $this->equivalencyID = $equivalencyID;
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

    
    public function getEquivalencyID(): ?string
    {
        return $this->equivalencyID;
    }

    
    public function withEquivalencyID(?string $equivalencyID): static
    {
        $new = clone $this;
        $new->equivalencyID = $equivalencyID;

        return $new;
    }
}
