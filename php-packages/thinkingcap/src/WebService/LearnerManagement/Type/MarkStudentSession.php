<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MarkStudentSession implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentID;

    /**
     * @var string
     */
    private $courseID;

    /**
     * @var string
     */
    private $sessionID;

    /**
     * @var int
     */
    private $scorePercent;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $attendanceValue;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var int
     * @var string
     * @var string
     */
    public function __construct($apiKey, $studentID, $courseID, $sessionID, $scorePercent, $comments, $attendanceValue)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->courseID = $courseID;
        $this->sessionID = $sessionID;
        $this->scorePercent = $scorePercent;
        $this->comments = $comments;
        $this->attendanceValue = $attendanceValue;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return MarkStudentSession
     */
    public function withApiKey($apiKey)
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * @param string $studentID
     *
     * @return MarkStudentSession
     */
    public function withStudentID($studentID)
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @param string $courseID
     *
     * @return MarkStudentSession
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * @param string $sessionID
     *
     * @return MarkStudentSession
     */
    public function withSessionID($sessionID)
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    /**
     * @return int
     */
    public function getScorePercent()
    {
        return $this->scorePercent;
    }

    /**
     * @param int $scorePercent
     *
     * @return MarkStudentSession
     */
    public function withScorePercent($scorePercent)
    {
        $new = clone $this;
        $new->scorePercent = $scorePercent;

        return $new;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return MarkStudentSession
     */
    public function withComments($comments)
    {
        $new = clone $this;
        $new->comments = $comments;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttendanceValue()
    {
        return $this->attendanceValue;
    }

    /**
     * @param string $attendanceValue
     *
     * @return MarkStudentSession
     */
    public function withAttendanceValue($attendanceValue)
    {
        $new = clone $this;
        $new->attendanceValue = $attendanceValue;

        return $new;
    }
}
