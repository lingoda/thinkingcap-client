<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseSession
{
    private ?string $SessionID = null;

    private ?string $SessionName = null;

    private ?string $SessionDescription = null;

    private ?string $CourseID = null;

    private ?string $LocationType = null;

    private ?string $WebResourceLocation = null;

    private ?string $WebResourceLocationName = null;

    private ?string $HostID = null;

    private ?TrainingLocation $Location = null;

    private bool $IsTBD;

    private bool $IsMultipleDaysSession;

    private ?string $SessionStartDate = null;

    private ?string $SessionEndDate = null;

    private ?string $CourseDate = null;

    private ?string $StartHour = null;

    private ?string $StartMinute = null;

    private ?string $EndHour = null;

    private ?string $EndMinute = null;

    private ?string $StartMeridian = null;

    private ?string $EndMeridian = null;

    private bool $DoProcessLocation;

    private ?string $StudentID = null;

    private bool $IsRequired;

    /**
     * @var null | mixed
     */
    private mixed $DocumentFile = null;

    private ?string $ContentType = null;

    private ?string $LastRosterFilePath = null;

    private ?string $AttendanceCode = null;

    private ?string $RecurringPeriod = null;

    private int $RecurringNo;

    private ?ArrayOfSessionConnectedUser $ConnectedUsers = null;

    private ?ArrayOfAnyType $CertificateRules = null;

    public function getSessionID(): ?string
    {
        return $this->SessionID;
    }

    public function withSessionID(?string $SessionID): static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    public function getSessionName(): ?string
    {
        return $this->SessionName;
    }

    public function withSessionName(?string $SessionName): static
    {
        $new = clone $this;
        $new->SessionName = $SessionName;

        return $new;
    }

    public function getSessionDescription(): ?string
    {
        return $this->SessionDescription;
    }

    public function withSessionDescription(?string $SessionDescription): static
    {
        $new = clone $this;
        $new->SessionDescription = $SessionDescription;

        return $new;
    }

    public function getCourseID(): ?string
    {
        return $this->CourseID;
    }

    public function withCourseID(?string $CourseID): static
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    public function getLocationType(): ?string
    {
        return $this->LocationType;
    }

    public function withLocationType(?string $LocationType): static
    {
        $new = clone $this;
        $new->LocationType = $LocationType;

        return $new;
    }

    public function getWebResourceLocation(): ?string
    {
        return $this->WebResourceLocation;
    }

    public function withWebResourceLocation(?string $WebResourceLocation): static
    {
        $new = clone $this;
        $new->WebResourceLocation = $WebResourceLocation;

        return $new;
    }

    public function getWebResourceLocationName(): ?string
    {
        return $this->WebResourceLocationName;
    }

    public function withWebResourceLocationName(?string $WebResourceLocationName): static
    {
        $new = clone $this;
        $new->WebResourceLocationName = $WebResourceLocationName;

        return $new;
    }

    public function getHostID(): ?string
    {
        return $this->HostID;
    }

    public function withHostID(?string $HostID): static
    {
        $new = clone $this;
        $new->HostID = $HostID;

        return $new;
    }

    public function getLocation(): ?TrainingLocation
    {
        return $this->Location;
    }

    public function withLocation(?TrainingLocation $Location): static
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    public function getIsTBD(): bool
    {
        return $this->IsTBD;
    }

    public function withIsTBD(bool $IsTBD): static
    {
        $new = clone $this;
        $new->IsTBD = $IsTBD;

        return $new;
    }

    public function getIsMultipleDaysSession(): bool
    {
        return $this->IsMultipleDaysSession;
    }

    public function withIsMultipleDaysSession(bool $IsMultipleDaysSession): static
    {
        $new = clone $this;
        $new->IsMultipleDaysSession = $IsMultipleDaysSession;

        return $new;
    }

    public function getSessionStartDate(): ?string
    {
        return $this->SessionStartDate;
    }

    public function withSessionStartDate(?string $SessionStartDate): static
    {
        $new = clone $this;
        $new->SessionStartDate = $SessionStartDate;

        return $new;
    }

    public function getSessionEndDate(): ?string
    {
        return $this->SessionEndDate;
    }

    public function withSessionEndDate(?string $SessionEndDate): static
    {
        $new = clone $this;
        $new->SessionEndDate = $SessionEndDate;

        return $new;
    }

    public function getCourseDate(): ?string
    {
        return $this->CourseDate;
    }

    public function withCourseDate(?string $CourseDate): static
    {
        $new = clone $this;
        $new->CourseDate = $CourseDate;

        return $new;
    }

    public function getStartHour(): ?string
    {
        return $this->StartHour;
    }

    public function withStartHour(?string $StartHour): static
    {
        $new = clone $this;
        $new->StartHour = $StartHour;

        return $new;
    }

    public function getStartMinute(): ?string
    {
        return $this->StartMinute;
    }

    public function withStartMinute(?string $StartMinute): static
    {
        $new = clone $this;
        $new->StartMinute = $StartMinute;

        return $new;
    }

    public function getEndHour(): ?string
    {
        return $this->EndHour;
    }

    public function withEndHour(?string $EndHour): static
    {
        $new = clone $this;
        $new->EndHour = $EndHour;

        return $new;
    }

    public function getEndMinute(): ?string
    {
        return $this->EndMinute;
    }

    public function withEndMinute(?string $EndMinute): static
    {
        $new = clone $this;
        $new->EndMinute = $EndMinute;

        return $new;
    }

    public function getStartMeridian(): ?string
    {
        return $this->StartMeridian;
    }

    public function withStartMeridian(?string $StartMeridian): static
    {
        $new = clone $this;
        $new->StartMeridian = $StartMeridian;

        return $new;
    }

    public function getEndMeridian(): ?string
    {
        return $this->EndMeridian;
    }

    public function withEndMeridian(?string $EndMeridian): static
    {
        $new = clone $this;
        $new->EndMeridian = $EndMeridian;

        return $new;
    }

    public function getDoProcessLocation(): bool
    {
        return $this->DoProcessLocation;
    }

    public function withDoProcessLocation(bool $DoProcessLocation): static
    {
        $new = clone $this;
        $new->DoProcessLocation = $DoProcessLocation;

        return $new;
    }

    public function getStudentID(): ?string
    {
        return $this->StudentID;
    }

    public function withStudentID(?string $StudentID): static
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    public function getIsRequired(): bool
    {
        return $this->IsRequired;
    }

    public function withIsRequired(bool $IsRequired): static
    {
        $new = clone $this;
        $new->IsRequired = $IsRequired;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getDocumentFile(): mixed
    {
        return $this->DocumentFile;
    }

    /**
     * @param null | mixed $DocumentFile
     */
    public function withDocumentFile(mixed $DocumentFile): static
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    public function getContentType(): ?string
    {
        return $this->ContentType;
    }

    public function withContentType(?string $ContentType): static
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    public function getLastRosterFilePath(): ?string
    {
        return $this->LastRosterFilePath;
    }

    public function withLastRosterFilePath(?string $LastRosterFilePath): static
    {
        $new = clone $this;
        $new->LastRosterFilePath = $LastRosterFilePath;

        return $new;
    }

    public function getAttendanceCode(): ?string
    {
        return $this->AttendanceCode;
    }

    public function withAttendanceCode(?string $AttendanceCode): static
    {
        $new = clone $this;
        $new->AttendanceCode = $AttendanceCode;

        return $new;
    }

    public function getRecurringPeriod(): ?string
    {
        return $this->RecurringPeriod;
    }

    public function withRecurringPeriod(?string $RecurringPeriod): static
    {
        $new = clone $this;
        $new->RecurringPeriod = $RecurringPeriod;

        return $new;
    }

    public function getRecurringNo(): int
    {
        return $this->RecurringNo;
    }

    public function withRecurringNo(int $RecurringNo): static
    {
        $new = clone $this;
        $new->RecurringNo = $RecurringNo;

        return $new;
    }

    public function getConnectedUsers(): ?ArrayOfSessionConnectedUser
    {
        return $this->ConnectedUsers;
    }

    public function withConnectedUsers(?ArrayOfSessionConnectedUser $ConnectedUsers): static
    {
        $new = clone $this;
        $new->ConnectedUsers = $ConnectedUsers;

        return $new;
    }

    public function getCertificateRules(): ?ArrayOfAnyType
    {
        return $this->CertificateRules;
    }

    public function withCertificateRules(?ArrayOfAnyType $CertificateRules): static
    {
        $new = clone $this;
        $new->CertificateRules = $CertificateRules;

        return $new;
    }
}
