<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MarkStudentSession implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentID;

    
    private ?string $courseID;

    
    private ?string $sessionID;

    
    private int $scorePercent;

    
    private ?string $comments;

    
    private ?string $attendanceValue;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentID, ?string $courseID, ?string $sessionID, int $scorePercent, ?string $comments, ?string $attendanceValue)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->courseID = $courseID;
        $this->sessionID = $sessionID;
        $this->scorePercent = $scorePercent;
        $this->comments = $comments;
        $this->attendanceValue = $attendanceValue;
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

    
    public function getCourseID(): ?string
    {
        return $this->courseID;
    }

    
    public function withCourseID(?string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    
    public function getSessionID(): ?string
    {
        return $this->sessionID;
    }

    
    public function withSessionID(?string $sessionID): static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    
    public function getScorePercent(): int
    {
        return $this->scorePercent;
    }

    
    public function withScorePercent(int $scorePercent): static
    {
        $new = clone $this;
        $new->scorePercent = $scorePercent;

        return $new;
    }

    
    public function getComments(): ?string
    {
        return $this->comments;
    }

    
    public function withComments(?string $comments): static
    {
        $new = clone $this;
        $new->comments = $comments;

        return $new;
    }

    
    public function getAttendanceValue(): ?string
    {
        return $this->attendanceValue;
    }

    
    public function withAttendanceValue(?string $attendanceValue): static
    {
        $new = clone $this;
        $new->attendanceValue = $attendanceValue;

        return $new;
    }
}
