<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseCompletionStatusByDateRange implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $domainID;

    
    private ?string $learningActivityCode;

    
    private ?string $learningActivityType;

    
    private ?string $learnerID;

    
    private ?string $startDateTime;

    
    private ?string $endDateTime;

    
    private bool $useLastDateAttendanceTakenForILT;

    
    private ?string $timezoneCode;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $domainID, ?string $learningActivityCode, ?string $learningActivityType, ?string $learnerID, ?string $startDateTime, ?string $endDateTime, bool $useLastDateAttendanceTakenForILT, ?string $timezoneCode)
    {
        $this->apiKey = $apiKey;
        $this->domainID = $domainID;
        $this->learningActivityCode = $learningActivityCode;
        $this->learningActivityType = $learningActivityType;
        $this->learnerID = $learnerID;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->useLastDateAttendanceTakenForILT = $useLastDateAttendanceTakenForILT;
        $this->timezoneCode = $timezoneCode;
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

    
    public function getDomainID(): ?string
    {
        return $this->domainID;
    }

    
    public function withDomainID(?string $domainID): static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    
    public function getLearningActivityCode(): ?string
    {
        return $this->learningActivityCode;
    }

    
    public function withLearningActivityCode(?string $learningActivityCode): static
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    
    public function getLearningActivityType(): ?string
    {
        return $this->learningActivityType;
    }

    
    public function withLearningActivityType(?string $learningActivityType): static
    {
        $new = clone $this;
        $new->learningActivityType = $learningActivityType;

        return $new;
    }

    
    public function getLearnerID(): ?string
    {
        return $this->learnerID;
    }

    
    public function withLearnerID(?string $learnerID): static
    {
        $new = clone $this;
        $new->learnerID = $learnerID;

        return $new;
    }

    
    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    
    public function withStartDateTime(?string $startDateTime): static
    {
        $new = clone $this;
        $new->startDateTime = $startDateTime;

        return $new;
    }

    
    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    
    public function withEndDateTime(?string $endDateTime): static
    {
        $new = clone $this;
        $new->endDateTime = $endDateTime;

        return $new;
    }

    
    public function getUseLastDateAttendanceTakenForILT(): bool
    {
        return $this->useLastDateAttendanceTakenForILT;
    }

    
    public function withUseLastDateAttendanceTakenForILT(bool $useLastDateAttendanceTakenForILT): static
    {
        $new = clone $this;
        $new->useLastDateAttendanceTakenForILT = $useLastDateAttendanceTakenForILT;

        return $new;
    }

    
    public function getTimezoneCode(): ?string
    {
        return $this->timezoneCode;
    }

    
    public function withTimezoneCode(?string $timezoneCode): static
    {
        $new = clone $this;
        $new->timezoneCode = $timezoneCode;

        return $new;
    }
}
