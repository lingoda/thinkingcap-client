<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MergeStudentTranscripts implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentToRemainID;

    
    private ?string $studentToGoID;

    
    private bool $markMergedAccountsPending;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentToRemainID, ?string $studentToGoID, bool $markMergedAccountsPending)
    {
        $this->apiKey = $apiKey;
        $this->studentToRemainID = $studentToRemainID;
        $this->studentToGoID = $studentToGoID;
        $this->markMergedAccountsPending = $markMergedAccountsPending;
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

    
    public function getStudentToRemainID(): ?string
    {
        return $this->studentToRemainID;
    }

    
    public function withStudentToRemainID(?string $studentToRemainID): static
    {
        $new = clone $this;
        $new->studentToRemainID = $studentToRemainID;

        return $new;
    }

    
    public function getStudentToGoID(): ?string
    {
        return $this->studentToGoID;
    }

    
    public function withStudentToGoID(?string $studentToGoID): static
    {
        $new = clone $this;
        $new->studentToGoID = $studentToGoID;

        return $new;
    }

    
    public function getMarkMergedAccountsPending(): bool
    {
        return $this->markMergedAccountsPending;
    }

    
    public function withMarkMergedAccountsPending(bool $markMergedAccountsPending): static
    {
        $new = clone $this;
        $new->markMergedAccountsPending = $markMergedAccountsPending;

        return $new;
    }
}
