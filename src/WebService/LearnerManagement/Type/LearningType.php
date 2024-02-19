<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class LearningType
{
    private string $CourseType;

    
    private string $ID;

    
    private string $Code;

    
    private string $FullScreen;

    
    private string $Title;

    
    private string $Description;

    
    private string $Language;

    
    private DateTimeInterface $LastUpdatedTimestamp;

    
    private Base64Binary $Logo;

    
    private string $LogoContentType;

    
    private string $LogoID;

    
    private string $SeriesID;

    
    private string $SeriesName;

    
    private string $ProgramID;

    
    private string $ProgramName;

    
    private bool $IsActive;

    
    private string $SKU;

    
    private float $Price;

    
    private float $SubsequentPrice;

    
    private int $TokensValue;

    
    private int $SubsequentTokensValue;

    
    private string $Currency;

    
    private string $PaymentProvider;

    
    private bool $GrantCertificate;

    
    private bool $CertificateExpires;

    
    private AccreditationDetails $AccreditationDetails;

    
    private ArrayOfReference $References;

    
    private bool $IsShared;

    
    private string $ExclusionMode;

    
    private string $LeaningPathActivityLayout;

    
    private string $ShowLearnerProgressAs;

    
    private bool $ShowSharingLink;

    
    private bool $VideoShowScrubber;

    
    private bool $VideoBookmarkProgress;

    
    private bool $VideoStartAuto;

    
    private bool $VideoCompleteOnOpen;

    
    private bool $VideoCompleteOnEnd;

    
    private bool $VideoCompleteOnTime;

    
    private string $VideoCompleteOnTime_Minute;

    
    private string $VideoCompleteOnTime_Sec;

    
    private CaptionInfo $CaptionInfo;

    
    private bool $ManualEnrollNoMatch;

    
    private bool $WaitlistEnrollAfterLastWithdrawDate;

    
    private DateTimeInterface $LastUnenrollmentDate;

    
    private DateTimeInterface $FirstEnrollmentDate;

    
    private bool $UnlimitedLastEnrollment;

    
    private bool $LastEnrollmentBasedFirstEnrollmentDate;

    
    private string $LastEnrollmentBasedFirstEnrollmentDateSetting;

    
    private DateTimeInterface $LastEnrollmentDate;

    
    private bool $AllowEnrollAfterLastEnrollDate;

    
    private int $LastEnrollmentCutOff;

    
    private bool $AllowSupervisorExtendDueDate;

    
    private int $SupervisorExtensionDaysLimit;

    
    private string $SupervisorExtensionDaysLimitStartFrom;

    
    private DateTimeInterface $StartDate;

    
    private string $DueDate;

    
    private bool $AllowEnrollmentCodeAfterEnrollmentDate;

    
    private int $EnrollmentCodeAfterEnrollmentDate_NoOfDays;

    
    private bool $BarAccessAfterDue;

    
    private bool $SuspendAccess;

    
    private string $SuspendAccessDays;

    
    private bool $EnrollFromLPOnly;

    
    private bool $AutoEnroll;

    
    private bool $AutoEnrollAllDomainMembers;

    
    private ArrayOfAnyType $AutoenrollRules;

    
    private bool $AutoenrollRulesRequired;

    
    private string $AutoenrollRepeatType;

    
    private string $AutoenrollRepeatMonthCount;

    
    private DateTimeInterface $AutoenrollLastRunDate;

    
    private ArrayOfAnyType $AutoenrollExcludeRules;

    
    private bool $AutoenrollExcludeRulesRequired;

    
    private bool $ReAutoEnroll;

    
    private bool $UseAutoEnrollmentRuleForReEnroll;

    
    private ArrayOfAnyType $RecertificationAutoEnrollRules;

    
    private ArrayOfAnyType $RecertificationAutoEnrollExcludeRules;

    
    private bool $ReAutoEnrollmentAllowAll;

    
    private string $ReAutoenrollRepeatType;

    
    private string $ReAutoenrollRepeatMonthCount;

    
    private bool $ReAutoenrollAllRulesRequired;

    
    private DateTimeInterface $ReAutoenrollLastRunDate;

    
    private bool $ReAutoenrollAllExcludeRulesRequired;

    
    private bool $SelfEnroll;

    
    private bool $AllowTransfer;

    
    private bool $SelfEnrollAllDomainMembers;

    
    private bool $PermissionEnroll;

    
    private string $EnrollPermissionFrom;

    
    private bool $PaymentEnroll;

    
    private bool $TokensEnroll;

    
    private bool $AllowCoupons;

    
    private bool $GlobalTokensEnroll;

    
    private bool $PassEnroll;

    
    private bool $AllowPOPayment;

    
    private bool $AllowPass;

    
    private bool $AllowPurchaseForOthers;

    
    private bool $AllowAttendanceCodeToEnroll;

    
    private bool $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;

    
    private bool $AttendanceCodeEnrollFollowsRules;

    
    private bool $AllowAttendanceCode;

    
    private ArrayOfAnyType $SelfEnrollRules;

    
    private ArrayOfAnyType $SelfEnrollGroups;

    
    private bool $SelfEnrollGroupRequired;

    
    private bool $SelfEnrollRulesRequired;

    
    private ArrayOfAnyType $SelfEnrollExcludeRules;

    
    private bool $SelfEnrollExcludeRulesRequired;

    
    private bool $CanUnenroll;

    
    private bool $WithdrawAllDomainMembers;

    
    private bool $PermissionUnenroll;

    
    private string $UnenrollOption;

    
    private string $UnenrollPermissionFrom;

    
    private ArrayOfAnyType $WithdrawalRules;

    
    private bool $WithdrawalRulesRequired;

    
    private ArrayOfAnyType $WithdrawalExcludeRules;

    
    private bool $WithdrawalExcludeRulesRequired;

    
    private bool $AutoWithdraw;

    
    private bool $AutoWithdrawNotMatchingAutoRules;

    
    private ArrayOfAnyType $AutoWithdrawalRules;

    
    private bool $AutoWithdrawalRulesRequired;

    
    private ArrayOfAnyType $AutoWithdrawalExcludeRules;

    
    private bool $AutoWithdrawalExcludeRulesRequired;

    
    private ArrayOfAnyType $AnnouncementRules;

    
    private bool $AnnouncementRulesRequired;

    
    private ArrayOfAnyType $AnnouncementExcludeRules;

    
    private bool $AnnouncementExcludeRulesRequired;

    
    private bool $AutoEnrollSelfActivities;

    
    private bool $AutoEnrollManualActivities;

    
    private bool $IncludeAllInPrice;

    
    private bool $AutoEnrollLPActivities;

    
    private bool $ExcludeLPEnrollPurchaseActivities;

    
    private bool $ExcludeLPEnrollNotSelfEnrollActivities;

    
    private bool $WithdrawIncompleteLPActivitiesOnLPEnroll;

    
    private bool $FastStartLPActivities;

    
    private bool $StudentIsEnrolled;

    
    private bool $StudentHasPendingRequest;

    
    private bool $StudentHasPass;

    
    private bool $AllowAnonPreview;

    
    private string $FieldsXml;

    
    private string $BaseUrl;

    
    private bool $HasAccessCode;

    
    private string $AccessCode;

    
    private int $CourseSharingCount;

    
    private string $Disclaimer;

    
    private bool $ShowDisclaimerAlways;

    
    private bool $DisclaimerAgreed;

    
    private string $DisclaimerTextButton;

    
    private bool $HasDisclaimer;

    
    private bool $AllowMobileDownload;

    
    private ArrayOfAnyType $AltPrices;

    
    private string $InitialScormVersion;

    
    private string $ReviewStatus;

    
    private bool $SendAccreditationExpiryNotification;

    
    private bool $SendSessionStartLearnerNotification;

    
    private bool $SendSessionStartModeratorNotification;

    
    private bool $SendEnrollmentConfirmation;

    
    private bool $SendEnrollmentRequestNotification;

    
    private bool $SendThresholdNotification;

    
    private bool $SendStartDateNotificationLearner;

    
    private bool $NotifyModeratorEnroll;

    
    private bool $NotifySupervisorEnroll;

    
    private bool $NotifyStudentEnroll;

    
    private bool $SendEnrollmentRequestConfirmation;

    
    private bool $NotifyModeratorOnEnrollRequestConfirmation;

    
    private bool $NotifySupervisorOnEnrollRequestConfirmation;

    
    private bool $NotifyLearnerOnEnrollRequestConfirmation;

    
    private bool $SendDueDateReminder1;

    
    private bool $SendDueDateReminder2;

    
    private bool $SendDueDateReminder3;

    
    private bool $SendUpcomingILTReminder1;

    
    private bool $SendUpcomingILTReminder2;

    
    private bool $SendUpcomingILTReminder3;

    
    private bool $SendEnrollmentReminderNotification;

    
    private bool $SendLearningPathModificationNotification;

    
    private bool $NotifySupervisorOnEnrollmentReminder;

    
    private bool $SendWithdrawRequestNotification;

    
    private bool $NotifyModeratorOnWithdrawRequest;

    
    private bool $NotifySupervisorOnWithdrawRequest;

    
    private bool $NotifyModeratorCompletion;

    
    private bool $NotifySupervisorCompletion;

    
    private bool $NotifyLearnerCompletion;

    
    private bool $CompletionNotificationIncludeSuccess;

    
    private bool $CompletionNotificationIncludeScore;

    
    private bool $NotifyModeratorOnDue;

    
    private bool $NotifySupervisorOnDue;

    
    private bool $NotifySupervisorOnOverDue1;

    
    private bool $NotifySupervisorOnOverDue2;

    
    private bool $NotifySupervisorOnOverDue3;

    
    private bool $NotifySupervisorSupervisorOnOverDue1;

    
    private bool $NotifySupervisorSupervisorOnOverDue2;

    
    private bool $NotifySupervisorSupervisorOnOverDue3;

    
    private bool $NotifyModeratorOnOverDue1;

    
    private bool $NotifyModeratorOnOverDue2;

    
    private bool $NotifyModeratorOnOverDue3;

    
    private bool $NotifyLearnerOnOverDue1;

    
    private bool $NotifyLearnerOnOverDue2;

    
    private bool $NotifyLearnerOnOverDue3;

    
    private bool $SendDueDateNotification;

    
    private bool $NotifySupervisorOnMissedILTSession;

    
    private bool $NotifyModeratorOnMissedILTSession;

    
    private bool $NotifySupervisorOnWaitingList;

    
    private bool $NotifySupervisorOnWithdraw;

    
    private bool $NotifyModeratorOnWithdraw;

    
    private bool $NotifyModeratorOnWaitingList;

    
    private bool $NotifyModeratorOnDueDateReminder1;

    
    private bool $NotifyModeratorOnDueDateReminder2;

    
    private bool $NotifyModeratorOnDueDateReminder3;

    
    private bool $NotifySupervisorOnDueDateReminder1;

    
    private bool $NotifySupervisorOnDueDateReminder2;

    
    private bool $NotifySupervisorOnDueDateReminder3;

    
    private bool $NotifySupervisorOnUpcomingILTReminder1;

    
    private bool $NotifySupervisorOnUpcomingILTReminder2;

    
    private bool $NotifySupervisorOnUpcomingILTReminder3;

    
    private bool $NotifyModeratorOnUpcomingILTReminder1;

    
    private bool $NotifyModeratorOnUpcomingILTReminder2;

    
    private bool $NotifyModeratorOnUpcomingILTReminder3;

    
    private bool $SendOverDueNotification1;

    
    private bool $SendOverDueNotification2;

    
    private bool $SendOverDueNotification3;

    
    private bool $SendMissedSessionNotification;

    
    private bool $SendMissedILTSessionNotification;

    
    private bool $SendWaitingListNotification;

    
    private bool $SendWithdrawNotifications;

    
    private bool $SendCourseModificationNotification;

    
    private bool $SendCourseModificationNotificationToCompleted;

    
    private bool $SendCourseResourceModificationNotification;

    
    private bool $SendWaitingListModificationNotification;

    
    private bool $SendAssignmentReviewedNotification;

    
    private bool $SendPerformanceNotification;

    
    private bool $SendBadgeIssuedNotification;

    
    private bool $SendPendingNotification;

    
    private bool $SendFeedbackOverdueNotification;

    
    private bool $SendfeedbackDueDateNotification;

    
    private bool $SendAssignmentSubmittedNotification;

    
    private bool $SendActivityPeerReviewCancelled;

    
    private bool $SendActivityReviewApprovalExpiryReminder;

    
    private bool $SendExternalActivityApprovedAutomatically;

    
    private bool $SendExternalActivityRequiresApproval;

    
    private bool $SendForumPostApprovalRequired;

    
    private bool $SendForumPostApproved;

    
    private bool $SendForumPostDeclined;

    
    private bool $SendPasswordChanged;

    
    private bool $SendRecommendationInvitation;

    
    private bool $SendRecommendationOutCome;

    
    private bool $SendAccountVerification;

    
    private bool $SendSelfWithdraw;

    
    private bool $NotifySupervisorOnSelfWithdraw;

    
    private bool $NotifyModeratorOnSelfWithdraw;

    
    private bool $HasForum;

    
    private bool $ManualEnollOverrideLastEnrollmentDate;

    
    private bool $ManualEnollOverridePrerequisites;

    
    private bool $ManualEnollOverrideNotificationPeriod;

    
    private bool $ManualEnollOverrideMaxReEnrollments;

    
    private bool $ManualEnollOverrideSingleNonExpiringEnrollments;

    
    private int $ClassroomHeight;

    
    private int $ClassroomWidth;

    
    private string $ClassroomTemplate;

    
    private bool $ForceIECompatibilityMode;

    
    private bool $AllowModal;

    
    private bool $FullScreenSize;

    
    private string $OpenCourseIn;

    
    private bool $HasThreshold;

    
    private int $ThresholdValue;

    
    private bool $LimitSecurityAccess;

    
    private string $CreatorID;

    
    private bool $RequirePackageForCompletion;

    
    private bool $RequireFeedbackForCompletion;

    
    private bool $RequireFeedbackPopUp;

    
    private bool $RequireAssignmentForCompletion;

    
    private bool $RequireAssesmentForCompletion;

    
    private bool $RequireStatusSuccessPassed;

    
    private bool $ProcessUnknown;

    
    private bool $OverrideAPISucces;

    
    private int $MinPassingScore;

    
    private string $PreventCompletionSettings;

    
    private bool $HasAssessment;

    
    private int $AssessmentWeight;

    
    private int $AssignmentWeight;

    
    private bool $HasFeedback;

    
    private int $PackageWeight;

    
    private string $DeploymentType;

    
    private string $AzureRunMode;

    
    private bool $DynamicProgram;

    
    private float $LearningTime;

    
    private string $EditorXML;

    
    private string $TranscriptPrintMode;

    
    private bool $HideTranscriptScore;

    
    private bool $ShowCustomScoreFeedback;

    
    private bool $HideInteractionsFromUser;

    
    private bool $HideInteractionsFromSupervisor;

    
    private bool $Log;

    
    private string $CustomScoreFeedbackXml;

    
    private string $CustomActivityTypeID;

    
    private bool $ShowHiddenSettings;

    
    private int $PortfolioEvidenceNumber;

    
    private int $PortfolioEvidenceMinumumNumber;

    
    private bool $AllowLearnerNotes;

    
    private bool $ShowRecommendation;

    
    private bool $MarkByTA;

    
    private bool $MarkByModerator;

    
    private ArrayOfAnyType $Assessments;

    
    private ArrayOfAnyType $CertificateRules;

    
    public function getCourseType(): string
    {
        return $this->CourseType;
    }

    
    public function withCourseType(string $CourseType): static
    {
        $new = clone $this;
        $new->CourseType = $CourseType;

        return $new;
    }

    
    public function getID(): string
    {
        return $this->ID;
    }

    
    public function withID(string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getCode(): string
    {
        return $this->Code;
    }

    
    public function withCode(string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    
    public function getFullScreen(): string
    {
        return $this->FullScreen;
    }

    
    public function withFullScreen(string $FullScreen): static
    {
        $new = clone $this;
        $new->FullScreen = $FullScreen;

        return $new;
    }

    
    public function getTitle(): string
    {
        return $this->Title;
    }

    
    public function withTitle(string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getDescription(): string
    {
        return $this->Description;
    }

    
    public function withDescription(string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    
    public function getLanguage(): string
    {
        return $this->Language;
    }

    
    public function withLanguage(string $Language): static
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    
    public function getLastUpdatedTimestamp(): DateTimeInterface
    {
        return $this->LastUpdatedTimestamp;
    }

    
    public function withLastUpdatedTimestamp(DateTimeInterface $LastUpdatedTimestamp): static
    {
        $new = clone $this;
        $new->LastUpdatedTimestamp = $LastUpdatedTimestamp;

        return $new;
    }

    
    public function getLogo(): Base64Binary
    {
        return $this->Logo;
    }

    
    public function withLogo(Base64Binary $Logo): static
    {
        $new = clone $this;
        $new->Logo = $Logo;

        return $new;
    }

    
    public function getLogoContentType(): string
    {
        return $this->LogoContentType;
    }

    
    public function withLogoContentType(string $LogoContentType): static
    {
        $new = clone $this;
        $new->LogoContentType = $LogoContentType;

        return $new;
    }

    
    public function getLogoID(): string
    {
        return $this->LogoID;
    }

    
    public function withLogoID(string $LogoID): static
    {
        $new = clone $this;
        $new->LogoID = $LogoID;

        return $new;
    }

    
    public function getSeriesID(): string
    {
        return $this->SeriesID;
    }

    
    public function withSeriesID(string $SeriesID): static
    {
        $new = clone $this;
        $new->SeriesID = $SeriesID;

        return $new;
    }

    
    public function getSeriesName(): string
    {
        return $this->SeriesName;
    }

    
    public function withSeriesName(string $SeriesName): static
    {
        $new = clone $this;
        $new->SeriesName = $SeriesName;

        return $new;
    }

    
    public function getProgramID(): string
    {
        return $this->ProgramID;
    }

    
    public function withProgramID(string $ProgramID): static
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    
    public function getProgramName(): string
    {
        return $this->ProgramName;
    }

    
    public function withProgramName(string $ProgramName): static
    {
        $new = clone $this;
        $new->ProgramName = $ProgramName;

        return $new;
    }

    
    public function getIsActive(): bool
    {
        return $this->IsActive;
    }

    
    public function withIsActive(bool $IsActive): static
    {
        $new = clone $this;
        $new->IsActive = $IsActive;

        return $new;
    }

    
    public function getSKU(): string
    {
        return $this->SKU;
    }

    
    public function withSKU(string $SKU): static
    {
        $new = clone $this;
        $new->SKU = $SKU;

        return $new;
    }

    
    public function getPrice(): float
    {
        return $this->Price;
    }

    
    public function withPrice(float $Price): static
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    
    public function getSubsequentPrice(): float
    {
        return $this->SubsequentPrice;
    }

    
    public function withSubsequentPrice(float $SubsequentPrice): static
    {
        $new = clone $this;
        $new->SubsequentPrice = $SubsequentPrice;

        return $new;
    }

    
    public function getTokensValue(): int
    {
        return $this->TokensValue;
    }

    
    public function withTokensValue(int $TokensValue): static
    {
        $new = clone $this;
        $new->TokensValue = $TokensValue;

        return $new;
    }

    
    public function getSubsequentTokensValue(): int
    {
        return $this->SubsequentTokensValue;
    }

    
    public function withSubsequentTokensValue(int $SubsequentTokensValue): static
    {
        $new = clone $this;
        $new->SubsequentTokensValue = $SubsequentTokensValue;

        return $new;
    }

    
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    
    public function withCurrency(string $Currency): static
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    
    public function getPaymentProvider(): string
    {
        return $this->PaymentProvider;
    }

    
    public function withPaymentProvider(string $PaymentProvider): static
    {
        $new = clone $this;
        $new->PaymentProvider = $PaymentProvider;

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

    
    public function getCertificateExpires(): bool
    {
        return $this->CertificateExpires;
    }

    
    public function withCertificateExpires(bool $CertificateExpires): static
    {
        $new = clone $this;
        $new->CertificateExpires = $CertificateExpires;

        return $new;
    }

    
    public function getAccreditationDetails(): AccreditationDetails
    {
        return $this->AccreditationDetails;
    }

    
    public function withAccreditationDetails(AccreditationDetails $AccreditationDetails): static
    {
        $new = clone $this;
        $new->AccreditationDetails = $AccreditationDetails;

        return $new;
    }

    
    public function getReferences(): ArrayOfReference
    {
        return $this->References;
    }

    
    public function withReferences(ArrayOfReference $References): static
    {
        $new = clone $this;
        $new->References = $References;

        return $new;
    }

    
    public function getIsShared(): bool
    {
        return $this->IsShared;
    }

    
    public function withIsShared(bool $IsShared): static
    {
        $new = clone $this;
        $new->IsShared = $IsShared;

        return $new;
    }

    
    public function getExclusionMode(): string
    {
        return $this->ExclusionMode;
    }

    
    public function withExclusionMode(string $ExclusionMode): static
    {
        $new = clone $this;
        $new->ExclusionMode = $ExclusionMode;

        return $new;
    }

    
    public function getLeaningPathActivityLayout(): string
    {
        return $this->LeaningPathActivityLayout;
    }

    
    public function withLeaningPathActivityLayout(string $LeaningPathActivityLayout): static
    {
        $new = clone $this;
        $new->LeaningPathActivityLayout = $LeaningPathActivityLayout;

        return $new;
    }

    
    public function getShowLearnerProgressAs(): string
    {
        return $this->ShowLearnerProgressAs;
    }

    
    public function withShowLearnerProgressAs(string $ShowLearnerProgressAs): static
    {
        $new = clone $this;
        $new->ShowLearnerProgressAs = $ShowLearnerProgressAs;

        return $new;
    }

    
    public function getShowSharingLink(): bool
    {
        return $this->ShowSharingLink;
    }

    
    public function withShowSharingLink(bool $ShowSharingLink): static
    {
        $new = clone $this;
        $new->ShowSharingLink = $ShowSharingLink;

        return $new;
    }

    
    public function getVideoShowScrubber(): bool
    {
        return $this->VideoShowScrubber;
    }

    
    public function withVideoShowScrubber(bool $VideoShowScrubber): static
    {
        $new = clone $this;
        $new->VideoShowScrubber = $VideoShowScrubber;

        return $new;
    }

    
    public function getVideoBookmarkProgress(): bool
    {
        return $this->VideoBookmarkProgress;
    }

    
    public function withVideoBookmarkProgress(bool $VideoBookmarkProgress): static
    {
        $new = clone $this;
        $new->VideoBookmarkProgress = $VideoBookmarkProgress;

        return $new;
    }

    
    public function getVideoStartAuto(): bool
    {
        return $this->VideoStartAuto;
    }

    
    public function withVideoStartAuto(bool $VideoStartAuto): static
    {
        $new = clone $this;
        $new->VideoStartAuto = $VideoStartAuto;

        return $new;
    }

    
    public function getVideoCompleteOnOpen(): bool
    {
        return $this->VideoCompleteOnOpen;
    }

    
    public function withVideoCompleteOnOpen(bool $VideoCompleteOnOpen): static
    {
        $new = clone $this;
        $new->VideoCompleteOnOpen = $VideoCompleteOnOpen;

        return $new;
    }

    
    public function getVideoCompleteOnEnd(): bool
    {
        return $this->VideoCompleteOnEnd;
    }

    
    public function withVideoCompleteOnEnd(bool $VideoCompleteOnEnd): static
    {
        $new = clone $this;
        $new->VideoCompleteOnEnd = $VideoCompleteOnEnd;

        return $new;
    }

    
    public function getVideoCompleteOnTime(): bool
    {
        return $this->VideoCompleteOnTime;
    }

    
    public function withVideoCompleteOnTime(bool $VideoCompleteOnTime): static
    {
        $new = clone $this;
        $new->VideoCompleteOnTime = $VideoCompleteOnTime;

        return $new;
    }

    
    public function getVideoCompleteOnTimeMinute(): string
    {
        return $this->VideoCompleteOnTime_Minute;
    }

    
    public function withVideoCompleteOnTimeMinute(string $VideoCompleteOnTime_Minute): static
    {
        $new = clone $this;
        $new->VideoCompleteOnTime_Minute = $VideoCompleteOnTime_Minute;

        return $new;
    }

    
    public function getVideoCompleteOnTimeSec(): string
    {
        return $this->VideoCompleteOnTime_Sec;
    }

    
    public function withVideoCompleteOnTimeSec(string $VideoCompleteOnTime_Sec): static
    {
        $new = clone $this;
        $new->VideoCompleteOnTime_Sec = $VideoCompleteOnTime_Sec;

        return $new;
    }

    
    public function getCaptionInfo(): CaptionInfo
    {
        return $this->CaptionInfo;
    }

    
    public function withCaptionInfo(CaptionInfo $CaptionInfo): static
    {
        $new = clone $this;
        $new->CaptionInfo = $CaptionInfo;

        return $new;
    }

    
    public function getManualEnrollNoMatch(): bool
    {
        return $this->ManualEnrollNoMatch;
    }

    
    public function withManualEnrollNoMatch(bool $ManualEnrollNoMatch): static
    {
        $new = clone $this;
        $new->ManualEnrollNoMatch = $ManualEnrollNoMatch;

        return $new;
    }

    
    public function getWaitlistEnrollAfterLastWithdrawDate(): bool
    {
        return $this->WaitlistEnrollAfterLastWithdrawDate;
    }

    
    public function withWaitlistEnrollAfterLastWithdrawDate(bool $WaitlistEnrollAfterLastWithdrawDate): static
    {
        $new = clone $this;
        $new->WaitlistEnrollAfterLastWithdrawDate = $WaitlistEnrollAfterLastWithdrawDate;

        return $new;
    }

    
    public function getLastUnenrollmentDate(): DateTimeInterface
    {
        return $this->LastUnenrollmentDate;
    }

    
    public function withLastUnenrollmentDate(DateTimeInterface $LastUnenrollmentDate): static
    {
        $new = clone $this;
        $new->LastUnenrollmentDate = $LastUnenrollmentDate;

        return $new;
    }

    
    public function getFirstEnrollmentDate(): DateTimeInterface
    {
        return $this->FirstEnrollmentDate;
    }

    
    public function withFirstEnrollmentDate(DateTimeInterface $FirstEnrollmentDate): static
    {
        $new = clone $this;
        $new->FirstEnrollmentDate = $FirstEnrollmentDate;

        return $new;
    }

    
    public function getUnlimitedLastEnrollment(): bool
    {
        return $this->UnlimitedLastEnrollment;
    }

    
    public function withUnlimitedLastEnrollment(bool $UnlimitedLastEnrollment): static
    {
        $new = clone $this;
        $new->UnlimitedLastEnrollment = $UnlimitedLastEnrollment;

        return $new;
    }

    
    public function getLastEnrollmentBasedFirstEnrollmentDate(): bool
    {
        return $this->LastEnrollmentBasedFirstEnrollmentDate;
    }

    
    public function withLastEnrollmentBasedFirstEnrollmentDate(bool $LastEnrollmentBasedFirstEnrollmentDate): static
    {
        $new = clone $this;
        $new->LastEnrollmentBasedFirstEnrollmentDate = $LastEnrollmentBasedFirstEnrollmentDate;

        return $new;
    }

    
    public function getLastEnrollmentBasedFirstEnrollmentDateSetting(): string
    {
        return $this->LastEnrollmentBasedFirstEnrollmentDateSetting;
    }

    
    public function withLastEnrollmentBasedFirstEnrollmentDateSetting(string $LastEnrollmentBasedFirstEnrollmentDateSetting): static
    {
        $new = clone $this;
        $new->LastEnrollmentBasedFirstEnrollmentDateSetting = $LastEnrollmentBasedFirstEnrollmentDateSetting;

        return $new;
    }

    
    public function getLastEnrollmentDate(): DateTimeInterface
    {
        return $this->LastEnrollmentDate;
    }

    
    public function withLastEnrollmentDate(DateTimeInterface $LastEnrollmentDate): static
    {
        $new = clone $this;
        $new->LastEnrollmentDate = $LastEnrollmentDate;

        return $new;
    }

    
    public function getAllowEnrollAfterLastEnrollDate(): bool
    {
        return $this->AllowEnrollAfterLastEnrollDate;
    }

    
    public function withAllowEnrollAfterLastEnrollDate(bool $AllowEnrollAfterLastEnrollDate): static
    {
        $new = clone $this;
        $new->AllowEnrollAfterLastEnrollDate = $AllowEnrollAfterLastEnrollDate;

        return $new;
    }

    
    public function getLastEnrollmentCutOff(): int
    {
        return $this->LastEnrollmentCutOff;
    }

    
    public function withLastEnrollmentCutOff(int $LastEnrollmentCutOff): static
    {
        $new = clone $this;
        $new->LastEnrollmentCutOff = $LastEnrollmentCutOff;

        return $new;
    }

    
    public function getAllowSupervisorExtendDueDate(): bool
    {
        return $this->AllowSupervisorExtendDueDate;
    }

    
    public function withAllowSupervisorExtendDueDate(bool $AllowSupervisorExtendDueDate): static
    {
        $new = clone $this;
        $new->AllowSupervisorExtendDueDate = $AllowSupervisorExtendDueDate;

        return $new;
    }

    
    public function getSupervisorExtensionDaysLimit(): int
    {
        return $this->SupervisorExtensionDaysLimit;
    }

    
    public function withSupervisorExtensionDaysLimit(int $SupervisorExtensionDaysLimit): static
    {
        $new = clone $this;
        $new->SupervisorExtensionDaysLimit = $SupervisorExtensionDaysLimit;

        return $new;
    }

    
    public function getSupervisorExtensionDaysLimitStartFrom(): string
    {
        return $this->SupervisorExtensionDaysLimitStartFrom;
    }

    
    public function withSupervisorExtensionDaysLimitStartFrom(string $SupervisorExtensionDaysLimitStartFrom): static
    {
        $new = clone $this;
        $new->SupervisorExtensionDaysLimitStartFrom = $SupervisorExtensionDaysLimitStartFrom;

        return $new;
    }

    
    public function getStartDate(): DateTimeInterface
    {
        return $this->StartDate;
    }

    
    public function withStartDate(DateTimeInterface $StartDate): static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    
    public function getDueDate(): string
    {
        return $this->DueDate;
    }

    
    public function withDueDate(string $DueDate): static
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }

    
    public function getAllowEnrollmentCodeAfterEnrollmentDate(): bool
    {
        return $this->AllowEnrollmentCodeAfterEnrollmentDate;
    }

    
    public function withAllowEnrollmentCodeAfterEnrollmentDate(bool $AllowEnrollmentCodeAfterEnrollmentDate): static
    {
        $new = clone $this;
        $new->AllowEnrollmentCodeAfterEnrollmentDate = $AllowEnrollmentCodeAfterEnrollmentDate;

        return $new;
    }

    
    public function getEnrollmentCodeAfterEnrollmentDateNoOfDays(): int
    {
        return $this->EnrollmentCodeAfterEnrollmentDate_NoOfDays;
    }

    
    public function withEnrollmentCodeAfterEnrollmentDateNoOfDays(int $EnrollmentCodeAfterEnrollmentDate_NoOfDays): static
    {
        $new = clone $this;
        $new->EnrollmentCodeAfterEnrollmentDate_NoOfDays = $EnrollmentCodeAfterEnrollmentDate_NoOfDays;

        return $new;
    }

    
    public function getBarAccessAfterDue(): bool
    {
        return $this->BarAccessAfterDue;
    }

    
    public function withBarAccessAfterDue(bool $BarAccessAfterDue): static
    {
        $new = clone $this;
        $new->BarAccessAfterDue = $BarAccessAfterDue;

        return $new;
    }

    
    public function getSuspendAccess(): bool
    {
        return $this->SuspendAccess;
    }

    
    public function withSuspendAccess(bool $SuspendAccess): static
    {
        $new = clone $this;
        $new->SuspendAccess = $SuspendAccess;

        return $new;
    }

    
    public function getSuspendAccessDays(): string
    {
        return $this->SuspendAccessDays;
    }

    
    public function withSuspendAccessDays(string $SuspendAccessDays): static
    {
        $new = clone $this;
        $new->SuspendAccessDays = $SuspendAccessDays;

        return $new;
    }

    
    public function getEnrollFromLPOnly(): bool
    {
        return $this->EnrollFromLPOnly;
    }

    
    public function withEnrollFromLPOnly(bool $EnrollFromLPOnly): static
    {
        $new = clone $this;
        $new->EnrollFromLPOnly = $EnrollFromLPOnly;

        return $new;
    }

    
    public function getAutoEnroll(): bool
    {
        return $this->AutoEnroll;
    }

    
    public function withAutoEnroll(bool $AutoEnroll): static
    {
        $new = clone $this;
        $new->AutoEnroll = $AutoEnroll;

        return $new;
    }

    
    public function getAutoEnrollAllDomainMembers(): bool
    {
        return $this->AutoEnrollAllDomainMembers;
    }

    
    public function withAutoEnrollAllDomainMembers(bool $AutoEnrollAllDomainMembers): static
    {
        $new = clone $this;
        $new->AutoEnrollAllDomainMembers = $AutoEnrollAllDomainMembers;

        return $new;
    }

    
    public function getAutoenrollRules(): ArrayOfAnyType
    {
        return $this->AutoenrollRules;
    }

    
    public function withAutoenrollRules(ArrayOfAnyType $AutoenrollRules): static
    {
        $new = clone $this;
        $new->AutoenrollRules = $AutoenrollRules;

        return $new;
    }

    
    public function getAutoenrollRulesRequired(): bool
    {
        return $this->AutoenrollRulesRequired;
    }

    
    public function withAutoenrollRulesRequired(bool $AutoenrollRulesRequired): static
    {
        $new = clone $this;
        $new->AutoenrollRulesRequired = $AutoenrollRulesRequired;

        return $new;
    }

    
    public function getAutoenrollRepeatType(): string
    {
        return $this->AutoenrollRepeatType;
    }

    
    public function withAutoenrollRepeatType(string $AutoenrollRepeatType): static
    {
        $new = clone $this;
        $new->AutoenrollRepeatType = $AutoenrollRepeatType;

        return $new;
    }

    
    public function getAutoenrollRepeatMonthCount(): string
    {
        return $this->AutoenrollRepeatMonthCount;
    }

    
    public function withAutoenrollRepeatMonthCount(string $AutoenrollRepeatMonthCount): static
    {
        $new = clone $this;
        $new->AutoenrollRepeatMonthCount = $AutoenrollRepeatMonthCount;

        return $new;
    }

    
    public function getAutoenrollLastRunDate(): DateTimeInterface
    {
        return $this->AutoenrollLastRunDate;
    }

    
    public function withAutoenrollLastRunDate(DateTimeInterface $AutoenrollLastRunDate): static
    {
        $new = clone $this;
        $new->AutoenrollLastRunDate = $AutoenrollLastRunDate;

        return $new;
    }

    
    public function getAutoenrollExcludeRules(): ArrayOfAnyType
    {
        return $this->AutoenrollExcludeRules;
    }

    
    public function withAutoenrollExcludeRules(ArrayOfAnyType $AutoenrollExcludeRules): static
    {
        $new = clone $this;
        $new->AutoenrollExcludeRules = $AutoenrollExcludeRules;

        return $new;
    }

    
    public function getAutoenrollExcludeRulesRequired(): bool
    {
        return $this->AutoenrollExcludeRulesRequired;
    }

    
    public function withAutoenrollExcludeRulesRequired(bool $AutoenrollExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->AutoenrollExcludeRulesRequired = $AutoenrollExcludeRulesRequired;

        return $new;
    }

    
    public function getReAutoEnroll(): bool
    {
        return $this->ReAutoEnroll;
    }

    
    public function withReAutoEnroll(bool $ReAutoEnroll): static
    {
        $new = clone $this;
        $new->ReAutoEnroll = $ReAutoEnroll;

        return $new;
    }

    
    public function getUseAutoEnrollmentRuleForReEnroll(): bool
    {
        return $this->UseAutoEnrollmentRuleForReEnroll;
    }

    
    public function withUseAutoEnrollmentRuleForReEnroll(bool $UseAutoEnrollmentRuleForReEnroll): static
    {
        $new = clone $this;
        $new->UseAutoEnrollmentRuleForReEnroll = $UseAutoEnrollmentRuleForReEnroll;

        return $new;
    }

    
    public function getRecertificationAutoEnrollRules(): ArrayOfAnyType
    {
        return $this->RecertificationAutoEnrollRules;
    }

    
    public function withRecertificationAutoEnrollRules(ArrayOfAnyType $RecertificationAutoEnrollRules): static
    {
        $new = clone $this;
        $new->RecertificationAutoEnrollRules = $RecertificationAutoEnrollRules;

        return $new;
    }

    
    public function getRecertificationAutoEnrollExcludeRules(): ArrayOfAnyType
    {
        return $this->RecertificationAutoEnrollExcludeRules;
    }

    
    public function withRecertificationAutoEnrollExcludeRules(ArrayOfAnyType $RecertificationAutoEnrollExcludeRules): static
    {
        $new = clone $this;
        $new->RecertificationAutoEnrollExcludeRules = $RecertificationAutoEnrollExcludeRules;

        return $new;
    }

    
    public function getReAutoEnrollmentAllowAll(): bool
    {
        return $this->ReAutoEnrollmentAllowAll;
    }

    
    public function withReAutoEnrollmentAllowAll(bool $ReAutoEnrollmentAllowAll): static
    {
        $new = clone $this;
        $new->ReAutoEnrollmentAllowAll = $ReAutoEnrollmentAllowAll;

        return $new;
    }

    
    public function getReAutoenrollRepeatType(): string
    {
        return $this->ReAutoenrollRepeatType;
    }

    
    public function withReAutoenrollRepeatType(string $ReAutoenrollRepeatType): static
    {
        $new = clone $this;
        $new->ReAutoenrollRepeatType = $ReAutoenrollRepeatType;

        return $new;
    }

    
    public function getReAutoenrollRepeatMonthCount(): string
    {
        return $this->ReAutoenrollRepeatMonthCount;
    }

    
    public function withReAutoenrollRepeatMonthCount(string $ReAutoenrollRepeatMonthCount): static
    {
        $new = clone $this;
        $new->ReAutoenrollRepeatMonthCount = $ReAutoenrollRepeatMonthCount;

        return $new;
    }

    
    public function getReAutoenrollAllRulesRequired(): bool
    {
        return $this->ReAutoenrollAllRulesRequired;
    }

    
    public function withReAutoenrollAllRulesRequired(bool $ReAutoenrollAllRulesRequired): static
    {
        $new = clone $this;
        $new->ReAutoenrollAllRulesRequired = $ReAutoenrollAllRulesRequired;

        return $new;
    }

    
    public function getReAutoenrollLastRunDate(): DateTimeInterface
    {
        return $this->ReAutoenrollLastRunDate;
    }

    
    public function withReAutoenrollLastRunDate(DateTimeInterface $ReAutoenrollLastRunDate): static
    {
        $new = clone $this;
        $new->ReAutoenrollLastRunDate = $ReAutoenrollLastRunDate;

        return $new;
    }

    
    public function getReAutoenrollAllExcludeRulesRequired(): bool
    {
        return $this->ReAutoenrollAllExcludeRulesRequired;
    }

    
    public function withReAutoenrollAllExcludeRulesRequired(bool $ReAutoenrollAllExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->ReAutoenrollAllExcludeRulesRequired = $ReAutoenrollAllExcludeRulesRequired;

        return $new;
    }

    
    public function getSelfEnroll(): bool
    {
        return $this->SelfEnroll;
    }

    
    public function withSelfEnroll(bool $SelfEnroll): static
    {
        $new = clone $this;
        $new->SelfEnroll = $SelfEnroll;

        return $new;
    }

    
    public function getAllowTransfer(): bool
    {
        return $this->AllowTransfer;
    }

    
    public function withAllowTransfer(bool $AllowTransfer): static
    {
        $new = clone $this;
        $new->AllowTransfer = $AllowTransfer;

        return $new;
    }

    
    public function getSelfEnrollAllDomainMembers(): bool
    {
        return $this->SelfEnrollAllDomainMembers;
    }

    
    public function withSelfEnrollAllDomainMembers(bool $SelfEnrollAllDomainMembers): static
    {
        $new = clone $this;
        $new->SelfEnrollAllDomainMembers = $SelfEnrollAllDomainMembers;

        return $new;
    }

    
    public function getPermissionEnroll(): bool
    {
        return $this->PermissionEnroll;
    }

    
    public function withPermissionEnroll(bool $PermissionEnroll): static
    {
        $new = clone $this;
        $new->PermissionEnroll = $PermissionEnroll;

        return $new;
    }

    
    public function getEnrollPermissionFrom(): string
    {
        return $this->EnrollPermissionFrom;
    }

    
    public function withEnrollPermissionFrom(string $EnrollPermissionFrom): static
    {
        $new = clone $this;
        $new->EnrollPermissionFrom = $EnrollPermissionFrom;

        return $new;
    }

    
    public function getPaymentEnroll(): bool
    {
        return $this->PaymentEnroll;
    }

    
    public function withPaymentEnroll(bool $PaymentEnroll): static
    {
        $new = clone $this;
        $new->PaymentEnroll = $PaymentEnroll;

        return $new;
    }

    
    public function getTokensEnroll(): bool
    {
        return $this->TokensEnroll;
    }

    
    public function withTokensEnroll(bool $TokensEnroll): static
    {
        $new = clone $this;
        $new->TokensEnroll = $TokensEnroll;

        return $new;
    }

    
    public function getAllowCoupons(): bool
    {
        return $this->AllowCoupons;
    }

    
    public function withAllowCoupons(bool $AllowCoupons): static
    {
        $new = clone $this;
        $new->AllowCoupons = $AllowCoupons;

        return $new;
    }

    
    public function getGlobalTokensEnroll(): bool
    {
        return $this->GlobalTokensEnroll;
    }

    
    public function withGlobalTokensEnroll(bool $GlobalTokensEnroll): static
    {
        $new = clone $this;
        $new->GlobalTokensEnroll = $GlobalTokensEnroll;

        return $new;
    }

    
    public function getPassEnroll(): bool
    {
        return $this->PassEnroll;
    }

    
    public function withPassEnroll(bool $PassEnroll): static
    {
        $new = clone $this;
        $new->PassEnroll = $PassEnroll;

        return $new;
    }

    
    public function getAllowPOPayment(): bool
    {
        return $this->AllowPOPayment;
    }

    
    public function withAllowPOPayment(bool $AllowPOPayment): static
    {
        $new = clone $this;
        $new->AllowPOPayment = $AllowPOPayment;

        return $new;
    }

    
    public function getAllowPass(): bool
    {
        return $this->AllowPass;
    }

    
    public function withAllowPass(bool $AllowPass): static
    {
        $new = clone $this;
        $new->AllowPass = $AllowPass;

        return $new;
    }

    
    public function getAllowPurchaseForOthers(): bool
    {
        return $this->AllowPurchaseForOthers;
    }

    
    public function withAllowPurchaseForOthers(bool $AllowPurchaseForOthers): static
    {
        $new = clone $this;
        $new->AllowPurchaseForOthers = $AllowPurchaseForOthers;

        return $new;
    }

    
    public function getAllowAttendanceCodeToEnroll(): bool
    {
        return $this->AllowAttendanceCodeToEnroll;
    }

    
    public function withAllowAttendanceCodeToEnroll(bool $AllowAttendanceCodeToEnroll): static
    {
        $new = clone $this;
        $new->AllowAttendanceCodeToEnroll = $AllowAttendanceCodeToEnroll;

        return $new;
    }

    
    public function getNotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate(): bool
    {
        return $this->NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;
    }

    
    public function withNotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate(bool $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate): static
    {
        $new = clone $this;
        $new->NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate = $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;

        return $new;
    }

    
    public function getAttendanceCodeEnrollFollowsRules(): bool
    {
        return $this->AttendanceCodeEnrollFollowsRules;
    }

    
    public function withAttendanceCodeEnrollFollowsRules(bool $AttendanceCodeEnrollFollowsRules): static
    {
        $new = clone $this;
        $new->AttendanceCodeEnrollFollowsRules = $AttendanceCodeEnrollFollowsRules;

        return $new;
    }

    
    public function getAllowAttendanceCode(): bool
    {
        return $this->AllowAttendanceCode;
    }

    
    public function withAllowAttendanceCode(bool $AllowAttendanceCode): static
    {
        $new = clone $this;
        $new->AllowAttendanceCode = $AllowAttendanceCode;

        return $new;
    }

    
    public function getSelfEnrollRules(): ArrayOfAnyType
    {
        return $this->SelfEnrollRules;
    }

    
    public function withSelfEnrollRules(ArrayOfAnyType $SelfEnrollRules): static
    {
        $new = clone $this;
        $new->SelfEnrollRules = $SelfEnrollRules;

        return $new;
    }

    
    public function getSelfEnrollGroups(): ArrayOfAnyType
    {
        return $this->SelfEnrollGroups;
    }

    
    public function withSelfEnrollGroups(ArrayOfAnyType $SelfEnrollGroups): static
    {
        $new = clone $this;
        $new->SelfEnrollGroups = $SelfEnrollGroups;

        return $new;
    }

    
    public function getSelfEnrollGroupRequired(): bool
    {
        return $this->SelfEnrollGroupRequired;
    }

    
    public function withSelfEnrollGroupRequired(bool $SelfEnrollGroupRequired): static
    {
        $new = clone $this;
        $new->SelfEnrollGroupRequired = $SelfEnrollGroupRequired;

        return $new;
    }

    
    public function getSelfEnrollRulesRequired(): bool
    {
        return $this->SelfEnrollRulesRequired;
    }

    
    public function withSelfEnrollRulesRequired(bool $SelfEnrollRulesRequired): static
    {
        $new = clone $this;
        $new->SelfEnrollRulesRequired = $SelfEnrollRulesRequired;

        return $new;
    }

    
    public function getSelfEnrollExcludeRules(): ArrayOfAnyType
    {
        return $this->SelfEnrollExcludeRules;
    }

    
    public function withSelfEnrollExcludeRules(ArrayOfAnyType $SelfEnrollExcludeRules): static
    {
        $new = clone $this;
        $new->SelfEnrollExcludeRules = $SelfEnrollExcludeRules;

        return $new;
    }

    
    public function getSelfEnrollExcludeRulesRequired(): bool
    {
        return $this->SelfEnrollExcludeRulesRequired;
    }

    
    public function withSelfEnrollExcludeRulesRequired(bool $SelfEnrollExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->SelfEnrollExcludeRulesRequired = $SelfEnrollExcludeRulesRequired;

        return $new;
    }

    
    public function getCanUnenroll(): bool
    {
        return $this->CanUnenroll;
    }

    
    public function withCanUnenroll(bool $CanUnenroll): static
    {
        $new = clone $this;
        $new->CanUnenroll = $CanUnenroll;

        return $new;
    }

    
    public function getWithdrawAllDomainMembers(): bool
    {
        return $this->WithdrawAllDomainMembers;
    }

    
    public function withWithdrawAllDomainMembers(bool $WithdrawAllDomainMembers): static
    {
        $new = clone $this;
        $new->WithdrawAllDomainMembers = $WithdrawAllDomainMembers;

        return $new;
    }

    
    public function getPermissionUnenroll(): bool
    {
        return $this->PermissionUnenroll;
    }

    
    public function withPermissionUnenroll(bool $PermissionUnenroll): static
    {
        $new = clone $this;
        $new->PermissionUnenroll = $PermissionUnenroll;

        return $new;
    }

    
    public function getUnenrollOption(): string
    {
        return $this->UnenrollOption;
    }

    
    public function withUnenrollOption(string $UnenrollOption): static
    {
        $new = clone $this;
        $new->UnenrollOption = $UnenrollOption;

        return $new;
    }

    
    public function getUnenrollPermissionFrom(): string
    {
        return $this->UnenrollPermissionFrom;
    }

    
    public function withUnenrollPermissionFrom(string $UnenrollPermissionFrom): static
    {
        $new = clone $this;
        $new->UnenrollPermissionFrom = $UnenrollPermissionFrom;

        return $new;
    }

    
    public function getWithdrawalRules(): ArrayOfAnyType
    {
        return $this->WithdrawalRules;
    }

    
    public function withWithdrawalRules(ArrayOfAnyType $WithdrawalRules): static
    {
        $new = clone $this;
        $new->WithdrawalRules = $WithdrawalRules;

        return $new;
    }

    
    public function getWithdrawalRulesRequired(): bool
    {
        return $this->WithdrawalRulesRequired;
    }

    
    public function withWithdrawalRulesRequired(bool $WithdrawalRulesRequired): static
    {
        $new = clone $this;
        $new->WithdrawalRulesRequired = $WithdrawalRulesRequired;

        return $new;
    }

    
    public function getWithdrawalExcludeRules(): ArrayOfAnyType
    {
        return $this->WithdrawalExcludeRules;
    }

    
    public function withWithdrawalExcludeRules(ArrayOfAnyType $WithdrawalExcludeRules): static
    {
        $new = clone $this;
        $new->WithdrawalExcludeRules = $WithdrawalExcludeRules;

        return $new;
    }

    
    public function getWithdrawalExcludeRulesRequired(): bool
    {
        return $this->WithdrawalExcludeRulesRequired;
    }

    
    public function withWithdrawalExcludeRulesRequired(bool $WithdrawalExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->WithdrawalExcludeRulesRequired = $WithdrawalExcludeRulesRequired;

        return $new;
    }

    
    public function getAutoWithdraw(): bool
    {
        return $this->AutoWithdraw;
    }

    
    public function withAutoWithdraw(bool $AutoWithdraw): static
    {
        $new = clone $this;
        $new->AutoWithdraw = $AutoWithdraw;

        return $new;
    }

    
    public function getAutoWithdrawNotMatchingAutoRules(): bool
    {
        return $this->AutoWithdrawNotMatchingAutoRules;
    }

    
    public function withAutoWithdrawNotMatchingAutoRules(bool $AutoWithdrawNotMatchingAutoRules): static
    {
        $new = clone $this;
        $new->AutoWithdrawNotMatchingAutoRules = $AutoWithdrawNotMatchingAutoRules;

        return $new;
    }

    
    public function getAutoWithdrawalRules(): ArrayOfAnyType
    {
        return $this->AutoWithdrawalRules;
    }

    
    public function withAutoWithdrawalRules(ArrayOfAnyType $AutoWithdrawalRules): static
    {
        $new = clone $this;
        $new->AutoWithdrawalRules = $AutoWithdrawalRules;

        return $new;
    }

    
    public function getAutoWithdrawalRulesRequired(): bool
    {
        return $this->AutoWithdrawalRulesRequired;
    }

    
    public function withAutoWithdrawalRulesRequired(bool $AutoWithdrawalRulesRequired): static
    {
        $new = clone $this;
        $new->AutoWithdrawalRulesRequired = $AutoWithdrawalRulesRequired;

        return $new;
    }

    
    public function getAutoWithdrawalExcludeRules(): ArrayOfAnyType
    {
        return $this->AutoWithdrawalExcludeRules;
    }

    
    public function withAutoWithdrawalExcludeRules(ArrayOfAnyType $AutoWithdrawalExcludeRules): static
    {
        $new = clone $this;
        $new->AutoWithdrawalExcludeRules = $AutoWithdrawalExcludeRules;

        return $new;
    }

    
    public function getAutoWithdrawalExcludeRulesRequired(): bool
    {
        return $this->AutoWithdrawalExcludeRulesRequired;
    }

    
    public function withAutoWithdrawalExcludeRulesRequired(bool $AutoWithdrawalExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->AutoWithdrawalExcludeRulesRequired = $AutoWithdrawalExcludeRulesRequired;

        return $new;
    }

    
    public function getAnnouncementRules(): ArrayOfAnyType
    {
        return $this->AnnouncementRules;
    }

    
    public function withAnnouncementRules(ArrayOfAnyType $AnnouncementRules): static
    {
        $new = clone $this;
        $new->AnnouncementRules = $AnnouncementRules;

        return $new;
    }

    
    public function getAnnouncementRulesRequired(): bool
    {
        return $this->AnnouncementRulesRequired;
    }

    
    public function withAnnouncementRulesRequired(bool $AnnouncementRulesRequired): static
    {
        $new = clone $this;
        $new->AnnouncementRulesRequired = $AnnouncementRulesRequired;

        return $new;
    }

    
    public function getAnnouncementExcludeRules(): ArrayOfAnyType
    {
        return $this->AnnouncementExcludeRules;
    }

    
    public function withAnnouncementExcludeRules(ArrayOfAnyType $AnnouncementExcludeRules): static
    {
        $new = clone $this;
        $new->AnnouncementExcludeRules = $AnnouncementExcludeRules;

        return $new;
    }

    
    public function getAnnouncementExcludeRulesRequired(): bool
    {
        return $this->AnnouncementExcludeRulesRequired;
    }

    
    public function withAnnouncementExcludeRulesRequired(bool $AnnouncementExcludeRulesRequired): static
    {
        $new = clone $this;
        $new->AnnouncementExcludeRulesRequired = $AnnouncementExcludeRulesRequired;

        return $new;
    }

    
    public function getAutoEnrollSelfActivities(): bool
    {
        return $this->AutoEnrollSelfActivities;
    }

    
    public function withAutoEnrollSelfActivities(bool $AutoEnrollSelfActivities): static
    {
        $new = clone $this;
        $new->AutoEnrollSelfActivities = $AutoEnrollSelfActivities;

        return $new;
    }

    
    public function getAutoEnrollManualActivities(): bool
    {
        return $this->AutoEnrollManualActivities;
    }

    
    public function withAutoEnrollManualActivities(bool $AutoEnrollManualActivities): static
    {
        $new = clone $this;
        $new->AutoEnrollManualActivities = $AutoEnrollManualActivities;

        return $new;
    }

    
    public function getIncludeAllInPrice(): bool
    {
        return $this->IncludeAllInPrice;
    }

    
    public function withIncludeAllInPrice(bool $IncludeAllInPrice): static
    {
        $new = clone $this;
        $new->IncludeAllInPrice = $IncludeAllInPrice;

        return $new;
    }

    
    public function getAutoEnrollLPActivities(): bool
    {
        return $this->AutoEnrollLPActivities;
    }

    
    public function withAutoEnrollLPActivities(bool $AutoEnrollLPActivities): static
    {
        $new = clone $this;
        $new->AutoEnrollLPActivities = $AutoEnrollLPActivities;

        return $new;
    }

    
    public function getExcludeLPEnrollPurchaseActivities(): bool
    {
        return $this->ExcludeLPEnrollPurchaseActivities;
    }

    
    public function withExcludeLPEnrollPurchaseActivities(bool $ExcludeLPEnrollPurchaseActivities): static
    {
        $new = clone $this;
        $new->ExcludeLPEnrollPurchaseActivities = $ExcludeLPEnrollPurchaseActivities;

        return $new;
    }

    
    public function getExcludeLPEnrollNotSelfEnrollActivities(): bool
    {
        return $this->ExcludeLPEnrollNotSelfEnrollActivities;
    }

    
    public function withExcludeLPEnrollNotSelfEnrollActivities(bool $ExcludeLPEnrollNotSelfEnrollActivities): static
    {
        $new = clone $this;
        $new->ExcludeLPEnrollNotSelfEnrollActivities = $ExcludeLPEnrollNotSelfEnrollActivities;

        return $new;
    }

    
    public function getWithdrawIncompleteLPActivitiesOnLPEnroll(): bool
    {
        return $this->WithdrawIncompleteLPActivitiesOnLPEnroll;
    }

    
    public function withWithdrawIncompleteLPActivitiesOnLPEnroll(bool $WithdrawIncompleteLPActivitiesOnLPEnroll): static
    {
        $new = clone $this;
        $new->WithdrawIncompleteLPActivitiesOnLPEnroll = $WithdrawIncompleteLPActivitiesOnLPEnroll;

        return $new;
    }

    
    public function getFastStartLPActivities(): bool
    {
        return $this->FastStartLPActivities;
    }

    
    public function withFastStartLPActivities(bool $FastStartLPActivities): static
    {
        $new = clone $this;
        $new->FastStartLPActivities = $FastStartLPActivities;

        return $new;
    }

    
    public function getStudentIsEnrolled(): bool
    {
        return $this->StudentIsEnrolled;
    }

    
    public function withStudentIsEnrolled(bool $StudentIsEnrolled): static
    {
        $new = clone $this;
        $new->StudentIsEnrolled = $StudentIsEnrolled;

        return $new;
    }

    
    public function getStudentHasPendingRequest(): bool
    {
        return $this->StudentHasPendingRequest;
    }

    
    public function withStudentHasPendingRequest(bool $StudentHasPendingRequest): static
    {
        $new = clone $this;
        $new->StudentHasPendingRequest = $StudentHasPendingRequest;

        return $new;
    }

    
    public function getStudentHasPass(): bool
    {
        return $this->StudentHasPass;
    }

    
    public function withStudentHasPass(bool $StudentHasPass): static
    {
        $new = clone $this;
        $new->StudentHasPass = $StudentHasPass;

        return $new;
    }

    
    public function getAllowAnonPreview(): bool
    {
        return $this->AllowAnonPreview;
    }

    
    public function withAllowAnonPreview(bool $AllowAnonPreview): static
    {
        $new = clone $this;
        $new->AllowAnonPreview = $AllowAnonPreview;

        return $new;
    }

    
    public function getFieldsXml(): string
    {
        return $this->FieldsXml;
    }

    
    public function withFieldsXml(string $FieldsXml): static
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }

    
    public function getBaseUrl(): string
    {
        return $this->BaseUrl;
    }

    
    public function withBaseUrl(string $BaseUrl): static
    {
        $new = clone $this;
        $new->BaseUrl = $BaseUrl;

        return $new;
    }

    
    public function getHasAccessCode(): bool
    {
        return $this->HasAccessCode;
    }

    
    public function withHasAccessCode(bool $HasAccessCode): static
    {
        $new = clone $this;
        $new->HasAccessCode = $HasAccessCode;

        return $new;
    }

    
    public function getAccessCode(): string
    {
        return $this->AccessCode;
    }

    
    public function withAccessCode(string $AccessCode): static
    {
        $new = clone $this;
        $new->AccessCode = $AccessCode;

        return $new;
    }

    
    public function getCourseSharingCount(): int
    {
        return $this->CourseSharingCount;
    }

    
    public function withCourseSharingCount(int $CourseSharingCount): static
    {
        $new = clone $this;
        $new->CourseSharingCount = $CourseSharingCount;

        return $new;
    }

    
    public function getDisclaimer(): string
    {
        return $this->Disclaimer;
    }

    
    public function withDisclaimer(string $Disclaimer): static
    {
        $new = clone $this;
        $new->Disclaimer = $Disclaimer;

        return $new;
    }

    
    public function getShowDisclaimerAlways(): bool
    {
        return $this->ShowDisclaimerAlways;
    }

    
    public function withShowDisclaimerAlways(bool $ShowDisclaimerAlways): static
    {
        $new = clone $this;
        $new->ShowDisclaimerAlways = $ShowDisclaimerAlways;

        return $new;
    }

    
    public function getDisclaimerAgreed(): bool
    {
        return $this->DisclaimerAgreed;
    }

    
    public function withDisclaimerAgreed(bool $DisclaimerAgreed): static
    {
        $new = clone $this;
        $new->DisclaimerAgreed = $DisclaimerAgreed;

        return $new;
    }

    
    public function getDisclaimerTextButton(): string
    {
        return $this->DisclaimerTextButton;
    }

    
    public function withDisclaimerTextButton(string $DisclaimerTextButton): static
    {
        $new = clone $this;
        $new->DisclaimerTextButton = $DisclaimerTextButton;

        return $new;
    }

    
    public function getHasDisclaimer(): bool
    {
        return $this->HasDisclaimer;
    }

    
    public function withHasDisclaimer(bool $HasDisclaimer): static
    {
        $new = clone $this;
        $new->HasDisclaimer = $HasDisclaimer;

        return $new;
    }

    
    public function getAllowMobileDownload(): bool
    {
        return $this->AllowMobileDownload;
    }

    
    public function withAllowMobileDownload(bool $AllowMobileDownload): static
    {
        $new = clone $this;
        $new->AllowMobileDownload = $AllowMobileDownload;

        return $new;
    }

    
    public function getAltPrices(): ArrayOfAnyType
    {
        return $this->AltPrices;
    }

    
    public function withAltPrices(ArrayOfAnyType $AltPrices): static
    {
        $new = clone $this;
        $new->AltPrices = $AltPrices;

        return $new;
    }

    
    public function getInitialScormVersion(): string
    {
        return $this->InitialScormVersion;
    }

    
    public function withInitialScormVersion(string $InitialScormVersion): static
    {
        $new = clone $this;
        $new->InitialScormVersion = $InitialScormVersion;

        return $new;
    }

    
    public function getReviewStatus(): string
    {
        return $this->ReviewStatus;
    }

    
    public function withReviewStatus(string $ReviewStatus): static
    {
        $new = clone $this;
        $new->ReviewStatus = $ReviewStatus;

        return $new;
    }

    
    public function getSendAccreditationExpiryNotification(): bool
    {
        return $this->SendAccreditationExpiryNotification;
    }

    
    public function withSendAccreditationExpiryNotification(bool $SendAccreditationExpiryNotification): static
    {
        $new = clone $this;
        $new->SendAccreditationExpiryNotification = $SendAccreditationExpiryNotification;

        return $new;
    }

    
    public function getSendSessionStartLearnerNotification(): bool
    {
        return $this->SendSessionStartLearnerNotification;
    }

    
    public function withSendSessionStartLearnerNotification(bool $SendSessionStartLearnerNotification): static
    {
        $new = clone $this;
        $new->SendSessionStartLearnerNotification = $SendSessionStartLearnerNotification;

        return $new;
    }

    
    public function getSendSessionStartModeratorNotification(): bool
    {
        return $this->SendSessionStartModeratorNotification;
    }

    
    public function withSendSessionStartModeratorNotification(bool $SendSessionStartModeratorNotification): static
    {
        $new = clone $this;
        $new->SendSessionStartModeratorNotification = $SendSessionStartModeratorNotification;

        return $new;
    }

    
    public function getSendEnrollmentConfirmation(): bool
    {
        return $this->SendEnrollmentConfirmation;
    }

    
    public function withSendEnrollmentConfirmation(bool $SendEnrollmentConfirmation): static
    {
        $new = clone $this;
        $new->SendEnrollmentConfirmation = $SendEnrollmentConfirmation;

        return $new;
    }

    
    public function getSendEnrollmentRequestNotification(): bool
    {
        return $this->SendEnrollmentRequestNotification;
    }

    
    public function withSendEnrollmentRequestNotification(bool $SendEnrollmentRequestNotification): static
    {
        $new = clone $this;
        $new->SendEnrollmentRequestNotification = $SendEnrollmentRequestNotification;

        return $new;
    }

    
    public function getSendThresholdNotification(): bool
    {
        return $this->SendThresholdNotification;
    }

    
    public function withSendThresholdNotification(bool $SendThresholdNotification): static
    {
        $new = clone $this;
        $new->SendThresholdNotification = $SendThresholdNotification;

        return $new;
    }

    
    public function getSendStartDateNotificationLearner(): bool
    {
        return $this->SendStartDateNotificationLearner;
    }

    
    public function withSendStartDateNotificationLearner(bool $SendStartDateNotificationLearner): static
    {
        $new = clone $this;
        $new->SendStartDateNotificationLearner = $SendStartDateNotificationLearner;

        return $new;
    }

    
    public function getNotifyModeratorEnroll(): bool
    {
        return $this->NotifyModeratorEnroll;
    }

    
    public function withNotifyModeratorEnroll(bool $NotifyModeratorEnroll): static
    {
        $new = clone $this;
        $new->NotifyModeratorEnroll = $NotifyModeratorEnroll;

        return $new;
    }

    
    public function getNotifySupervisorEnroll(): bool
    {
        return $this->NotifySupervisorEnroll;
    }

    
    public function withNotifySupervisorEnroll(bool $NotifySupervisorEnroll): static
    {
        $new = clone $this;
        $new->NotifySupervisorEnroll = $NotifySupervisorEnroll;

        return $new;
    }

    
    public function getNotifyStudentEnroll(): bool
    {
        return $this->NotifyStudentEnroll;
    }

    
    public function withNotifyStudentEnroll(bool $NotifyStudentEnroll): static
    {
        $new = clone $this;
        $new->NotifyStudentEnroll = $NotifyStudentEnroll;

        return $new;
    }

    
    public function getSendEnrollmentRequestConfirmation(): bool
    {
        return $this->SendEnrollmentRequestConfirmation;
    }

    
    public function withSendEnrollmentRequestConfirmation(bool $SendEnrollmentRequestConfirmation): static
    {
        $new = clone $this;
        $new->SendEnrollmentRequestConfirmation = $SendEnrollmentRequestConfirmation;

        return $new;
    }

    
    public function getNotifyModeratorOnEnrollRequestConfirmation(): bool
    {
        return $this->NotifyModeratorOnEnrollRequestConfirmation;
    }

    
    public function withNotifyModeratorOnEnrollRequestConfirmation(bool $NotifyModeratorOnEnrollRequestConfirmation): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnEnrollRequestConfirmation = $NotifyModeratorOnEnrollRequestConfirmation;

        return $new;
    }

    
    public function getNotifySupervisorOnEnrollRequestConfirmation(): bool
    {
        return $this->NotifySupervisorOnEnrollRequestConfirmation;
    }

    
    public function withNotifySupervisorOnEnrollRequestConfirmation(bool $NotifySupervisorOnEnrollRequestConfirmation): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnEnrollRequestConfirmation = $NotifySupervisorOnEnrollRequestConfirmation;

        return $new;
    }

    
    public function getNotifyLearnerOnEnrollRequestConfirmation(): bool
    {
        return $this->NotifyLearnerOnEnrollRequestConfirmation;
    }

    
    public function withNotifyLearnerOnEnrollRequestConfirmation(bool $NotifyLearnerOnEnrollRequestConfirmation): static
    {
        $new = clone $this;
        $new->NotifyLearnerOnEnrollRequestConfirmation = $NotifyLearnerOnEnrollRequestConfirmation;

        return $new;
    }

    
    public function getSendDueDateReminder1(): bool
    {
        return $this->SendDueDateReminder1;
    }

    
    public function withSendDueDateReminder1(bool $SendDueDateReminder1): static
    {
        $new = clone $this;
        $new->SendDueDateReminder1 = $SendDueDateReminder1;

        return $new;
    }

    
    public function getSendDueDateReminder2(): bool
    {
        return $this->SendDueDateReminder2;
    }

    
    public function withSendDueDateReminder2(bool $SendDueDateReminder2): static
    {
        $new = clone $this;
        $new->SendDueDateReminder2 = $SendDueDateReminder2;

        return $new;
    }

    
    public function getSendDueDateReminder3(): bool
    {
        return $this->SendDueDateReminder3;
    }

    
    public function withSendDueDateReminder3(bool $SendDueDateReminder3): static
    {
        $new = clone $this;
        $new->SendDueDateReminder3 = $SendDueDateReminder3;

        return $new;
    }

    
    public function getSendUpcomingILTReminder1(): bool
    {
        return $this->SendUpcomingILTReminder1;
    }

    
    public function withSendUpcomingILTReminder1(bool $SendUpcomingILTReminder1): static
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder1 = $SendUpcomingILTReminder1;

        return $new;
    }

    
    public function getSendUpcomingILTReminder2(): bool
    {
        return $this->SendUpcomingILTReminder2;
    }

    
    public function withSendUpcomingILTReminder2(bool $SendUpcomingILTReminder2): static
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder2 = $SendUpcomingILTReminder2;

        return $new;
    }

    
    public function getSendUpcomingILTReminder3(): bool
    {
        return $this->SendUpcomingILTReminder3;
    }

    
    public function withSendUpcomingILTReminder3(bool $SendUpcomingILTReminder3): static
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder3 = $SendUpcomingILTReminder3;

        return $new;
    }

    
    public function getSendEnrollmentReminderNotification(): bool
    {
        return $this->SendEnrollmentReminderNotification;
    }

    
    public function withSendEnrollmentReminderNotification(bool $SendEnrollmentReminderNotification): static
    {
        $new = clone $this;
        $new->SendEnrollmentReminderNotification = $SendEnrollmentReminderNotification;

        return $new;
    }

    
    public function getSendLearningPathModificationNotification(): bool
    {
        return $this->SendLearningPathModificationNotification;
    }

    
    public function withSendLearningPathModificationNotification(bool $SendLearningPathModificationNotification): static
    {
        $new = clone $this;
        $new->SendLearningPathModificationNotification = $SendLearningPathModificationNotification;

        return $new;
    }

    
    public function getNotifySupervisorOnEnrollmentReminder(): bool
    {
        return $this->NotifySupervisorOnEnrollmentReminder;
    }

    
    public function withNotifySupervisorOnEnrollmentReminder(bool $NotifySupervisorOnEnrollmentReminder): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnEnrollmentReminder = $NotifySupervisorOnEnrollmentReminder;

        return $new;
    }

    
    public function getSendWithdrawRequestNotification(): bool
    {
        return $this->SendWithdrawRequestNotification;
    }

    
    public function withSendWithdrawRequestNotification(bool $SendWithdrawRequestNotification): static
    {
        $new = clone $this;
        $new->SendWithdrawRequestNotification = $SendWithdrawRequestNotification;

        return $new;
    }

    
    public function getNotifyModeratorOnWithdrawRequest(): bool
    {
        return $this->NotifyModeratorOnWithdrawRequest;
    }

    
    public function withNotifyModeratorOnWithdrawRequest(bool $NotifyModeratorOnWithdrawRequest): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnWithdrawRequest = $NotifyModeratorOnWithdrawRequest;

        return $new;
    }

    
    public function getNotifySupervisorOnWithdrawRequest(): bool
    {
        return $this->NotifySupervisorOnWithdrawRequest;
    }

    
    public function withNotifySupervisorOnWithdrawRequest(bool $NotifySupervisorOnWithdrawRequest): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnWithdrawRequest = $NotifySupervisorOnWithdrawRequest;

        return $new;
    }

    
    public function getNotifyModeratorCompletion(): bool
    {
        return $this->NotifyModeratorCompletion;
    }

    
    public function withNotifyModeratorCompletion(bool $NotifyModeratorCompletion): static
    {
        $new = clone $this;
        $new->NotifyModeratorCompletion = $NotifyModeratorCompletion;

        return $new;
    }

    
    public function getNotifySupervisorCompletion(): bool
    {
        return $this->NotifySupervisorCompletion;
    }

    
    public function withNotifySupervisorCompletion(bool $NotifySupervisorCompletion): static
    {
        $new = clone $this;
        $new->NotifySupervisorCompletion = $NotifySupervisorCompletion;

        return $new;
    }

    
    public function getNotifyLearnerCompletion(): bool
    {
        return $this->NotifyLearnerCompletion;
    }

    
    public function withNotifyLearnerCompletion(bool $NotifyLearnerCompletion): static
    {
        $new = clone $this;
        $new->NotifyLearnerCompletion = $NotifyLearnerCompletion;

        return $new;
    }

    
    public function getCompletionNotificationIncludeSuccess(): bool
    {
        return $this->CompletionNotificationIncludeSuccess;
    }

    
    public function withCompletionNotificationIncludeSuccess(bool $CompletionNotificationIncludeSuccess): static
    {
        $new = clone $this;
        $new->CompletionNotificationIncludeSuccess = $CompletionNotificationIncludeSuccess;

        return $new;
    }

    
    public function getCompletionNotificationIncludeScore(): bool
    {
        return $this->CompletionNotificationIncludeScore;
    }

    
    public function withCompletionNotificationIncludeScore(bool $CompletionNotificationIncludeScore): static
    {
        $new = clone $this;
        $new->CompletionNotificationIncludeScore = $CompletionNotificationIncludeScore;

        return $new;
    }

    
    public function getNotifyModeratorOnDue(): bool
    {
        return $this->NotifyModeratorOnDue;
    }

    
    public function withNotifyModeratorOnDue(bool $NotifyModeratorOnDue): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnDue = $NotifyModeratorOnDue;

        return $new;
    }

    
    public function getNotifySupervisorOnDue(): bool
    {
        return $this->NotifySupervisorOnDue;
    }

    
    public function withNotifySupervisorOnDue(bool $NotifySupervisorOnDue): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnDue = $NotifySupervisorOnDue;

        return $new;
    }

    
    public function getNotifySupervisorOnOverDue1(): bool
    {
        return $this->NotifySupervisorOnOverDue1;
    }

    
    public function withNotifySupervisorOnOverDue1(bool $NotifySupervisorOnOverDue1): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue1 = $NotifySupervisorOnOverDue1;

        return $new;
    }

    
    public function getNotifySupervisorOnOverDue2(): bool
    {
        return $this->NotifySupervisorOnOverDue2;
    }

    
    public function withNotifySupervisorOnOverDue2(bool $NotifySupervisorOnOverDue2): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue2 = $NotifySupervisorOnOverDue2;

        return $new;
    }

    
    public function getNotifySupervisorOnOverDue3(): bool
    {
        return $this->NotifySupervisorOnOverDue3;
    }

    
    public function withNotifySupervisorOnOverDue3(bool $NotifySupervisorOnOverDue3): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue3 = $NotifySupervisorOnOverDue3;

        return $new;
    }

    
    public function getNotifySupervisorSupervisorOnOverDue1(): bool
    {
        return $this->NotifySupervisorSupervisorOnOverDue1;
    }

    
    public function withNotifySupervisorSupervisorOnOverDue1(bool $NotifySupervisorSupervisorOnOverDue1): static
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue1 = $NotifySupervisorSupervisorOnOverDue1;

        return $new;
    }

    
    public function getNotifySupervisorSupervisorOnOverDue2(): bool
    {
        return $this->NotifySupervisorSupervisorOnOverDue2;
    }

    
    public function withNotifySupervisorSupervisorOnOverDue2(bool $NotifySupervisorSupervisorOnOverDue2): static
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue2 = $NotifySupervisorSupervisorOnOverDue2;

        return $new;
    }

    
    public function getNotifySupervisorSupervisorOnOverDue3(): bool
    {
        return $this->NotifySupervisorSupervisorOnOverDue3;
    }

    
    public function withNotifySupervisorSupervisorOnOverDue3(bool $NotifySupervisorSupervisorOnOverDue3): static
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue3 = $NotifySupervisorSupervisorOnOverDue3;

        return $new;
    }

    
    public function getNotifyModeratorOnOverDue1(): bool
    {
        return $this->NotifyModeratorOnOverDue1;
    }

    
    public function withNotifyModeratorOnOverDue1(bool $NotifyModeratorOnOverDue1): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue1 = $NotifyModeratorOnOverDue1;

        return $new;
    }

    
    public function getNotifyModeratorOnOverDue2(): bool
    {
        return $this->NotifyModeratorOnOverDue2;
    }

    
    public function withNotifyModeratorOnOverDue2(bool $NotifyModeratorOnOverDue2): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue2 = $NotifyModeratorOnOverDue2;

        return $new;
    }

    
    public function getNotifyModeratorOnOverDue3(): bool
    {
        return $this->NotifyModeratorOnOverDue3;
    }

    
    public function withNotifyModeratorOnOverDue3(bool $NotifyModeratorOnOverDue3): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue3 = $NotifyModeratorOnOverDue3;

        return $new;
    }

    
    public function getNotifyLearnerOnOverDue1(): bool
    {
        return $this->NotifyLearnerOnOverDue1;
    }

    
    public function withNotifyLearnerOnOverDue1(bool $NotifyLearnerOnOverDue1): static
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue1 = $NotifyLearnerOnOverDue1;

        return $new;
    }

    
    public function getNotifyLearnerOnOverDue2(): bool
    {
        return $this->NotifyLearnerOnOverDue2;
    }

    
    public function withNotifyLearnerOnOverDue2(bool $NotifyLearnerOnOverDue2): static
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue2 = $NotifyLearnerOnOverDue2;

        return $new;
    }

    
    public function getNotifyLearnerOnOverDue3(): bool
    {
        return $this->NotifyLearnerOnOverDue3;
    }

    
    public function withNotifyLearnerOnOverDue3(bool $NotifyLearnerOnOverDue3): static
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue3 = $NotifyLearnerOnOverDue3;

        return $new;
    }

    
    public function getSendDueDateNotification(): bool
    {
        return $this->SendDueDateNotification;
    }

    
    public function withSendDueDateNotification(bool $SendDueDateNotification): static
    {
        $new = clone $this;
        $new->SendDueDateNotification = $SendDueDateNotification;

        return $new;
    }

    
    public function getNotifySupervisorOnMissedILTSession(): bool
    {
        return $this->NotifySupervisorOnMissedILTSession;
    }

    
    public function withNotifySupervisorOnMissedILTSession(bool $NotifySupervisorOnMissedILTSession): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnMissedILTSession = $NotifySupervisorOnMissedILTSession;

        return $new;
    }

    
    public function getNotifyModeratorOnMissedILTSession(): bool
    {
        return $this->NotifyModeratorOnMissedILTSession;
    }

    
    public function withNotifyModeratorOnMissedILTSession(bool $NotifyModeratorOnMissedILTSession): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnMissedILTSession = $NotifyModeratorOnMissedILTSession;

        return $new;
    }

    
    public function getNotifySupervisorOnWaitingList(): bool
    {
        return $this->NotifySupervisorOnWaitingList;
    }

    
    public function withNotifySupervisorOnWaitingList(bool $NotifySupervisorOnWaitingList): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnWaitingList = $NotifySupervisorOnWaitingList;

        return $new;
    }

    
    public function getNotifySupervisorOnWithdraw(): bool
    {
        return $this->NotifySupervisorOnWithdraw;
    }

    
    public function withNotifySupervisorOnWithdraw(bool $NotifySupervisorOnWithdraw): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnWithdraw = $NotifySupervisorOnWithdraw;

        return $new;
    }

    
    public function getNotifyModeratorOnWithdraw(): bool
    {
        return $this->NotifyModeratorOnWithdraw;
    }

    
    public function withNotifyModeratorOnWithdraw(bool $NotifyModeratorOnWithdraw): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnWithdraw = $NotifyModeratorOnWithdraw;

        return $new;
    }

    
    public function getNotifyModeratorOnWaitingList(): bool
    {
        return $this->NotifyModeratorOnWaitingList;
    }

    
    public function withNotifyModeratorOnWaitingList(bool $NotifyModeratorOnWaitingList): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnWaitingList = $NotifyModeratorOnWaitingList;

        return $new;
    }

    
    public function getNotifyModeratorOnDueDateReminder1(): bool
    {
        return $this->NotifyModeratorOnDueDateReminder1;
    }

    
    public function withNotifyModeratorOnDueDateReminder1(bool $NotifyModeratorOnDueDateReminder1): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder1 = $NotifyModeratorOnDueDateReminder1;

        return $new;
    }

    
    public function getNotifyModeratorOnDueDateReminder2(): bool
    {
        return $this->NotifyModeratorOnDueDateReminder2;
    }

    
    public function withNotifyModeratorOnDueDateReminder2(bool $NotifyModeratorOnDueDateReminder2): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder2 = $NotifyModeratorOnDueDateReminder2;

        return $new;
    }

    
    public function getNotifyModeratorOnDueDateReminder3(): bool
    {
        return $this->NotifyModeratorOnDueDateReminder3;
    }

    
    public function withNotifyModeratorOnDueDateReminder3(bool $NotifyModeratorOnDueDateReminder3): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder3 = $NotifyModeratorOnDueDateReminder3;

        return $new;
    }

    
    public function getNotifySupervisorOnDueDateReminder1(): bool
    {
        return $this->NotifySupervisorOnDueDateReminder1;
    }

    
    public function withNotifySupervisorOnDueDateReminder1(bool $NotifySupervisorOnDueDateReminder1): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder1 = $NotifySupervisorOnDueDateReminder1;

        return $new;
    }

    
    public function getNotifySupervisorOnDueDateReminder2(): bool
    {
        return $this->NotifySupervisorOnDueDateReminder2;
    }

    
    public function withNotifySupervisorOnDueDateReminder2(bool $NotifySupervisorOnDueDateReminder2): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder2 = $NotifySupervisorOnDueDateReminder2;

        return $new;
    }

    
    public function getNotifySupervisorOnDueDateReminder3(): bool
    {
        return $this->NotifySupervisorOnDueDateReminder3;
    }

    
    public function withNotifySupervisorOnDueDateReminder3(bool $NotifySupervisorOnDueDateReminder3): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder3 = $NotifySupervisorOnDueDateReminder3;

        return $new;
    }

    
    public function getNotifySupervisorOnUpcomingILTReminder1(): bool
    {
        return $this->NotifySupervisorOnUpcomingILTReminder1;
    }

    
    public function withNotifySupervisorOnUpcomingILTReminder1(bool $NotifySupervisorOnUpcomingILTReminder1): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder1 = $NotifySupervisorOnUpcomingILTReminder1;

        return $new;
    }

    
    public function getNotifySupervisorOnUpcomingILTReminder2(): bool
    {
        return $this->NotifySupervisorOnUpcomingILTReminder2;
    }

    
    public function withNotifySupervisorOnUpcomingILTReminder2(bool $NotifySupervisorOnUpcomingILTReminder2): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder2 = $NotifySupervisorOnUpcomingILTReminder2;

        return $new;
    }

    
    public function getNotifySupervisorOnUpcomingILTReminder3(): bool
    {
        return $this->NotifySupervisorOnUpcomingILTReminder3;
    }

    
    public function withNotifySupervisorOnUpcomingILTReminder3(bool $NotifySupervisorOnUpcomingILTReminder3): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder3 = $NotifySupervisorOnUpcomingILTReminder3;

        return $new;
    }

    
    public function getNotifyModeratorOnUpcomingILTReminder1(): bool
    {
        return $this->NotifyModeratorOnUpcomingILTReminder1;
    }

    
    public function withNotifyModeratorOnUpcomingILTReminder1(bool $NotifyModeratorOnUpcomingILTReminder1): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder1 = $NotifyModeratorOnUpcomingILTReminder1;

        return $new;
    }

    
    public function getNotifyModeratorOnUpcomingILTReminder2(): bool
    {
        return $this->NotifyModeratorOnUpcomingILTReminder2;
    }

    
    public function withNotifyModeratorOnUpcomingILTReminder2(bool $NotifyModeratorOnUpcomingILTReminder2): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder2 = $NotifyModeratorOnUpcomingILTReminder2;

        return $new;
    }

    
    public function getNotifyModeratorOnUpcomingILTReminder3(): bool
    {
        return $this->NotifyModeratorOnUpcomingILTReminder3;
    }

    
    public function withNotifyModeratorOnUpcomingILTReminder3(bool $NotifyModeratorOnUpcomingILTReminder3): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder3 = $NotifyModeratorOnUpcomingILTReminder3;

        return $new;
    }

    
    public function getSendOverDueNotification1(): bool
    {
        return $this->SendOverDueNotification1;
    }

    
    public function withSendOverDueNotification1(bool $SendOverDueNotification1): static
    {
        $new = clone $this;
        $new->SendOverDueNotification1 = $SendOverDueNotification1;

        return $new;
    }

    
    public function getSendOverDueNotification2(): bool
    {
        return $this->SendOverDueNotification2;
    }

    
    public function withSendOverDueNotification2(bool $SendOverDueNotification2): static
    {
        $new = clone $this;
        $new->SendOverDueNotification2 = $SendOverDueNotification2;

        return $new;
    }

    
    public function getSendOverDueNotification3(): bool
    {
        return $this->SendOverDueNotification3;
    }

    
    public function withSendOverDueNotification3(bool $SendOverDueNotification3): static
    {
        $new = clone $this;
        $new->SendOverDueNotification3 = $SendOverDueNotification3;

        return $new;
    }

    
    public function getSendMissedSessionNotification(): bool
    {
        return $this->SendMissedSessionNotification;
    }

    
    public function withSendMissedSessionNotification(bool $SendMissedSessionNotification): static
    {
        $new = clone $this;
        $new->SendMissedSessionNotification = $SendMissedSessionNotification;

        return $new;
    }

    
    public function getSendMissedILTSessionNotification(): bool
    {
        return $this->SendMissedILTSessionNotification;
    }

    
    public function withSendMissedILTSessionNotification(bool $SendMissedILTSessionNotification): static
    {
        $new = clone $this;
        $new->SendMissedILTSessionNotification = $SendMissedILTSessionNotification;

        return $new;
    }

    
    public function getSendWaitingListNotification(): bool
    {
        return $this->SendWaitingListNotification;
    }

    
    public function withSendWaitingListNotification(bool $SendWaitingListNotification): static
    {
        $new = clone $this;
        $new->SendWaitingListNotification = $SendWaitingListNotification;

        return $new;
    }

    
    public function getSendWithdrawNotifications(): bool
    {
        return $this->SendWithdrawNotifications;
    }

    
    public function withSendWithdrawNotifications(bool $SendWithdrawNotifications): static
    {
        $new = clone $this;
        $new->SendWithdrawNotifications = $SendWithdrawNotifications;

        return $new;
    }

    
    public function getSendCourseModificationNotification(): bool
    {
        return $this->SendCourseModificationNotification;
    }

    
    public function withSendCourseModificationNotification(bool $SendCourseModificationNotification): static
    {
        $new = clone $this;
        $new->SendCourseModificationNotification = $SendCourseModificationNotification;

        return $new;
    }

    
    public function getSendCourseModificationNotificationToCompleted(): bool
    {
        return $this->SendCourseModificationNotificationToCompleted;
    }

    
    public function withSendCourseModificationNotificationToCompleted(bool $SendCourseModificationNotificationToCompleted): static
    {
        $new = clone $this;
        $new->SendCourseModificationNotificationToCompleted = $SendCourseModificationNotificationToCompleted;

        return $new;
    }

    
    public function getSendCourseResourceModificationNotification(): bool
    {
        return $this->SendCourseResourceModificationNotification;
    }

    
    public function withSendCourseResourceModificationNotification(bool $SendCourseResourceModificationNotification): static
    {
        $new = clone $this;
        $new->SendCourseResourceModificationNotification = $SendCourseResourceModificationNotification;

        return $new;
    }

    
    public function getSendWaitingListModificationNotification(): bool
    {
        return $this->SendWaitingListModificationNotification;
    }

    
    public function withSendWaitingListModificationNotification(bool $SendWaitingListModificationNotification): static
    {
        $new = clone $this;
        $new->SendWaitingListModificationNotification = $SendWaitingListModificationNotification;

        return $new;
    }

    
    public function getSendAssignmentReviewedNotification(): bool
    {
        return $this->SendAssignmentReviewedNotification;
    }

    
    public function withSendAssignmentReviewedNotification(bool $SendAssignmentReviewedNotification): static
    {
        $new = clone $this;
        $new->SendAssignmentReviewedNotification = $SendAssignmentReviewedNotification;

        return $new;
    }

    
    public function getSendPerformanceNotification(): bool
    {
        return $this->SendPerformanceNotification;
    }

    
    public function withSendPerformanceNotification(bool $SendPerformanceNotification): static
    {
        $new = clone $this;
        $new->SendPerformanceNotification = $SendPerformanceNotification;

        return $new;
    }

    
    public function getSendBadgeIssuedNotification(): bool
    {
        return $this->SendBadgeIssuedNotification;
    }

    
    public function withSendBadgeIssuedNotification(bool $SendBadgeIssuedNotification): static
    {
        $new = clone $this;
        $new->SendBadgeIssuedNotification = $SendBadgeIssuedNotification;

        return $new;
    }

    
    public function getSendPendingNotification(): bool
    {
        return $this->SendPendingNotification;
    }

    
    public function withSendPendingNotification(bool $SendPendingNotification): static
    {
        $new = clone $this;
        $new->SendPendingNotification = $SendPendingNotification;

        return $new;
    }

    
    public function getSendFeedbackOverdueNotification(): bool
    {
        return $this->SendFeedbackOverdueNotification;
    }

    
    public function withSendFeedbackOverdueNotification(bool $SendFeedbackOverdueNotification): static
    {
        $new = clone $this;
        $new->SendFeedbackOverdueNotification = $SendFeedbackOverdueNotification;

        return $new;
    }

    
    public function getSendfeedbackDueDateNotification(): bool
    {
        return $this->SendfeedbackDueDateNotification;
    }

    
    public function withSendfeedbackDueDateNotification(bool $SendfeedbackDueDateNotification): static
    {
        $new = clone $this;
        $new->SendfeedbackDueDateNotification = $SendfeedbackDueDateNotification;

        return $new;
    }

    
    public function getSendAssignmentSubmittedNotification(): bool
    {
        return $this->SendAssignmentSubmittedNotification;
    }

    
    public function withSendAssignmentSubmittedNotification(bool $SendAssignmentSubmittedNotification): static
    {
        $new = clone $this;
        $new->SendAssignmentSubmittedNotification = $SendAssignmentSubmittedNotification;

        return $new;
    }

    
    public function getSendActivityPeerReviewCancelled(): bool
    {
        return $this->SendActivityPeerReviewCancelled;
    }

    
    public function withSendActivityPeerReviewCancelled(bool $SendActivityPeerReviewCancelled): static
    {
        $new = clone $this;
        $new->SendActivityPeerReviewCancelled = $SendActivityPeerReviewCancelled;

        return $new;
    }

    
    public function getSendActivityReviewApprovalExpiryReminder(): bool
    {
        return $this->SendActivityReviewApprovalExpiryReminder;
    }

    
    public function withSendActivityReviewApprovalExpiryReminder(bool $SendActivityReviewApprovalExpiryReminder): static
    {
        $new = clone $this;
        $new->SendActivityReviewApprovalExpiryReminder = $SendActivityReviewApprovalExpiryReminder;

        return $new;
    }

    
    public function getSendExternalActivityApprovedAutomatically(): bool
    {
        return $this->SendExternalActivityApprovedAutomatically;
    }

    
    public function withSendExternalActivityApprovedAutomatically(bool $SendExternalActivityApprovedAutomatically): static
    {
        $new = clone $this;
        $new->SendExternalActivityApprovedAutomatically = $SendExternalActivityApprovedAutomatically;

        return $new;
    }

    
    public function getSendExternalActivityRequiresApproval(): bool
    {
        return $this->SendExternalActivityRequiresApproval;
    }

    
    public function withSendExternalActivityRequiresApproval(bool $SendExternalActivityRequiresApproval): static
    {
        $new = clone $this;
        $new->SendExternalActivityRequiresApproval = $SendExternalActivityRequiresApproval;

        return $new;
    }

    
    public function getSendForumPostApprovalRequired(): bool
    {
        return $this->SendForumPostApprovalRequired;
    }

    
    public function withSendForumPostApprovalRequired(bool $SendForumPostApprovalRequired): static
    {
        $new = clone $this;
        $new->SendForumPostApprovalRequired = $SendForumPostApprovalRequired;

        return $new;
    }

    
    public function getSendForumPostApproved(): bool
    {
        return $this->SendForumPostApproved;
    }

    
    public function withSendForumPostApproved(bool $SendForumPostApproved): static
    {
        $new = clone $this;
        $new->SendForumPostApproved = $SendForumPostApproved;

        return $new;
    }

    
    public function getSendForumPostDeclined(): bool
    {
        return $this->SendForumPostDeclined;
    }

    
    public function withSendForumPostDeclined(bool $SendForumPostDeclined): static
    {
        $new = clone $this;
        $new->SendForumPostDeclined = $SendForumPostDeclined;

        return $new;
    }

    
    public function getSendPasswordChanged(): bool
    {
        return $this->SendPasswordChanged;
    }

    
    public function withSendPasswordChanged(bool $SendPasswordChanged): static
    {
        $new = clone $this;
        $new->SendPasswordChanged = $SendPasswordChanged;

        return $new;
    }

    
    public function getSendRecommendationInvitation(): bool
    {
        return $this->SendRecommendationInvitation;
    }

    
    public function withSendRecommendationInvitation(bool $SendRecommendationInvitation): static
    {
        $new = clone $this;
        $new->SendRecommendationInvitation = $SendRecommendationInvitation;

        return $new;
    }

    
    public function getSendRecommendationOutCome(): bool
    {
        return $this->SendRecommendationOutCome;
    }

    
    public function withSendRecommendationOutCome(bool $SendRecommendationOutCome): static
    {
        $new = clone $this;
        $new->SendRecommendationOutCome = $SendRecommendationOutCome;

        return $new;
    }

    
    public function getSendAccountVerification(): bool
    {
        return $this->SendAccountVerification;
    }

    
    public function withSendAccountVerification(bool $SendAccountVerification): static
    {
        $new = clone $this;
        $new->SendAccountVerification = $SendAccountVerification;

        return $new;
    }

    
    public function getSendSelfWithdraw(): bool
    {
        return $this->SendSelfWithdraw;
    }

    
    public function withSendSelfWithdraw(bool $SendSelfWithdraw): static
    {
        $new = clone $this;
        $new->SendSelfWithdraw = $SendSelfWithdraw;

        return $new;
    }

    
    public function getNotifySupervisorOnSelfWithdraw(): bool
    {
        return $this->NotifySupervisorOnSelfWithdraw;
    }

    
    public function withNotifySupervisorOnSelfWithdraw(bool $NotifySupervisorOnSelfWithdraw): static
    {
        $new = clone $this;
        $new->NotifySupervisorOnSelfWithdraw = $NotifySupervisorOnSelfWithdraw;

        return $new;
    }

    
    public function getNotifyModeratorOnSelfWithdraw(): bool
    {
        return $this->NotifyModeratorOnSelfWithdraw;
    }

    
    public function withNotifyModeratorOnSelfWithdraw(bool $NotifyModeratorOnSelfWithdraw): static
    {
        $new = clone $this;
        $new->NotifyModeratorOnSelfWithdraw = $NotifyModeratorOnSelfWithdraw;

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

    
    public function getManualEnollOverrideLastEnrollmentDate(): bool
    {
        return $this->ManualEnollOverrideLastEnrollmentDate;
    }

    
    public function withManualEnollOverrideLastEnrollmentDate(bool $ManualEnollOverrideLastEnrollmentDate): static
    {
        $new = clone $this;
        $new->ManualEnollOverrideLastEnrollmentDate = $ManualEnollOverrideLastEnrollmentDate;

        return $new;
    }

    
    public function getManualEnollOverridePrerequisites(): bool
    {
        return $this->ManualEnollOverridePrerequisites;
    }

    
    public function withManualEnollOverridePrerequisites(bool $ManualEnollOverridePrerequisites): static
    {
        $new = clone $this;
        $new->ManualEnollOverridePrerequisites = $ManualEnollOverridePrerequisites;

        return $new;
    }

    
    public function getManualEnollOverrideNotificationPeriod(): bool
    {
        return $this->ManualEnollOverrideNotificationPeriod;
    }

    
    public function withManualEnollOverrideNotificationPeriod(bool $ManualEnollOverrideNotificationPeriod): static
    {
        $new = clone $this;
        $new->ManualEnollOverrideNotificationPeriod = $ManualEnollOverrideNotificationPeriod;

        return $new;
    }

    
    public function getManualEnollOverrideMaxReEnrollments(): bool
    {
        return $this->ManualEnollOverrideMaxReEnrollments;
    }

    
    public function withManualEnollOverrideMaxReEnrollments(bool $ManualEnollOverrideMaxReEnrollments): static
    {
        $new = clone $this;
        $new->ManualEnollOverrideMaxReEnrollments = $ManualEnollOverrideMaxReEnrollments;

        return $new;
    }

    
    public function getManualEnollOverrideSingleNonExpiringEnrollments(): bool
    {
        return $this->ManualEnollOverrideSingleNonExpiringEnrollments;
    }

    
    public function withManualEnollOverrideSingleNonExpiringEnrollments(bool $ManualEnollOverrideSingleNonExpiringEnrollments): static
    {
        $new = clone $this;
        $new->ManualEnollOverrideSingleNonExpiringEnrollments = $ManualEnollOverrideSingleNonExpiringEnrollments;

        return $new;
    }

    
    public function getClassroomHeight(): int
    {
        return $this->ClassroomHeight;
    }

    
    public function withClassroomHeight(int $ClassroomHeight): static
    {
        $new = clone $this;
        $new->ClassroomHeight = $ClassroomHeight;

        return $new;
    }

    
    public function getClassroomWidth(): int
    {
        return $this->ClassroomWidth;
    }

    
    public function withClassroomWidth(int $ClassroomWidth): static
    {
        $new = clone $this;
        $new->ClassroomWidth = $ClassroomWidth;

        return $new;
    }

    
    public function getClassroomTemplate(): string
    {
        return $this->ClassroomTemplate;
    }

    
    public function withClassroomTemplate(string $ClassroomTemplate): static
    {
        $new = clone $this;
        $new->ClassroomTemplate = $ClassroomTemplate;

        return $new;
    }

    
    public function getForceIECompatibilityMode(): bool
    {
        return $this->ForceIECompatibilityMode;
    }

    
    public function withForceIECompatibilityMode(bool $ForceIECompatibilityMode): static
    {
        $new = clone $this;
        $new->ForceIECompatibilityMode = $ForceIECompatibilityMode;

        return $new;
    }

    
    public function getAllowModal(): bool
    {
        return $this->AllowModal;
    }

    
    public function withAllowModal(bool $AllowModal): static
    {
        $new = clone $this;
        $new->AllowModal = $AllowModal;

        return $new;
    }

    
    public function getFullScreenSize(): bool
    {
        return $this->FullScreenSize;
    }

    
    public function withFullScreenSize(bool $FullScreenSize): static
    {
        $new = clone $this;
        $new->FullScreenSize = $FullScreenSize;

        return $new;
    }

    
    public function getOpenCourseIn(): string
    {
        return $this->OpenCourseIn;
    }

    
    public function withOpenCourseIn(string $OpenCourseIn): static
    {
        $new = clone $this;
        $new->OpenCourseIn = $OpenCourseIn;

        return $new;
    }

    
    public function getHasThreshold(): bool
    {
        return $this->HasThreshold;
    }

    
    public function withHasThreshold(bool $HasThreshold): static
    {
        $new = clone $this;
        $new->HasThreshold = $HasThreshold;

        return $new;
    }

    
    public function getThresholdValue(): int
    {
        return $this->ThresholdValue;
    }

    
    public function withThresholdValue(int $ThresholdValue): static
    {
        $new = clone $this;
        $new->ThresholdValue = $ThresholdValue;

        return $new;
    }

    
    public function getLimitSecurityAccess(): bool
    {
        return $this->LimitSecurityAccess;
    }

    
    public function withLimitSecurityAccess(bool $LimitSecurityAccess): static
    {
        $new = clone $this;
        $new->LimitSecurityAccess = $LimitSecurityAccess;

        return $new;
    }

    
    public function getCreatorID(): string
    {
        return $this->CreatorID;
    }

    
    public function withCreatorID(string $CreatorID): static
    {
        $new = clone $this;
        $new->CreatorID = $CreatorID;

        return $new;
    }

    
    public function getRequirePackageForCompletion(): bool
    {
        return $this->RequirePackageForCompletion;
    }

    
    public function withRequirePackageForCompletion(bool $RequirePackageForCompletion): static
    {
        $new = clone $this;
        $new->RequirePackageForCompletion = $RequirePackageForCompletion;

        return $new;
    }

    
    public function getRequireFeedbackForCompletion(): bool
    {
        return $this->RequireFeedbackForCompletion;
    }

    
    public function withRequireFeedbackForCompletion(bool $RequireFeedbackForCompletion): static
    {
        $new = clone $this;
        $new->RequireFeedbackForCompletion = $RequireFeedbackForCompletion;

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

    
    public function getRequireStatusSuccessPassed(): bool
    {
        return $this->RequireStatusSuccessPassed;
    }

    
    public function withRequireStatusSuccessPassed(bool $RequireStatusSuccessPassed): static
    {
        $new = clone $this;
        $new->RequireStatusSuccessPassed = $RequireStatusSuccessPassed;

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

    
    public function getOverrideAPISucces(): bool
    {
        return $this->OverrideAPISucces;
    }

    
    public function withOverrideAPISucces(bool $OverrideAPISucces): static
    {
        $new = clone $this;
        $new->OverrideAPISucces = $OverrideAPISucces;

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

    
    public function getPreventCompletionSettings(): string
    {
        return $this->PreventCompletionSettings;
    }

    
    public function withPreventCompletionSettings(string $PreventCompletionSettings): static
    {
        $new = clone $this;
        $new->PreventCompletionSettings = $PreventCompletionSettings;

        return $new;
    }

    
    public function getHasAssessment(): bool
    {
        return $this->HasAssessment;
    }

    
    public function withHasAssessment(bool $HasAssessment): static
    {
        $new = clone $this;
        $new->HasAssessment = $HasAssessment;

        return $new;
    }

    
    public function getAssessmentWeight(): int
    {
        return $this->AssessmentWeight;
    }

    
    public function withAssessmentWeight(int $AssessmentWeight): static
    {
        $new = clone $this;
        $new->AssessmentWeight = $AssessmentWeight;

        return $new;
    }

    
    public function getAssignmentWeight(): int
    {
        return $this->AssignmentWeight;
    }

    
    public function withAssignmentWeight(int $AssignmentWeight): static
    {
        $new = clone $this;
        $new->AssignmentWeight = $AssignmentWeight;

        return $new;
    }

    
    public function getHasFeedback(): bool
    {
        return $this->HasFeedback;
    }

    
    public function withHasFeedback(bool $HasFeedback): static
    {
        $new = clone $this;
        $new->HasFeedback = $HasFeedback;

        return $new;
    }

    
    public function getPackageWeight(): int
    {
        return $this->PackageWeight;
    }

    
    public function withPackageWeight(int $PackageWeight): static
    {
        $new = clone $this;
        $new->PackageWeight = $PackageWeight;

        return $new;
    }

    
    public function getDeploymentType(): string
    {
        return $this->DeploymentType;
    }

    
    public function withDeploymentType(string $DeploymentType): static
    {
        $new = clone $this;
        $new->DeploymentType = $DeploymentType;

        return $new;
    }

    
    public function getAzureRunMode(): string
    {
        return $this->AzureRunMode;
    }

    
    public function withAzureRunMode(string $AzureRunMode): static
    {
        $new = clone $this;
        $new->AzureRunMode = $AzureRunMode;

        return $new;
    }

    
    public function getDynamicProgram(): bool
    {
        return $this->DynamicProgram;
    }

    
    public function withDynamicProgram(bool $DynamicProgram): static
    {
        $new = clone $this;
        $new->DynamicProgram = $DynamicProgram;

        return $new;
    }

    
    public function getLearningTime(): float
    {
        return $this->LearningTime;
    }

    
    public function withLearningTime(float $LearningTime): static
    {
        $new = clone $this;
        $new->LearningTime = $LearningTime;

        return $new;
    }

    
    public function getEditorXML(): string
    {
        return $this->EditorXML;
    }

    
    public function withEditorXML(string $EditorXML): static
    {
        $new = clone $this;
        $new->EditorXML = $EditorXML;

        return $new;
    }

    
    public function getTranscriptPrintMode(): string
    {
        return $this->TranscriptPrintMode;
    }

    
    public function withTranscriptPrintMode(string $TranscriptPrintMode): static
    {
        $new = clone $this;
        $new->TranscriptPrintMode = $TranscriptPrintMode;

        return $new;
    }

    
    public function getHideTranscriptScore(): bool
    {
        return $this->HideTranscriptScore;
    }

    
    public function withHideTranscriptScore(bool $HideTranscriptScore): static
    {
        $new = clone $this;
        $new->HideTranscriptScore = $HideTranscriptScore;

        return $new;
    }

    
    public function getShowCustomScoreFeedback(): bool
    {
        return $this->ShowCustomScoreFeedback;
    }

    
    public function withShowCustomScoreFeedback(bool $ShowCustomScoreFeedback): static
    {
        $new = clone $this;
        $new->ShowCustomScoreFeedback = $ShowCustomScoreFeedback;

        return $new;
    }

    
    public function getHideInteractionsFromUser(): bool
    {
        return $this->HideInteractionsFromUser;
    }

    
    public function withHideInteractionsFromUser(bool $HideInteractionsFromUser): static
    {
        $new = clone $this;
        $new->HideInteractionsFromUser = $HideInteractionsFromUser;

        return $new;
    }

    
    public function getHideInteractionsFromSupervisor(): bool
    {
        return $this->HideInteractionsFromSupervisor;
    }

    
    public function withHideInteractionsFromSupervisor(bool $HideInteractionsFromSupervisor): static
    {
        $new = clone $this;
        $new->HideInteractionsFromSupervisor = $HideInteractionsFromSupervisor;

        return $new;
    }

    
    public function getLog(): bool
    {
        return $this->Log;
    }

    
    public function withLog(bool $Log): static
    {
        $new = clone $this;
        $new->Log = $Log;

        return $new;
    }

    
    public function getCustomScoreFeedbackXml(): string
    {
        return $this->CustomScoreFeedbackXml;
    }

    
    public function withCustomScoreFeedbackXml(string $CustomScoreFeedbackXml): static
    {
        $new = clone $this;
        $new->CustomScoreFeedbackXml = $CustomScoreFeedbackXml;

        return $new;
    }

    
    public function getCustomActivityTypeID(): string
    {
        return $this->CustomActivityTypeID;
    }

    
    public function withCustomActivityTypeID(string $CustomActivityTypeID): static
    {
        $new = clone $this;
        $new->CustomActivityTypeID = $CustomActivityTypeID;

        return $new;
    }

    
    public function getShowHiddenSettings(): bool
    {
        return $this->ShowHiddenSettings;
    }

    
    public function withShowHiddenSettings(bool $ShowHiddenSettings): static
    {
        $new = clone $this;
        $new->ShowHiddenSettings = $ShowHiddenSettings;

        return $new;
    }

    
    public function getPortfolioEvidenceNumber(): int
    {
        return $this->PortfolioEvidenceNumber;
    }

    
    public function withPortfolioEvidenceNumber(int $PortfolioEvidenceNumber): static
    {
        $new = clone $this;
        $new->PortfolioEvidenceNumber = $PortfolioEvidenceNumber;

        return $new;
    }

    
    public function getPortfolioEvidenceMinumumNumber(): int
    {
        return $this->PortfolioEvidenceMinumumNumber;
    }

    
    public function withPortfolioEvidenceMinumumNumber(int $PortfolioEvidenceMinumumNumber): static
    {
        $new = clone $this;
        $new->PortfolioEvidenceMinumumNumber = $PortfolioEvidenceMinumumNumber;

        return $new;
    }

    
    public function getAllowLearnerNotes(): bool
    {
        return $this->AllowLearnerNotes;
    }

    
    public function withAllowLearnerNotes(bool $AllowLearnerNotes): static
    {
        $new = clone $this;
        $new->AllowLearnerNotes = $AllowLearnerNotes;

        return $new;
    }

    
    public function getShowRecommendation(): bool
    {
        return $this->ShowRecommendation;
    }

    
    public function withShowRecommendation(bool $ShowRecommendation): static
    {
        $new = clone $this;
        $new->ShowRecommendation = $ShowRecommendation;

        return $new;
    }

    
    public function getMarkByTA(): bool
    {
        return $this->MarkByTA;
    }

    
    public function withMarkByTA(bool $MarkByTA): static
    {
        $new = clone $this;
        $new->MarkByTA = $MarkByTA;

        return $new;
    }

    
    public function getMarkByModerator(): bool
    {
        return $this->MarkByModerator;
    }

    
    public function withMarkByModerator(bool $MarkByModerator): static
    {
        $new = clone $this;
        $new->MarkByModerator = $MarkByModerator;

        return $new;
    }

    
    public function getAssessments(): ArrayOfAnyType
    {
        return $this->Assessments;
    }

    
    public function withAssessments(ArrayOfAnyType $Assessments): static
    {
        $new = clone $this;
        $new->Assessments = $Assessments;

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
