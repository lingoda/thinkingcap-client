<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class WithdrawStudent implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentID;

    
    private ?string $learningObjectID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentID, ?string $learningObjectID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
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

    
    public function getStudentID(): ?string
    {
        return $this->studentID;
    }

    
    public function withStudentID(?string $studentID): static
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    
    public function getLearningObjectID(): ?string
    {
        return $this->learningObjectID;
    }

    
    public function withLearningObjectID(?string $learningObjectID): static
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }
}
