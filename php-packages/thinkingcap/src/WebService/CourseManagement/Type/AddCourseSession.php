<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddCourseSession implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $courseID;

    /**
     * @var string
     */
    private $sessionTitle;

    /**
     * @var string
     */
    private $sessionDescription;

    /**
     * @var bool
     */
    private $sessionIsRequired;

    /**
     * @var bool
     */
    private $timeIsTDB;

    /**
     * @var string
     */
    private $sessionStartDateTime;

    /**
     * @var string
     */
    private $sessionEndDateTime;

    /**
     * @var bool
     */
    private $locationIsTBD;

    /**
     * @var string
     */
    private $sessionLocationID;

    /**
     * @var string
     */
    private $webinarProviderID;

    /**
     * @var string
     */
    private $zoomSubAccountHostID;

    /**
     * @var bool
     */
    private $isRecurringSession;

    /**
     * @var string
     */
    private $recurringCadence;

    /**
     * @var int
     */
    private $recurringNo;

    /**
     * @var string
     */
    private $attendanceCode;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var bool
     * @var bool
     * @var string
     * @var string
     * @var bool
     * @var string
     * @var string
     * @var string
     * @var bool
     * @var string
     * @var int
     * @var string
     */
    public function __construct($apiKey, $courseID, $sessionTitle, $sessionDescription, $sessionIsRequired, $timeIsTDB, $sessionStartDateTime, $sessionEndDateTime, $locationIsTBD, $sessionLocationID, $webinarProviderID, $zoomSubAccountHostID, $isRecurringSession, $recurringCadence, $recurringNo, $attendanceCode)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->sessionTitle = $sessionTitle;
        $this->sessionDescription = $sessionDescription;
        $this->sessionIsRequired = $sessionIsRequired;
        $this->timeIsTDB = $timeIsTDB;
        $this->sessionStartDateTime = $sessionStartDateTime;
        $this->sessionEndDateTime = $sessionEndDateTime;
        $this->locationIsTBD = $locationIsTBD;
        $this->sessionLocationID = $sessionLocationID;
        $this->webinarProviderID = $webinarProviderID;
        $this->zoomSubAccountHostID = $zoomSubAccountHostID;
        $this->isRecurringSession = $isRecurringSession;
        $this->recurringCadence = $recurringCadence;
        $this->recurringNo = $recurringNo;
        $this->attendanceCode = $attendanceCode;
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
     * @return AddCourseSession
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
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @param string $courseID
     *
     * @return AddCourseSession
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
    public function getSessionTitle()
    {
        return $this->sessionTitle;
    }

    /**
     * @param string $sessionTitle
     *
     * @return AddCourseSession
     */
    public function withSessionTitle($sessionTitle)
    {
        $new = clone $this;
        $new->sessionTitle = $sessionTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionDescription()
    {
        return $this->sessionDescription;
    }

    /**
     * @param string $sessionDescription
     *
     * @return AddCourseSession
     */
    public function withSessionDescription($sessionDescription)
    {
        $new = clone $this;
        $new->sessionDescription = $sessionDescription;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSessionIsRequired()
    {
        return $this->sessionIsRequired;
    }

    /**
     * @param bool $sessionIsRequired
     *
     * @return AddCourseSession
     */
    public function withSessionIsRequired($sessionIsRequired)
    {
        $new = clone $this;
        $new->sessionIsRequired = $sessionIsRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTimeIsTDB()
    {
        return $this->timeIsTDB;
    }

    /**
     * @param bool $timeIsTDB
     *
     * @return AddCourseSession
     */
    public function withTimeIsTDB($timeIsTDB)
    {
        $new = clone $this;
        $new->timeIsTDB = $timeIsTDB;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionStartDateTime()
    {
        return $this->sessionStartDateTime;
    }

    /**
     * @param string $sessionStartDateTime
     *
     * @return AddCourseSession
     */
    public function withSessionStartDateTime($sessionStartDateTime)
    {
        $new = clone $this;
        $new->sessionStartDateTime = $sessionStartDateTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionEndDateTime()
    {
        return $this->sessionEndDateTime;
    }

    /**
     * @param string $sessionEndDateTime
     *
     * @return AddCourseSession
     */
    public function withSessionEndDateTime($sessionEndDateTime)
    {
        $new = clone $this;
        $new->sessionEndDateTime = $sessionEndDateTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLocationIsTBD()
    {
        return $this->locationIsTBD;
    }

    /**
     * @param bool $locationIsTBD
     *
     * @return AddCourseSession
     */
    public function withLocationIsTBD($locationIsTBD)
    {
        $new = clone $this;
        $new->locationIsTBD = $locationIsTBD;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionLocationID()
    {
        return $this->sessionLocationID;
    }

    /**
     * @param string $sessionLocationID
     *
     * @return AddCourseSession
     */
    public function withSessionLocationID($sessionLocationID)
    {
        $new = clone $this;
        $new->sessionLocationID = $sessionLocationID;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebinarProviderID()
    {
        return $this->webinarProviderID;
    }

    /**
     * @param string $webinarProviderID
     *
     * @return AddCourseSession
     */
    public function withWebinarProviderID($webinarProviderID)
    {
        $new = clone $this;
        $new->webinarProviderID = $webinarProviderID;

        return $new;
    }

    /**
     * @return string
     */
    public function getZoomSubAccountHostID()
    {
        return $this->zoomSubAccountHostID;
    }

    /**
     * @param string $zoomSubAccountHostID
     *
     * @return AddCourseSession
     */
    public function withZoomSubAccountHostID($zoomSubAccountHostID)
    {
        $new = clone $this;
        $new->zoomSubAccountHostID = $zoomSubAccountHostID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsRecurringSession()
    {
        return $this->isRecurringSession;
    }

    /**
     * @param bool $isRecurringSession
     *
     * @return AddCourseSession
     */
    public function withIsRecurringSession($isRecurringSession)
    {
        $new = clone $this;
        $new->isRecurringSession = $isRecurringSession;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecurringCadence()
    {
        return $this->recurringCadence;
    }

    /**
     * @param string $recurringCadence
     *
     * @return AddCourseSession
     */
    public function withRecurringCadence($recurringCadence)
    {
        $new = clone $this;
        $new->recurringCadence = $recurringCadence;

        return $new;
    }

    /**
     * @return int
     */
    public function getRecurringNo()
    {
        return $this->recurringNo;
    }

    /**
     * @param int $recurringNo
     *
     * @return AddCourseSession
     */
    public function withRecurringNo($recurringNo)
    {
        $new = clone $this;
        $new->recurringNo = $recurringNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttendanceCode()
    {
        return $this->attendanceCode;
    }

    /**
     * @param string $attendanceCode
     *
     * @return AddCourseSession
     */
    public function withAttendanceCode($attendanceCode)
    {
        $new = clone $this;
        $new->attendanceCode = $attendanceCode;

        return $new;
    }
}
