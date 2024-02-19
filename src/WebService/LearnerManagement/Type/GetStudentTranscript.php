<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentTranscript implements RequestInterface
{
    private string $apiKey;

    
    private string $studentID;

    
    private string $type;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentID, string $type)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->type = $type;
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

    
    public function getType(): string
    {
        return $this->type;
    }

    
    public function withType(string $type): static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }
}
