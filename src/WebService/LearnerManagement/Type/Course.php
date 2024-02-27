<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Course extends LearningType
{
    private ?string $Type;

    
    private bool $IsOnline;

    
    private ?string $Keywords;

    
    private float $CreditValue;

    
    private int $CertificateScore;

    
    private float $CertificateMinTime;

    
    private ?string $CertificateType;

    
    private bool $CanPrintCertificate;

    
    private bool $LimitReenroll;

    
    private int $MaxReenrollment;

    
    private int $ExpireUnit;

    
    private ?string $ExpireInterval;

    
    private int $NotifyUnit;

    
    private ?string $NotifyInterval;

    
    private bool $ProctorSignIn;

    
    private ?string $ShowModule;

    
    private ?string $ShowMenu;

    
    private ?string $LastProgramID;

    
    private ?string $ProgramPath;

    
    private ?string $ModeratorID;

    
    private ?string $ModeratorName;

    
    private ?string $ModeratorUserName;

    
    private ?string $AutoEnrollFields;

    
    private ?ArrayOfString $TeachingAssts;

    
    private ?string $TeachingAssistantList;

    
    private bool $HasAssignments;

    
    private bool $AllowReviewAfterAttemptEnd;

    
    private ?ArrayOfAssignment $Assignments;

    
    private ?ArrayOfCourseAssignment $CourseAssignments;

    
    private bool $MasterGlossary;

    
    private ?ArrayOfAnyType $Sessions;

    
    private ?ArrayOfAnyType $PendingApprovalSessions;

    
    private int $TotalEnrolled;

    
    private int $TotalCompleted;

    
    private int $TotalActive;

    
    private int $TeachingAsstActive;

    
    private bool $StudentPrerequisites;

    
    private int $AssignmentCount;

    
    private bool $ProxyAzure;

    
    private bool $ProxyImages;

    
    private bool $RunDirect;

    
    private bool $RunDirectAlways;

    
    private ?ArrayOfCourseStylesheet $Stylesheets;

    
    private bool $Published;

    
    private bool $AllowCollaboration;

    
    private bool $EndCollaborationOnCompletion;

    
    private ?string $CollaborationTitle;

    
    private ?string $CollaborationDescription;

    
    private ?string $CollaborationCustomFields;

    
    private ?ArrayOfCourseVersion $Versions;

    
    private bool $HasChat;

    
    private bool $ForceUserFeedback;

    
    private ?FeedbackSection $Feedback;

    
    private bool $IsAssessment;

    
    private bool $HasSample;

    
    private bool $UseOwnerSettingsForShared;

    
    private ?ArrayOfCourseNotification $CourseNotifications;

    
    private int $ClassSize;

    
    private bool $ManualEnrollOverClassSize;

    
    private int $WaitlistCutoffUnit;

    
    private ?string $WailtistCutoffInterval;

    
    private bool $AllowWaitlist;

    
    private int $WaitlistMaxNo;

    
    private int $MinOptionalSessions;

    
    private bool $RecordAttendance;

    
    private ?string $RecordAttendanceMode;

    
    private bool $ShowSignInRelatedContent;

    
    private bool $ShowSignInLearners;

    
    private bool $SignInWithBadge;

    
    private bool $CompleteSessionWhenJoinByLearner;

    
    private bool $RecordScore;

    
    private bool $RecordComments;

    
    private bool $RequiresChallenge;

    
    private int $ChallengeMaxAttempt;

    
    private bool $LockChallengeFailed;

    
    private int $ChallengeFrequency;

    
    private bool $AddTimeInReadOnly;

    
    private int $Timeout;

    
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

    
    public function getKeywords(): ?string
    {
        return $this->Keywords;
    }

    
    public function withKeywords(?string $Keywords): static
    {
        $new = clone $this;
        $new->Keywords = $Keywords;

        return $new;
    }

    
    public function getCreditValue(): float
    {
        return $this->CreditValue;
    }

    
    public function withCreditValue(float $CreditValue): static
    {
        $new = clone $this;
        $new->CreditValue = $CreditValue;

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

    
    public function getCanPrintCertificate(): bool
    {
        return $this->CanPrintCertificate;
    }

    
    public function withCanPrintCertificate(bool $CanPrintCertificate): static
    {
        $new = clone $this;
        $new->CanPrintCertificate = $CanPrintCertificate;

        return $new;
    }

    
    public function getLimitReenroll(): bool
    {
        return $this->LimitReenroll;
    }

    
    public function withLimitReenroll(bool $LimitReenroll): static
    {
        $new = clone $this;
        $new->LimitReenroll = $LimitReenroll;

        return $new;
    }

    
    public function getMaxReenrollment(): int
    {
        return $this->MaxReenrollment;
    }

    
    public function withMaxReenrollment(int $MaxReenrollment): static
    {
        $new = clone $this;
        $new->MaxReenrollment = $MaxReenrollment;

        return $new;
    }

    
    public function getExpireUnit(): int
    {
        return $this->ExpireUnit;
    }

    
    public function withExpireUnit(int $ExpireUnit): static
    {
        $new = clone $this;
        $new->ExpireUnit = $ExpireUnit;

        return $new;
    }

    
    public function getExpireInterval(): ?string
    {
        return $this->ExpireInterval;
    }

    
    public function withExpireInterval(?string $ExpireInterval): static
    {
        $new = clone $this;
        $new->ExpireInterval = $ExpireInterval;

        return $new;
    }

    
    public function getNotifyUnit(): int
    {
        return $this->NotifyUnit;
    }

    
    public function withNotifyUnit(int $NotifyUnit): static
    {
        $new = clone $this;
        $new->NotifyUnit = $NotifyUnit;

        return $new;
    }

    
    public function getNotifyInterval(): ?string
    {
        return $this->NotifyInterval;
    }

    
    public function withNotifyInterval(?string $NotifyInterval): static
    {
        $new = clone $this;
        $new->NotifyInterval = $NotifyInterval;

        return $new;
    }

    
    public function getProctorSignIn(): bool
    {
        return $this->ProctorSignIn;
    }

    
    public function withProctorSignIn(bool $ProctorSignIn): static
    {
        $new = clone $this;
        $new->ProctorSignIn = $ProctorSignIn;

        return $new;
    }

    
    public function getShowModule(): ?string
    {
        return $this->ShowModule;
    }

    
    public function withShowModule(?string $ShowModule): static
    {
        $new = clone $this;
        $new->ShowModule = $ShowModule;

        return $new;
    }

    
    public function getShowMenu(): ?string
    {
        return $this->ShowMenu;
    }

    
    public function withShowMenu(?string $ShowMenu): static
    {
        $new = clone $this;
        $new->ShowMenu = $ShowMenu;

        return $new;
    }

    
    public function getLastProgramID(): ?string
    {
        return $this->LastProgramID;
    }

    
    public function withLastProgramID(?string $LastProgramID): static
    {
        $new = clone $this;
        $new->LastProgramID = $LastProgramID;

        return $new;
    }

    
    public function getProgramPath(): ?string
    {
        return $this->ProgramPath;
    }

    
    public function withProgramPath(?string $ProgramPath): static
    {
        $new = clone $this;
        $new->ProgramPath = $ProgramPath;

        return $new;
    }

    
    public function getModeratorID(): ?string
    {
        return $this->ModeratorID;
    }

    
    public function withModeratorID(?string $ModeratorID): static
    {
        $new = clone $this;
        $new->ModeratorID = $ModeratorID;

        return $new;
    }

    
    public function getModeratorName(): ?string
    {
        return $this->ModeratorName;
    }

    
    public function withModeratorName(?string $ModeratorName): static
    {
        $new = clone $this;
        $new->ModeratorName = $ModeratorName;

        return $new;
    }

    
    public function getModeratorUserName(): ?string
    {
        return $this->ModeratorUserName;
    }

    
    public function withModeratorUserName(?string $ModeratorUserName): static
    {
        $new = clone $this;
        $new->ModeratorUserName = $ModeratorUserName;

        return $new;
    }

    
    public function getAutoEnrollFields(): ?string
    {
        return $this->AutoEnrollFields;
    }

    
    public function withAutoEnrollFields(?string $AutoEnrollFields): static
    {
        $new = clone $this;
        $new->AutoEnrollFields = $AutoEnrollFields;

        return $new;
    }

    
    public function getTeachingAssts(): ?ArrayOfString
    {
        return $this->TeachingAssts;
    }

    
    public function withTeachingAssts(?ArrayOfString $TeachingAssts): static
    {
        $new = clone $this;
        $new->TeachingAssts = $TeachingAssts;

        return $new;
    }

    
    public function getTeachingAssistantList(): ?string
    {
        return $this->TeachingAssistantList;
    }

    
    public function withTeachingAssistantList(?string $TeachingAssistantList): static
    {
        $new = clone $this;
        $new->TeachingAssistantList = $TeachingAssistantList;

        return $new;
    }

    
    public function getHasAssignments(): bool
    {
        return $this->HasAssignments;
    }

    
    public function withHasAssignments(bool $HasAssignments): static
    {
        $new = clone $this;
        $new->HasAssignments = $HasAssignments;

        return $new;
    }

    
    public function getAllowReviewAfterAttemptEnd(): bool
    {
        return $this->AllowReviewAfterAttemptEnd;
    }

    
    public function withAllowReviewAfterAttemptEnd(bool $AllowReviewAfterAttemptEnd): static
    {
        $new = clone $this;
        $new->AllowReviewAfterAttemptEnd = $AllowReviewAfterAttemptEnd;

        return $new;
    }

    
    public function getAssignments(): ?ArrayOfAssignment
    {
        return $this->Assignments;
    }

    
    public function withAssignments(?ArrayOfAssignment $Assignments): static
    {
        $new = clone $this;
        $new->Assignments = $Assignments;

        return $new;
    }

    
    public function getCourseAssignments(): ?ArrayOfCourseAssignment
    {
        return $this->CourseAssignments;
    }

    
    public function withCourseAssignments(?ArrayOfCourseAssignment $CourseAssignments): static
    {
        $new = clone $this;
        $new->CourseAssignments = $CourseAssignments;

        return $new;
    }

    
    public function getMasterGlossary(): bool
    {
        return $this->MasterGlossary;
    }

    
    public function withMasterGlossary(bool $MasterGlossary): static
    {
        $new = clone $this;
        $new->MasterGlossary = $MasterGlossary;

        return $new;
    }

    
    public function getSessions(): ?ArrayOfAnyType
    {
        return $this->Sessions;
    }

    
    public function withSessions(?ArrayOfAnyType $Sessions): static
    {
        $new = clone $this;
        $new->Sessions = $Sessions;

        return $new;
    }

    
    public function getPendingApprovalSessions(): ?ArrayOfAnyType
    {
        return $this->PendingApprovalSessions;
    }

    
    public function withPendingApprovalSessions(?ArrayOfAnyType $PendingApprovalSessions): static
    {
        $new = clone $this;
        $new->PendingApprovalSessions = $PendingApprovalSessions;

        return $new;
    }

    
    public function getTotalEnrolled(): int
    {
        return $this->TotalEnrolled;
    }

    
    public function withTotalEnrolled(int $TotalEnrolled): static
    {
        $new = clone $this;
        $new->TotalEnrolled = $TotalEnrolled;

        return $new;
    }

    
    public function getTotalCompleted(): int
    {
        return $this->TotalCompleted;
    }

    
    public function withTotalCompleted(int $TotalCompleted): static
    {
        $new = clone $this;
        $new->TotalCompleted = $TotalCompleted;

        return $new;
    }

    
    public function getTotalActive(): int
    {
        return $this->TotalActive;
    }

    
    public function withTotalActive(int $TotalActive): static
    {
        $new = clone $this;
        $new->TotalActive = $TotalActive;

        return $new;
    }

    
    public function getTeachingAsstActive(): int
    {
        return $this->TeachingAsstActive;
    }

    
    public function withTeachingAsstActive(int $TeachingAsstActive): static
    {
        $new = clone $this;
        $new->TeachingAsstActive = $TeachingAsstActive;

        return $new;
    }

    
    public function getStudentPrerequisites(): bool
    {
        return $this->StudentPrerequisites;
    }

    
    public function withStudentPrerequisites(bool $StudentPrerequisites): static
    {
        $new = clone $this;
        $new->StudentPrerequisites = $StudentPrerequisites;

        return $new;
    }

    
    public function getAssignmentCount(): int
    {
        return $this->AssignmentCount;
    }

    
    public function withAssignmentCount(int $AssignmentCount): static
    {
        $new = clone $this;
        $new->AssignmentCount = $AssignmentCount;

        return $new;
    }

    
    public function getProxyAzure(): bool
    {
        return $this->ProxyAzure;
    }

    
    public function withProxyAzure(bool $ProxyAzure): static
    {
        $new = clone $this;
        $new->ProxyAzure = $ProxyAzure;

        return $new;
    }

    
    public function getProxyImages(): bool
    {
        return $this->ProxyImages;
    }

    
    public function withProxyImages(bool $ProxyImages): static
    {
        $new = clone $this;
        $new->ProxyImages = $ProxyImages;

        return $new;
    }

    
    public function getRunDirect(): bool
    {
        return $this->RunDirect;
    }

    
    public function withRunDirect(bool $RunDirect): static
    {
        $new = clone $this;
        $new->RunDirect = $RunDirect;

        return $new;
    }

    
    public function getRunDirectAlways(): bool
    {
        return $this->RunDirectAlways;
    }

    
    public function withRunDirectAlways(bool $RunDirectAlways): static
    {
        $new = clone $this;
        $new->RunDirectAlways = $RunDirectAlways;

        return $new;
    }

    
    public function getStylesheets(): ?ArrayOfCourseStylesheet
    {
        return $this->Stylesheets;
    }

    
    public function withStylesheets(?ArrayOfCourseStylesheet $Stylesheets): static
    {
        $new = clone $this;
        $new->Stylesheets = $Stylesheets;

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

    
    public function getCollaborationCustomFields(): ?string
    {
        return $this->CollaborationCustomFields;
    }

    
    public function withCollaborationCustomFields(?string $CollaborationCustomFields): static
    {
        $new = clone $this;
        $new->CollaborationCustomFields = $CollaborationCustomFields;

        return $new;
    }

    
    public function getVersions(): ?ArrayOfCourseVersion
    {
        return $this->Versions;
    }

    
    public function withVersions(?ArrayOfCourseVersion $Versions): static
    {
        $new = clone $this;
        $new->Versions = $Versions;

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

    
    public function getForceUserFeedback(): bool
    {
        return $this->ForceUserFeedback;
    }

    
    public function withForceUserFeedback(bool $ForceUserFeedback): static
    {
        $new = clone $this;
        $new->ForceUserFeedback = $ForceUserFeedback;

        return $new;
    }

    
    public function getFeedback(): ?FeedbackSection
    {
        return $this->Feedback;
    }

    
    public function withFeedback(?FeedbackSection $Feedback): static
    {
        $new = clone $this;
        $new->Feedback = $Feedback;

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

    
    public function getHasSample(): bool
    {
        return $this->HasSample;
    }

    
    public function withHasSample(bool $HasSample): static
    {
        $new = clone $this;
        $new->HasSample = $HasSample;

        return $new;
    }

    
    public function getUseOwnerSettingsForShared(): bool
    {
        return $this->UseOwnerSettingsForShared;
    }

    
    public function withUseOwnerSettingsForShared(bool $UseOwnerSettingsForShared): static
    {
        $new = clone $this;
        $new->UseOwnerSettingsForShared = $UseOwnerSettingsForShared;

        return $new;
    }

    
    public function getCourseNotifications(): ?ArrayOfCourseNotification
    {
        return $this->CourseNotifications;
    }

    
    public function withCourseNotifications(?ArrayOfCourseNotification $CourseNotifications): static
    {
        $new = clone $this;
        $new->CourseNotifications = $CourseNotifications;

        return $new;
    }

    
    public function getClassSize(): int
    {
        return $this->ClassSize;
    }

    
    public function withClassSize(int $ClassSize): static
    {
        $new = clone $this;
        $new->ClassSize = $ClassSize;

        return $new;
    }

    
    public function getManualEnrollOverClassSize(): bool
    {
        return $this->ManualEnrollOverClassSize;
    }

    
    public function withManualEnrollOverClassSize(bool $ManualEnrollOverClassSize): static
    {
        $new = clone $this;
        $new->ManualEnrollOverClassSize = $ManualEnrollOverClassSize;

        return $new;
    }

    
    public function getWaitlistCutoffUnit(): int
    {
        return $this->WaitlistCutoffUnit;
    }

    
    public function withWaitlistCutoffUnit(int $WaitlistCutoffUnit): static
    {
        $new = clone $this;
        $new->WaitlistCutoffUnit = $WaitlistCutoffUnit;

        return $new;
    }

    
    public function getWailtistCutoffInterval(): ?string
    {
        return $this->WailtistCutoffInterval;
    }

    
    public function withWailtistCutoffInterval(?string $WailtistCutoffInterval): static
    {
        $new = clone $this;
        $new->WailtistCutoffInterval = $WailtistCutoffInterval;

        return $new;
    }

    
    public function getAllowWaitlist(): bool
    {
        return $this->AllowWaitlist;
    }

    
    public function withAllowWaitlist(bool $AllowWaitlist): static
    {
        $new = clone $this;
        $new->AllowWaitlist = $AllowWaitlist;

        return $new;
    }

    
    public function getWaitlistMaxNo(): int
    {
        return $this->WaitlistMaxNo;
    }

    
    public function withWaitlistMaxNo(int $WaitlistMaxNo): static
    {
        $new = clone $this;
        $new->WaitlistMaxNo = $WaitlistMaxNo;

        return $new;
    }

    
    public function getMinOptionalSessions(): int
    {
        return $this->MinOptionalSessions;
    }

    
    public function withMinOptionalSessions(int $MinOptionalSessions): static
    {
        $new = clone $this;
        $new->MinOptionalSessions = $MinOptionalSessions;

        return $new;
    }

    
    public function getRecordAttendance(): bool
    {
        return $this->RecordAttendance;
    }

    
    public function withRecordAttendance(bool $RecordAttendance): static
    {
        $new = clone $this;
        $new->RecordAttendance = $RecordAttendance;

        return $new;
    }

    
    public function getRecordAttendanceMode(): ?string
    {
        return $this->RecordAttendanceMode;
    }

    
    public function withRecordAttendanceMode(?string $RecordAttendanceMode): static
    {
        $new = clone $this;
        $new->RecordAttendanceMode = $RecordAttendanceMode;

        return $new;
    }

    
    public function getShowSignInRelatedContent(): bool
    {
        return $this->ShowSignInRelatedContent;
    }

    
    public function withShowSignInRelatedContent(bool $ShowSignInRelatedContent): static
    {
        $new = clone $this;
        $new->ShowSignInRelatedContent = $ShowSignInRelatedContent;

        return $new;
    }

    
    public function getShowSignInLearners(): bool
    {
        return $this->ShowSignInLearners;
    }

    
    public function withShowSignInLearners(bool $ShowSignInLearners): static
    {
        $new = clone $this;
        $new->ShowSignInLearners = $ShowSignInLearners;

        return $new;
    }

    
    public function getSignInWithBadge(): bool
    {
        return $this->SignInWithBadge;
    }

    
    public function withSignInWithBadge(bool $SignInWithBadge): static
    {
        $new = clone $this;
        $new->SignInWithBadge = $SignInWithBadge;

        return $new;
    }

    
    public function getCompleteSessionWhenJoinByLearner(): bool
    {
        return $this->CompleteSessionWhenJoinByLearner;
    }

    
    public function withCompleteSessionWhenJoinByLearner(bool $CompleteSessionWhenJoinByLearner): static
    {
        $new = clone $this;
        $new->CompleteSessionWhenJoinByLearner = $CompleteSessionWhenJoinByLearner;

        return $new;
    }

    
    public function getRecordScore(): bool
    {
        return $this->RecordScore;
    }

    
    public function withRecordScore(bool $RecordScore): static
    {
        $new = clone $this;
        $new->RecordScore = $RecordScore;

        return $new;
    }

    
    public function getRecordComments(): bool
    {
        return $this->RecordComments;
    }

    
    public function withRecordComments(bool $RecordComments): static
    {
        $new = clone $this;
        $new->RecordComments = $RecordComments;

        return $new;
    }

    
    public function getRequiresChallenge(): bool
    {
        return $this->RequiresChallenge;
    }

    
    public function withRequiresChallenge(bool $RequiresChallenge): static
    {
        $new = clone $this;
        $new->RequiresChallenge = $RequiresChallenge;

        return $new;
    }

    
    public function getChallengeMaxAttempt(): int
    {
        return $this->ChallengeMaxAttempt;
    }

    
    public function withChallengeMaxAttempt(int $ChallengeMaxAttempt): static
    {
        $new = clone $this;
        $new->ChallengeMaxAttempt = $ChallengeMaxAttempt;

        return $new;
    }

    
    public function getLockChallengeFailed(): bool
    {
        return $this->LockChallengeFailed;
    }

    
    public function withLockChallengeFailed(bool $LockChallengeFailed): static
    {
        $new = clone $this;
        $new->LockChallengeFailed = $LockChallengeFailed;

        return $new;
    }

    
    public function getChallengeFrequency(): int
    {
        return $this->ChallengeFrequency;
    }

    
    public function withChallengeFrequency(int $ChallengeFrequency): static
    {
        $new = clone $this;
        $new->ChallengeFrequency = $ChallengeFrequency;

        return $new;
    }

    
    public function getAddTimeInReadOnly(): bool
    {
        return $this->AddTimeInReadOnly;
    }

    
    public function withAddTimeInReadOnly(bool $AddTimeInReadOnly): static
    {
        $new = clone $this;
        $new->AddTimeInReadOnly = $AddTimeInReadOnly;

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
}
