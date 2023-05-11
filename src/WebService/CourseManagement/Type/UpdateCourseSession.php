<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateCourseSession implements RequestInterface
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
    private $sessionID;

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
     * @var string
     */
    private $customMeetingURL;

    /**
     * @var string
     */
    private $attendanceCode;

    /**
     * @var bool
     */
    private $updateAdminCatalogs;

    /**
     * @var bool
     */
    private $updateLearnerCatalogs;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $courseID
     * @var string $sessionID
     * @var string $sessionTitle
     * @var string $sessionDescription
     * @var bool $sessionIsRequired
     * @var bool $timeIsTDB
     * @var string $sessionStartDateTime
     * @var string $sessionEndDateTime
     * @var bool $locationIsTBD
     * @var string $sessionLocationID
     * @var string $webinarProviderID
     * @var string $zoomSubAccountHostID
     * @var string $customMeetingURL
     * @var string $attendanceCode
     * @var bool $updateAdminCatalogs
     * @var bool $updateLearnerCatalogs
     */
    public function __construct($apiKey, $courseID, $sessionID, $sessionTitle, $sessionDescription, $sessionIsRequired, $timeIsTDB, $sessionStartDateTime, $sessionEndDateTime, $locationIsTBD, $sessionLocationID, $webinarProviderID, $zoomSubAccountHostID, $customMeetingURL, $attendanceCode, $updateAdminCatalogs, $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->sessionID = $sessionID;
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
        $this->customMeetingURL = $customMeetingURL;
        $this->attendanceCode = $attendanceCode;
        $this->updateAdminCatalogs = $updateAdminCatalogs;
        $this->updateLearnerCatalogs = $updateLearnerCatalogs;
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
     */
    public function withSessionID($sessionID)
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
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
     * @return UpdateCourseSession
     */
    public function withZoomSubAccountHostID($zoomSubAccountHostID)
    {
        $new = clone $this;
        $new->zoomSubAccountHostID = $zoomSubAccountHostID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomMeetingURL()
    {
        return $this->customMeetingURL;
    }

    /**
     * @param string $customMeetingURL
     *
     * @return UpdateCourseSession
     */
    public function withCustomMeetingURL($customMeetingURL)
    {
        $new = clone $this;
        $new->customMeetingURL = $customMeetingURL;

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
     * @return UpdateCourseSession
     */
    public function withAttendanceCode($attendanceCode)
    {
        $new = clone $this;
        $new->attendanceCode = $attendanceCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateAdminCatalogs()
    {
        return $this->updateAdminCatalogs;
    }

    /**
     * @param bool $updateAdminCatalogs
     *
     * @return UpdateCourseSession
     */
    public function withUpdateAdminCatalogs($updateAdminCatalogs)
    {
        $new = clone $this;
        $new->updateAdminCatalogs = $updateAdminCatalogs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateLearnerCatalogs()
    {
        return $this->updateLearnerCatalogs;
    }

    /**
     * @param bool $updateLearnerCatalogs
     *
     * @return UpdateCourseSession
     */
    public function withUpdateLearnerCatalogs($updateLearnerCatalogs)
    {
        $new = clone $this;
        $new->updateLearnerCatalogs = $updateLearnerCatalogs;

        return $new;
    }
}
