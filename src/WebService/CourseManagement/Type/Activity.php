<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class Activity
{
    private string $TypeName;

    
    private TitleNode $TitleNode;

    
    private DescriptionNode $DescriptionNode;

    
    private string $Folder;

    
    private Schedule $Schedule;

    
    private ArrayOfString $StudentList;

    
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

    
    private string $AuthenticationTypeName;

    
    private string $AuthenticationTypeCode;

    
    private string $HasLogo;

    
    private string $AuthCode;

    
    private string $StudentID;

    
    private string $ProctorID;

    
    private DateTimeInterface $LastCompletionDate;

    
    private int $LastCompletionNo;

    
    private bool $IsCompleted;

    
    private string $ContentType;

    
    private Base64Binary $DocumentFile;

    
    private int $Step;

    
    private string $Instructions;

    
    private bool $Published;

    
    private bool $IsPortfolioEvidence;

    
    private string $PortfolioEvidenceType;

    
    private string $AttestationType;

    
    private string $SurveyContentType;

    
    private string $CustomTypeName;

    
    private bool $IsCompletedTrainingDate;

    
    private DateTimeInterface $TrainingCompletionDate;

    
    private string $ComprehensionDocumentID;

    
    private string $ComprehensionDocumentTitle;

    
    private string $ComprehensionDocumentComments;

    
    private string $ComprehensionDocumentExtension;

    
    private string $ComprehensionDocumentContentType;

    
    private bool $SendActivityResourceModificationNotification;

    
    private ArrayOfActivityNotification $ActivityNotifications;

    
    private ArrayOfAnyType $ActCertificateRules;

    
    private string $FileName;

    
    private string $OriginalFileName;

    
    private float $CourseCredit;

    
    private string $RecordCreditValue;

    
    private string $RecordID;

    
    private string $LastRosterFilePath;

    
    private bool $AllowCollaboration;

    
    private bool $EndCollaborationOnCompletion;

    
    private string $CollaborationTitle;

    
    private string $CollaborationDescription;

    
    public function getTypeName(): string
    {
        return $this->TypeName;
    }

    
    public function withTypeName(string $TypeName): static
    {
        $new = clone $this;
        $new->TypeName = $TypeName;

        return $new;
    }

    
    public function getTitleNode(): TitleNode
    {
        return $this->TitleNode;
    }

    
    public function withTitleNode(TitleNode $TitleNode): static
    {
        $new = clone $this;
        $new->TitleNode = $TitleNode;

        return $new;
    }

    
    public function getDescriptionNode(): DescriptionNode
    {
        return $this->DescriptionNode;
    }

    
    public function withDescriptionNode(DescriptionNode $DescriptionNode): static
    {
        $new = clone $this;
        $new->DescriptionNode = $DescriptionNode;

        return $new;
    }

    
    public function getFolder(): string
    {
        return $this->Folder;
    }

    
    public function withFolder(string $Folder): static
    {
        $new = clone $this;
        $new->Folder = $Folder;

        return $new;
    }

    
    public function getSchedule(): Schedule
    {
        return $this->Schedule;
    }

    
    public function withSchedule(Schedule $Schedule): static
    {
        $new = clone $this;
        $new->Schedule = $Schedule;

        return $new;
    }

    
    public function getStudentList(): ArrayOfString
    {
        return $this->StudentList;
    }

    
    public function withStudentList(ArrayOfString $StudentList): static
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

    
    public function getAuthenticationTypeName(): string
    {
        return $this->AuthenticationTypeName;
    }

    
    public function withAuthenticationTypeName(string $AuthenticationTypeName): static
    {
        $new = clone $this;
        $new->AuthenticationTypeName = $AuthenticationTypeName;

        return $new;
    }

    
    public function getAuthenticationTypeCode(): string
    {
        return $this->AuthenticationTypeCode;
    }

    
    public function withAuthenticationTypeCode(string $AuthenticationTypeCode): static
    {
        $new = clone $this;
        $new->AuthenticationTypeCode = $AuthenticationTypeCode;

        return $new;
    }

    
    public function getHasLogo(): string
    {
        return $this->HasLogo;
    }

    
    public function withHasLogo(string $HasLogo): static
    {
        $new = clone $this;
        $new->HasLogo = $HasLogo;

        return $new;
    }

    
    public function getAuthCode(): string
    {
        return $this->AuthCode;
    }

    
    public function withAuthCode(string $AuthCode): static
    {
        $new = clone $this;
        $new->AuthCode = $AuthCode;

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

    
    public function getProctorID(): string
    {
        return $this->ProctorID;
    }

    
    public function withProctorID(string $ProctorID): static
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

    
    public function getInstructions(): string
    {
        return $this->Instructions;
    }

    
    public function withInstructions(string $Instructions): static
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

    
    public function getPortfolioEvidenceType(): string
    {
        return $this->PortfolioEvidenceType;
    }

    
    public function withPortfolioEvidenceType(string $PortfolioEvidenceType): static
    {
        $new = clone $this;
        $new->PortfolioEvidenceType = $PortfolioEvidenceType;

        return $new;
    }

    
    public function getAttestationType(): string
    {
        return $this->AttestationType;
    }

    
    public function withAttestationType(string $AttestationType): static
    {
        $new = clone $this;
        $new->AttestationType = $AttestationType;

        return $new;
    }

    
    public function getSurveyContentType(): string
    {
        return $this->SurveyContentType;
    }

    
    public function withSurveyContentType(string $SurveyContentType): static
    {
        $new = clone $this;
        $new->SurveyContentType = $SurveyContentType;

        return $new;
    }

    
    public function getCustomTypeName(): string
    {
        return $this->CustomTypeName;
    }

    
    public function withCustomTypeName(string $CustomTypeName): static
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

    
    public function getComprehensionDocumentID(): string
    {
        return $this->ComprehensionDocumentID;
    }

    
    public function withComprehensionDocumentID(string $ComprehensionDocumentID): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentID = $ComprehensionDocumentID;

        return $new;
    }

    
    public function getComprehensionDocumentTitle(): string
    {
        return $this->ComprehensionDocumentTitle;
    }

    
    public function withComprehensionDocumentTitle(string $ComprehensionDocumentTitle): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentTitle = $ComprehensionDocumentTitle;

        return $new;
    }

    
    public function getComprehensionDocumentComments(): string
    {
        return $this->ComprehensionDocumentComments;
    }

    
    public function withComprehensionDocumentComments(string $ComprehensionDocumentComments): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentComments = $ComprehensionDocumentComments;

        return $new;
    }

    
    public function getComprehensionDocumentExtension(): string
    {
        return $this->ComprehensionDocumentExtension;
    }

    
    public function withComprehensionDocumentExtension(string $ComprehensionDocumentExtension): static
    {
        $new = clone $this;
        $new->ComprehensionDocumentExtension = $ComprehensionDocumentExtension;

        return $new;
    }

    
    public function getComprehensionDocumentContentType(): string
    {
        return $this->ComprehensionDocumentContentType;
    }

    
    public function withComprehensionDocumentContentType(string $ComprehensionDocumentContentType): static
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

    
    public function getActivityNotifications(): ArrayOfActivityNotification
    {
        return $this->ActivityNotifications;
    }

    
    public function withActivityNotifications(ArrayOfActivityNotification $ActivityNotifications): static
    {
        $new = clone $this;
        $new->ActivityNotifications = $ActivityNotifications;

        return $new;
    }

    
    public function getActCertificateRules(): ArrayOfAnyType
    {
        return $this->ActCertificateRules;
    }

    
    public function withActCertificateRules(ArrayOfAnyType $ActCertificateRules): static
    {
        $new = clone $this;
        $new->ActCertificateRules = $ActCertificateRules;

        return $new;
    }

    
    public function getFileName(): string
    {
        return $this->FileName;
    }

    
    public function withFileName(string $FileName): static
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    
    public function getOriginalFileName(): string
    {
        return $this->OriginalFileName;
    }

    
    public function withOriginalFileName(string $OriginalFileName): static
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

    
    public function getRecordCreditValue(): string
    {
        return $this->RecordCreditValue;
    }

    
    public function withRecordCreditValue(string $RecordCreditValue): static
    {
        $new = clone $this;
        $new->RecordCreditValue = $RecordCreditValue;

        return $new;
    }

    
    public function getRecordID(): string
    {
        return $this->RecordID;
    }

    
    public function withRecordID(string $RecordID): static
    {
        $new = clone $this;
        $new->RecordID = $RecordID;

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

    
    public function getCollaborationTitle(): string
    {
        return $this->CollaborationTitle;
    }

    
    public function withCollaborationTitle(string $CollaborationTitle): static
    {
        $new = clone $this;
        $new->CollaborationTitle = $CollaborationTitle;

        return $new;
    }

    
    public function getCollaborationDescription(): string
    {
        return $this->CollaborationDescription;
    }

    
    public function withCollaborationDescription(string $CollaborationDescription): static
    {
        $new = clone $this;
        $new->CollaborationDescription = $CollaborationDescription;

        return $new;
    }
}
