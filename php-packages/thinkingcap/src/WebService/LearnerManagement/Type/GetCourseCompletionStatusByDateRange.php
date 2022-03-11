<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseCompletionStatusByDateRange implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $domainID;

    /**
     * @var string
     */
    private $learningActivityCode;

    /**
     * @var string
     */
    private $learningActivityType;

    /**
     * @var string
     */
    private $learnerID;

    /**
     * @var string
     */
    private $startDateTime;

    /**
     * @var string
     */
    private $endDateTime;

    /**
     * @var bool
     */
    private $useLastDateAttendanceTakenForILT;

    /**
     * @var string
     */
    private $timezoneCode;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var bool
     * @var string
     */
    public function __construct($apiKey, $domainID, $learningActivityCode, $learningActivityType, $learnerID, $startDateTime, $endDateTime, $useLastDateAttendanceTakenForILT, $timezoneCode)
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
     * @return GetCourseCompletionStatusByDateRange
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
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @param string $domainID
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityCode()
    {
        return $this->learningActivityCode;
    }

    /**
     * @param string $learningActivityCode
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withLearningActivityCode($learningActivityCode)
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityType()
    {
        return $this->learningActivityType;
    }

    /**
     * @param string $learningActivityType
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withLearningActivityType($learningActivityType)
    {
        $new = clone $this;
        $new->learningActivityType = $learningActivityType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearnerID()
    {
        return $this->learnerID;
    }

    /**
     * @param string $learnerID
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withLearnerID($learnerID)
    {
        $new = clone $this;
        $new->learnerID = $learnerID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * @param string $startDateTime
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withStartDateTime($startDateTime)
    {
        $new = clone $this;
        $new->startDateTime = $startDateTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * @param string $endDateTime
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withEndDateTime($endDateTime)
    {
        $new = clone $this;
        $new->endDateTime = $endDateTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseLastDateAttendanceTakenForILT()
    {
        return $this->useLastDateAttendanceTakenForILT;
    }

    /**
     * @param bool $useLastDateAttendanceTakenForILT
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withUseLastDateAttendanceTakenForILT($useLastDateAttendanceTakenForILT)
    {
        $new = clone $this;
        $new->useLastDateAttendanceTakenForILT = $useLastDateAttendanceTakenForILT;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimezoneCode()
    {
        return $this->timezoneCode;
    }

    /**
     * @param string $timezoneCode
     *
     * @return GetCourseCompletionStatusByDateRange
     */
    public function withTimezoneCode($timezoneCode)
    {
        $new = clone $this;
        $new->timezoneCode = $timezoneCode;

        return $new;
    }
}
