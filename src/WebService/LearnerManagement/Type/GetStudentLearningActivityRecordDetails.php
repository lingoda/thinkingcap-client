<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentLearningActivityRecordDetails implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentRecordID;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentRecordID)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
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

    
    public function getStudentRecordID(): ?string
    {
        return $this->studentRecordID;
    }

    
    public function withStudentRecordID(?string $studentRecordID): static
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }
}
