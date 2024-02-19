<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAllStudentLearningActivityRecords implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentID;

    
    private ?string $learningObjectTypeFilter;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentID, ?string $learningObjectTypeFilter)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectTypeFilter = $learningObjectTypeFilter;
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

    
    public function getLearningObjectTypeFilter(): ?string
    {
        return $this->learningObjectTypeFilter;
    }

    
    public function withLearningObjectTypeFilter(?string $learningObjectTypeFilter): static
    {
        $new = clone $this;
        $new->learningObjectTypeFilter = $learningObjectTypeFilter;

        return $new;
    }
}
