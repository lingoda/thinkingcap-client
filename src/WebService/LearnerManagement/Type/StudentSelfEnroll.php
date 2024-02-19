<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StudentSelfEnroll implements RequestInterface
{
    private string $apiKey;

    
    private string $studentID;

    
    private string $learningObjectID;

    
    private string $enrollmentDomainID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentID, string $learningObjectID, string $enrollmentDomainID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
        $this->enrollmentDomainID = $enrollmentDomainID;
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

    
    public function getStudentID(): string
    {
        return $this->studentID;
    }

    
    public function withStudentID(string $studentID): static
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    
    public function getLearningObjectID(): string
    {
        return $this->learningObjectID;
    }

    
    public function withLearningObjectID(string $learningObjectID): static
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }

    
    public function getEnrollmentDomainID(): string
    {
        return $this->enrollmentDomainID;
    }

    
    public function withEnrollmentDomainID(string $enrollmentDomainID): static
    {
        $new = clone $this;
        $new->enrollmentDomainID = $enrollmentDomainID;

        return $new;
    }
}
