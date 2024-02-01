<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Activity
{
    /**
     * @var string
     */
    private $TypeName;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TitleNode
     */
    private $TitleNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DescriptionNode
     */
    private $DescriptionNode;

    /**
     * @var string
     */
    private $Folder;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Schedule
     */
    private $Schedule;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $StudentList;

    /**
     * @var bool
     */
    private $FixedTime;

    /**
     * @var \DateTimeInterface
     */
    private $SADueDate;

    /**
     * @var \DateTimeInterface
     */
    private $DateEnrolled;

    /**
     * @var \DateTimeInterface
     */
    private $DateStarted;

    /**
     * @var bool
     */
    private $IsFixedUserNumber;

    /**
     * @var int
     */
    private $FixedUserNumber;

    /**
     * @var bool
     */
    private $AllowWaitListing;

    /**
     * @var int
     */
    private $WaitListMaxNumber;

    /**
     * @var bool
     */
    private $DisableSupervisorSignOff;

    /**
     * @var bool
     */
    private $LearnerRequestEvaluation;

    /**
     * @var bool
     */
    private $SendSupervisorSignOffEmailOnLogin;

    /**
     * @var string
     */
    private $AuthenticationTypeName;

    /**
     * @var string
     */
    private $AuthenticationTypeCode;

    /**
     * @var string
     */
    private $HasLogo;

    /**
     * @var string
     */
    private $AuthCode;

    /**
     * @var string
     */
    private $StudentID;

    /**
     * @var string
     */
    private $ProctorID;

    /**
     * @var \DateTimeInterface
     */
    private $LastCompletionDate;

    /**
     * @var int
     */
    private $LastCompletionNo;

    /**
     * @var bool
     */
    private $IsCompleted;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var string
     */
    private $DocumentFile;

    /**
     * @var int
     */
    private $Step;

    /**
     * @var string
     */
    private $Instructions;

    /**
     * @var bool
     */
    private $Published;

    /**
     * @var bool
     */
    private $IsPortfolioEvidence;

    /**
     * @var string
     */
    private $PortfolioEvidenceType;

    /**
     * @var string
     */
    private $AttestationType;

    /**
     * @var string
     */
    private $SurveyContentType;

    /**
     * @var string
     */
    private $CustomTypeName;

    /**
     * @var bool
     */
    private $IsCompletedTrainingDate;

    /**
     * @var \DateTimeInterface
     */
    private $TrainingCompletionDate;

    /**
     * @var string
     */
    private $ComprehensionDocumentID;

    /**
     * @var string
     */
    private $ComprehensionDocumentTitle;

    /**
     * @var string
     */
    private $ComprehensionDocumentComments;

    /**
     * @var string
     */
    private $ComprehensionDocumentExtension;

    /**
     * @var string
     */
    private $ComprehensionDocumentContentType;

    /**
     * @var bool
     */
    private $SendActivityResourceModificationNotification;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfActivityNotification
     */
    private $ActivityNotifications;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $ActCertificateRules;

    /**
     * @var string
     */
    private $FileName;

    /**
     * @var string
     */
    private $OriginalFileName;

    /**
     * @var float
     */
    private $CourseCredit;

    /**
     * @var string
     */
    private $RecordCreditValue;

    /**
     * @var string
     */
    private $RecordID;

    /**
     * @var string
     */
    private $LastRosterFilePath;

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
     * @return string
     */
    public function getTypeName()
    {
        return $this->TypeName;
    }

    /**
     * @param string $TypeName
     *
     * @return Activity
     */
    public function withTypeName($TypeName)
    {
        $new = clone $this;
        $new->TypeName = $TypeName;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TitleNode
     */
    public function getTitleNode()
    {
        return $this->TitleNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TitleNode $TitleNode
     *
     * @return Activity
     */
    public function withTitleNode($TitleNode)
    {
        $new = clone $this;
        $new->TitleNode = $TitleNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DescriptionNode
     */
    public function getDescriptionNode()
    {
        return $this->DescriptionNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DescriptionNode $DescriptionNode
     *
     * @return Activity
     */
    public function withDescriptionNode($DescriptionNode)
    {
        $new = clone $this;
        $new->DescriptionNode = $DescriptionNode;

        return $new;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->Folder;
    }

    /**
     * @param string $Folder
     *
     * @return Activity
     */
    public function withFolder($Folder)
    {
        $new = clone $this;
        $new->Folder = $Folder;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Schedule
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Schedule $Schedule
     *
     * @return Activity
     */
    public function withSchedule($Schedule)
    {
        $new = clone $this;
        $new->Schedule = $Schedule;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getStudentList()
    {
        return $this->StudentList;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $StudentList
     *
     * @return Activity
     */
    public function withStudentList($StudentList)
    {
        $new = clone $this;
        $new->StudentList = $StudentList;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFixedTime()
    {
        return $this->FixedTime;
    }

    /**
     * @param bool $FixedTime
     *
     * @return Activity
     */
    public function withFixedTime($FixedTime)
    {
        $new = clone $this;
        $new->FixedTime = $FixedTime;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSADueDate()
    {
        return $this->SADueDate;
    }

    /**
     * @param \DateTimeInterface $SADueDate
     *
     * @return Activity
     */
    public function withSADueDate($SADueDate)
    {
        $new = clone $this;
        $new->SADueDate = $SADueDate;

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
     * @return Activity
     */
    public function withDateEnrolled($DateEnrolled)
    {
        $new = clone $this;
        $new->DateEnrolled = $DateEnrolled;

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
     * @return Activity
     */
    public function withDateStarted($DateStarted)
    {
        $new = clone $this;
        $new->DateStarted = $DateStarted;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsFixedUserNumber()
    {
        return $this->IsFixedUserNumber;
    }

    /**
     * @param bool $IsFixedUserNumber
     *
     * @return Activity
     */
    public function withIsFixedUserNumber($IsFixedUserNumber)
    {
        $new = clone $this;
        $new->IsFixedUserNumber = $IsFixedUserNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getFixedUserNumber()
    {
        return $this->FixedUserNumber;
    }

    /**
     * @param int $FixedUserNumber
     *
     * @return Activity
     */
    public function withFixedUserNumber($FixedUserNumber)
    {
        $new = clone $this;
        $new->FixedUserNumber = $FixedUserNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowWaitListing()
    {
        return $this->AllowWaitListing;
    }

    /**
     * @param bool $AllowWaitListing
     *
     * @return Activity
     */
    public function withAllowWaitListing($AllowWaitListing)
    {
        $new = clone $this;
        $new->AllowWaitListing = $AllowWaitListing;

        return $new;
    }

    /**
     * @return int
     */
    public function getWaitListMaxNumber()
    {
        return $this->WaitListMaxNumber;
    }

    /**
     * @param int $WaitListMaxNumber
     *
     * @return Activity
     */
    public function withWaitListMaxNumber($WaitListMaxNumber)
    {
        $new = clone $this;
        $new->WaitListMaxNumber = $WaitListMaxNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisableSupervisorSignOff()
    {
        return $this->DisableSupervisorSignOff;
    }

    /**
     * @param bool $DisableSupervisorSignOff
     *
     * @return Activity
     */
    public function withDisableSupervisorSignOff($DisableSupervisorSignOff)
    {
        $new = clone $this;
        $new->DisableSupervisorSignOff = $DisableSupervisorSignOff;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearnerRequestEvaluation()
    {
        return $this->LearnerRequestEvaluation;
    }

    /**
     * @param bool $LearnerRequestEvaluation
     *
     * @return Activity
     */
    public function withLearnerRequestEvaluation($LearnerRequestEvaluation)
    {
        $new = clone $this;
        $new->LearnerRequestEvaluation = $LearnerRequestEvaluation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendSupervisorSignOffEmailOnLogin()
    {
        return $this->SendSupervisorSignOffEmailOnLogin;
    }

    /**
     * @param bool $SendSupervisorSignOffEmailOnLogin
     *
     * @return Activity
     */
    public function withSendSupervisorSignOffEmailOnLogin($SendSupervisorSignOffEmailOnLogin)
    {
        $new = clone $this;
        $new->SendSupervisorSignOffEmailOnLogin = $SendSupervisorSignOffEmailOnLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthenticationTypeName()
    {
        return $this->AuthenticationTypeName;
    }

    /**
     * @param string $AuthenticationTypeName
     *
     * @return Activity
     */
    public function withAuthenticationTypeName($AuthenticationTypeName)
    {
        $new = clone $this;
        $new->AuthenticationTypeName = $AuthenticationTypeName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthenticationTypeCode()
    {
        return $this->AuthenticationTypeCode;
    }

    /**
     * @param string $AuthenticationTypeCode
     *
     * @return Activity
     */
    public function withAuthenticationTypeCode($AuthenticationTypeCode)
    {
        $new = clone $this;
        $new->AuthenticationTypeCode = $AuthenticationTypeCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getHasLogo()
    {
        return $this->HasLogo;
    }

    /**
     * @param string $HasLogo
     *
     * @return Activity
     */
    public function withHasLogo($HasLogo)
    {
        $new = clone $this;
        $new->HasLogo = $HasLogo;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     *
     * @return Activity
     */
    public function withAuthCode($AuthCode)
    {
        $new = clone $this;
        $new->AuthCode = $AuthCode;

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
     * @return Activity
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
    public function getProctorID()
    {
        return $this->ProctorID;
    }

    /**
     * @param string $ProctorID
     *
     * @return Activity
     */
    public function withProctorID($ProctorID)
    {
        $new = clone $this;
        $new->ProctorID = $ProctorID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastCompletionDate()
    {
        return $this->LastCompletionDate;
    }

    /**
     * @param \DateTimeInterface $LastCompletionDate
     *
     * @return Activity
     */
    public function withLastCompletionDate($LastCompletionDate)
    {
        $new = clone $this;
        $new->LastCompletionDate = $LastCompletionDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getLastCompletionNo()
    {
        return $this->LastCompletionNo;
    }

    /**
     * @param int $LastCompletionNo
     *
     * @return Activity
     */
    public function withLastCompletionNo($LastCompletionNo)
    {
        $new = clone $this;
        $new->LastCompletionNo = $LastCompletionNo;

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
     * @return Activity
     */
    public function withIsCompleted($IsCompleted)
    {
        $new = clone $this;
        $new->IsCompleted = $IsCompleted;

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
     * @return Activity
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
    public function getDocumentFile()
    {
        return $this->DocumentFile;
    }

    /**
     * @param string $DocumentFile
     *
     * @return Activity
     */
    public function withDocumentFile($DocumentFile)
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    /**
     * @return int
     */
    public function getStep()
    {
        return $this->Step;
    }

    /**
     * @param int $Step
     *
     * @return Activity
     */
    public function withStep($Step)
    {
        $new = clone $this;
        $new->Step = $Step;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     *
     * @return Activity
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

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
     * @return Activity
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
    public function getIsPortfolioEvidence()
    {
        return $this->IsPortfolioEvidence;
    }

    /**
     * @param bool $IsPortfolioEvidence
     *
     * @return Activity
     */
    public function withIsPortfolioEvidence($IsPortfolioEvidence)
    {
        $new = clone $this;
        $new->IsPortfolioEvidence = $IsPortfolioEvidence;

        return $new;
    }

    /**
     * @return string
     */
    public function getPortfolioEvidenceType()
    {
        return $this->PortfolioEvidenceType;
    }

    /**
     * @param string $PortfolioEvidenceType
     *
     * @return Activity
     */
    public function withPortfolioEvidenceType($PortfolioEvidenceType)
    {
        $new = clone $this;
        $new->PortfolioEvidenceType = $PortfolioEvidenceType;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttestationType()
    {
        return $this->AttestationType;
    }

    /**
     * @param string $AttestationType
     *
     * @return Activity
     */
    public function withAttestationType($AttestationType)
    {
        $new = clone $this;
        $new->AttestationType = $AttestationType;

        return $new;
    }

    /**
     * @return string
     */
    public function getSurveyContentType()
    {
        return $this->SurveyContentType;
    }

    /**
     * @param string $SurveyContentType
     *
     * @return Activity
     */
    public function withSurveyContentType($SurveyContentType)
    {
        $new = clone $this;
        $new->SurveyContentType = $SurveyContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomTypeName()
    {
        return $this->CustomTypeName;
    }

    /**
     * @param string $CustomTypeName
     *
     * @return Activity
     */
    public function withCustomTypeName($CustomTypeName)
    {
        $new = clone $this;
        $new->CustomTypeName = $CustomTypeName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsCompletedTrainingDate()
    {
        return $this->IsCompletedTrainingDate;
    }

    /**
     * @param bool $IsCompletedTrainingDate
     *
     * @return Activity
     */
    public function withIsCompletedTrainingDate($IsCompletedTrainingDate)
    {
        $new = clone $this;
        $new->IsCompletedTrainingDate = $IsCompletedTrainingDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTrainingCompletionDate()
    {
        return $this->TrainingCompletionDate;
    }

    /**
     * @param \DateTimeInterface $TrainingCompletionDate
     *
     * @return Activity
     */
    public function withTrainingCompletionDate($TrainingCompletionDate)
    {
        $new = clone $this;
        $new->TrainingCompletionDate = $TrainingCompletionDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getComprehensionDocumentID()
    {
        return $this->ComprehensionDocumentID;
    }

    /**
     * @param string $ComprehensionDocumentID
     *
     * @return Activity
     */
    public function withComprehensionDocumentID($ComprehensionDocumentID)
    {
        $new = clone $this;
        $new->ComprehensionDocumentID = $ComprehensionDocumentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getComprehensionDocumentTitle()
    {
        return $this->ComprehensionDocumentTitle;
    }

    /**
     * @param string $ComprehensionDocumentTitle
     *
     * @return Activity
     */
    public function withComprehensionDocumentTitle($ComprehensionDocumentTitle)
    {
        $new = clone $this;
        $new->ComprehensionDocumentTitle = $ComprehensionDocumentTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getComprehensionDocumentComments()
    {
        return $this->ComprehensionDocumentComments;
    }

    /**
     * @param string $ComprehensionDocumentComments
     *
     * @return Activity
     */
    public function withComprehensionDocumentComments($ComprehensionDocumentComments)
    {
        $new = clone $this;
        $new->ComprehensionDocumentComments = $ComprehensionDocumentComments;

        return $new;
    }

    /**
     * @return string
     */
    public function getComprehensionDocumentExtension()
    {
        return $this->ComprehensionDocumentExtension;
    }

    /**
     * @param string $ComprehensionDocumentExtension
     *
     * @return Activity
     */
    public function withComprehensionDocumentExtension($ComprehensionDocumentExtension)
    {
        $new = clone $this;
        $new->ComprehensionDocumentExtension = $ComprehensionDocumentExtension;

        return $new;
    }

    /**
     * @return string
     */
    public function getComprehensionDocumentContentType()
    {
        return $this->ComprehensionDocumentContentType;
    }

    /**
     * @param string $ComprehensionDocumentContentType
     *
     * @return Activity
     */
    public function withComprehensionDocumentContentType($ComprehensionDocumentContentType)
    {
        $new = clone $this;
        $new->ComprehensionDocumentContentType = $ComprehensionDocumentContentType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendActivityResourceModificationNotification()
    {
        return $this->SendActivityResourceModificationNotification;
    }

    /**
     * @param bool $SendActivityResourceModificationNotification
     *
     * @return Activity
     */
    public function withSendActivityResourceModificationNotification($SendActivityResourceModificationNotification)
    {
        $new = clone $this;
        $new->SendActivityResourceModificationNotification = $SendActivityResourceModificationNotification;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfActivityNotification
     */
    public function getActivityNotifications()
    {
        return $this->ActivityNotifications;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfActivityNotification $ActivityNotifications
     *
     * @return Activity
     */
    public function withActivityNotifications($ActivityNotifications)
    {
        $new = clone $this;
        $new->ActivityNotifications = $ActivityNotifications;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getActCertificateRules()
    {
        return $this->ActCertificateRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $ActCertificateRules
     *
     * @return Activity
     */
    public function withActCertificateRules($ActCertificateRules)
    {
        $new = clone $this;
        $new->ActCertificateRules = $ActCertificateRules;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     *
     * @return Activity
     */
    public function withFileName($FileName)
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->OriginalFileName;
    }

    /**
     * @param string $OriginalFileName
     *
     * @return Activity
     */
    public function withOriginalFileName($OriginalFileName)
    {
        $new = clone $this;
        $new->OriginalFileName = $OriginalFileName;

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
     * @return Activity
     */
    public function withCourseCredit($CourseCredit)
    {
        $new = clone $this;
        $new->CourseCredit = $CourseCredit;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecordCreditValue()
    {
        return $this->RecordCreditValue;
    }

    /**
     * @param string $RecordCreditValue
     *
     * @return Activity
     */
    public function withRecordCreditValue($RecordCreditValue)
    {
        $new = clone $this;
        $new->RecordCreditValue = $RecordCreditValue;

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
     * @return Activity
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
    public function getLastRosterFilePath()
    {
        return $this->LastRosterFilePath;
    }

    /**
     * @param string $LastRosterFilePath
     *
     * @return Activity
     */
    public function withLastRosterFilePath($LastRosterFilePath)
    {
        $new = clone $this;
        $new->LastRosterFilePath = $LastRosterFilePath;

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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
     */
    public function withCollaborationDescription($CollaborationDescription)
    {
        $new = clone $this;
        $new->CollaborationDescription = $CollaborationDescription;

        return $new;
    }
}
