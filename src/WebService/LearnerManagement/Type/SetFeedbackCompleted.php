<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeedbackCompleted implements RequestInterface
{
    private string $apiKey;

    
    private string $studentRecordID;

    
    private string $learningPathID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentRecordID, string $learningPathID)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
        $this->learningPathID = $learningPathID;
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

    
    public function getStudentRecordID(): string
    {
        return $this->studentRecordID;
    }

    
    public function withStudentRecordID(string $studentRecordID): static
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }

    
    public function getLearningPathID(): string
    {
        return $this->learningPathID;
    }

    
    public function withLearningPathID(string $learningPathID): static
    {
        $new = clone $this;
        $new->learningPathID = $learningPathID;

        return $new;
    }
}
