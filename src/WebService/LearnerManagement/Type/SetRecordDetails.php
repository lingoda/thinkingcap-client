<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetRecordDetails implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentRecordID;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $lastModuleName;

    /**
     * @var string
     */
    private $dateCompleted;

    /**
     * @var string
     */
    private $percentCompleted;

    /**
     * @var string
     */
    private $score;

    /**
     * @var string
     */
    private $credits;

    /**
     * @var string
     */
    private $timeSpent;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentRecordID
     * @param string $status
     * @param string $lastModuleName
     * @param string $dateCompleted
     * @param string $percentCompleted
     * @param string $score
     * @param string $credits
     * @param string $timeSpent
     */
    public function __construct($apiKey, $studentRecordID, $status, $lastModuleName, $dateCompleted, $percentCompleted, $score, $credits, $timeSpent)
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
     * @return SetRecordDetails
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
    public function getStudentRecordID()
    {
        return $this->studentRecordID;
    }

    /**
     * @param string $studentRecordID
     *
     * @return SetRecordDetails
     */
    public function withStudentRecordID($studentRecordID)
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return SetRecordDetails
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastModuleName()
    {
        return $this->lastModuleName;
    }

    /**
     * @param string $lastModuleName
     *
     * @return SetRecordDetails
     */
    public function withLastModuleName($lastModuleName)
    {
        $new = clone $this;
        $new->lastModuleName = $lastModuleName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDateCompleted()
    {
        return $this->dateCompleted;
    }

    /**
     * @param string $dateCompleted
     *
     * @return SetRecordDetails
     */
    public function withDateCompleted($dateCompleted)
    {
        $new = clone $this;
        $new->dateCompleted = $dateCompleted;

        return $new;
    }

    /**
     * @return string
     */
    public function getPercentCompleted()
    {
        return $this->percentCompleted;
    }

    /**
     * @param string $percentCompleted
     *
     * @return SetRecordDetails
     */
    public function withPercentCompleted($percentCompleted)
    {
        $new = clone $this;
        $new->percentCompleted = $percentCompleted;

        return $new;
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param string $score
     *
     * @return SetRecordDetails
     */
    public function withScore($score)
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return string
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param string $credits
     *
     * @return SetRecordDetails
     */
    public function withCredits($credits)
    {
        $new = clone $this;
        $new->credits = $credits;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeSpent()
    {
        return $this->timeSpent;
    }

    /**
     * @param string $timeSpent
     *
     * @return SetRecordDetails
     */
    public function withTimeSpent($timeSpent)
    {
        $new = clone $this;
        $new->timeSpent = $timeSpent;

        return $new;
    }
}
