<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseSession
{
    private string $SessionID;

    
    private string $SessionName;

    
    private string $SessionDescription;

    
    private string $CourseID;

    
    private string $LocationType;

    
    private string $WebResourceLocation;

    
    private string $WebResourceLocationName;

    
    private string $HostID;

    
    private TrainingLocation $Location;

    
    private bool $IsTBD;

    
    private bool $IsMultipleDaysSession;

    
    private string $SessionStartDate;

    
    private string $SessionEndDate;

    
    private string $CourseDate;

    
    private string $StartHour;

    
    private string $StartMinute;

    
    private string $EndHour;

    
    private string $EndMinute;

    
    private string $StartMeridian;

    
    private string $EndMeridian;

    
    private bool $DoProcessLocation;

    
    private string $StudentID;

    
    private bool $IsRequired;

    
    private Base64Binary $DocumentFile;

    
    private string $ContentType;

    
    private string $LastRosterFilePath;

    
    private string $AttendanceCode;

    
    private string $RecurringPeriod;

    
    private int $RecurringNo;

    
    private ArrayOfString $Facilitators;

    
    private string $FacilitatorsList;

    
    private ArrayOfUser $Speakers;

    
    private ArrayOfAnyType $CertificateRules;

    
    public function getSessionID(): string
    {
        return $this->SessionID;
    }

    
    public function withSessionID(string $SessionID): static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    
    public function getSessionName(): string
    {
        return $this->SessionName;
    }

    
    public function withSessionName(string $SessionName): static
    {
        $new = clone $this;
        $new->SessionName = $SessionName;

        return $new;
    }

    
    public function getSessionDescription(): string
    {
        return $this->SessionDescription;
    }

    
    public function withSessionDescription(string $SessionDescription): static
    {
        $new = clone $this;
        $new->SessionDescription = $SessionDescription;

        return $new;
    }

    
    public function getCourseID(): string
    {
        return $this->CourseID;
    }

    
    public function withCourseID(string $CourseID): static
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    
    public function getLocationType(): string
    {
        return $this->LocationType;
    }

    
    public function withLocationType(string $LocationType): static
    {
        $new = clone $this;
        $new->LocationType = $LocationType;

        return $new;
    }

    
    public function getWebResourceLocation(): string
    {
        return $this->WebResourceLocation;
    }

    
    public function withWebResourceLocation(string $WebResourceLocation): static
    {
        $new = clone $this;
        $new->WebResourceLocation = $WebResourceLocation;

        return $new;
    }

    
    public function getWebResourceLocationName(): string
    {
        return $this->WebResourceLocationName;
    }

    
    public function withWebResourceLocationName(string $WebResourceLocationName): static
    {
        $new = clone $this;
        $new->WebResourceLocationName = $WebResourceLocationName;

        return $new;
    }

    
    public function getHostID(): string
    {
        return $this->HostID;
    }

    
    public function withHostID(string $HostID): static
    {
        $new = clone $this;
        $new->HostID = $HostID;

        return $new;
    }

    
    public function getLocation(): TrainingLocation
    {
        return $this->Location;
    }

    
    public function withLocation(TrainingLocation $Location): static
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

    
    public function getSessionStartDate(): string
    {
        return $this->SessionStartDate;
    }

    
    public function withSessionStartDate(string $SessionStartDate): static
    {
        $new = clone $this;
        $new->SessionStartDate = $SessionStartDate;

        return $new;
    }

    
    public function getSessionEndDate(): string
    {
        return $this->SessionEndDate;
    }

    
    public function withSessionEndDate(string $SessionEndDate): static
    {
        $new = clone $this;
        $new->SessionEndDate = $SessionEndDate;

        return $new;
    }

    
    public function getCourseDate(): string
    {
        return $this->CourseDate;
    }

    
    public function withCourseDate(string $CourseDate): static
    {
        $new = clone $this;
        $new->CourseDate = $CourseDate;

        return $new;
    }

    
    public function getStartHour(): string
    {
        return $this->StartHour;
    }

    
    public function withStartHour(string $StartHour): static
    {
        $new = clone $this;
        $new->StartHour = $StartHour;

        return $new;
    }

    
    public function getStartMinute(): string
    {
        return $this->StartMinute;
    }

    
    public function withStartMinute(string $StartMinute): static
    {
        $new = clone $this;
        $new->StartMinute = $StartMinute;

        return $new;
    }

    
    public function getEndHour(): string
    {
        return $this->EndHour;
    }

    
    public function withEndHour(string $EndHour): static
    {
        $new = clone $this;
        $new->EndHour = $EndHour;

        return $new;
    }

    
    public function getEndMinute(): string
    {
        return $this->EndMinute;
    }

    
    public function withEndMinute(string $EndMinute): static
    {
        $new = clone $this;
        $new->EndMinute = $EndMinute;

        return $new;
    }

    
    public function getStartMeridian(): string
    {
        return $this->StartMeridian;
    }

    
    public function withStartMeridian(string $StartMeridian): static
    {
        $new = clone $this;
        $new->StartMeridian = $StartMeridian;

        return $new;
    }

    
    public function getEndMeridian(): string
    {
        return $this->EndMeridian;
    }

    
    public function withEndMeridian(string $EndMeridian): static
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

    
    public function getStudentID(): string
    {
        return $this->StudentID;
    }

    
    public function withStudentID(string $StudentID): static
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

    
    public function getDocumentFile(): Base64Binary
    {
        return $this->DocumentFile;
    }

    
    public function withDocumentFile(Base64Binary $DocumentFile): static
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    
    public function getContentType(): string
    {
        return $this->ContentType;
    }

    
    public function withContentType(string $ContentType): static
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    
    public function getLastRosterFilePath(): string
    {
        return $this->LastRosterFilePath;
    }

    
    public function withLastRosterFilePath(string $LastRosterFilePath): static
    {
        $new = clone $this;
        $new->LastRosterFilePath = $LastRosterFilePath;

        return $new;
    }

    
    public function getAttendanceCode(): string
    {
        return $this->AttendanceCode;
    }

    
    public function withAttendanceCode(string $AttendanceCode): static
    {
        $new = clone $this;
        $new->AttendanceCode = $AttendanceCode;

        return $new;
    }

    
    public function getRecurringPeriod(): string
    {
        return $this->RecurringPeriod;
    }

    
    public function withRecurringPeriod(string $RecurringPeriod): static
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

    
    public function getFacilitators(): ArrayOfString
    {
        return $this->Facilitators;
    }

    
    public function withFacilitators(ArrayOfString $Facilitators): static
    {
        $new = clone $this;
        $new->Facilitators = $Facilitators;

        return $new;
    }

    
    public function getFacilitatorsList(): string
    {
        return $this->FacilitatorsList;
    }

    
    public function withFacilitatorsList(string $FacilitatorsList): static
    {
        $new = clone $this;
        $new->FacilitatorsList = $FacilitatorsList;

        return $new;
    }

    
    public function getSpeakers(): ArrayOfUser
    {
        return $this->Speakers;
    }

    
    public function withSpeakers(ArrayOfUser $Speakers): static
    {
        $new = clone $this;
        $new->Speakers = $Speakers;

        return $new;
    }

    
    public function getCertificateRules(): ArrayOfAnyType
    {
        return $this->CertificateRules;
    }

    
    public function withCertificateRules(ArrayOfAnyType $CertificateRules): static
    {
        $new = clone $this;
        $new->CertificateRules = $CertificateRules;

        return $new;
    }
}
