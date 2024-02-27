<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentLPDetails implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentID;

    
    private ?string $learningPathID;

    
    private ?string $language;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentID, ?string $learningPathID, ?string $language)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningPathID = $learningPathID;
        $this->language = $language;
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

    
    public function getLearningPathID(): ?string
    {
        return $this->learningPathID;
    }

    
    public function withLearningPathID(?string $learningPathID): static
    {
        $new = clone $this;
        $new->learningPathID = $learningPathID;

        return $new;
    }

    
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    
    public function withLanguage(?string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
