<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class Activity extends LearningType
{
    private ?string $TypeName = null;

    private ?ActivityTitleNode $TitleNode = null;

    private ?ActivityDescriptionNode $DescriptionNode = null;

    private ?Schedule $Schedule = null;

    private ?ArrayOfString $StudentList = null;

    private bool $FixedTime;

    private DateTimeInterface $SADueDate;

    private DateTimeInterface $DateEnrolled;

    private DateTimeInterface $DateStarted;

    private bool $IsFixedUserNumber;

    private int $FixedUserNumber;

    private bool $AllowWaitListing;

    private int $WaitListMaxNumber;

    private bool $DisableSupervisorSignOff;

    private bool $LearnerRequestEvaluation;

    private bool $SendSupervisorSignOffEmailOnLogin;

    private ?string $AuthenticationTypeName = null;

    private ?string $AuthenticationTypeCode = null;

    private ?string $HasLogo = null;

    private ?string $AuthCode = null;

    private ?string $StudentID = null;

    private ?string $ProctorID = null;

    private DateTimeInterface $LastCompletionDate;

    private int $LastCompletionNo;

    private bool $IsCompleted;

    private ?string $ContentType = null;

    /**
     * @var null | mixed
     */
    private mixed $DocumentFile = null;

    private int $Step;

    private ?string $Instructions = null;

    private bool $Published;

    private bool $ForPersonalPathsOnly;

    private bool $IsPortfolioEvidence;

    private ?string $PortfolioEvidenceType = null;

    private ?string $AttestationType = null;

    private ?string $AttestationRequiredType = null;

    private ?string $SurveyContentType = null;

    private ?string $CustomTypeName = null;

    private bool $IsCompletedTrainingDate;

    private DateTimeInterface $TrainingCompletionDate;

    private ?string $ComprehensionDocumentID = null;

    private ?string $ComprehensionDocumentTitle = null;

    private ?string $ComprehensionDocumentComments = null;

    private ?string $ComprehensionDocumentExtension = null;

    private ?string $ComprehensionDocumentContentType = null;

    private bool $SendActivityResourceModificationNotification;

    private ?ArrayOfActivityNotification $ActivityNotifications = null;

    private ?ArrayOfAnyType $ActCertificateRules = null;

    private ?string $FileName = null;

    private ?string $OriginalFileName = null;

    private float $CourseCredit;

    private ?string $RecordCreditValue = null;

    private ?string $RecordID = null;

    private ?string $LastRosterFilePath = null;

    private bool $AllowCollaboration;

    private bool $EndCollaborationOnCompletion;

    private ?string $CollaborationTitle = null;

    private ?string $CollaborationDescription = null;

    private bool $RequiresLearnerEvidence;

    private bool $RequiresProctorEvidence;

    private bool $LearnerAttestationRequiresApproval;

    private bool $LearnerAttestationProctorCommentsEnabled;

    private bool $LearnerAttestationProctorCommentsRequired;

    private bool $LearnerAttestationProctorSuccessRequired;

    private bool $LearnerSubmissionProctorIsAnon;

    private bool $LearnerSubmissionAllowMultiple;

    private ?string $LearnerInstructions = null;

    private bool $LearnerSubmissionMultipleUnlimited;

    private bool $LearnerSubmissionMultipleProctorDiscretion;

    private int $LearnerSubmissionMaxAttempts;

    private ?string $LearnerEvidenceType = null;

    private ?string $ProctorEvidenceType = null;

    private ?string $LearnerEvidenceFormID = null;

    private ?string $ProctorEvidenceFormID = null;

    private ?string $LearnerEvidenceSampleDoc = null;

    private ?string $LearnerAttestationProctorSuccessType = null;

    private ?string $ProctorAttestationSuccessType = null;

    private ?string $ProctorEvidenceSampleDoc = null;

    private int $LearnerAttestationProctorMinScore;

    private int $ProctorAttestationMinScore;

    private bool $ProctorAttestationSuccessRequired;

    private bool $ProctorAttestationCommentsRequired;

    private bool $ProctorAttestationCommentsEnabled;

    private ?string $ProctorInstructions = null;

    private ?string $ProctorApprovalButtonText = null;

    private ?string $ProctorRejectionButtonText = null;

    private bool $ProctorIsAnon;

    private ?string $ProctorEvaluationTrigger = null;

    public function getTypeName(): ?string
    {
        return $this->TypeName;
    }

    public function withTypeName(?string $TypeName): static
    {
        $new = clone $this;
        $new->TypeName = $TypeName;

        return $new;
    }

    public function getTitleNode(): ?ActivityTitleNode
    {
        return $this->TitleNode;
    }

    public function withTitleNode(?ActivityTitleNode $TitleNode): static
    {
        $new = clone $this;
        $new->TitleNode = $TitleNode;

        return $new;
    }

    public function getDescriptionNode(): ?ActivityDescriptionNode
    {
        return $this->DescriptionNode;
    }

    public function withDescriptionNode(?ActivityDescriptionNode $DescriptionNode): static
    {
        $new = clone $this;
        $new->DescriptionNode = $DescriptionNode;

        return $new;
    }

    public function getSchedule(): ?Schedule
    {
        return $this->Schedule;
    }

    public function withSchedule(?Schedule $Schedule): static
    {
        $new = clone $this;
        $new->Schedule = $Schedule;

        return $new;
    }

    public function getStudentList(): ?ArrayOfString
    {
        return $this->StudentList;
    }

    public function withStudentList(?ArrayOfString $StudentList): static
    {
        $new = clone $this;
        $new->StudentList = $StudentList;

        return $new;
    }

    public function getFixedTime(): bool
    {
        return $this->FixedTime;
    }

    public function withFixedTime(bool $FixedTime): static
    {
        $new = clone $this;
        $new->FixedTime = $FixedTime;

        return $new;
    }

    public function getSADueDate(): DateTimeInterface
    {
        return $this->SADueDate;
    }

    public function withSADueDate(DateTimeInterface $SADueDate): static
    {
        $new = clone $this;
        $new->SADueDate = $SADueDate;

        return $new;
    }

    public function getDateEnrolled(): DateTimeInterface
    {
        return $this->DateEnrolled;
    }

    public function withDateEnrolled(DateTimeInterface $DateEnrolled): static
    {
        $new = clone $this;
        $new->DateEnrolled = $DateEnrolled;

        return $new;
    }

    public function getDateStarted(): DateTimeInterface
    {
        return $this->DateStarted;
    }

    public function withDateStarted(DateTimeInterface $DateStarted): static
    {
        $new = clone $this;
        $new->DateStarted = $DateStarted;

        return $new;
    }

    public function getIsFixedUserNumber(): bool
    {
        return $this->IsFixedUserNumber;
    }

    public function withIsFixedUserNumber(bool $IsFixedUserNumber): static
    {
        $new = clone $this;
        $new->IsFixedUserNumber = $IsFixedUserNumber;

        return $new;
    }

    public function getFixedUserNumber(): int
    {
        return $this->FixedUserNumber;
    }

    public function withFixedUserNumber(int $FixedUserNumber): static
    {
        $new = clone $this;
        $new->FixedUserNumber = $FixedUserNumber;

        return $new;
    }

    public function getAllowWaitListing(): bool
    {
        return $this->AllowWaitListing;
    }

    public function withAllowWaitListing(bool $AllowWaitListing): static
    {
        $new = clone $this;
        $new->AllowWaitListing = $AllowWaitListing;

        return $new;
    }

    public function getWaitListMaxNumber(): int
    {
        return $this->WaitListMaxNumber;
    }

    public function withWaitListMaxNumber(int $WaitListMaxNumber): static
    {
        $new = clone $this;
        $new->WaitListMaxNumber = $WaitListMaxNumber;

        return $new;
    }

    public function getDisableSupervisorSignOff(): bool
    {
        return $this->DisableSupervisorSignOff;
    }

    public function withDisableSupervisorSignOff(bool $DisableSupervisorSignOff): static
    {
        $new = clone $this;
        $new->DisableSupervisorSignOff = $DisableSupervisorSignOff;

        return $new;
    }

    public function getLearnerRequestEvaluation(): bool
    {
        return $this->LearnerRequestEvaluation;
    }

    public function withLearnerRequestEvaluation(bool $LearnerRequestEvaluation): static
    {
        $new = clone $this;
        $new->LearnerRequestEvaluation = $LearnerRequestEvaluation;

        return $new;
    }

    public function getSendSupervisorSignOffEmailOnLogin(): bool
    {
        return $this->SendSupervisorSignOffEmailOnLogin;
    }

    public function withSendSupervisorSignOffEmailOnLogin(bool $SendSupervisorSignOffEmailOnLogin): static
    {
        $new = clone $this;
        $new->SendSupervisorSignOffEmailOnLogin = $SendSupervisorSignOffEmailOnLogin;

        return $new;
    }

    public function getAuthenticationTypeName(): ?string
    {
        return $this->AuthenticationTypeName;
    }

    public function withAuthenticationTypeName(?string $AuthenticationTypeName): static
    {
        $new = clone $this;
        $new->AuthenticationTypeName = $AuthenticationTypeName;

        return $new;
    }

    public function getAuthenticationTypeCode(): ?string
    {
        return $this->AuthenticationTypeCode;
    }

    public function withAuthenticationTypeCode(?string $AuthenticationTypeCode): static
    {
        $new = clone $this;
        $new->AuthenticationTypeCode = $AuthenticationTypeCode;

        return $new;
    }

    public function getHasLogo(): ?string
    {
        return $this->HasLogo;
    }

    public function withHasLogo(?string $HasLogo): static
    {
        $new = clone $this;
        $new->HasLogo = $HasLogo;

        return $new;
    }

    public function getAuthCode(): ?string
    {
        return $this->AuthCode;
    }

    public function withAuthCode(?string $AuthCode): static
    {
        $new = clone $this;
        $new->AuthCode = $AuthCode;

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

    public function getProctorID(): ?string
    {
        return $this->ProctorID;
    }

    public function withProctorID(?string $ProctorID): static
    {
        $new = clone $this;
        $new->ProctorID = $ProctorID;

        return $new;
    }

    public function getLastCompletionDate(): DateTimeInterface
    {
        return $this->LastCompletionDate;
    }

    public function withLastCompletionDate(DateTimeInterface $LastCompletionDate): static
    {
        $new = clone $this;
        $new->LastCompletionDate = $LastCompletionDate;

        return $new;
    }

    public function getLastCompletionNo(): int
    {
        return $this->LastCompletionNo;
    }

    public function withLastCompletionNo(int $LastCompletionNo): static
    {
        $new = clone $this;
        $new->LastCompletionNo = $LastCompletionNo;

        return $new;
    }

    public function getIsCompleted(): bool
    {
        return $this->IsCompleted;
    }

    public function withIsCompleted(bool $IsCompleted): static
    {
        $new = clone $this;
        $new->IsCompleted = $IsCompleted;

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

    public function getStep(): int
    {
        return $this->Step;
    }

    public function withStep(int $Step): static
    {
        $new = clone $this;
        $new->Step = $Step;

        return $new;
    }

    public function getInstructions(): ?string
    {
        return $this->Instructions;
    }

    public function withInstructions(?string $Instructions): static
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }

    public function getPublished(): bool
    {
        return $this->Published;
    }

    public function withPublished(bool $Published): static
    {
        $new = clone $this;
        $new->Published = $Published;

        return $new;
    }

    public function getForPersonalPathsOnly(): bool
    {
        return $this->ForPersonalPathsOnly;
    }

    public function withForPersonalPathsOnly(bool $ForPersonalPathsOnly): static
    {
        $new = clone $this;
        $new->ForPersonalPathsOnly = $ForPersonalPathsOnly;

        return $new;
    }

    public function getIsPortfolioEvidence(): bool
    {
        return $this->IsPortfolioEvidence;
    }

    public function withIsPortfolioEvidence(bool $IsPortfolioEvidence): static
    {
        $new = clone $this;
        $new->IsPortfolioEvidence = $IsPortfolioEvidence;

        return $new;
    }

    public function getPortfolioEvidenceType(): ?string
    {
        return $this->PortfolioEvidenceType;
    }

    public function withPortfolioEvidenceType(?string $PortfolioEvidenceType): static
    {
        $new = clone $this;
        $new->PortfolioEvidenceType = $PortfolioEvidenceType;

        return $new;
    }

    public function getAttestationType(): ?string
    {
        return $this->AttestationType;
    }

    public function withAttestationType(?string $AttestationType): static
    {
        $new = clone $this;
        $new->AttestationType = $AttestationType;

        return $new;
    }

    public function getAttestationRequiredType(): ?string
    {
        return $this->AttestationRequiredType;
    }

    public function withAttestationRequiredType(?string $AttestationRequiredType): static
    {
        $new = clone $this;
        $new->AttestationRequiredType = $AttestationRequiredType;

        return $new;
    }

    public function getSurveyContentType(): ?string
    {
        return $this->SurveyContentType;
    }

    public function withSurveyContentType(?string $SurveyContentType): static
    {
        $new = clone $this;
        $new->SurveyContentType = $SurveyContentType;

        return $new;
    }

    public function getCustomTypeName(): ?string
    {
        return $this->CustomTypeName;
    }

    public function withCustomTypeName(?string $CustomTypeName): static
    {
        $new = clone $this;
        $new->CustomTypeName = $CustomTypeName;

        return $new;
    }

    public function getIsCompletedTrainingDate(): bool
    {
        return $this->IsCompletedTrainingDate;
    }

    public function withIsCompletedTrainingDate(bool $IsCompletedTrainingDate): static
    {
        $new = clone $this;
        $new->IsCompletedTrainingDate = $IsCompletedTrainingDate;

        return $new;
    }

    public function getTrainingCompletionDate(): DateTimeInterface
    {
        return $this->TrainingCompletionDate;
    }

    public function withTrainingCompletionDate(DateTimeInterface $TrainingCompletionDate): static
    {
        $new = clone $this;
        $new->TrainingCompletionDate = $TrainingCompletionDate;

        return $new;
    }

    public function getComprehensionDocumentID(): ?string
    {
        return $this->ComprehensionDocumentID;
    }

    public function withComprehensionDocumentID(?string $ComprehensionDocumentID): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentID = $ComprehensionDocumentID;

        return $new;
    }

    public function getComprehensionDocumentTitle(): ?string
    {
        return $this->ComprehensionDocumentTitle;
    }

    public function withComprehensionDocumentTitle(?string $ComprehensionDocumentTitle): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentTitle = $ComprehensionDocumentTitle;

        return $new;
    }

    public function getComprehensionDocumentComments(): ?string
    {
        return $this->ComprehensionDocumentComments;
    }

    public function withComprehensionDocumentComments(?string $ComprehensionDocumentComments): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentComments = $ComprehensionDocumentComments;

        return $new;
    }

    public function getComprehensionDocumentExtension(): ?string
    {
        return $this->ComprehensionDocumentExtension;
    }

    public function withComprehensionDocumentExtension(?string $ComprehensionDocumentExtension): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentExtension = $ComprehensionDocumentExtension;

        return $new;
    }

    public function getComprehensionDocumentContentType(): ?string
    {
        return $this->ComprehensionDocumentContentType;
    }

    public function withComprehensionDocumentContentType(?string $ComprehensionDocumentContentType): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentContentType = $ComprehensionDocumentContentType;

        return $new;
    }

    public function getSendActivityResourceModificationNotification(): bool
    {
        return $this->SendActivityResourceModificationNotification;
    }

    public function withSendActivityResourceModificationNotification(bool $SendActivityResourceModificationNotification): static
    {
        $new = clone $this;
        $new->SendActivityResourceModificationNotification = $SendActivityResourceModificationNotification;

        return $new;
    }

    public function getActivityNotifications(): ?ArrayOfActivityNotification
    {
        return $this->ActivityNotifications;
    }

    public function withActivityNotifications(?ArrayOfActivityNotification $ActivityNotifications): static
    {
        $new = clone $this;
        $new->ActivityNotifications = $ActivityNotifications;

        return $new;
    }

    public function getActCertificateRules(): ?ArrayOfAnyType
    {
        return $this->ActCertificateRules;
    }

    public function withActCertificateRules(?ArrayOfAnyType $ActCertificateRules): static
    {
        $new = clone $this;
        $new->ActCertificateRules = $ActCertificateRules;

        return $new;
    }

    public function getFileName(): ?string
    {
        return $this->FileName;
    }

    public function withFileName(?string $FileName): static
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    public function getOriginalFileName(): ?string
    {
        return $this->OriginalFileName;
    }

    public function withOriginalFileName(?string $OriginalFileName): static
    {
        $new = clone $this;
        $new->OriginalFileName = $OriginalFileName;

        return $new;
    }

    public function getCourseCredit(): float
    {
        return $this->CourseCredit;
    }

    public function withCourseCredit(float $CourseCredit): static
    {
        $new = clone $this;
        $new->CourseCredit = $CourseCredit;

        return $new;
    }

    public function getRecordCreditValue(): ?string
    {
        return $this->RecordCreditValue;
    }

    public function withRecordCreditValue(?string $RecordCreditValue): static
    {
        $new = clone $this;
        $new->RecordCreditValue = $RecordCreditValue;

        return $new;
    }

    public function getRecordID(): ?string
    {
        return $this->RecordID;
    }

    public function withRecordID(?string $RecordID): static
    {
        $new = clone $this;
        $new->RecordID = $RecordID;

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

    public function getAllowCollaboration(): bool
    {
        return $this->AllowCollaboration;
    }

    public function withAllowCollaboration(bool $AllowCollaboration): static
    {
        $new = clone $this;
        $new->AllowCollaboration = $AllowCollaboration;

        return $new;
    }

    public function getEndCollaborationOnCompletion(): bool
    {
        return $this->EndCollaborationOnCompletion;
    }

    public function withEndCollaborationOnCompletion(bool $EndCollaborationOnCompletion): static
    {
        $new = clone $this;
        $new->EndCollaborationOnCompletion = $EndCollaborationOnCompletion;

        return $new;
    }

    public function getCollaborationTitle(): ?string
    {
        return $this->CollaborationTitle;
    }

    public function withCollaborationTitle(?string $CollaborationTitle): static
    {
        $new = clone $this;
        $new->CollaborationTitle = $CollaborationTitle;

        return $new;
    }

    public function getCollaborationDescription(): ?string
    {
        return $this->CollaborationDescription;
    }

    public function withCollaborationDescription(?string $CollaborationDescription): static
    {
        $new = clone $this;
        $new->CollaborationDescription = $CollaborationDescription;

        return $new;
    }

    public function getRequiresLearnerEvidence(): bool
    {
        return $this->RequiresLearnerEvidence;
    }

    public function withRequiresLearnerEvidence(bool $RequiresLearnerEvidence): static
    {
        $new = clone $this;
        $new->RequiresLearnerEvidence = $RequiresLearnerEvidence;

        return $new;
    }

    public function getRequiresProctorEvidence(): bool
    {
        return $this->RequiresProctorEvidence;
    }

    public function withRequiresProctorEvidence(bool $RequiresProctorEvidence): static
    {
        $new = clone $this;
        $new->RequiresProctorEvidence = $RequiresProctorEvidence;

        return $new;
    }

    public function getLearnerAttestationRequiresApproval(): bool
    {
        return $this->LearnerAttestationRequiresApproval;
    }

    public function withLearnerAttestationRequiresApproval(bool $LearnerAttestationRequiresApproval): static
    {
        $new = clone $this;
        $new->LearnerAttestationRequiresApproval = $LearnerAttestationRequiresApproval;

        return $new;
    }

    public function getLearnerAttestationProctorCommentsEnabled(): bool
    {
        return $this->LearnerAttestationProctorCommentsEnabled;
    }

    public function withLearnerAttestationProctorCommentsEnabled(bool $LearnerAttestationProctorCommentsEnabled): static
    {
        $new = clone $this;
        $new->LearnerAttestationProctorCommentsEnabled = $LearnerAttestationProctorCommentsEnabled;

        return $new;
    }

    public function getLearnerAttestationProctorCommentsRequired(): bool
    {
        return $this->LearnerAttestationProctorCommentsRequired;
    }

    public function withLearnerAttestationProctorCommentsRequired(bool $LearnerAttestationProctorCommentsRequired): static
    {
        $new = clone $this;
        $new->LearnerAttestationProctorCommentsRequired = $LearnerAttestationProctorCommentsRequired;

        return $new;
    }

    public function getLearnerAttestationProctorSuccessRequired(): bool
    {
        return $this->LearnerAttestationProctorSuccessRequired;
    }

    public function withLearnerAttestationProctorSuccessRequired(bool $LearnerAttestationProctorSuccessRequired): static
    {
        $new = clone $this;
        $new->LearnerAttestationProctorSuccessRequired = $LearnerAttestationProctorSuccessRequired;

        return $new;
    }

    public function getLearnerSubmissionProctorIsAnon(): bool
    {
        return $this->LearnerSubmissionProctorIsAnon;
    }

    public function withLearnerSubmissionProctorIsAnon(bool $LearnerSubmissionProctorIsAnon): static
    {
        $new = clone $this;
        $new->LearnerSubmissionProctorIsAnon = $LearnerSubmissionProctorIsAnon;

        return $new;
    }

    public function getLearnerSubmissionAllowMultiple(): bool
    {
        return $this->LearnerSubmissionAllowMultiple;
    }

    public function withLearnerSubmissionAllowMultiple(bool $LearnerSubmissionAllowMultiple): static
    {
        $new = clone $this;
        $new->LearnerSubmissionAllowMultiple = $LearnerSubmissionAllowMultiple;

        return $new;
    }

    public function getLearnerInstructions(): ?string
    {
        return $this->LearnerInstructions;
    }

    public function withLearnerInstructions(?string $LearnerInstructions): static
    {
        $new = clone $this;
        $new->LearnerInstructions = $LearnerInstructions;

        return $new;
    }

    public function getLearnerSubmissionMultipleUnlimited(): bool
    {
        return $this->LearnerSubmissionMultipleUnlimited;
    }

    public function withLearnerSubmissionMultipleUnlimited(bool $LearnerSubmissionMultipleUnlimited): static
    {
        $new = clone $this;
        $new->LearnerSubmissionMultipleUnlimited = $LearnerSubmissionMultipleUnlimited;

        return $new;
    }

    public function getLearnerSubmissionMultipleProctorDiscretion(): bool
    {
        return $this->LearnerSubmissionMultipleProctorDiscretion;
    }

    public function withLearnerSubmissionMultipleProctorDiscretion(bool $LearnerSubmissionMultipleProctorDiscretion): static
    {
        $new = clone $this;
        $new->LearnerSubmissionMultipleProctorDiscretion = $LearnerSubmissionMultipleProctorDiscretion;

        return $new;
    }

    public function getLearnerSubmissionMaxAttempts(): int
    {
        return $this->LearnerSubmissionMaxAttempts;
    }

    public function withLearnerSubmissionMaxAttempts(int $LearnerSubmissionMaxAttempts): static
    {
        $new = clone $this;
        $new->LearnerSubmissionMaxAttempts = $LearnerSubmissionMaxAttempts;

        return $new;
    }

    public function getLearnerEvidenceType(): ?string
    {
        return $this->LearnerEvidenceType;
    }

    public function withLearnerEvidenceType(?string $LearnerEvidenceType): static
    {
        $new = clone $this;
        $new->LearnerEvidenceType = $LearnerEvidenceType;

        return $new;
    }

    public function getProctorEvidenceType(): ?string
    {
        return $this->ProctorEvidenceType;
    }

    public function withProctorEvidenceType(?string $ProctorEvidenceType): static
    {
        $new = clone $this;
        $new->ProctorEvidenceType = $ProctorEvidenceType;

        return $new;
    }

    public function getLearnerEvidenceFormID(): ?string
    {
        return $this->LearnerEvidenceFormID;
    }

    public function withLearnerEvidenceFormID(?string $LearnerEvidenceFormID): static
    {
        $new = clone $this;
        $new->LearnerEvidenceFormID = $LearnerEvidenceFormID;

        return $new;
    }

    public function getProctorEvidenceFormID(): ?string
    {
        return $this->ProctorEvidenceFormID;
    }

    public function withProctorEvidenceFormID(?string $ProctorEvidenceFormID): static
    {
        $new = clone $this;
        $new->ProctorEvidenceFormID = $ProctorEvidenceFormID;

        return $new;
    }

    public function getLearnerEvidenceSampleDoc(): ?string
    {
        return $this->LearnerEvidenceSampleDoc;
    }

    public function withLearnerEvidenceSampleDoc(?string $LearnerEvidenceSampleDoc): static
    {
        $new = clone $this;
        $new->LearnerEvidenceSampleDoc = $LearnerEvidenceSampleDoc;

        return $new;
    }

    public function getLearnerAttestationProctorSuccessType(): ?string
    {
        return $this->LearnerAttestationProctorSuccessType;
    }

    public function withLearnerAttestationProctorSuccessType(?string $LearnerAttestationProctorSuccessType): static
    {
        $new = clone $this;
        $new->LearnerAttestationProctorSuccessType = $LearnerAttestationProctorSuccessType;

        return $new;
    }

    public function getProctorAttestationSuccessType(): ?string
    {
        return $this->ProctorAttestationSuccessType;
    }

    public function withProctorAttestationSuccessType(?string $ProctorAttestationSuccessType): static
    {
        $new = clone $this;
        $new->ProctorAttestationSuccessType = $ProctorAttestationSuccessType;

        return $new;
    }

    public function getProctorEvidenceSampleDoc(): ?string
    {
        return $this->ProctorEvidenceSampleDoc;
    }

    public function withProctorEvidenceSampleDoc(?string $ProctorEvidenceSampleDoc): static
    {
        $new = clone $this;
        $new->ProctorEvidenceSampleDoc = $ProctorEvidenceSampleDoc;

        return $new;
    }

    public function getLearnerAttestationProctorMinScore(): int
    {
        return $this->LearnerAttestationProctorMinScore;
    }

    public function withLearnerAttestationProctorMinScore(int $LearnerAttestationProctorMinScore): static
    {
        $new = clone $this;
        $new->LearnerAttestationProctorMinScore = $LearnerAttestationProctorMinScore;

        return $new;
    }

    public function getProctorAttestationMinScore(): int
    {
        return $this->ProctorAttestationMinScore;
    }

    public function withProctorAttestationMinScore(int $ProctorAttestationMinScore): static
    {
        $new = clone $this;
        $new->ProctorAttestationMinScore = $ProctorAttestationMinScore;

        return $new;
    }

    public function getProctorAttestationSuccessRequired(): bool
    {
        return $this->ProctorAttestationSuccessRequired;
    }

    public function withProctorAttestationSuccessRequired(bool $ProctorAttestationSuccessRequired): static
    {
        $new = clone $this;
        $new->ProctorAttestationSuccessRequired = $ProctorAttestationSuccessRequired;

        return $new;
    }

    public function getProctorAttestationCommentsRequired(): bool
    {
        return $this->ProctorAttestationCommentsRequired;
    }

    public function withProctorAttestationCommentsRequired(bool $ProctorAttestationCommentsRequired): static
    {
        $new = clone $this;
        $new->ProctorAttestationCommentsRequired = $ProctorAttestationCommentsRequired;

        return $new;
    }

    public function getProctorAttestationCommentsEnabled(): bool
    {
        return $this->ProctorAttestationCommentsEnabled;
    }

    public function withProctorAttestationCommentsEnabled(bool $ProctorAttestationCommentsEnabled): static
    {
        $new = clone $this;
        $new->ProctorAttestationCommentsEnabled = $ProctorAttestationCommentsEnabled;

        return $new;
    }

    public function getProctorInstructions(): ?string
    {
        return $this->ProctorInstructions;
    }

    public function withProctorInstructions(?string $ProctorInstructions): static
    {
        $new = clone $this;
        $new->ProctorInstructions = $ProctorInstructions;

        return $new;
    }

    public function getProctorApprovalButtonText(): ?string
    {
        return $this->ProctorApprovalButtonText;
    }

    public function withProctorApprovalButtonText(?string $ProctorApprovalButtonText): static
    {
        $new = clone $this;
        $new->ProctorApprovalButtonText = $ProctorApprovalButtonText;

        return $new;
    }

    public function getProctorRejectionButtonText(): ?string
    {
        return $this->ProctorRejectionButtonText;
    }

    public function withProctorRejectionButtonText(?string $ProctorRejectionButtonText): static
    {
        $new = clone $this;
        $new->ProctorRejectionButtonText = $ProctorRejectionButtonText;

        return $new;
    }

    public function getProctorIsAnon(): bool
    {
        return $this->ProctorIsAnon;
    }

    public function withProctorIsAnon(bool $ProctorIsAnon): static
    {
        $new = clone $this;
        $new->ProctorIsAnon = $ProctorIsAnon;

        return $new;
    }

    public function getProctorEvaluationTrigger(): ?string
    {
        return $this->ProctorEvaluationTrigger;
    }

    public function withProctorEvaluationTrigger(?string $ProctorEvaluationTrigger): static
    {
        $new = clone $this;
        $new->ProctorEvaluationTrigger = $ProctorEvaluationTrigger;

        return $new;
    }
}
