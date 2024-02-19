<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateCourseSession implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $courseID;

    
    private ?string $sessionID;

    
    private ?string $sessionTitle;

    
    private ?string $sessionDescription;

    
    private bool $sessionIsRequired;

    
    private bool $timeIsTDB;

    
    private ?string $sessionStartDateTime;

    
    private ?string $sessionEndDateTime;

    
    private bool $locationIsTBD;

    
    private ?string $sessionLocationID;

    
    private ?string $webinarProviderID;

    
    private ?string $zoomSubAccountHostID;

    
    private ?string $customMeetingURL;

    
    private ?string $attendanceCode;

    
    private bool $updateAdminCatalogs;

    
    private bool $updateLearnerCatalogs;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $courseID, ?string $sessionID, ?string $sessionTitle, ?string $sessionDescription, bool $sessionIsRequired, bool $timeIsTDB, ?string $sessionStartDateTime, ?string $sessionEndDateTime, bool $locationIsTBD, ?string $sessionLocationID, ?string $webinarProviderID, ?string $zoomSubAccountHostID, ?string $customMeetingURL, ?string $attendanceCode, bool $updateAdminCatalogs, bool $updateLearnerCatalogs)
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

    
    public function getSessionTitle(): ?string
    {
        return $this->sessionTitle;
    }

    
    public function withSessionTitle(?string $sessionTitle): static
    {
        $new = clone $this;
        $new->sessionTitle = $sessionTitle;

        return $new;
    }

    
    public function getSessionDescription(): ?string
    {
        return $this->sessionDescription;
    }

    
    public function withSessionDescription(?string $sessionDescription): static
    {
        $new = clone $this;
        $new->sessionDescription = $sessionDescription;

        return $new;
    }

    
    public function getSessionIsRequired(): bool
    {
        return $this->sessionIsRequired;
    }

    
    public function withSessionIsRequired(bool $sessionIsRequired): static
    {
        $new = clone $this;
        $new->sessionIsRequired = $sessionIsRequired;

        return $new;
    }

    
    public function getTimeIsTDB(): bool
    {
        return $this->timeIsTDB;
    }

    
    public function withTimeIsTDB(bool $timeIsTDB): static
    {
        $new = clone $this;
        $new->timeIsTDB = $timeIsTDB;

        return $new;
    }

    
    public function getSessionStartDateTime(): ?string
    {
        return $this->sessionStartDateTime;
    }

    
    public function withSessionStartDateTime(?string $sessionStartDateTime): static
    {
        $new = clone $this;
        $new->sessionStartDateTime = $sessionStartDateTime;

        return $new;
    }

    
    public function getSessionEndDateTime(): ?string
    {
        return $this->sessionEndDateTime;
    }

    
    public function withSessionEndDateTime(?string $sessionEndDateTime): static
    {
        $new = clone $this;
        $new->sessionEndDateTime = $sessionEndDateTime;

        return $new;
    }

    
    public function getLocationIsTBD(): bool
    {
        return $this->locationIsTBD;
    }

    
    public function withLocationIsTBD(bool $locationIsTBD): static
    {
        $new = clone $this;
        $new->locationIsTBD = $locationIsTBD;

        return $new;
    }

    
    public function getSessionLocationID(): ?string
    {
        return $this->sessionLocationID;
    }

    
    public function withSessionLocationID(?string $sessionLocationID): static
    {
        $new = clone $this;
        $new->sessionLocationID = $sessionLocationID;

        return $new;
    }

    
    public function getWebinarProviderID(): ?string
    {
        return $this->webinarProviderID;
    }

    
    public function withWebinarProviderID(?string $webinarProviderID): static
    {
        $new = clone $this;
        $new->webinarProviderID = $webinarProviderID;

        return $new;
    }

    
    public function getZoomSubAccountHostID(): ?string
    {
        return $this->zoomSubAccountHostID;
    }

    
    public function withZoomSubAccountHostID(?string $zoomSubAccountHostID): static
    {
        $new = clone $this;
        $new->zoomSubAccountHostID = $zoomSubAccountHostID;

        return $new;
    }

    
    public function getCustomMeetingURL(): ?string
    {
        return $this->customMeetingURL;
    }

    
    public function withCustomMeetingURL(?string $customMeetingURL): static
    {
        $new = clone $this;
        $new->customMeetingURL = $customMeetingURL;

        return $new;
    }

    
    public function getAttendanceCode(): ?string
    {
        return $this->attendanceCode;
    }

    
    public function withAttendanceCode(?string $attendanceCode): static
    {
        $new = clone $this;
        $new->attendanceCode = $attendanceCode;

        return $new;
    }

    
    public function getUpdateAdminCatalogs(): bool
    {
        return $this->updateAdminCatalogs;
    }

    
    public function withUpdateAdminCatalogs(bool $updateAdminCatalogs): static
    {
        $new = clone $this;
        $new->updateAdminCatalogs = $updateAdminCatalogs;

        return $new;
    }

    
    public function getUpdateLearnerCatalogs(): bool
    {
        return $this->updateLearnerCatalogs;
    }

    
    public function withUpdateLearnerCatalogs(bool $updateLearnerCatalogs): static
    {
        $new = clone $this;
        $new->updateLearnerCatalogs = $updateLearnerCatalogs;

        return $new;
    }
}
