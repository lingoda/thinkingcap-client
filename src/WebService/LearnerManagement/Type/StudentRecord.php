<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class StudentRecord
{
    private ?string $Type;

    
    private ?string $TypeName;

    
    private bool $IsOnline;

    
    private bool $IsAssessment;

    
    private bool $HasFeedBack;

    
    private ?string $FullScreen;

    
    private ?string $RecordID;

    
    private ?string $DomainID;

    
    private ?string $StudentID;

    
    private ?string $StudentDisplayID;

    
    private ?string $StudentName;

    
    private ?string $StudentEmail;

    
    private ?string $StudentCmiName;

    
    private ?string $StudentLanguage;

    
    private ?string $CourseID;

    
    private ?string $CourseTitle;

    
    private bool $IsAccesscodeValidated;

    
    private bool $FeedbackLoaded;

    
    private ?string $CourseDescription;

    
    private ?string $ContentType;

    
    private ?string $CourseCode;

    
    private ?string $CourseProgram;

    
    private ?string $CourseProgramID;

    
    private ?string $ProgramCode;

    
    private ?string $LastProgram;

    
    private ?string $EnrolledFromProgram;

    
    private ?string $CohortID;

    
    private ?string $LearningPathID;

    
    private bool $Archived;

    
    private bool $Anon;

    
    private bool $IsLocked;

    
    private ?string $LockReason;

    
    private int $CourseVersion;

    
    private ?string $ScormVersion;

    
    private float $CourseCredit;

    
    private bool $CreditOnlyOnPass;

    
    private bool $CanGrantCertificate;

    
    private ?string $CertificateType;

    
    private int $CertificateScore;

    
    private bool $DoNotGrandCertificateUnlessCreditIssued;

    
    private float $CertificateMinTime;

    
    private DateTimeInterface $CertificateExpiring;

    
    private bool $GrantCertificate;

    
    private bool $HasCertificate;

    
    private bool $GrantCredit;

    
    private int $Attempt;

    
    private ?string $PassID;

    
    private bool $LearningObjectIsActive;

    
    private bool $HasForum;

    
    private bool $HasChat;

    
    private ?string $TeachingAsstID;

    
    private ?string $Status;

    
    private ?string $CompletionStatus;

    
    private bool $RequiresCompletedStatusForCompletion;

    
    private bool $RequiresFeedbackForCompletion;

    
    private bool $RequireFeedbackPopUp;

    
    private bool $RequireAssignmentForCompletion;

    
    private bool $RequireAssesmentForCompletion;

    
    private bool $IsCompleted;

    
    private bool $ProcessUnknown;

    
    private bool $OverrideAPISuccess;

    
    private int $MinPassingScore;

    
    private bool $BarAccess;

    
    private ?string $Success;

    
    private ?string $EntrySuccess;

    
    private DateTimeInterface $DateEnrolled;

    
    private ?string $EnrollmentNotes;

    
    private DateTimeInterface $DateStarted;

    
    private DateTimeInterface $DueDate;

    
    private DateTimeInterface $CompletedDate;

    
    private DateTimeInterface $OverallCompletedDate;

    
    private DateTimeInterface $LastDateAttempted;

    
    private int $TotalCourseAttempts;

    
    private DateTimeInterface $RecordStartDate;

    
    private DateTimeInterface $CourseStartDate;

    
    private bool $CourseImmediateStart;

    
    private ?string $LastModule;

    
    private ?string $LastModuleName;

    
    private ?string $ProctorComment;

    
    private int $Score;

    
    private int $EntryScore;

    
    private float $TotalAverageScore;

    
    private float $PartialScore;

    
    private float $PercentCompleted;

    
    private int $Timeout;

    
    private bool $CourseDisclaimerAgreed;

    
    private DateTimeInterface $DisclaimerAgreedDate;

    
    private ?string $SummaryXml;

    
    private ?string $SummaryDuration;

    
    private bool $Enter;

    
    private bool $Exit;

    
    private bool $Feedback;

    
    private ?string $CoursePackageURL;

    
    private ?string $CourseMarqueeURL;

    
    private ?string $CertificateXml;

    
    private ?string $NotificationSettingXml;

    
    private ?string $Notes;

    
    private ?string $ManualUpdateNotes;

    
    private bool $ManualCompleted;

    
    private DateTimeInterface $AuditTimestamp;

    
    private ?string $ApprovalCode;

    
    private DateTimeInterface $LastModifiedTimestamp;

    
    private bool $UpdateInProgress;

    
    private DateTimeInterface $UpdateInProgressTimestamp;

    
    private ?string $PortfolioEvidenceText;

    
    private bool $CreditStatementAvailable;

    
    private ?string $OpenBadgeID;

    
    public function getType(): ?string
    {
        return $this->Type;
    }

    
    public function withType(?string $Type): static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    
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

    
    public function getIsOnline(): bool
    {
        return $this->IsOnline;
    }

    
    public function withIsOnline(bool $IsOnline): static
    {
        $new = clone $this;
        $new->IsOnline = $IsOnline;

        return $new;
    }

    
    public function getIsAssessment(): bool
    {
        return $this->IsAssessment;
    }

    
    public function withIsAssessment(bool $IsAssessment): static
    {
        $new = clone $this;
        $new->IsAssessment = $IsAssessment;

        return $new;
    }

    
    public function getHasFeedBack(): bool
    {
        return $this->HasFeedBack;
    }

    
    public function withHasFeedBack(bool $HasFeedBack): static
    {
        $new = clone $this;
        $new->HasFeedBack = $HasFeedBack;

        return $new;
    }

    
    public function getFullScreen(): ?string
    {
        return $this->FullScreen;
    }

    
    public function withFullScreen(?string $FullScreen): static
    {
        $new = clone $this;
        $new->FullScreen = $FullScreen;

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

    
    public function getDomainID(): ?string
    {
        return $this->DomainID;
    }

    
    public function withDomainID(?string $DomainID): static
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

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

    
    public function getStudentDisplayID(): ?string
    {
        return $this->StudentDisplayID;
    }

    
    public function withStudentDisplayID(?string $StudentDisplayID): static
    {
        $new = clone $this;
        $new->StudentDisplayID = $StudentDisplayID;

        return $new;
    }

    
    public function getStudentName(): ?string
    {
        return $this->StudentName;
    }

    
    public function withStudentName(?string $StudentName): static
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    
    public function getStudentEmail(): ?string
    {
        return $this->StudentEmail;
    }

    
    public function withStudentEmail(?string $StudentEmail): static
    {
        $new = clone $this;
        $new->StudentEmail = $StudentEmail;

        return $new;
    }

    
    public function getStudentCmiName(): ?string
    {
        return $this->StudentCmiName;
    }

    
    public function withStudentCmiName(?string $StudentCmiName): static
    {
        $new = clone $this;
        $new->StudentCmiName = $StudentCmiName;

        return $new;
    }

    
    public function getStudentLanguage(): ?string
    {
        return $this->StudentLanguage;
    }

    
    public function withStudentLanguage(?string $StudentLanguage): static
    {
        $new = clone $this;
        $new->StudentLanguage = $StudentLanguage;

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

    
    public function getCourseTitle(): ?string
    {
        return $this->CourseTitle;
    }

    
    public function withCourseTitle(?string $CourseTitle): static
    {
        $new = clone $this;
        $new->CourseTitle = $CourseTitle;

        return $new;
    }

    
    public function getIsAccesscodeValidated(): bool
    {
        return $this->IsAccesscodeValidated;
    }

    
    public function withIsAccesscodeValidated(bool $IsAccesscodeValidated): static
    {
        $new = clone $this;
        $new->IsAccesscodeValidated = $IsAccesscodeValidated;

        return $new;
    }

    
    public function getFeedbackLoaded(): bool
    {
        return $this->FeedbackLoaded;
    }

    
    public function withFeedbackLoaded(bool $FeedbackLoaded): static
    {
        $new = clone $this;
        $new->FeedbackLoaded = $FeedbackLoaded;

        return $new;
    }

    
    public function getCourseDescription(): ?string
    {
        return $this->CourseDescription;
    }

    
    public function withCourseDescription(?string $CourseDescription): static
    {
        $new = clone $this;
        $new->CourseDescription = $CourseDescription;

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

    
    public function getCourseCode(): ?string
    {
        return $this->CourseCode;
    }

    
    public function withCourseCode(?string $CourseCode): static
    {
        $new = clone $this;
        $new->CourseCode = $CourseCode;

        return $new;
    }

    
    public function getCourseProgram(): ?string
    {
        return $this->CourseProgram;
    }

    
    public function withCourseProgram(?string $CourseProgram): static
    {
        $new = clone $this;
        $new->CourseProgram = $CourseProgram;

        return $new;
    }

    
    public function getCourseProgramID(): ?string
    {
        return $this->CourseProgramID;
    }

    
    public function withCourseProgramID(?string $CourseProgramID): static
    {
        $new = clone $this;
        $new->CourseProgramID = $CourseProgramID;

        return $new;
    }

    
    public function getProgramCode(): ?string
    {
        return $this->ProgramCode;
    }

    
    public function withProgramCode(?string $ProgramCode): static
    {
        $new = clone $this;
        $new->ProgramCode = $ProgramCode;

        return $new;
    }

    
    public function getLastProgram(): ?string
    {
        return $this->LastProgram;
    }

    
    public function withLastProgram(?string $LastProgram): static
    {
        $new = clone $this;
        $new->LastProgram = $LastProgram;

        return $new;
    }

    
    public function getEnrolledFromProgram(): ?string
    {
        return $this->EnrolledFromProgram;
    }

    
    public function withEnrolledFromProgram(?string $EnrolledFromProgram): static
    {
        $new = clone $this;
        $new->EnrolledFromProgram = $EnrolledFromProgram;

        return $new;
    }

    
    public function getCohortID(): ?string
    {
        return $this->CohortID;
    }

    
    public function withCohortID(?string $CohortID): static
    {
        $new = clone $this;
        $new->CohortID = $CohortID;

        return $new;
    }

    
    public function getLearningPathID(): ?string
    {
        return $this->LearningPathID;
    }

    
    public function withLearningPathID(?string $LearningPathID): static
    {
        $new = clone $this;
        $new->LearningPathID = $LearningPathID;

        return $new;
    }

    
    public function getArchived(): bool
    {
        return $this->Archived;
    }

    
    public function withArchived(bool $Archived): static
    {
        $new = clone $this;
        $new->Archived = $Archived;

        return $new;
    }

    
    public function getAnon(): bool
    {
        return $this->Anon;
    }

    
    public function withAnon(bool $Anon): static
    {
        $new = clone $this;
        $new->Anon = $Anon;

        return $new;
    }

    
    public function getIsLocked(): bool
    {
        return $this->IsLocked;
    }

    
    public function withIsLocked(bool $IsLocked): static
    {
        $new = clone $this;
        $new->IsLocked = $IsLocked;

        return $new;
    }

    
    public function getLockReason(): ?string
    {
        return $this->LockReason;
    }

    
    public function withLockReason(?string $LockReason): static
    {
        $new = clone $this;
        $new->LockReason = $LockReason;

        return $new;
    }

    
    public function getCourseVersion(): int
    {
        return $this->CourseVersion;
    }

    
    public function withCourseVersion(int $CourseVersion): static
    {
        $new = clone $this;
        $new->CourseVersion = $CourseVersion;

        return $new;
    }

    
    public function getScormVersion(): ?string
    {
        return $this->ScormVersion;
    }

    
    public function withScormVersion(?string $ScormVersion): static
    {
        $new = clone $this;
        $new->ScormVersion = $ScormVersion;

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

    
    public function getCreditOnlyOnPass(): bool
    {
        return $this->CreditOnlyOnPass;
    }

    
    public function withCreditOnlyOnPass(bool $CreditOnlyOnPass): static
    {
        $new = clone $this;
        $new->CreditOnlyOnPass = $CreditOnlyOnPass;

        return $new;
    }

    
    public function getCanGrantCertificate(): bool
    {
        return $this->CanGrantCertificate;
    }

    
    public function withCanGrantCertificate(bool $CanGrantCertificate): static
    {
        $new = clone $this;
        $new->CanGrantCertificate = $CanGrantCertificate;

        return $new;
    }

    
    public function getCertificateType(): ?string
    {
        return $this->CertificateType;
    }

    
    public function withCertificateType(?string $CertificateType): static
    {
        $new = clone $this;
        $new->CertificateType = $CertificateType;

        return $new;
    }

    
    public function getCertificateScore(): int
    {
        return $this->CertificateScore;
    }

    
    public function withCertificateScore(int $CertificateScore): static
    {
        $new = clone $this;
        $new->CertificateScore = $CertificateScore;

        return $new;
    }

    
    public function getDoNotGrandCertificateUnlessCreditIssued(): bool
    {
        return $this->DoNotGrandCertificateUnlessCreditIssued;
    }

    
    public function withDoNotGrandCertificateUnlessCreditIssued(bool $DoNotGrandCertificateUnlessCreditIssued): static
    {
        $new = clone $this;
        $new->DoNotGrandCertificateUnlessCreditIssued = $DoNotGrandCertificateUnlessCreditIssued;

        return $new;
    }

    
    public function getCertificateMinTime(): float
    {
        return $this->CertificateMinTime;
    }

    
    public function withCertificateMinTime(float $CertificateMinTime): static
    {
        $new = clone $this;
        $new->CertificateMinTime = $CertificateMinTime;

        return $new;
    }

    
    public function getCertificateExpiring(): DateTimeInterface
    {
        return $this->CertificateExpiring;
    }

    
    public function withCertificateExpiring(DateTimeInterface $CertificateExpiring): static
    {
        $new = clone $this;
        $new->CertificateExpiring = $CertificateExpiring;

        return $new;
    }

    
    public function getGrantCertificate(): bool
    {
        return $this->GrantCertificate;
    }

    
    public function withGrantCertificate(bool $GrantCertificate): static
    {
        $new = clone $this;
        $new->GrantCertificate = $GrantCertificate;

        return $new;
    }

    
    public function getHasCertificate(): bool
    {
        return $this->HasCertificate;
    }

    
    public function withHasCertificate(bool $HasCertificate): static
    {
        $new = clone $this;
        $new->HasCertificate = $HasCertificate;

        return $new;
    }

    
    public function getGrantCredit(): bool
    {
        return $this->GrantCredit;
    }

    
    public function withGrantCredit(bool $GrantCredit): static
    {
        $new = clone $this;
        $new->GrantCredit = $GrantCredit;

        return $new;
    }

    
    public function getAttempt(): int
    {
        return $this->Attempt;
    }

    
    public function withAttempt(int $Attempt): static
    {
        $new = clone $this;
        $new->Attempt = $Attempt;

        return $new;
    }

    
    public function getPassID(): ?string
    {
        return $this->PassID;
    }

    
    public function withPassID(?string $PassID): static
    {
        $new = clone $this;
        $new->PassID = $PassID;

        return $new;
    }

    
    public function getLearningObjectIsActive(): bool
    {
        return $this->LearningObjectIsActive;
    }

    
    public function withLearningObjectIsActive(bool $LearningObjectIsActive): static
    {
        $new = clone $this;
        $new->LearningObjectIsActive = $LearningObjectIsActive;

        return $new;
    }

    
    public function getHasForum(): bool
    {
        return $this->HasForum;
    }

    
    public function withHasForum(bool $HasForum): static
    {
        $new = clone $this;
        $new->HasForum = $HasForum;

        return $new;
    }

    
    public function getHasChat(): bool
    {
        return $this->HasChat;
    }

    
    public function withHasChat(bool $HasChat): static
    {
        $new = clone $this;
        $new->HasChat = $HasChat;

        return $new;
    }

    
    public function getTeachingAsstID(): ?string
    {
        return $this->TeachingAsstID;
    }

    
    public function withTeachingAsstID(?string $TeachingAsstID): static
    {
        $new = clone $this;
        $new->TeachingAsstID = $TeachingAsstID;

        return $new;
    }

    
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    
    public function withStatus(?string $Status): static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    
    public function getCompletionStatus(): ?string
    {
        return $this->CompletionStatus;
    }

    
    public function withCompletionStatus(?string $CompletionStatus): static
    {
        $new = clone $this;
        $new->CompletionStatus = $CompletionStatus;

        return $new;
    }

    
    public function getRequiresCompletedStatusForCompletion(): bool
    {
        return $this->RequiresCompletedStatusForCompletion;
    }

    
    public function withRequiresCompletedStatusForCompletion(bool $RequiresCompletedStatusForCompletion): static
    {
        $new = clone $this;
        $new->RequiresCompletedStatusForCompletion = $RequiresCompletedStatusForCompletion;

        return $new;
    }

    
    public function getRequiresFeedbackForCompletion(): bool
    {
        return $this->RequiresFeedbackForCompletion;
    }

    
    public function withRequiresFeedbackForCompletion(bool $RequiresFeedbackForCompletion): static
    {
        $new = clone $this;
        $new->RequiresFeedbackForCompletion = $RequiresFeedbackForCompletion;

        return $new;
    }

    
    public function getRequireFeedbackPopUp(): bool
    {
        return $this->RequireFeedbackPopUp;
    }

    
    public function withRequireFeedbackPopUp(bool $RequireFeedbackPopUp): static
    {
        $new = clone $this;
        $new->RequireFeedbackPopUp = $RequireFeedbackPopUp;

        return $new;
    }

    
    public function getRequireAssignmentForCompletion(): bool
    {
        return $this->RequireAssignmentForCompletion;
    }

    
    public function withRequireAssignmentForCompletion(bool $RequireAssignmentForCompletion): static
    {
        $new = clone $this;
        $new->RequireAssignmentForCompletion = $RequireAssignmentForCompletion;

        return $new;
    }

    
    public function getRequireAssesmentForCompletion(): bool
    {
        return $this->RequireAssesmentForCompletion;
    }

    
    public function withRequireAssesmentForCompletion(bool $RequireAssesmentForCompletion): static
    {
        $new = clone $this;
        $new->RequireAssesmentForCompletion = $RequireAssesmentForCompletion;

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

    
    public function getProcessUnknown(): bool
    {
        return $this->ProcessUnknown;
    }

    
    public function withProcessUnknown(bool $ProcessUnknown): static
    {
        $new = clone $this;
        $new->ProcessUnknown = $ProcessUnknown;

        return $new;
    }

    
    public function getOverrideAPISuccess(): bool
    {
        return $this->OverrideAPISuccess;
    }

    
    public function withOverrideAPISuccess(bool $OverrideAPISuccess): static
    {
        $new = clone $this;
        $new->OverrideAPISuccess = $OverrideAPISuccess;

        return $new;
    }

    
    public function getMinPassingScore(): int
    {
        return $this->MinPassingScore;
    }

    
    public function withMinPassingScore(int $MinPassingScore): static
    {
        $new = clone $this;
        $new->MinPassingScore = $MinPassingScore;

        return $new;
    }

    
    public function getBarAccess(): bool
    {
        return $this->BarAccess;
    }

    
    public function withBarAccess(bool $BarAccess): static
    {
        $new = clone $this;
        $new->BarAccess = $BarAccess;

        return $new;
    }

    
    public function getSuccess(): ?string
    {
        return $this->Success;
    }

    
    public function withSuccess(?string $Success): static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    
    public function getEntrySuccess(): ?string
    {
        return $this->EntrySuccess;
    }

    
    public function withEntrySuccess(?string $EntrySuccess): static
    {
        $new = clone $this;
        $new->EntrySuccess = $EntrySuccess;

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

    
    public function getEnrollmentNotes(): ?string
    {
        return $this->EnrollmentNotes;
    }

    
    public function withEnrollmentNotes(?string $EnrollmentNotes): static
    {
        $new = clone $this;
        $new->EnrollmentNotes = $EnrollmentNotes;

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

    
    public function getDueDate(): DateTimeInterface
    {
        return $this->DueDate;
    }

    
    public function withDueDate(DateTimeInterface $DueDate): static
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }

    
    public function getCompletedDate(): DateTimeInterface
    {
        return $this->CompletedDate;
    }

    
    public function withCompletedDate(DateTimeInterface $CompletedDate): static
    {
        $new = clone $this;
        $new->CompletedDate = $CompletedDate;

        return $new;
    }

    
    public function getOverallCompletedDate(): DateTimeInterface
    {
        return $this->OverallCompletedDate;
    }

    
    public function withOverallCompletedDate(DateTimeInterface $OverallCompletedDate): static
    {
        $new = clone $this;
        $new->OverallCompletedDate = $OverallCompletedDate;

        return $new;
    }

    
    public function getLastDateAttempted(): DateTimeInterface
    {
        return $this->LastDateAttempted;
    }

    
    public function withLastDateAttempted(DateTimeInterface $LastDateAttempted): static
    {
        $new = clone $this;
        $new->LastDateAttempted = $LastDateAttempted;

        return $new;
    }

    
    public function getTotalCourseAttempts(): int
    {
        return $this->TotalCourseAttempts;
    }

    
    public function withTotalCourseAttempts(int $TotalCourseAttempts): static
    {
        $new = clone $this;
        $new->TotalCourseAttempts = $TotalCourseAttempts;

        return $new;
    }

    
    public function getRecordStartDate(): DateTimeInterface
    {
        return $this->RecordStartDate;
    }

    
    public function withRecordStartDate(DateTimeInterface $RecordStartDate): static
    {
        $new = clone $this;
        $new->RecordStartDate = $RecordStartDate;

        return $new;
    }

    
    public function getCourseStartDate(): DateTimeInterface
    {
        return $this->CourseStartDate;
    }

    
    public function withCourseStartDate(DateTimeInterface $CourseStartDate): static
    {
        $new = clone $this;
        $new->CourseStartDate = $CourseStartDate;

        return $new;
    }

    
    public function getCourseImmediateStart(): bool
    {
        return $this->CourseImmediateStart;
    }

    
    public function withCourseImmediateStart(bool $CourseImmediateStart): static
    {
        $new = clone $this;
        $new->CourseImmediateStart = $CourseImmediateStart;

        return $new;
    }

    
    public function getLastModule(): ?string
    {
        return $this->LastModule;
    }

    
    public function withLastModule(?string $LastModule): static
    {
        $new = clone $this;
        $new->LastModule = $LastModule;

        return $new;
    }

    
    public function getLastModuleName(): ?string
    {
        return $this->LastModuleName;
    }

    
    public function withLastModuleName(?string $LastModuleName): static
    {
        $new = clone $this;
        $new->LastModuleName = $LastModuleName;

        return $new;
    }

    
    public function getProctorComment(): ?string
    {
        return $this->ProctorComment;
    }

    
    public function withProctorComment(?string $ProctorComment): static
    {
        $new = clone $this;
        $new->ProctorComment = $ProctorComment;

        return $new;
    }

    
    public function getScore(): int
    {
        return $this->Score;
    }

    
    public function withScore(int $Score): static
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    
    public function getEntryScore(): int
    {
        return $this->EntryScore;
    }

    
    public function withEntryScore(int $EntryScore): static
    {
        $new = clone $this;
        $new->EntryScore = $EntryScore;

        return $new;
    }

    
    public function getTotalAverageScore(): float
    {
        return $this->TotalAverageScore;
    }

    
    public function withTotalAverageScore(float $TotalAverageScore): static
    {
        $new = clone $this;
        $new->TotalAverageScore = $TotalAverageScore;

        return $new;
    }

    
    public function getPartialScore(): float
    {
        return $this->PartialScore;
    }

    
    public function withPartialScore(float $PartialScore): static
    {
        $new = clone $this;
        $new->PartialScore = $PartialScore;

        return $new;
    }

    
    public function getPercentCompleted(): float
    {
        return $this->PercentCompleted;
    }

    
    public function withPercentCompleted(float $PercentCompleted): static
    {
        $new = clone $this;
        $new->PercentCompleted = $PercentCompleted;

        return $new;
    }

    
    public function getTimeout(): int
    {
        return $this->Timeout;
    }

    
    public function withTimeout(int $Timeout): static
    {
        $new = clone $this;
        $new->Timeout = $Timeout;

        return $new;
    }

    
    public function getCourseDisclaimerAgreed(): bool
    {
        return $this->CourseDisclaimerAgreed;
    }

    
    public function withCourseDisclaimerAgreed(bool $CourseDisclaimerAgreed): static
    {
        $new = clone $this;
        $new->CourseDisclaimerAgreed = $CourseDisclaimerAgreed;

        return $new;
    }

    
    public function getDisclaimerAgreedDate(): DateTimeInterface
    {
        return $this->DisclaimerAgreedDate;
    }

    
    public function withDisclaimerAgreedDate(DateTimeInterface $DisclaimerAgreedDate): static
    {
        $new = clone $this;
        $new->DisclaimerAgreedDate = $DisclaimerAgreedDate;

        return $new;
    }

    
    public function getSummaryXml(): ?string
    {
        return $this->SummaryXml;
    }

    
    public function withSummaryXml(?string $SummaryXml): static
    {
        $new = clone $this;
        $new->SummaryXml = $SummaryXml;

        return $new;
    }

    
    public function getSummaryDuration(): ?string
    {
        return $this->SummaryDuration;
    }

    
    public function withSummaryDuration(?string $SummaryDuration): static
    {
        $new = clone $this;
        $new->SummaryDuration = $SummaryDuration;

        return $new;
    }

    
    public function getEnter(): bool
    {
        return $this->Enter;
    }

    
    public function withEnter(bool $Enter): static
    {
        $new = clone $this;
        $new->Enter = $Enter;

        return $new;
    }

    
    public function getExit(): bool
    {
        return $this->Exit;
    }

    
    public function withExit(bool $Exit): static
    {
        $new = clone $this;
        $new->Exit = $Exit;

        return $new;
    }

    
    public function getFeedback(): bool
    {
        return $this->Feedback;
    }

    
    public function withFeedback(bool $Feedback): static
    {
        $new = clone $this;
        $new->Feedback = $Feedback;

        return $new;
    }

    
    public function getCoursePackageURL(): ?string
    {
        return $this->CoursePackageURL;
    }

    
    public function withCoursePackageURL(?string $CoursePackageURL): static
    {
        $new = clone $this;
        $new->CoursePackageURL = $CoursePackageURL;

        return $new;
    }

    
    public function getCourseMarqueeURL(): ?string
    {
        return $this->CourseMarqueeURL;
    }

    
    public function withCourseMarqueeURL(?string $CourseMarqueeURL): static
    {
        $new = clone $this;
        $new->CourseMarqueeURL = $CourseMarqueeURL;

        return $new;
    }

    
    public function getCertificateXml(): ?string
    {
        return $this->CertificateXml;
    }

    
    public function withCertificateXml(?string $CertificateXml): static
    {
        $new = clone $this;
        $new->CertificateXml = $CertificateXml;

        return $new;
    }

    
    public function getNotificationSettingXml(): ?string
    {
        return $this->NotificationSettingXml;
    }

    
    public function withNotificationSettingXml(?string $NotificationSettingXml): static
    {
        $new = clone $this;
        $new->NotificationSettingXml = $NotificationSettingXml;

        return $new;
    }

    
    public function getNotes(): ?string
    {
        return $this->Notes;
    }

    
    public function withNotes(?string $Notes): static
    {
        $new = clone $this;
        $new->Notes = $Notes;

        return $new;
    }

    
    public function getManualUpdateNotes(): ?string
    {
        return $this->ManualUpdateNotes;
    }

    
    public function withManualUpdateNotes(?string $ManualUpdateNotes): static
    {
        $new = clone $this;
        $new->ManualUpdateNotes = $ManualUpdateNotes;

        return $new;
    }

    
    public function getManualCompleted(): bool
    {
        return $this->ManualCompleted;
    }

    
    public function withManualCompleted(bool $ManualCompleted): static
    {
        $new = clone $this;
        $new->ManualCompleted = $ManualCompleted;

        return $new;
    }

    
    public function getAuditTimestamp(): DateTimeInterface
    {
        return $this->AuditTimestamp;
    }

    
    public function withAuditTimestamp(DateTimeInterface $AuditTimestamp): static
    {
        $new = clone $this;
        $new->AuditTimestamp = $AuditTimestamp;

        return $new;
    }

    
    public function getApprovalCode(): ?string
    {
        return $this->ApprovalCode;
    }

    
    public function withApprovalCode(?string $ApprovalCode): static
    {
        $new = clone $this;
        $new->ApprovalCode = $ApprovalCode;

        return $new;
    }

    
    public function getLastModifiedTimestamp(): DateTimeInterface
    {
        return $this->LastModifiedTimestamp;
    }

    
    public function withLastModifiedTimestamp(DateTimeInterface $LastModifiedTimestamp): static
    {
        $new = clone $this;
        $new->LastModifiedTimestamp = $LastModifiedTimestamp;

        return $new;
    }

    
    public function getUpdateInProgress(): bool
    {
        return $this->UpdateInProgress;
    }

    
    public function withUpdateInProgress(bool $UpdateInProgress): static
    {
        $new = clone $this;
        $new->UpdateInProgress = $UpdateInProgress;

        return $new;
    }

    
    public function getUpdateInProgressTimestamp(): DateTimeInterface
    {
        return $this->UpdateInProgressTimestamp;
    }

    
    public function withUpdateInProgressTimestamp(DateTimeInterface $UpdateInProgressTimestamp): static
    {
        $new = clone $this;
        $new->UpdateInProgressTimestamp = $UpdateInProgressTimestamp;

        return $new;
    }

    
    public function getPortfolioEvidenceText(): ?string
    {
        return $this->PortfolioEvidenceText;
    }

    
    public function withPortfolioEvidenceText(?string $PortfolioEvidenceText): static
    {
        $new = clone $this;
        $new->PortfolioEvidenceText = $PortfolioEvidenceText;

        return $new;
    }

    
    public function getCreditStatementAvailable(): bool
    {
        return $this->CreditStatementAvailable;
    }

    
    public function withCreditStatementAvailable(bool $CreditStatementAvailable): static
    {
        $new = clone $this;
        $new->CreditStatementAvailable = $CreditStatementAvailable;

        return $new;
    }

    
    public function getOpenBadgeID(): ?string
    {
        return $this->OpenBadgeID;
    }

    
    public function withOpenBadgeID(?string $OpenBadgeID): static
    {
        $new = clone $this;
        $new->OpenBadgeID = $OpenBadgeID;

        return $new;
    }
}
