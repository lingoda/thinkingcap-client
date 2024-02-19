<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReserveSpotILT implements RequestInterface
{
    private string $apiKey;

    
    private string $learningActivityCode;

    
    private string $learningActivityID;

    
    private int $numberOfSeats;

    
    private int $duration;

    
    private bool $checkWaitList;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $learningActivityCode, string $learningActivityID, int $numberOfSeats, int $duration, bool $checkWaitList)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityCode = $learningActivityCode;
        $this->learningActivityID = $learningActivityID;
        $this->numberOfSeats = $numberOfSeats;
        $this->duration = $duration;
        $this->checkWaitList = $checkWaitList;
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

    
    public function getLearningActivityCode(): string
    {
        return $this->learningActivityCode;
    }

    
    public function withLearningActivityCode(string $learningActivityCode): static
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    
    public function getLearningActivityID(): string
    {
        return $this->learningActivityID;
    }

    
    public function withLearningActivityID(string $learningActivityID): static
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    
    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    
    public function withNumberOfSeats(int $numberOfSeats): static
    {
        $new = clone $this;
        $new->numberOfSeats = $numberOfSeats;

        return $new;
    }

    
    public function getDuration(): int
    {
        return $this->duration;
    }

    
    public function withDuration(int $duration): static
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }

    
    public function getCheckWaitList(): bool
    {
        return $this->checkWaitList;
    }

    
    public function withCheckWaitList(bool $checkWaitList): static
    {
        $new = clone $this;
        $new->checkWaitList = $checkWaitList;

        return $new;
    }
}
