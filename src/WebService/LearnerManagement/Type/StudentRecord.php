<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class StudentRecord
{
    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $TypeName;

    /**
     * @var bool
     */
    private $IsOnline;

    /**
     * @var bool
     */
    private $IsAssessment;

    /**
     * @var bool
     */
    private $HasFeedBack;

    /**
     * @var string
     */
    private $FullScreen;

    /**
     * @var string
     */
    private $RecordID;

    /**
     * @var string
     */
    private $DomainID;

    /**
     * @var string
     */
    private $StudentID;

    /**
     * @var string
     */
    private $StudentDisplayID;

    /**
     * @var string
     */
    private $StudentName;

    /**
     * @var string
     */
    private $StudentEmail;

    /**
     * @var string
     */
    private $StudentCmiName;

    /**
     * @var string
     */
    private $StudentLanguage;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $CourseTitle;

    /**
     * @var bool
     */
    private $IsAccesscodeValidated;

    /**
     * @var bool
     */
    private $FeedbackLoaded;

    /**
     * @var string
     */
    private $CourseDescription;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var string
     */
    private $CourseCode;

    /**
     * @var string
     */
    private $CourseProgram;

    /**
     * @var string
     */
    private $CourseProgramID;

    /**
     * @var string
     */
    private $ProgramCode;

    /**
     * @var string
     */
    private $LastProgram;

    /**
     * @var string
     */
    private $EnrolledFromProgram;

    /**
     * @var string
     */
    private $CohortID;

    /**
     * @var string
     */
    private $LearningPathID;

    /**
     * @var bool
     */
    private $Archived;

    /**
     * @var bool
     */
    private $Anon;

    /**
     * @var bool
     */
    private $IsLocked;

    /**
     * @var string
     */
    private $LockReason;

    /**
     * @var int
     */
    private $CourseVersion;

    /**
     * @var string
     */
    private $ScormVersion;

    /**
     * @var float
     */
    private $CourseCredit;

    /**
     * @var bool
     */
    private $CreditOnlyOnPass;

    /**
     * @var bool
     */
    private $CanGrantCertificate;

    /**
     * @var string
     */
    private $CertificateType;

    /**
     * @var int
     */
    private $CertificateScore;

    /**
     * @var bool
     */
    private $DoNotGrandCertificateUnlessCreditIssued;

    /**
     * @var float
     */
    private $CertificateMinTime;

    /**
     * @var \DateTimeInterface
     */
    private $CertificateExpiring;

    /**
     * @var bool
     */
    private $GrantCertificate;

    /**
     * @var bool
     */
    private $HasCertificate;

    /**
     * @var bool
     */
    private $GrantCredit;

    /**
     * @var int
     */
    private $Attempt;

    /**
     * @var string
     */
    private $PassID;

    /**
     * @var bool
     */
    private $LearningObjectIsActive;

    /**
     * @var bool
     */
    private $HasForum;

    /**
     * @var bool
     */
    private $HasChat;

    /**
     * @var string
     */
    private $TeachingAsstID;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $CompletionStatus;

    /**
     * @var bool
     */
    private $RequiresCompletedStatusForCompletion;

    /**
     * @var bool
     */
    private $RequiresFeedbackForCompletion;

    /**
     * @var bool
     */
    private $RequireFeedbackPopUp;

    /**
     * @var bool
     */
    private $RequireAssignmentForCompletion;

    /**
     * @var bool
     */
    private $RequireAssesmentForCompletion;

    /**
     * @var bool
     */
    private $IsCompleted;

    /**
     * @var bool
     */
    private $ProcessUnknown;

    /**
     * @var bool
     */
    private $OverrideAPISuccess;

    /**
     * @var int
     */
    private $MinPassingScore;

    /**
     * @var bool
     */
    private $BarAccess;

    /**
     * @var string
     */
    private $Success;

    /**
     * @var string
     */
    private $EntrySuccess;

    /**
     * @var \DateTimeInterface
     */
    private $DateEnrolled;

    /**
     * @var string
     */
    private $EnrollmentNotes;

    /**
     * @var \DateTimeInterface
     */
    private $DateStarted;

    /**
     * @var \DateTimeInterface
     */
    private $DueDate;

    /**
     * @var \DateTimeInterface
     */
    private $CompletedDate;

    /**
     * @var \DateTimeInterface
     */
    private $OverallCompletedDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastDateAttempted;

    /**
     * @var int
     */
    private $TotalCourseAttempts;

    /**
     * @var \DateTimeInterface
     */
    private $RecordStartDate;

    /**
     * @var \DateTimeInterface
     */
    private $CourseStartDate;

    /**
     * @var bool
     */
    private $CourseImmediateStart;

    /**
     * @var string
     */
    private $LastModule;

    /**
     * @var string
     */
    private $LastModuleName;

    /**
     * @var string
     */
    private $ProctorComment;

    /**
     * @var int
     */
    private $Score;

    /**
     * @var int
     */
    private $EntryScore;

    /**
     * @var float
     */
    private $TotalAverageScore;

    /**
     * @var float
     */
    private $PartialScore;

    /**
     * @var float
     */
    private $PercentCompleted;

    /**
     * @var int
     */
    private $Timeout;

    /**
     * @var bool
     */
    private $CourseDisclaimerAgreed;

    /**
     * @var \DateTimeInterface
     */
    private $DisclaimerAgreedDate;

    /**
     * @var string
     */
    private $SummaryXml;

    /**
     * @var string
     */
    private $SummaryDuration;

    /**
     * @var bool
     */
    private $Enter;

    /**
     * @var bool
     */
    private $Exit;

    /**
     * @var bool
     */
    private $Feedback;

    /**
     * @var string
     */
    private $CoursePackageURL;

    /**
     * @var string
     */
    private $CourseMarqueeURL;

    /**
     * @var string
     */
    private $CertificateXml;

    /**
     * @var string
     */
    private $NotificationSettingXml;

    /**
     * @var string
     */
    private $Notes;

    /**
     * @var string
     */
    private $ManualUpdateNotes;

    /**
     * @var bool
     */
    private $ManualCompleted;

    /**
     * @var \DateTimeInterface
     */
    private $AuditTimestamp;

    /**
     * @var string
     */
    private $ApprovalCode;

    /**
     * @var \DateTimeInterface
     */
    private $LastModifiedTimestamp;

    /**
     * @var bool
     */
    private $UpdateInProgress;

    /**
     * @var \DateTimeInterface
     */
    private $UpdateInProgressTimestamp;

    /**
     * @var string
     */
    private $PortfolioEvidenceText;

    /**
     * @var bool
     */
    private $CreditStatementAvailable;

    /**
     * @var string
     */
    private $OpenBadgeID;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return StudentRecord
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
        return $this->TypeName;
    }

    /**
     * @param string $TypeName
     *
     * @return StudentRecord
     */
    public function withTypeName($TypeName)
    {
        $new = clone $this;
        $new->TypeName = $TypeName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsOnline()
    {
        return $this->IsOnline;
    }

    /**
     * @param bool $IsOnline
     *
     * @return StudentRecord
     */
    public function withIsOnline($IsOnline)
    {
        $new = clone $this;
        $new->IsOnline = $IsOnline;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAssessment()
    {
        return $this->IsAssessment;
    }

    /**
     * @param bool $IsAssessment
     *
     * @return StudentRecord
     */
    public function withIsAssessment($IsAssessment)
    {
        $new = clone $this;
        $new->IsAssessment = $IsAssessment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasFeedBack()
    {
        return $this->HasFeedBack;
    }

    /**
     * @param bool $HasFeedBack
     *
     * @return StudentRecord
     */
    public function withHasFeedBack($HasFeedBack)
    {
        $new = clone $this;
        $new->HasFeedBack = $HasFeedBack;

        return $new;
    }

    /**
     * @return string
     */
    public function getFullScreen()
    {
        return $this->FullScreen;
    }

    /**
     * @param string $FullScreen
     *
     * @return StudentRecord
     */
    public function withFullScreen($FullScreen)
    {
        $new = clone $this;
        $new->FullScreen = $FullScreen;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }

    /**
     * @param string $RecordID
     *
     * @return StudentRecord
     */
    public function withRecordID($RecordID)
    {
        $new = clone $this;
        $new->RecordID = $RecordID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomainID()
    {
        return $this->DomainID;
    }

    /**
     * @param string $DomainID
     *
     * @return StudentRecord
     */
    public function withDomainID($DomainID)
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

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
     * @return StudentRecord
     */
    public function withStudentID($StudentID)
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentDisplayID()
    {
        return $this->StudentDisplayID;
    }

    /**
     * @param string $StudentDisplayID
     *
     * @return StudentRecord
     */
    public function withStudentDisplayID($StudentDisplayID)
    {
        $new = clone $this;
        $new->StudentDisplayID = $StudentDisplayID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentName()
    {
        return $this->StudentName;
    }

    /**
     * @param string $StudentName
     *
     * @return StudentRecord
     */
    public function withStudentName($StudentName)
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentEmail()
    {
        return $this->StudentEmail;
    }

    /**
     * @param string $StudentEmail
     *
     * @return StudentRecord
     */
    public function withStudentEmail($StudentEmail)
    {
        $new = clone $this;
        $new->StudentEmail = $StudentEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentCmiName()
    {
        return $this->StudentCmiName;
    }

    /**
     * @param string $StudentCmiName
     *
     * @return StudentRecord
     */
    public function withStudentCmiName($StudentCmiName)
    {
        $new = clone $this;
        $new->StudentCmiName = $StudentCmiName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentLanguage()
    {
        return $this->StudentLanguage;
    }

    /**
     * @param string $StudentLanguage
     *
     * @return StudentRecord
     */
    public function withStudentLanguage($StudentLanguage)
    {
        $new = clone $this;
        $new->StudentLanguage = $StudentLanguage;

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
     * @return StudentRecord
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
    public function getCourseTitle()
    {
        return $this->CourseTitle;
    }

    /**
     * @param string $CourseTitle
     *
     * @return StudentRecord
     */
    public function withCourseTitle($CourseTitle)
    {
        $new = clone $this;
        $new->CourseTitle = $CourseTitle;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAccesscodeValidated()
    {
        return $this->IsAccesscodeValidated;
    }

    /**
     * @param bool $IsAccesscodeValidated
     *
     * @return StudentRecord
     */
    public function withIsAccesscodeValidated($IsAccesscodeValidated)
    {
        $new = clone $this;
        $new->IsAccesscodeValidated = $IsAccesscodeValidated;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFeedbackLoaded()
    {
        return $this->FeedbackLoaded;
    }

    /**
     * @param bool $FeedbackLoaded
     *
     * @return StudentRecord
     */
    public function withFeedbackLoaded($FeedbackLoaded)
    {
        $new = clone $this;
        $new->FeedbackLoaded = $FeedbackLoaded;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseDescription()
    {
        return $this->CourseDescription;
    }

    /**
     * @param string $CourseDescription
     *
     * @return StudentRecord
     */
    public function withCourseDescription($CourseDescription)
    {
        $new = clone $this;
        $new->CourseDescription = $CourseDescription;

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
     * @return StudentRecord
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
    public function getCourseCode()
    {
        return $this->CourseCode;
    }

    /**
     * @param string $CourseCode
     *
     * @return StudentRecord
     */
    public function withCourseCode($CourseCode)
    {
        $new = clone $this;
        $new->CourseCode = $CourseCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseProgram()
    {
        return $this->CourseProgram;
    }

    /**
     * @param string $CourseProgram
     *
     * @return StudentRecord
     */
    public function withCourseProgram($CourseProgram)
    {
        $new = clone $this;
        $new->CourseProgram = $CourseProgram;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseProgramID()
    {
        return $this->CourseProgramID;
    }

    /**
     * @param string $CourseProgramID
     *
     * @return StudentRecord
     */
    public function withCourseProgramID($CourseProgramID)
    {
        $new = clone $this;
        $new->CourseProgramID = $CourseProgramID;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgramCode()
    {
        return $this->ProgramCode;
    }

    /**
     * @param string $ProgramCode
     *
     * @return StudentRecord
     */
    public function withProgramCode($ProgramCode)
    {
        $new = clone $this;
        $new->ProgramCode = $ProgramCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastProgram()
    {
        return $this->LastProgram;
    }

    /**
     * @param string $LastProgram
     *
     * @return StudentRecord
     */
    public function withLastProgram($LastProgram)
    {
        $new = clone $this;
        $new->LastProgram = $LastProgram;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnrolledFromProgram()
    {
        return $this->EnrolledFromProgram;
    }

    /**
     * @param string $EnrolledFromProgram
     *
     * @return StudentRecord
     */
    public function withEnrolledFromProgram($EnrolledFromProgram)
    {
        $new = clone $this;
        $new->EnrolledFromProgram = $EnrolledFromProgram;

        return $new;
    }

    /**
     * @return string
     */
    public function getCohortID()
    {
        return $this->CohortID;
    }

    /**
     * @param string $CohortID
     *
     * @return StudentRecord
     */
    public function withCohortID($CohortID)
    {
        $new = clone $this;
        $new->CohortID = $CohortID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningPathID()
    {
        return $this->LearningPathID;
    }

    /**
     * @param string $LearningPathID
     *
     * @return StudentRecord
     */
    public function withLearningPathID($LearningPathID)
    {
        $new = clone $this;
        $new->LearningPathID = $LearningPathID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getArchived()
    {
        return $this->Archived;
    }

    /**
     * @param bool $Archived
     *
     * @return StudentRecord
     */
    public function withArchived($Archived)
    {
        $new = clone $this;
        $new->Archived = $Archived;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAnon()
    {
        return $this->Anon;
    }

    /**
     * @param bool $Anon
     *
     * @return StudentRecord
     */
    public function withAnon($Anon)
    {
        $new = clone $this;
        $new->Anon = $Anon;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->IsLocked;
    }

    /**
     * @param bool $IsLocked
     *
     * @return StudentRecord
     */
    public function withIsLocked($IsLocked)
    {
        $new = clone $this;
        $new->IsLocked = $IsLocked;

        return $new;
    }

    /**
     * @return string
     */
    public function getLockReason()
    {
        return $this->LockReason;
    }

    /**
     * @param string $LockReason
     *
     * @return StudentRecord
     */
    public function withLockReason($LockReason)
    {
        $new = clone $this;
        $new->LockReason = $LockReason;

        return $new;
    }

    /**
     * @return int
     */
    public function getCourseVersion()
    {
        return $this->CourseVersion;
    }

    /**
     * @param int $CourseVersion
     *
     * @return StudentRecord
     */
    public function withCourseVersion($CourseVersion)
    {
        $new = clone $this;
        $new->CourseVersion = $CourseVersion;

        return $new;
    }

    /**
     * @return string
     */
    public function getScormVersion()
    {
        return $this->ScormVersion;
    }

    /**
     * @param string $ScormVersion
     *
     * @return StudentRecord
     */
    public function withScormVersion($ScormVersion)
    {
        $new = clone $this;
        $new->ScormVersion = $ScormVersion;

        return $new;
    }

    /**
     * @return float
     */
    public function getCourseCredit()
    {
        return $this->CourseCredit;
    }

    /**
     * @param float $CourseCredit
     *
     * @return StudentRecord
     */
    public function withCourseCredit($CourseCredit)
    {
        $new = clone $this;
        $new->CourseCredit = $CourseCredit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreditOnlyOnPass()
    {
        return $this->CreditOnlyOnPass;
    }

    /**
     * @param bool $CreditOnlyOnPass
     *
     * @return StudentRecord
     */
    public function withCreditOnlyOnPass($CreditOnlyOnPass)
    {
        $new = clone $this;
        $new->CreditOnlyOnPass = $CreditOnlyOnPass;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanGrantCertificate()
    {
        return $this->CanGrantCertificate;
    }

    /**
     * @param bool $CanGrantCertificate
     *
     * @return StudentRecord
     */
    public function withCanGrantCertificate($CanGrantCertificate)
    {
        $new = clone $this;
        $new->CanGrantCertificate = $CanGrantCertificate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCertificateType()
    {
        return $this->CertificateType;
    }

    /**
     * @param string $CertificateType
     *
     * @return StudentRecord
     */
    public function withCertificateType($CertificateType)
    {
        $new = clone $this;
        $new->CertificateType = $CertificateType;

        return $new;
    }

    /**
     * @return int
     */
    public function getCertificateScore()
    {
        return $this->CertificateScore;
    }

    /**
     * @param int $CertificateScore
     *
     * @return StudentRecord
     */
    public function withCertificateScore($CertificateScore)
    {
        $new = clone $this;
        $new->CertificateScore = $CertificateScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotGrandCertificateUnlessCreditIssued()
    {
        return $this->DoNotGrandCertificateUnlessCreditIssued;
    }

    /**
     * @param bool $DoNotGrandCertificateUnlessCreditIssued
     *
     * @return StudentRecord
     */
    public function withDoNotGrandCertificateUnlessCreditIssued($DoNotGrandCertificateUnlessCreditIssued)
    {
        $new = clone $this;
        $new->DoNotGrandCertificateUnlessCreditIssued = $DoNotGrandCertificateUnlessCreditIssued;

        return $new;
    }

    /**
     * @return float
     */
    public function getCertificateMinTime()
    {
        return $this->CertificateMinTime;
    }

    /**
     * @param float $CertificateMinTime
     *
     * @return StudentRecord
     */
    public function withCertificateMinTime($CertificateMinTime)
    {
        $new = clone $this;
        $new->CertificateMinTime = $CertificateMinTime;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCertificateExpiring()
    {
        return $this->CertificateExpiring;
    }

    /**
     * @param \DateTimeInterface $CertificateExpiring
     *
     * @return StudentRecord
     */
    public function withCertificateExpiring($CertificateExpiring)
    {
        $new = clone $this;
        $new->CertificateExpiring = $CertificateExpiring;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGrantCertificate()
    {
        return $this->GrantCertificate;
    }

    /**
     * @param bool $GrantCertificate
     *
     * @return StudentRecord
     */
    public function withGrantCertificate($GrantCertificate)
    {
        $new = clone $this;
        $new->GrantCertificate = $GrantCertificate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasCertificate()
    {
        return $this->HasCertificate;
    }

    /**
     * @param bool $HasCertificate
     *
     * @return StudentRecord
     */
    public function withHasCertificate($HasCertificate)
    {
        $new = clone $this;
        $new->HasCertificate = $HasCertificate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGrantCredit()
    {
        return $this->GrantCredit;
    }

    /**
     * @param bool $GrantCredit
     *
     * @return StudentRecord
     */
    public function withGrantCredit($GrantCredit)
    {
        $new = clone $this;
        $new->GrantCredit = $GrantCredit;

        return $new;
    }

    /**
     * @return int
     */
    public function getAttempt()
    {
        return $this->Attempt;
    }

    /**
     * @param int $Attempt
     *
     * @return StudentRecord
     */
    public function withAttempt($Attempt)
    {
        $new = clone $this;
        $new->Attempt = $Attempt;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassID()
    {
        return $this->PassID;
    }

    /**
     * @param string $PassID
     *
     * @return StudentRecord
     */
    public function withPassID($PassID)
    {
        $new = clone $this;
        $new->PassID = $PassID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearningObjectIsActive()
    {
        return $this->LearningObjectIsActive;
    }

    /**
     * @param bool $LearningObjectIsActive
     *
     * @return StudentRecord
     */
    public function withLearningObjectIsActive($LearningObjectIsActive)
    {
        $new = clone $this;
        $new->LearningObjectIsActive = $LearningObjectIsActive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasForum()
    {
        return $this->HasForum;
    }

    /**
     * @param bool $HasForum
     *
     * @return StudentRecord
     */
    public function withHasForum($HasForum)
    {
        $new = clone $this;
        $new->HasForum = $HasForum;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasChat()
    {
        return $this->HasChat;
    }

    /**
     * @param bool $HasChat
     *
     * @return StudentRecord
     */
    public function withHasChat($HasChat)
    {
        $new = clone $this;
        $new->HasChat = $HasChat;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeachingAsstID()
    {
        return $this->TeachingAsstID;
    }

    /**
     * @param string $TeachingAsstID
     *
     * @return StudentRecord
     */
    public function withTeachingAsstID($TeachingAsstID)
    {
        $new = clone $this;
        $new->TeachingAsstID = $TeachingAsstID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     *
     * @return StudentRecord
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompletionStatus()
    {
        return $this->CompletionStatus;
    }

    /**
     * @param string $CompletionStatus
     *
     * @return StudentRecord
     */
    public function withCompletionStatus($CompletionStatus)
    {
        $new = clone $this;
        $new->CompletionStatus = $CompletionStatus;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresCompletedStatusForCompletion()
    {
        return $this->RequiresCompletedStatusForCompletion;
    }

    /**
     * @param bool $RequiresCompletedStatusForCompletion
     *
     * @return StudentRecord
     */
    public function withRequiresCompletedStatusForCompletion($RequiresCompletedStatusForCompletion)
    {
        $new = clone $this;
        $new->RequiresCompletedStatusForCompletion = $RequiresCompletedStatusForCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresFeedbackForCompletion()
    {
        return $this->RequiresFeedbackForCompletion;
    }

    /**
     * @param bool $RequiresFeedbackForCompletion
     *
     * @return StudentRecord
     */
    public function withRequiresFeedbackForCompletion($RequiresFeedbackForCompletion)
    {
        $new = clone $this;
        $new->RequiresFeedbackForCompletion = $RequiresFeedbackForCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequireFeedbackPopUp()
    {
        return $this->RequireFeedbackPopUp;
    }

    /**
     * @param bool $RequireFeedbackPopUp
     *
     * @return StudentRecord
     */
    public function withRequireFeedbackPopUp($RequireFeedbackPopUp)
    {
        $new = clone $this;
        $new->RequireFeedbackPopUp = $RequireFeedbackPopUp;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequireAssignmentForCompletion()
    {
        return $this->RequireAssignmentForCompletion;
    }

    /**
     * @param bool $RequireAssignmentForCompletion
     *
     * @return StudentRecord
     */
    public function withRequireAssignmentForCompletion($RequireAssignmentForCompletion)
    {
        $new = clone $this;
        $new->RequireAssignmentForCompletion = $RequireAssignmentForCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequireAssesmentForCompletion()
    {
        return $this->RequireAssesmentForCompletion;
    }

    /**
     * @param bool $RequireAssesmentForCompletion
     *
     * @return StudentRecord
     */
    public function withRequireAssesmentForCompletion($RequireAssesmentForCompletion)
    {
        $new = clone $this;
        $new->RequireAssesmentForCompletion = $RequireAssesmentForCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->IsCompleted;
    }

    /**
     * @param bool $IsCompleted
     *
     * @return StudentRecord
     */
    public function withIsCompleted($IsCompleted)
    {
        $new = clone $this;
        $new->IsCompleted = $IsCompleted;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProcessUnknown()
    {
        return $this->ProcessUnknown;
    }

    /**
     * @param bool $ProcessUnknown
     *
     * @return StudentRecord
     */
    public function withProcessUnknown($ProcessUnknown)
    {
        $new = clone $this;
        $new->ProcessUnknown = $ProcessUnknown;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideAPISuccess()
    {
        return $this->OverrideAPISuccess;
    }

    /**
     * @param bool $OverrideAPISuccess
     *
     * @return StudentRecord
     */
    public function withOverrideAPISuccess($OverrideAPISuccess)
    {
        $new = clone $this;
        $new->OverrideAPISuccess = $OverrideAPISuccess;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinPassingScore()
    {
        return $this->MinPassingScore;
    }

    /**
     * @param int $MinPassingScore
     *
     * @return StudentRecord
     */
    public function withMinPassingScore($MinPassingScore)
    {
        $new = clone $this;
        $new->MinPassingScore = $MinPassingScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBarAccess()
    {
        return $this->BarAccess;
    }

    /**
     * @param bool $BarAccess
     *
     * @return StudentRecord
     */
    public function withBarAccess($BarAccess)
    {
        $new = clone $this;
        $new->BarAccess = $BarAccess;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param string $Success
     *
     * @return StudentRecord
     */
    public function withSuccess($Success)
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getEntrySuccess()
    {
        return $this->EntrySuccess;
    }

    /**
     * @param string $EntrySuccess
     *
     * @return StudentRecord
     */
    public function withEntrySuccess($EntrySuccess)
    {
        $new = clone $this;
        $new->EntrySuccess = $EntrySuccess;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEnrolled()
    {
        return $this->DateEnrolled;
    }

    /**
     * @param \DateTimeInterface $DateEnrolled
     *
     * @return StudentRecord
     */
    public function withDateEnrolled($DateEnrolled)
    {
        $new = clone $this;
        $new->DateEnrolled = $DateEnrolled;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnrollmentNotes()
    {
        return $this->EnrollmentNotes;
    }

    /**
     * @param string $EnrollmentNotes
     *
     * @return StudentRecord
     */
    public function withEnrollmentNotes($EnrollmentNotes)
    {
        $new = clone $this;
        $new->EnrollmentNotes = $EnrollmentNotes;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateStarted()
    {
        return $this->DateStarted;
    }

    /**
     * @param \DateTimeInterface $DateStarted
     *
     * @return StudentRecord
     */
    public function withDateStarted($DateStarted)
    {
        $new = clone $this;
        $new->DateStarted = $DateStarted;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param \DateTimeInterface $DueDate
     *
     * @return StudentRecord
     */
    public function withDueDate($DueDate)
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCompletedDate()
    {
        return $this->CompletedDate;
    }

    /**
     * @param \DateTimeInterface $CompletedDate
     *
     * @return StudentRecord
     */
    public function withCompletedDate($CompletedDate)
    {
        $new = clone $this;
        $new->CompletedDate = $CompletedDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOverallCompletedDate()
    {
        return $this->OverallCompletedDate;
    }

    /**
     * @param \DateTimeInterface $OverallCompletedDate
     *
     * @return StudentRecord
     */
    public function withOverallCompletedDate($OverallCompletedDate)
    {
        $new = clone $this;
        $new->OverallCompletedDate = $OverallCompletedDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastDateAttempted()
    {
        return $this->LastDateAttempted;
    }

    /**
     * @param \DateTimeInterface $LastDateAttempted
     *
     * @return StudentRecord
     */
    public function withLastDateAttempted($LastDateAttempted)
    {
        $new = clone $this;
        $new->LastDateAttempted = $LastDateAttempted;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalCourseAttempts()
    {
        return $this->TotalCourseAttempts;
    }

    /**
     * @param int $TotalCourseAttempts
     *
     * @return StudentRecord
     */
    public function withTotalCourseAttempts($TotalCourseAttempts)
    {
        $new = clone $this;
        $new->TotalCourseAttempts = $TotalCourseAttempts;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRecordStartDate()
    {
        return $this->RecordStartDate;
    }

    /**
     * @param \DateTimeInterface $RecordStartDate
     *
     * @return StudentRecord
     */
    public function withRecordStartDate($RecordStartDate)
    {
        $new = clone $this;
        $new->RecordStartDate = $RecordStartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCourseStartDate()
    {
        return $this->CourseStartDate;
    }

    /**
     * @param \DateTimeInterface $CourseStartDate
     *
     * @return StudentRecord
     */
    public function withCourseStartDate($CourseStartDate)
    {
        $new = clone $this;
        $new->CourseStartDate = $CourseStartDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCourseImmediateStart()
    {
        return $this->CourseImmediateStart;
    }

    /**
     * @param bool $CourseImmediateStart
     *
     * @return StudentRecord
     */
    public function withCourseImmediateStart($CourseImmediateStart)
    {
        $new = clone $this;
        $new->CourseImmediateStart = $CourseImmediateStart;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastModule()
    {
        return $this->LastModule;
    }

    /**
     * @param string $LastModule
     *
     * @return StudentRecord
     */
    public function withLastModule($LastModule)
    {
        $new = clone $this;
        $new->LastModule = $LastModule;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastModuleName()
    {
        return $this->LastModuleName;
    }

    /**
     * @param string $LastModuleName
     *
     * @return StudentRecord
     */
    public function withLastModuleName($LastModuleName)
    {
        $new = clone $this;
        $new->LastModuleName = $LastModuleName;

        return $new;
    }

    /**
     * @return string
     */
    public function getProctorComment()
    {
        return $this->ProctorComment;
    }

    /**
     * @param string $ProctorComment
     *
     * @return StudentRecord
     */
    public function withProctorComment($ProctorComment)
    {
        $new = clone $this;
        $new->ProctorComment = $ProctorComment;

        return $new;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->Score;
    }

    /**
     * @param int $Score
     *
     * @return StudentRecord
     */
    public function withScore($Score)
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    /**
     * @return int
     */
    public function getEntryScore()
    {
        return $this->EntryScore;
    }

    /**
     * @param int $EntryScore
     *
     * @return StudentRecord
     */
    public function withEntryScore($EntryScore)
    {
        $new = clone $this;
        $new->EntryScore = $EntryScore;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalAverageScore()
    {
        return $this->TotalAverageScore;
    }

    /**
     * @param float $TotalAverageScore
     *
     * @return StudentRecord
     */
    public function withTotalAverageScore($TotalAverageScore)
    {
        $new = clone $this;
        $new->TotalAverageScore = $TotalAverageScore;

        return $new;
    }

    /**
     * @return float
     */
    public function getPartialScore()
    {
        return $this->PartialScore;
    }

    /**
     * @param float $PartialScore
     *
     * @return StudentRecord
     */
    public function withPartialScore($PartialScore)
    {
        $new = clone $this;
        $new->PartialScore = $PartialScore;

        return $new;
    }

    /**
     * @return float
     */
    public function getPercentCompleted()
    {
        return $this->PercentCompleted;
    }

    /**
     * @param float $PercentCompleted
     *
     * @return StudentRecord
     */
    public function withPercentCompleted($PercentCompleted)
    {
        $new = clone $this;
        $new->PercentCompleted = $PercentCompleted;

        return $new;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }

    /**
     * @param int $Timeout
     *
     * @return StudentRecord
     */
    public function withTimeout($Timeout)
    {
        $new = clone $this;
        $new->Timeout = $Timeout;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCourseDisclaimerAgreed()
    {
        return $this->CourseDisclaimerAgreed;
    }

    /**
     * @param bool $CourseDisclaimerAgreed
     *
     * @return StudentRecord
     */
    public function withCourseDisclaimerAgreed($CourseDisclaimerAgreed)
    {
        $new = clone $this;
        $new->CourseDisclaimerAgreed = $CourseDisclaimerAgreed;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDisclaimerAgreedDate()
    {
        return $this->DisclaimerAgreedDate;
    }

    /**
     * @param \DateTimeInterface $DisclaimerAgreedDate
     *
     * @return StudentRecord
     */
    public function withDisclaimerAgreedDate($DisclaimerAgreedDate)
    {
        $new = clone $this;
        $new->DisclaimerAgreedDate = $DisclaimerAgreedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getSummaryXml()
    {
        return $this->SummaryXml;
    }

    /**
     * @param string $SummaryXml
     *
     * @return StudentRecord
     */
    public function withSummaryXml($SummaryXml)
    {
        $new = clone $this;
        $new->SummaryXml = $SummaryXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getSummaryDuration()
    {
        return $this->SummaryDuration;
    }

    /**
     * @param string $SummaryDuration
     *
     * @return StudentRecord
     */
    public function withSummaryDuration($SummaryDuration)
    {
        $new = clone $this;
        $new->SummaryDuration = $SummaryDuration;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnter()
    {
        return $this->Enter;
    }

    /**
     * @param bool $Enter
     *
     * @return StudentRecord
     */
    public function withEnter($Enter)
    {
        $new = clone $this;
        $new->Enter = $Enter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExit()
    {
        return $this->Exit;
    }

    /**
     * @param bool $Exit
     *
     * @return StudentRecord
     */
    public function withExit($Exit)
    {
        $new = clone $this;
        $new->Exit = $Exit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFeedback()
    {
        return $this->Feedback;
    }

    /**
     * @param bool $Feedback
     *
     * @return StudentRecord
     */
    public function withFeedback($Feedback)
    {
        $new = clone $this;
        $new->Feedback = $Feedback;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoursePackageURL()
    {
        return $this->CoursePackageURL;
    }

    /**
     * @param string $CoursePackageURL
     *
     * @return StudentRecord
     */
    public function withCoursePackageURL($CoursePackageURL)
    {
        $new = clone $this;
        $new->CoursePackageURL = $CoursePackageURL;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseMarqueeURL()
    {
        return $this->CourseMarqueeURL;
    }

    /**
     * @param string $CourseMarqueeURL
     *
     * @return StudentRecord
     */
    public function withCourseMarqueeURL($CourseMarqueeURL)
    {
        $new = clone $this;
        $new->CourseMarqueeURL = $CourseMarqueeURL;

        return $new;
    }

    /**
     * @return string
     */
    public function getCertificateXml()
    {
        return $this->CertificateXml;
    }

    /**
     * @param string $CertificateXml
     *
     * @return StudentRecord
     */
    public function withCertificateXml($CertificateXml)
    {
        $new = clone $this;
        $new->CertificateXml = $CertificateXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationSettingXml()
    {
        return $this->NotificationSettingXml;
    }

    /**
     * @param string $NotificationSettingXml
     *
     * @return StudentRecord
     */
    public function withNotificationSettingXml($NotificationSettingXml)
    {
        $new = clone $this;
        $new->NotificationSettingXml = $NotificationSettingXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     *
     * @return StudentRecord
     */
    public function withNotes($Notes)
    {
        $new = clone $this;
        $new->Notes = $Notes;

        return $new;
    }

    /**
     * @return string
     */
    public function getManualUpdateNotes()
    {
        return $this->ManualUpdateNotes;
    }

    /**
     * @param string $ManualUpdateNotes
     *
     * @return StudentRecord
     */
    public function withManualUpdateNotes($ManualUpdateNotes)
    {
        $new = clone $this;
        $new->ManualUpdateNotes = $ManualUpdateNotes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualCompleted()
    {
        return $this->ManualCompleted;
    }

    /**
     * @param bool $ManualCompleted
     *
     * @return StudentRecord
     */
    public function withManualCompleted($ManualCompleted)
    {
        $new = clone $this;
        $new->ManualCompleted = $ManualCompleted;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAuditTimestamp()
    {
        return $this->AuditTimestamp;
    }

    /**
     * @param \DateTimeInterface $AuditTimestamp
     *
     * @return StudentRecord
     */
    public function withAuditTimestamp($AuditTimestamp)
    {
        $new = clone $this;
        $new->AuditTimestamp = $AuditTimestamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }

    /**
     * @param string $ApprovalCode
     *
     * @return StudentRecord
     */
    public function withApprovalCode($ApprovalCode)
    {
        $new = clone $this;
        $new->ApprovalCode = $ApprovalCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedTimestamp()
    {
        return $this->LastModifiedTimestamp;
    }

    /**
     * @param \DateTimeInterface $LastModifiedTimestamp
     *
     * @return StudentRecord
     */
    public function withLastModifiedTimestamp($LastModifiedTimestamp)
    {
        $new = clone $this;
        $new->LastModifiedTimestamp = $LastModifiedTimestamp;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateInProgress()
    {
        return $this->UpdateInProgress;
    }

    /**
     * @param bool $UpdateInProgress
     *
     * @return StudentRecord
     */
    public function withUpdateInProgress($UpdateInProgress)
    {
        $new = clone $this;
        $new->UpdateInProgress = $UpdateInProgress;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdateInProgressTimestamp()
    {
        return $this->UpdateInProgressTimestamp;
    }

    /**
     * @param \DateTimeInterface $UpdateInProgressTimestamp
     *
     * @return StudentRecord
     */
    public function withUpdateInProgressTimestamp($UpdateInProgressTimestamp)
    {
        $new = clone $this;
        $new->UpdateInProgressTimestamp = $UpdateInProgressTimestamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortfolioEvidenceText()
    {
        return $this->PortfolioEvidenceText;
    }

    /**
     * @param string $PortfolioEvidenceText
     *
     * @return StudentRecord
     */
    public function withPortfolioEvidenceText($PortfolioEvidenceText)
    {
        $new = clone $this;
        $new->PortfolioEvidenceText = $PortfolioEvidenceText;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreditStatementAvailable()
    {
        return $this->CreditStatementAvailable;
    }

    /**
     * @param bool $CreditStatementAvailable
     *
     * @return StudentRecord
     */
    public function withCreditStatementAvailable($CreditStatementAvailable)
    {
        $new = clone $this;
        $new->CreditStatementAvailable = $CreditStatementAvailable;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenBadgeID()
    {
        return $this->OpenBadgeID;
    }

    /**
     * @param string $OpenBadgeID
     *
     * @return StudentRecord
     */
    public function withOpenBadgeID($OpenBadgeID)
    {
        $new = clone $this;
        $new->OpenBadgeID = $OpenBadgeID;

        return $new;
    }
}
