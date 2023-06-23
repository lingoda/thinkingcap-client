<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Course
{
    /**
     * @var string
     */
    private $Type;

    /**
     * @var bool
     */
    private $IsOnline;

    /**
     * @var string
     */
    private $Keywords;

    /**
     * @var float
     */
    private $CreditValue;

    /**
     * @var int
     */
    private $CertificateScore;

    /**
     * @var float
     */
    private $CertificateMinTime;

    /**
     * @var string
     */
    private $CertificateType;

    /**
     * @var bool
     */
    private $CanPrintCertificate;

    /**
     * @var bool
     */
    private $LimitReenroll;

    /**
     * @var int
     */
    private $MaxReenrollment;

    /**
     * @var int
     */
    private $ExpireUnit;

    /**
     * @var string
     */
    private $ExpireInterval;

    /**
     * @var int
     */
    private $NotifyUnit;

    /**
     * @var string
     */
    private $NotifyInterval;

    /**
     * @var bool
     */
    private $ProctorSignIn;

    /**
     * @var string
     */
    private $ShowModule;

    /**
     * @var string
     */
    private $ShowMenu;

    /**
     * @var string
     */
    private $LastProgramID;

    /**
     * @var string
     */
    private $ProgramPath;

    /**
     * @var string
     */
    private $ModeratorID;

    /**
     * @var string
     */
    private $ModeratorName;

    /**
     * @var string
     */
    private $ModeratorUserName;

    /**
     * @var string
     */
    private $AutoEnrollFields;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $TeachingAssts;

    /**
     * @var string
     */
    private $TeachingAssistantList;

    /**
     * @var bool
     */
    private $HasAssignments;

    /**
     * @var bool
     */
    private $AllowReviewAfterAttemptEnd;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAssignment
     */
    private $Assignments;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseAssignment
     */
    private $CourseAssignments;

    /**
     * @var bool
     */
    private $MasterGlossary;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $Sessions;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $PendingApprovalSessions;

    /**
     * @var int
     */
    private $TotalEnrolled;

    /**
     * @var int
     */
    private $TotalCompleted;

    /**
     * @var int
     */
    private $TotalActive;

    /**
     * @var int
     */
    private $TeachingAsstActive;

    /**
     * @var bool
     */
    private $StudentPrerequisites;

    /**
     * @var int
     */
    private $AssignmentCount;

    /**
     * @var bool
     */
    private $ProxyAzure;

    /**
     * @var bool
     */
    private $ProxyImages;

    /**
     * @var bool
     */
    private $RunDirect;

    /**
     * @var bool
     */
    private $RunDirectAlways;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseStylesheet
     */
    private $Stylesheets;

    /**
     * @var bool
     */
    private $Published;

    /**
     * @var bool
     */
    private $AllowCollaboration;

    /**
     * @var bool
     */
    private $EndCollaborationOnCompletion;

    /**
     * @var string
     */
    private $CollaborationTitle;

    /**
     * @var string
     */
    private $CollaborationDescription;

    /**
     * @var string
     */
    private $CollaborationCustomFields;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseVersion
     */
    private $Versions;

    /**
     * @var bool
     */
    private $HasChat;

    /**
     * @var bool
     */
    private $ForceUserFeedback;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackSection
     */
    private $Feedback;

    /**
     * @var bool
     */
    private $IsAssessment;

    /**
     * @var bool
     */
    private $HasSample;

    /**
     * @var bool
     */
    private $UseOwnerSettingsForShared;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseNotification
     */
    private $CourseNotifications;

    /**
     * @var int
     */
    private $ClassSize;

    /**
     * @var bool
     */
    private $ManualEnrollOverClassSize;

    /**
     * @var int
     */
    private $WaitlistCutoffUnit;

    /**
     * @var string
     */
    private $WailtistCutoffInterval;

    /**
     * @var bool
     */
    private $AllowWaitlist;

    /**
     * @var int
     */
    private $WaitlistMaxNo;

    /**
     * @var int
     */
    private $MinOptionalSessions;

    /**
     * @var bool
     */
    private $RecordAttendance;

    /**
     * @var string
     */
    private $RecordAttendanceMode;

    /**
     * @var bool
     */
    private $ShowSignInRelatedContent;

    /**
     * @var bool
     */
    private $ShowSignInLearners;

    /**
     * @var bool
     */
    private $SignInWithBadge;

    /**
     * @var bool
     */
    private $CompleteSessionWhenJoinByLearner;

    /**
     * @var bool
     */
    private $RecordScore;

    /**
     * @var bool
     */
    private $RecordComments;

    /**
     * @var bool
     */
    private $RequiresChallenge;

    /**
     * @var int
     */
    private $ChallengeMaxAttempt;

    /**
     * @var bool
     */
    private $LockChallengeFailed;

    /**
     * @var int
     */
    private $ChallengeFrequency;

    /**
     * @var bool
     */
    private $AddTimeInReadOnly;

    /**
     * @var int
     */
    private $Timeout;

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
     * @return Course
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

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
     * @return Course
     */
    public function withIsOnline($IsOnline)
    {
        $new = clone $this;
        $new->IsOnline = $IsOnline;

        return $new;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * @param string $Keywords
     *
     * @return Course
     */
    public function withKeywords($Keywords)
    {
        $new = clone $this;
        $new->Keywords = $Keywords;

        return $new;
    }

    /**
     * @return float
     */
    public function getCreditValue()
    {
        return $this->CreditValue;
    }

    /**
     * @param float $CreditValue
     *
     * @return Course
     */
    public function withCreditValue($CreditValue)
    {
        $new = clone $this;
        $new->CreditValue = $CreditValue;

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
     * @return Course
     */
    public function withCertificateScore($CertificateScore)
    {
        $new = clone $this;
        $new->CertificateScore = $CertificateScore;

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
     * @return Course
     */
    public function withCertificateMinTime($CertificateMinTime)
    {
        $new = clone $this;
        $new->CertificateMinTime = $CertificateMinTime;

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
     * @return Course
     */
    public function withCertificateType($CertificateType)
    {
        $new = clone $this;
        $new->CertificateType = $CertificateType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintCertificate()
    {
        return $this->CanPrintCertificate;
    }

    /**
     * @param bool $CanPrintCertificate
     *
     * @return Course
     */
    public function withCanPrintCertificate($CanPrintCertificate)
    {
        $new = clone $this;
        $new->CanPrintCertificate = $CanPrintCertificate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLimitReenroll()
    {
        return $this->LimitReenroll;
    }

    /**
     * @param bool $LimitReenroll
     *
     * @return Course
     */
    public function withLimitReenroll($LimitReenroll)
    {
        $new = clone $this;
        $new->LimitReenroll = $LimitReenroll;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxReenrollment()
    {
        return $this->MaxReenrollment;
    }

    /**
     * @param int $MaxReenrollment
     *
     * @return Course
     */
    public function withMaxReenrollment($MaxReenrollment)
    {
        $new = clone $this;
        $new->MaxReenrollment = $MaxReenrollment;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpireUnit()
    {
        return $this->ExpireUnit;
    }

    /**
     * @param int $ExpireUnit
     *
     * @return Course
     */
    public function withExpireUnit($ExpireUnit)
    {
        $new = clone $this;
        $new->ExpireUnit = $ExpireUnit;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpireInterval()
    {
        return $this->ExpireInterval;
    }

    /**
     * @param string $ExpireInterval
     *
     * @return Course
     */
    public function withExpireInterval($ExpireInterval)
    {
        $new = clone $this;
        $new->ExpireInterval = $ExpireInterval;

        return $new;
    }

    /**
     * @return int
     */
    public function getNotifyUnit()
    {
        return $this->NotifyUnit;
    }

    /**
     * @param int $NotifyUnit
     *
     * @return Course
     */
    public function withNotifyUnit($NotifyUnit)
    {
        $new = clone $this;
        $new->NotifyUnit = $NotifyUnit;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotifyInterval()
    {
        return $this->NotifyInterval;
    }

    /**
     * @param string $NotifyInterval
     *
     * @return Course
     */
    public function withNotifyInterval($NotifyInterval)
    {
        $new = clone $this;
        $new->NotifyInterval = $NotifyInterval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProctorSignIn()
    {
        return $this->ProctorSignIn;
    }

    /**
     * @param bool $ProctorSignIn
     *
     * @return Course
     */
    public function withProctorSignIn($ProctorSignIn)
    {
        $new = clone $this;
        $new->ProctorSignIn = $ProctorSignIn;

        return $new;
    }

    /**
     * @return string
     */
    public function getShowModule()
    {
        return $this->ShowModule;
    }

    /**
     * @param string $ShowModule
     *
     * @return Course
     */
    public function withShowModule($ShowModule)
    {
        $new = clone $this;
        $new->ShowModule = $ShowModule;

        return $new;
    }

    /**
     * @return string
     */
    public function getShowMenu()
    {
        return $this->ShowMenu;
    }

    /**
     * @param string $ShowMenu
     *
     * @return Course
     */
    public function withShowMenu($ShowMenu)
    {
        $new = clone $this;
        $new->ShowMenu = $ShowMenu;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastProgramID()
    {
        return $this->LastProgramID;
    }

    /**
     * @param string $LastProgramID
     *
     * @return Course
     */
    public function withLastProgramID($LastProgramID)
    {
        $new = clone $this;
        $new->LastProgramID = $LastProgramID;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgramPath()
    {
        return $this->ProgramPath;
    }

    /**
     * @param string $ProgramPath
     *
     * @return Course
     */
    public function withProgramPath($ProgramPath)
    {
        $new = clone $this;
        $new->ProgramPath = $ProgramPath;

        return $new;
    }

    /**
     * @return string
     */
    public function getModeratorID()
    {
        return $this->ModeratorID;
    }

    /**
     * @param string $ModeratorID
     *
     * @return Course
     */
    public function withModeratorID($ModeratorID)
    {
        $new = clone $this;
        $new->ModeratorID = $ModeratorID;

        return $new;
    }

    /**
     * @return string
     */
    public function getModeratorName()
    {
        return $this->ModeratorName;
    }

    /**
     * @param string $ModeratorName
     *
     * @return Course
     */
    public function withModeratorName($ModeratorName)
    {
        $new = clone $this;
        $new->ModeratorName = $ModeratorName;

        return $new;
    }

    /**
     * @return string
     */
    public function getModeratorUserName()
    {
        return $this->ModeratorUserName;
    }

    /**
     * @param string $ModeratorUserName
     *
     * @return Course
     */
    public function withModeratorUserName($ModeratorUserName)
    {
        $new = clone $this;
        $new->ModeratorUserName = $ModeratorUserName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoEnrollFields()
    {
        return $this->AutoEnrollFields;
    }

    /**
     * @param string $AutoEnrollFields
     *
     * @return Course
     */
    public function withAutoEnrollFields($AutoEnrollFields)
    {
        $new = clone $this;
        $new->AutoEnrollFields = $AutoEnrollFields;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getTeachingAssts()
    {
        return $this->TeachingAssts;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $TeachingAssts
     *
     * @return Course
     */
    public function withTeachingAssts($TeachingAssts)
    {
        $new = clone $this;
        $new->TeachingAssts = $TeachingAssts;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeachingAssistantList()
    {
        return $this->TeachingAssistantList;
    }

    /**
     * @param string $TeachingAssistantList
     *
     * @return Course
     */
    public function withTeachingAssistantList($TeachingAssistantList)
    {
        $new = clone $this;
        $new->TeachingAssistantList = $TeachingAssistantList;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAssignments()
    {
        return $this->HasAssignments;
    }

    /**
     * @param bool $HasAssignments
     *
     * @return Course
     */
    public function withHasAssignments($HasAssignments)
    {
        $new = clone $this;
        $new->HasAssignments = $HasAssignments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowReviewAfterAttemptEnd()
    {
        return $this->AllowReviewAfterAttemptEnd;
    }

    /**
     * @param bool $AllowReviewAfterAttemptEnd
     *
     * @return Course
     */
    public function withAllowReviewAfterAttemptEnd($AllowReviewAfterAttemptEnd)
    {
        $new = clone $this;
        $new->AllowReviewAfterAttemptEnd = $AllowReviewAfterAttemptEnd;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAssignment
     */
    public function getAssignments()
    {
        return $this->Assignments;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAssignment $Assignments
     *
     * @return Course
     */
    public function withAssignments($Assignments)
    {
        $new = clone $this;
        $new->Assignments = $Assignments;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseAssignment
     */
    public function getCourseAssignments()
    {
        return $this->CourseAssignments;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseAssignment $CourseAssignments
     *
     * @return Course
     */
    public function withCourseAssignments($CourseAssignments)
    {
        $new = clone $this;
        $new->CourseAssignments = $CourseAssignments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMasterGlossary()
    {
        return $this->MasterGlossary;
    }

    /**
     * @param bool $MasterGlossary
     *
     * @return Course
     */
    public function withMasterGlossary($MasterGlossary)
    {
        $new = clone $this;
        $new->MasterGlossary = $MasterGlossary;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSessions()
    {
        return $this->Sessions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $Sessions
     *
     * @return Course
     */
    public function withSessions($Sessions)
    {
        $new = clone $this;
        $new->Sessions = $Sessions;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getPendingApprovalSessions()
    {
        return $this->PendingApprovalSessions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $PendingApprovalSessions
     *
     * @return Course
     */
    public function withPendingApprovalSessions($PendingApprovalSessions)
    {
        $new = clone $this;
        $new->PendingApprovalSessions = $PendingApprovalSessions;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalEnrolled()
    {
        return $this->TotalEnrolled;
    }

    /**
     * @param int $TotalEnrolled
     *
     * @return Course
     */
    public function withTotalEnrolled($TotalEnrolled)
    {
        $new = clone $this;
        $new->TotalEnrolled = $TotalEnrolled;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalCompleted()
    {
        return $this->TotalCompleted;
    }

    /**
     * @param int $TotalCompleted
     *
     * @return Course
     */
    public function withTotalCompleted($TotalCompleted)
    {
        $new = clone $this;
        $new->TotalCompleted = $TotalCompleted;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalActive()
    {
        return $this->TotalActive;
    }

    /**
     * @param int $TotalActive
     *
     * @return Course
     */
    public function withTotalActive($TotalActive)
    {
        $new = clone $this;
        $new->TotalActive = $TotalActive;

        return $new;
    }

    /**
     * @return int
     */
    public function getTeachingAsstActive()
    {
        return $this->TeachingAsstActive;
    }

    /**
     * @param int $TeachingAsstActive
     *
     * @return Course
     */
    public function withTeachingAsstActive($TeachingAsstActive)
    {
        $new = clone $this;
        $new->TeachingAsstActive = $TeachingAsstActive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStudentPrerequisites()
    {
        return $this->StudentPrerequisites;
    }

    /**
     * @param bool $StudentPrerequisites
     *
     * @return Course
     */
    public function withStudentPrerequisites($StudentPrerequisites)
    {
        $new = clone $this;
        $new->StudentPrerequisites = $StudentPrerequisites;

        return $new;
    }

    /**
     * @return int
     */
    public function getAssignmentCount()
    {
        return $this->AssignmentCount;
    }

    /**
     * @param int $AssignmentCount
     *
     * @return Course
     */
    public function withAssignmentCount($AssignmentCount)
    {
        $new = clone $this;
        $new->AssignmentCount = $AssignmentCount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProxyAzure()
    {
        return $this->ProxyAzure;
    }

    /**
     * @param bool $ProxyAzure
     *
     * @return Course
     */
    public function withProxyAzure($ProxyAzure)
    {
        $new = clone $this;
        $new->ProxyAzure = $ProxyAzure;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProxyImages()
    {
        return $this->ProxyImages;
    }

    /**
     * @param bool $ProxyImages
     *
     * @return Course
     */
    public function withProxyImages($ProxyImages)
    {
        $new = clone $this;
        $new->ProxyImages = $ProxyImages;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRunDirect()
    {
        return $this->RunDirect;
    }

    /**
     * @param bool $RunDirect
     *
     * @return Course
     */
    public function withRunDirect($RunDirect)
    {
        $new = clone $this;
        $new->RunDirect = $RunDirect;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRunDirectAlways()
    {
        return $this->RunDirectAlways;
    }

    /**
     * @param bool $RunDirectAlways
     *
     * @return Course
     */
    public function withRunDirectAlways($RunDirectAlways)
    {
        $new = clone $this;
        $new->RunDirectAlways = $RunDirectAlways;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseStylesheet
     */
    public function getStylesheets()
    {
        return $this->Stylesheets;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseStylesheet $Stylesheets
     *
     * @return Course
     */
    public function withStylesheets($Stylesheets)
    {
        $new = clone $this;
        $new->Stylesheets = $Stylesheets;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPublished()
    {
        return $this->Published;
    }

    /**
     * @param bool $Published
     *
     * @return Course
     */
    public function withPublished($Published)
    {
        $new = clone $this;
        $new->Published = $Published;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowCollaboration()
    {
        return $this->AllowCollaboration;
    }

    /**
     * @param bool $AllowCollaboration
     *
     * @return Course
     */
    public function withAllowCollaboration($AllowCollaboration)
    {
        $new = clone $this;
        $new->AllowCollaboration = $AllowCollaboration;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEndCollaborationOnCompletion()
    {
        return $this->EndCollaborationOnCompletion;
    }

    /**
     * @param bool $EndCollaborationOnCompletion
     *
     * @return Course
     */
    public function withEndCollaborationOnCompletion($EndCollaborationOnCompletion)
    {
        $new = clone $this;
        $new->EndCollaborationOnCompletion = $EndCollaborationOnCompletion;

        return $new;
    }

    /**
     * @return string
     */
    public function getCollaborationTitle()
    {
        return $this->CollaborationTitle;
    }

    /**
     * @param string $CollaborationTitle
     *
     * @return Course
     */
    public function withCollaborationTitle($CollaborationTitle)
    {
        $new = clone $this;
        $new->CollaborationTitle = $CollaborationTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getCollaborationDescription()
    {
        return $this->CollaborationDescription;
    }

    /**
     * @param string $CollaborationDescription
     *
     * @return Course
     */
    public function withCollaborationDescription($CollaborationDescription)
    {
        $new = clone $this;
        $new->CollaborationDescription = $CollaborationDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getCollaborationCustomFields()
    {
        return $this->CollaborationCustomFields;
    }

    /**
     * @param string $CollaborationCustomFields
     *
     * @return Course
     */
    public function withCollaborationCustomFields($CollaborationCustomFields)
    {
        $new = clone $this;
        $new->CollaborationCustomFields = $CollaborationCustomFields;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseVersion
     */
    public function getVersions()
    {
        return $this->Versions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseVersion $Versions
     *
     * @return Course
     */
    public function withVersions($Versions)
    {
        $new = clone $this;
        $new->Versions = $Versions;

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
     * @return Course
     */
    public function withHasChat($HasChat)
    {
        $new = clone $this;
        $new->HasChat = $HasChat;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForceUserFeedback()
    {
        return $this->ForceUserFeedback;
    }

    /**
     * @param bool $ForceUserFeedback
     *
     * @return Course
     */
    public function withForceUserFeedback($ForceUserFeedback)
    {
        $new = clone $this;
        $new->ForceUserFeedback = $ForceUserFeedback;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackSection
     */
    public function getFeedback()
    {
        return $this->Feedback;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackSection $Feedback
     *
     * @return Course
     */
    public function withFeedback($Feedback)
    {
        $new = clone $this;
        $new->Feedback = $Feedback;

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
     * @return Course
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
    public function getHasSample()
    {
        return $this->HasSample;
    }

    /**
     * @param bool $HasSample
     *
     * @return Course
     */
    public function withHasSample($HasSample)
    {
        $new = clone $this;
        $new->HasSample = $HasSample;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseOwnerSettingsForShared()
    {
        return $this->UseOwnerSettingsForShared;
    }

    /**
     * @param bool $UseOwnerSettingsForShared
     *
     * @return Course
     */
    public function withUseOwnerSettingsForShared($UseOwnerSettingsForShared)
    {
        $new = clone $this;
        $new->UseOwnerSettingsForShared = $UseOwnerSettingsForShared;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseNotification
     */
    public function getCourseNotifications()
    {
        return $this->CourseNotifications;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourseNotification $CourseNotifications
     *
     * @return Course
     */
    public function withCourseNotifications($CourseNotifications)
    {
        $new = clone $this;
        $new->CourseNotifications = $CourseNotifications;

        return $new;
    }

    /**
     * @return int
     */
    public function getClassSize()
    {
        return $this->ClassSize;
    }

    /**
     * @param int $ClassSize
     *
     * @return Course
     */
    public function withClassSize($ClassSize)
    {
        $new = clone $this;
        $new->ClassSize = $ClassSize;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnrollOverClassSize()
    {
        return $this->ManualEnrollOverClassSize;
    }

    /**
     * @param bool $ManualEnrollOverClassSize
     *
     * @return Course
     */
    public function withManualEnrollOverClassSize($ManualEnrollOverClassSize)
    {
        $new = clone $this;
        $new->ManualEnrollOverClassSize = $ManualEnrollOverClassSize;

        return $new;
    }

    /**
     * @return int
     */
    public function getWaitlistCutoffUnit()
    {
        return $this->WaitlistCutoffUnit;
    }

    /**
     * @param int $WaitlistCutoffUnit
     *
     * @return Course
     */
    public function withWaitlistCutoffUnit($WaitlistCutoffUnit)
    {
        $new = clone $this;
        $new->WaitlistCutoffUnit = $WaitlistCutoffUnit;

        return $new;
    }

    /**
     * @return string
     */
    public function getWailtistCutoffInterval()
    {
        return $this->WailtistCutoffInterval;
    }

    /**
     * @param string $WailtistCutoffInterval
     *
     * @return Course
     */
    public function withWailtistCutoffInterval($WailtistCutoffInterval)
    {
        $new = clone $this;
        $new->WailtistCutoffInterval = $WailtistCutoffInterval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowWaitlist()
    {
        return $this->AllowWaitlist;
    }

    /**
     * @param bool $AllowWaitlist
     *
     * @return Course
     */
    public function withAllowWaitlist($AllowWaitlist)
    {
        $new = clone $this;
        $new->AllowWaitlist = $AllowWaitlist;

        return $new;
    }

    /**
     * @return int
     */
    public function getWaitlistMaxNo()
    {
        return $this->WaitlistMaxNo;
    }

    /**
     * @param int $WaitlistMaxNo
     *
     * @return Course
     */
    public function withWaitlistMaxNo($WaitlistMaxNo)
    {
        $new = clone $this;
        $new->WaitlistMaxNo = $WaitlistMaxNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinOptionalSessions()
    {
        return $this->MinOptionalSessions;
    }

    /**
     * @param int $MinOptionalSessions
     *
     * @return Course
     */
    public function withMinOptionalSessions($MinOptionalSessions)
    {
        $new = clone $this;
        $new->MinOptionalSessions = $MinOptionalSessions;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRecordAttendance()
    {
        return $this->RecordAttendance;
    }

    /**
     * @param bool $RecordAttendance
     *
     * @return Course
     */
    public function withRecordAttendance($RecordAttendance)
    {
        $new = clone $this;
        $new->RecordAttendance = $RecordAttendance;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecordAttendanceMode()
    {
        return $this->RecordAttendanceMode;
    }

    /**
     * @param string $RecordAttendanceMode
     *
     * @return Course
     */
    public function withRecordAttendanceMode($RecordAttendanceMode)
    {
        $new = clone $this;
        $new->RecordAttendanceMode = $RecordAttendanceMode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSignInRelatedContent()
    {
        return $this->ShowSignInRelatedContent;
    }

    /**
     * @param bool $ShowSignInRelatedContent
     *
     * @return Course
     */
    public function withShowSignInRelatedContent($ShowSignInRelatedContent)
    {
        $new = clone $this;
        $new->ShowSignInRelatedContent = $ShowSignInRelatedContent;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSignInLearners()
    {
        return $this->ShowSignInLearners;
    }

    /**
     * @param bool $ShowSignInLearners
     *
     * @return Course
     */
    public function withShowSignInLearners($ShowSignInLearners)
    {
        $new = clone $this;
        $new->ShowSignInLearners = $ShowSignInLearners;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSignInWithBadge()
    {
        return $this->SignInWithBadge;
    }

    /**
     * @param bool $SignInWithBadge
     *
     * @return Course
     */
    public function withSignInWithBadge($SignInWithBadge)
    {
        $new = clone $this;
        $new->SignInWithBadge = $SignInWithBadge;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompleteSessionWhenJoinByLearner()
    {
        return $this->CompleteSessionWhenJoinByLearner;
    }

    /**
     * @param bool $CompleteSessionWhenJoinByLearner
     *
     * @return Course
     */
    public function withCompleteSessionWhenJoinByLearner($CompleteSessionWhenJoinByLearner)
    {
        $new = clone $this;
        $new->CompleteSessionWhenJoinByLearner = $CompleteSessionWhenJoinByLearner;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRecordScore()
    {
        return $this->RecordScore;
    }

    /**
     * @param bool $RecordScore
     *
     * @return Course
     */
    public function withRecordScore($RecordScore)
    {
        $new = clone $this;
        $new->RecordScore = $RecordScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRecordComments()
    {
        return $this->RecordComments;
    }

    /**
     * @param bool $RecordComments
     *
     * @return Course
     */
    public function withRecordComments($RecordComments)
    {
        $new = clone $this;
        $new->RecordComments = $RecordComments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresChallenge()
    {
        return $this->RequiresChallenge;
    }

    /**
     * @param bool $RequiresChallenge
     *
     * @return Course
     */
    public function withRequiresChallenge($RequiresChallenge)
    {
        $new = clone $this;
        $new->RequiresChallenge = $RequiresChallenge;

        return $new;
    }

    /**
     * @return int
     */
    public function getChallengeMaxAttempt()
    {
        return $this->ChallengeMaxAttempt;
    }

    /**
     * @param int $ChallengeMaxAttempt
     *
     * @return Course
     */
    public function withChallengeMaxAttempt($ChallengeMaxAttempt)
    {
        $new = clone $this;
        $new->ChallengeMaxAttempt = $ChallengeMaxAttempt;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLockChallengeFailed()
    {
        return $this->LockChallengeFailed;
    }

    /**
     * @param bool $LockChallengeFailed
     *
     * @return Course
     */
    public function withLockChallengeFailed($LockChallengeFailed)
    {
        $new = clone $this;
        $new->LockChallengeFailed = $LockChallengeFailed;

        return $new;
    }

    /**
     * @return int
     */
    public function getChallengeFrequency()
    {
        return $this->ChallengeFrequency;
    }

    /**
     * @param int $ChallengeFrequency
     *
     * @return Course
     */
    public function withChallengeFrequency($ChallengeFrequency)
    {
        $new = clone $this;
        $new->ChallengeFrequency = $ChallengeFrequency;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddTimeInReadOnly()
    {
        return $this->AddTimeInReadOnly;
    }

    /**
     * @param bool $AddTimeInReadOnly
     *
     * @return Course
     */
    public function withAddTimeInReadOnly($AddTimeInReadOnly)
    {
        $new = clone $this;
        $new->AddTimeInReadOnly = $AddTimeInReadOnly;

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
     * @return Course
     */
    public function withTimeout($Timeout)
    {
        $new = clone $this;
        $new->Timeout = $Timeout;

        return $new;
    }
}
