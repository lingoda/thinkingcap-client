<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetRecordDetails implements RequestInterface
{
    private string $apiKey;

    
    private string $studentRecordID;

    
    private string $status;

    
    private string $lastModuleName;

    
    private string $dateCompleted;

    
    private string $percentCompleted;

    
    private string $score;

    
    private string $credits;

    
    private string $timeSpent;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentRecordID, string $status, string $lastModuleName, string $dateCompleted, string $percentCompleted, string $score, string $credits, string $timeSpent)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
        $this->status = $status;
        $this->lastModuleName = $lastModuleName;
        $this->dateCompleted = $dateCompleted;
        $this->percentCompleted = $percentCompleted;
        $this->score = $score;
        $this->credits = $credits;
        $this->timeSpent = $timeSpent;
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

    
    public function getStatus(): string
    {
        return $this->status;
    }

    
    public function withStatus(string $status): static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    
    public function getLastModuleName(): string
    {
        return $this->lastModuleName;
    }

    
    public function withLastModuleName(string $lastModuleName): static
    {
        $new = clone $this;
        $new->lastModuleName = $lastModuleName;

        return $new;
    }

    
    public function getDateCompleted(): string
    {
        return $this->dateCompleted;
    }

    
    public function withDateCompleted(string $dateCompleted): static
    {
        $new = clone $this;
        $new->dateCompleted = $dateCompleted;

        return $new;
    }

    
    public function getPercentCompleted(): string
    {
        return $this->percentCompleted;
    }

    
    public function withPercentCompleted(string $percentCompleted): static
    {
        $new = clone $this;
        $new->percentCompleted = $percentCompleted;

        return $new;
    }

    
    public function getScore(): string
    {
        return $this->score;
    }

    
    public function withScore(string $score): static
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    
    public function getCredits(): string
    {
        return $this->credits;
    }

    
    public function withCredits(string $credits): static
    {
        $new = clone $this;
        $new->credits = $credits;

        return $new;
    }

    
    public function getTimeSpent(): string
    {
        return $this->timeSpent;
    }

    
    public function withTimeSpent(string $timeSpent): static
    {
        $new = clone $this;
        $new->timeSpent = $timeSpent;

        return $new;
    }
}
