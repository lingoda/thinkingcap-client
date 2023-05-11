<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseSession
{
    /**
     * @var string
     */
    private $SessionID;

    /**
     * @var string
     */
    private $SessionName;

    /**
     * @var string
     */
    private $SessionDescription;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $LocationType;

    /**
     * @var string
     */
    private $WebResourceLocation;

    /**
     * @var string
     */
    private $WebResourceLocationName;

    /**
     * @var string
     */
    private $HostID;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TrainingLocation
     */
    private $Location;

    /**
     * @var bool
     */
    private $IsTBD;

    /**
     * @var bool
     */
    private $IsMultipleDaysSession;

    /**
     * @var string
     */
    private $SessionStartDate;

    /**
     * @var string
     */
    private $SessionEndDate;

    /**
     * @var string
     */
    private $CourseDate;

    /**
     * @var string
     */
    private $StartHour;

    /**
     * @var string
     */
    private $StartMinute;

    /**
     * @var string
     */
    private $EndHour;

    /**
     * @var string
     */
    private $EndMinute;

    /**
     * @var string
     */
    private $StartMeridian;

    /**
     * @var string
     */
    private $EndMeridian;

    /**
     * @var bool
     */
    private $DoProcessLocation;

    /**
     * @var string
     */
    private $StudentID;

    /**
     * @var bool
     */
    private $IsRequired;

    /**
     * @var string
     */
    private $DocumentFile;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var string
     */
    private $LastRosterFilePath;

    /**
     * @var string
     */
    private $AttendanceCode;

    /**
     * @var string
     */
    private $RecurringPeriod;

    /**
     * @var int
     */
    private $RecurringNo;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString
     */
    private $Facilitators;

    /**
     * @var string
     */
    private $FacilitatorsList;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfUser
     */
    private $Speakers;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    private $CertificateRules;

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     *
     * @return CourseSession
     */
    public function withSessionID($SessionID)
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionName()
    {
        return $this->SessionName;
    }

    /**
     * @param string $SessionName
     *
     * @return CourseSession
     */
    public function withSessionName($SessionName)
    {
        $new = clone $this;
        $new->SessionName = $SessionName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionDescription()
    {
        return $this->SessionDescription;
    }

    /**
     * @param string $SessionDescription
     *
     * @return CourseSession
     */
    public function withSessionDescription($SessionDescription)
    {
        $new = clone $this;
        $new->SessionDescription = $SessionDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->CourseID;
    }

    /**
     * @param string $CourseID
     *
     * @return CourseSession
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }

    /**
     * @param string $LocationType
     *
     * @return CourseSession
     */
    public function withLocationType($LocationType)
    {
        $new = clone $this;
        $new->LocationType = $LocationType;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebResourceLocation()
    {
        return $this->WebResourceLocation;
    }

    /**
     * @param string $WebResourceLocation
     *
     * @return CourseSession
     */
    public function withWebResourceLocation($WebResourceLocation)
    {
        $new = clone $this;
        $new->WebResourceLocation = $WebResourceLocation;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebResourceLocationName()
    {
        return $this->WebResourceLocationName;
    }

    /**
     * @param string $WebResourceLocationName
     *
     * @return CourseSession
     */
    public function withWebResourceLocationName($WebResourceLocationName)
    {
        $new = clone $this;
        $new->WebResourceLocationName = $WebResourceLocationName;

        return $new;
    }

    /**
     * @return string
     */
    public function getHostID()
    {
        return $this->HostID;
    }

    /**
     * @param string $HostID
     *
     * @return CourseSession
     */
    public function withHostID($HostID)
    {
        $new = clone $this;
        $new->HostID = $HostID;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TrainingLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TrainingLocation $Location
     *
     * @return CourseSession
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsTBD()
    {
        return $this->IsTBD;
    }

    /**
     * @param bool $IsTBD
     *
     * @return CourseSession
     */
    public function withIsTBD($IsTBD)
    {
        $new = clone $this;
        $new->IsTBD = $IsTBD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsMultipleDaysSession()
    {
        return $this->IsMultipleDaysSession;
    }

    /**
     * @param bool $IsMultipleDaysSession
     *
     * @return CourseSession
     */
    public function withIsMultipleDaysSession($IsMultipleDaysSession)
    {
        $new = clone $this;
        $new->IsMultipleDaysSession = $IsMultipleDaysSession;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionStartDate()
    {
        return $this->SessionStartDate;
    }

    /**
     * @param string $SessionStartDate
     *
     * @return CourseSession
     */
    public function withSessionStartDate($SessionStartDate)
    {
        $new = clone $this;
        $new->SessionStartDate = $SessionStartDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionEndDate()
    {
        return $this->SessionEndDate;
    }

    /**
     * @param string $SessionEndDate
     *
     * @return CourseSession
     */
    public function withSessionEndDate($SessionEndDate)
    {
        $new = clone $this;
        $new->SessionEndDate = $SessionEndDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseDate()
    {
        return $this->CourseDate;
    }

    /**
     * @param string $CourseDate
     *
     * @return CourseSession
     */
    public function withCourseDate($CourseDate)
    {
        $new = clone $this;
        $new->CourseDate = $CourseDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartHour()
    {
        return $this->StartHour;
    }

    /**
     * @param string $StartHour
     *
     * @return CourseSession
     */
    public function withStartHour($StartHour)
    {
        $new = clone $this;
        $new->StartHour = $StartHour;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartMinute()
    {
        return $this->StartMinute;
    }

    /**
     * @param string $StartMinute
     *
     * @return CourseSession
     */
    public function withStartMinute($StartMinute)
    {
        $new = clone $this;
        $new->StartMinute = $StartMinute;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndHour()
    {
        return $this->EndHour;
    }

    /**
     * @param string $EndHour
     *
     * @return CourseSession
     */
    public function withEndHour($EndHour)
    {
        $new = clone $this;
        $new->EndHour = $EndHour;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndMinute()
    {
        return $this->EndMinute;
    }

    /**
     * @param string $EndMinute
     *
     * @return CourseSession
     */
    public function withEndMinute($EndMinute)
    {
        $new = clone $this;
        $new->EndMinute = $EndMinute;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartMeridian()
    {
        return $this->StartMeridian;
    }

    /**
     * @param string $StartMeridian
     *
     * @return CourseSession
     */
    public function withStartMeridian($StartMeridian)
    {
        $new = clone $this;
        $new->StartMeridian = $StartMeridian;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndMeridian()
    {
        return $this->EndMeridian;
    }

    /**
     * @param string $EndMeridian
     *
     * @return CourseSession
     */
    public function withEndMeridian($EndMeridian)
    {
        $new = clone $this;
        $new->EndMeridian = $EndMeridian;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoProcessLocation()
    {
        return $this->DoProcessLocation;
    }

    /**
     * @param bool $DoProcessLocation
     *
     * @return CourseSession
     */
    public function withDoProcessLocation($DoProcessLocation)
    {
        $new = clone $this;
        $new->DoProcessLocation = $DoProcessLocation;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentID()
    {
        return $this->StudentID;
    }

    /**
     * @param string $StudentID
     *
     * @return CourseSession
     */
    public function withStudentID($StudentID)
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }

    /**
     * @param bool $IsRequired
     *
     * @return CourseSession
     */
    public function withIsRequired($IsRequired)
    {
        $new = clone $this;
        $new->IsRequired = $IsRequired;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentFile()
    {
        return $this->DocumentFile;
    }

    /**
     * @param string $DocumentFile
     *
     * @return CourseSession
     */
    public function withDocumentFile($DocumentFile)
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }

    /**
     * @param string $ContentType
     *
     * @return CourseSession
     */
    public function withContentType($ContentType)
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastRosterFilePath()
    {
        return $this->LastRosterFilePath;
    }

    /**
     * @param string $LastRosterFilePath
     *
     * @return CourseSession
     */
    public function withLastRosterFilePath($LastRosterFilePath)
    {
        $new = clone $this;
        $new->LastRosterFilePath = $LastRosterFilePath;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttendanceCode()
    {
        return $this->AttendanceCode;
    }

    /**
     * @param string $AttendanceCode
     *
     * @return CourseSession
     */
    public function withAttendanceCode($AttendanceCode)
    {
        $new = clone $this;
        $new->AttendanceCode = $AttendanceCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecurringPeriod()
    {
        return $this->RecurringPeriod;
    }

    /**
     * @param string $RecurringPeriod
     *
     * @return CourseSession
     */
    public function withRecurringPeriod($RecurringPeriod)
    {
        $new = clone $this;
        $new->RecurringPeriod = $RecurringPeriod;

        return $new;
    }

    /**
     * @return int
     */
    public function getRecurringNo()
    {
        return $this->RecurringNo;
    }

    /**
     * @param int $RecurringNo
     *
     * @return CourseSession
     */
    public function withRecurringNo($RecurringNo)
    {
        $new = clone $this;
        $new->RecurringNo = $RecurringNo;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString
     */
    public function getFacilitators()
    {
        return $this->Facilitators;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfString $Facilitators
     *
     * @return CourseSession
     */
    public function withFacilitators($Facilitators)
    {
        $new = clone $this;
        $new->Facilitators = $Facilitators;

        return $new;
    }

    /**
     * @return string
     */
    public function getFacilitatorsList()
    {
        return $this->FacilitatorsList;
    }

    /**
     * @param string $FacilitatorsList
     *
     * @return CourseSession
     */
    public function withFacilitatorsList($FacilitatorsList)
    {
        $new = clone $this;
        $new->FacilitatorsList = $FacilitatorsList;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfUser
     */
    public function getSpeakers()
    {
        return $this->Speakers;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfUser $Speakers
     *
     * @return CourseSession
     */
    public function withSpeakers($Speakers)
    {
        $new = clone $this;
        $new->Speakers = $Speakers;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    public function getCertificateRules()
    {
        return $this->CertificateRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType $CertificateRules
     *
     * @return CourseSession
     */
    public function withCertificateRules($CertificateRules)
    {
        $new = clone $this;
        $new->CertificateRules = $CertificateRules;

        return $new;
    }
}
