<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class LearningType
{
    /**
     * @var string
     */
    private $CourseType;

    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $FullScreen;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var \DateTimeInterface
     */
    private $LastUpdatedTimestamp;

    /**
     * @var string
     */
    private $Logo;

    /**
     * @var string
     */
    private $LogoContentType;

    /**
     * @var string
     */
    private $LogoID;

    /**
     * @var string
     */
    private $SeriesID;

    /**
     * @var string
     */
    private $SeriesName;

    /**
     * @var string
     */
    private $ProgramID;

    /**
     * @var string
     */
    private $ProgramName;

    /**
     * @var bool
     */
    private $IsActive;

    /**
     * @var string
     */
    private $SKU;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var float
     */
    private $SubsequentPrice;

    /**
     * @var int
     */
    private $TokensValue;

    /**
     * @var int
     */
    private $SubsequentTokensValue;

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var string
     */
    private $PaymentProvider;

    /**
     * @var bool
     */
    private $GrantCertificate;

    /**
     * @var bool
     */
    private $CertificateExpires;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AccreditationDetails
     */
    private $AccreditationDetails;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfReference
     */
    private $References;

    /**
     * @var bool
     */
    private $IsShared;

    /**
     * @var string
     */
    private $ExclusionMode;

    /**
     * @var string
     */
    private $LeaningPathActivityLayout;

    /**
     * @var string
     */
    private $ShowLearnerProgressAs;

    /**
     * @var bool
     */
    private $ShowSharingLink;

    /**
     * @var bool
     */
    private $VideoShowScrubber;

    /**
     * @var bool
     */
    private $VideoBookmarkProgress;

    /**
     * @var bool
     */
    private $VideoStartAuto;

    /**
     * @var bool
     */
    private $VideoCompleteOnOpen;

    /**
     * @var bool
     */
    private $VideoCompleteOnEnd;

    /**
     * @var bool
     */
    private $VideoCompleteOnTime;

    /**
     * @var string
     */
    private $VideoCompleteOnTime_Minute;

    /**
     * @var string
     */
    private $VideoCompleteOnTime_Sec;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CaptionInfo
     */
    private $CaptionInfo;

    /**
     * @var bool
     */
    private $ManualEnrollNoMatch;

    /**
     * @var bool
     */
    private $WaitlistEnrollAfterLastWithdrawDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastUnenrollmentDate;

    /**
     * @var \DateTimeInterface
     */
    private $FirstEnrollmentDate;

    /**
     * @var bool
     */
    private $UnlimitedLastEnrollment;

    /**
     * @var bool
     */
    private $LastEnrollmentBasedFirstEnrollmentDate;

    /**
     * @var string
     */
    private $LastEnrollmentBasedFirstEnrollmentDateSetting;

    /**
     * @var \DateTimeInterface
     */
    private $LastEnrollmentDate;

    /**
     * @var bool
     */
    private $AllowEnrollAfterLastEnrollDate;

    /**
     * @var int
     */
    private $LastEnrollmentCutOff;

    /**
     * @var bool
     */
    private $AllowSupervisorExtendDueDate;

    /**
     * @var int
     */
    private $SupervisorExtensionDaysLimit;

    /**
     * @var \DateTimeInterface
     */
    private $StartDate;

    /**
     * @var string
     */
    private $DueDate;

    /**
     * @var bool
     */
    private $AllowEnrollmentCodeAfterEnrollmentDate;

    /**
     * @var int
     */
    private $EnrollmentCodeAfterEnrollmentDate_NoOfDays;

    /**
     * @var bool
     */
    private $BarAccessAfterDue;

    /**
     * @var bool
     */
    private $SuspendAccess;

    /**
     * @var string
     */
    private $SuspendAccessDays;

    /**
     * @var bool
     */
    private $EnrollFromLPOnly;

    /**
     * @var bool
     */
    private $AutoEnroll;

    /**
     * @var bool
     */
    private $AutoEnrollAllDomainMembers;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AutoenrollRules;

    /**
     * @var bool
     */
    private $AutoenrollRulesRequired;

    /**
     * @var string
     */
    private $AutoenrollRepeatType;

    /**
     * @var string
     */
    private $AutoenrollRepeatMonthCount;

    /**
     * @var \DateTimeInterface
     */
    private $AutoenrollLastRunDate;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AutoenrollExcludeRules;

    /**
     * @var bool
     */
    private $AutoenrollExcludeRulesRequired;

    /**
     * @var bool
     */
    private $ReAutoEnroll;

    /**
     * @var bool
     */
    private $UseAutoEnrollmentRuleForReEnroll;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $RecertificationAutoEnrollRules;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $RecertificationAutoEnrollExcludeRules;

    /**
     * @var bool
     */
    private $ReAutoEnrollmentAllowAll;

    /**
     * @var string
     */
    private $ReAutoenrollRepeatType;

    /**
     * @var string
     */
    private $ReAutoenrollRepeatMonthCount;

    /**
     * @var bool
     */
    private $ReAutoenrollAllRulesRequired;

    /**
     * @var \DateTimeInterface
     */
    private $ReAutoenrollLastRunDate;

    /**
     * @var bool
     */
    private $ReAutoenrollAllExcludeRulesRequired;

    /**
     * @var bool
     */
    private $SelfEnroll;

    /**
     * @var bool
     */
    private $AllowTransfer;

    /**
     * @var bool
     */
    private $SelfEnrollAllDomainMembers;

    /**
     * @var bool
     */
    private $PermissionEnroll;

    /**
     * @var string
     */
    private $EnrollPermissionFrom;

    /**
     * @var bool
     */
    private $PaymentEnroll;

    /**
     * @var bool
     */
    private $TokensEnroll;

    /**
     * @var bool
     */
    private $AllowCoupons;

    /**
     * @var bool
     */
    private $GlobalTokensEnroll;

    /**
     * @var bool
     */
    private $PassEnroll;

    /**
     * @var bool
     */
    private $AllowPOPayment;

    /**
     * @var bool
     */
    private $AllowPass;

    /**
     * @var bool
     */
    private $AllowPurchaseForOthers;

    /**
     * @var bool
     */
    private $AllowAttendanceCodeToEnroll;

    /**
     * @var bool
     */
    private $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;

    /**
     * @var bool
     */
    private $AttendanceCodeEnrollFollowsRules;

    /**
     * @var bool
     */
    private $AllowAttendanceCode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $SelfEnrollRules;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $SelfEnrollGroups;

    /**
     * @var bool
     */
    private $SelfEnrollGroupRequired;

    /**
     * @var bool
     */
    private $SelfEnrollRulesRequired;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $SelfEnrollExcludeRules;

    /**
     * @var bool
     */
    private $SelfEnrollExcludeRulesRequired;

    /**
     * @var bool
     */
    private $CanUnenroll;

    /**
     * @var bool
     */
    private $WithdrawAllDomainMembers;

    /**
     * @var bool
     */
    private $PermissionUnenroll;

    /**
     * @var string
     */
    private $UnenrollOption;

    /**
     * @var string
     */
    private $UnenrollPermissionFrom;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $WithdrawalRules;

    /**
     * @var bool
     */
    private $WithdrawalRulesRequired;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $WithdrawalExcludeRules;

    /**
     * @var bool
     */
    private $WithdrawalExcludeRulesRequired;

    /**
     * @var bool
     */
    private $AutoWithdraw;

    /**
     * @var bool
     */
    private $AutoWithdrawNotMatchingAutoRules;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AutoWithdrawalRules;

    /**
     * @var bool
     */
    private $AutoWithdrawalRulesRequired;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AutoWithdrawalExcludeRules;

    /**
     * @var bool
     */
    private $AutoWithdrawalExcludeRulesRequired;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AnnouncementRules;

    /**
     * @var bool
     */
    private $AnnouncementRulesRequired;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AnnouncementExcludeRules;

    /**
     * @var bool
     */
    private $AnnouncementExcludeRulesRequired;

    /**
     * @var bool
     */
    private $AutoEnrollSelfActivities;

    /**
     * @var bool
     */
    private $AutoEnrollManualActivities;

    /**
     * @var bool
     */
    private $IncludeAllInPrice;

    /**
     * @var bool
     */
    private $AutoEnrollLPActivities;

    /**
     * @var bool
     */
    private $ExcludeLPEnrollPurchaseActivities;

    /**
     * @var bool
     */
    private $ExcludeLPEnrollNotSelfEnrollActivities;

    /**
     * @var bool
     */
    private $WithdrawIncompleteLPActivitiesOnLPEnroll;

    /**
     * @var bool
     */
    private $StudentIsEnrolled;

    /**
     * @var bool
     */
    private $StudentHasPendingRequest;

    /**
     * @var bool
     */
    private $StudentHasPass;

    /**
     * @var bool
     */
    private $AllowAnonPreview;

    /**
     * @var string
     */
    private $FieldsXml;

    /**
     * @var string
     */
    private $BaseUrl;

    /**
     * @var bool
     */
    private $HasAccessCode;

    /**
     * @var string
     */
    private $AccessCode;

    /**
     * @var int
     */
    private $CourseSharingCount;

    /**
     * @var string
     */
    private $Disclaimer;

    /**
     * @var bool
     */
    private $ShowDisclaimerAlways;

    /**
     * @var bool
     */
    private $DisclaimerAgreed;

    /**
     * @var string
     */
    private $DisclaimerTextButton;

    /**
     * @var bool
     */
    private $HasDisclaimer;

    /**
     * @var bool
     */
    private $AllowMobileDownload;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $AltPrices;

    /**
     * @var string
     */
    private $InitialScormVersion;

    /**
     * @var string
     */
    private $ReviewStatus;

    /**
     * @var bool
     */
    private $SendAccreditationExpiryNotification;

    /**
     * @var bool
     */
    private $SendSessionStartLearnerNotification;

    /**
     * @var bool
     */
    private $SendSessionStartModeratorNotification;

    /**
     * @var bool
     */
    private $SendEnrollmentConfirmation;

    /**
     * @var bool
     */
    private $SendEnrollmentRequestNotification;

    /**
     * @var bool
     */
    private $SendThresholdNotification;

    /**
     * @var bool
     */
    private $SendStartDateNotificationLearner;

    /**
     * @var bool
     */
    private $NotifyModeratorEnroll;

    /**
     * @var bool
     */
    private $NotifySupervisorEnroll;

    /**
     * @var bool
     */
    private $NotifyStudentEnroll;

    /**
     * @var bool
     */
    private $SendEnrollmentRequestConfirmation;

    /**
     * @var bool
     */
    private $NotifyModeratorOnEnrollRequestConfirmation;

    /**
     * @var bool
     */
    private $NotifySupervisorOnEnrollRequestConfirmation;

    /**
     * @var bool
     */
    private $NotifyLearnerOnEnrollRequestConfirmation;

    /**
     * @var bool
     */
    private $SendDueDateReminder1;

    /**
     * @var bool
     */
    private $SendDueDateReminder2;

    /**
     * @var bool
     */
    private $SendDueDateReminder3;

    /**
     * @var bool
     */
    private $SendUpcomingILTReminder1;

    /**
     * @var bool
     */
    private $SendUpcomingILTReminder2;

    /**
     * @var bool
     */
    private $SendUpcomingILTReminder3;

    /**
     * @var bool
     */
    private $SendEnrollmentReminderNotification;

    /**
     * @var bool
     */
    private $SendLearningPathModificationNotification;

    /**
     * @var bool
     */
    private $NotifySupervisorOnEnrollmentReminder;

    /**
     * @var bool
     */
    private $SendWithdrawRequestNotification;

    /**
     * @var bool
     */
    private $NotifyModeratorOnWithdrawRequest;

    /**
     * @var bool
     */
    private $NotifySupervisorOnWithdrawRequest;

    /**
     * @var bool
     */
    private $NotifyModeratorCompletion;

    /**
     * @var bool
     */
    private $NotifySupervisorCompletion;

    /**
     * @var bool
     */
    private $NotifyLearnerCompletion;

    /**
     * @var bool
     */
    private $CompletionNotificationIncludeSuccess;

    /**
     * @var bool
     */
    private $CompletionNotificationIncludeScore;

    /**
     * @var bool
     */
    private $NotifyModeratorOnDue;

    /**
     * @var bool
     */
    private $NotifySupervisorOnDue;

    /**
     * @var bool
     */
    private $NotifySupervisorOnOverDue1;

    /**
     * @var bool
     */
    private $NotifySupervisorOnOverDue2;

    /**
     * @var bool
     */
    private $NotifySupervisorOnOverDue3;

    /**
     * @var bool
     */
    private $NotifySupervisorSupervisorOnOverDue1;

    /**
     * @var bool
     */
    private $NotifySupervisorSupervisorOnOverDue2;

    /**
     * @var bool
     */
    private $NotifySupervisorSupervisorOnOverDue3;

    /**
     * @var bool
     */
    private $NotifyModeratorOnOverDue1;

    /**
     * @var bool
     */
    private $NotifyModeratorOnOverDue2;

    /**
     * @var bool
     */
    private $NotifyModeratorOnOverDue3;

    /**
     * @var bool
     */
    private $NotifyLearnerOnOverDue1;

    /**
     * @var bool
     */
    private $NotifyLearnerOnOverDue2;

    /**
     * @var bool
     */
    private $NotifyLearnerOnOverDue3;

    /**
     * @var bool
     */
    private $SendDueDateNotification;

    /**
     * @var bool
     */
    private $NotifySupervisorOnMissedILTSession;

    /**
     * @var bool
     */
    private $NotifyModeratorOnMissedILTSession;

    /**
     * @var bool
     */
    private $NotifySupervisorOnWaitingList;

    /**
     * @var bool
     */
    private $NotifySupervisorOnWithdraw;

    /**
     * @var bool
     */
    private $NotifyModeratorOnWithdraw;

    /**
     * @var bool
     */
    private $NotifyModeratorOnWaitingList;

    /**
     * @var bool
     */
    private $NotifyModeratorOnDueDateReminder1;

    /**
     * @var bool
     */
    private $NotifyModeratorOnDueDateReminder2;

    /**
     * @var bool
     */
    private $NotifyModeratorOnDueDateReminder3;

    /**
     * @var bool
     */
    private $NotifySupervisorOnDueDateReminder1;

    /**
     * @var bool
     */
    private $NotifySupervisorOnDueDateReminder2;

    /**
     * @var bool
     */
    private $NotifySupervisorOnDueDateReminder3;

    /**
     * @var bool
     */
    private $NotifySupervisorOnUpcomingILTReminder1;

    /**
     * @var bool
     */
    private $NotifySupervisorOnUpcomingILTReminder2;

    /**
     * @var bool
     */
    private $NotifySupervisorOnUpcomingILTReminder3;

    /**
     * @var bool
     */
    private $NotifyModeratorOnUpcomingILTReminder1;

    /**
     * @var bool
     */
    private $NotifyModeratorOnUpcomingILTReminder2;

    /**
     * @var bool
     */
    private $NotifyModeratorOnUpcomingILTReminder3;

    /**
     * @var bool
     */
    private $SendOverDueNotification1;

    /**
     * @var bool
     */
    private $SendOverDueNotification2;

    /**
     * @var bool
     */
    private $SendOverDueNotification3;

    /**
     * @var bool
     */
    private $SendMissedSessionNotification;

    /**
     * @var bool
     */
    private $SendMissedILTSessionNotification;

    /**
     * @var bool
     */
    private $SendWaitingListNotification;

    /**
     * @var bool
     */
    private $SendWithdrawNotifications;

    /**
     * @var bool
     */
    private $SendCourseModificationNotification;

    /**
     * @var bool
     */
    private $SendCourseModificationNotificationToCompleted;

    /**
     * @var bool
     */
    private $SendCourseResourceModificationNotification;

    /**
     * @var bool
     */
    private $SendWaitingListModificationNotification;

    /**
     * @var bool
     */
    private $SendAssignmentReviewedNotification;

    /**
     * @var bool
     */
    private $SendPerformanceNotification;

    /**
     * @var bool
     */
    private $SendBadgeIssuedNotification;

    /**
     * @var bool
     */
    private $SendPendingNotification;

    /**
     * @var bool
     */
    private $SendFeedbackOverdueNotification;

    /**
     * @var bool
     */
    private $SendfeedbackDueDateNotification;

    /**
     * @var bool
     */
    private $SendAssignmentSubmittedNotification;

    /**
     * @var bool
     */
    private $SendActivityPeerReviewCancelled;

    /**
     * @var bool
     */
    private $SendActivityReviewApprovalExpiryReminder;

    /**
     * @var bool
     */
    private $SendExternalActivityApprovedAutomatically;

    /**
     * @var bool
     */
    private $SendExternalActivityRequiresApproval;

    /**
     * @var bool
     */
    private $SendForumPostApprovalRequired;

    /**
     * @var bool
     */
    private $SendForumPostApproved;

    /**
     * @var bool
     */
    private $SendForumPostDeclined;

    /**
     * @var bool
     */
    private $SendPasswordChanged;

    /**
     * @var bool
     */
    private $SendRecommendationInvitation;

    /**
     * @var bool
     */
    private $SendRecommendationOutCome;

    /**
     * @var bool
     */
    private $SendAccountVerification;

    /**
     * @var bool
     */
    private $SendSelfWithdraw;

    /**
     * @var bool
     */
    private $NotifySupervisorOnSelfWithdraw;

    /**
     * @var bool
     */
    private $NotifyModeratorOnSelfWithdraw;

    /**
     * @var bool
     */
    private $HasForum;

    /**
     * @var bool
     */
    private $ManualEnollOverrideLastEnrollmentDate;

    /**
     * @var bool
     */
    private $ManualEnollOverridePrerequisites;

    /**
     * @var bool
     */
    private $ManualEnollOverrideNotificationPeriod;

    /**
     * @var bool
     */
    private $ManualEnollOverrideMaxReEnrollments;

    /**
     * @var bool
     */
    private $ManualEnollOverrideSingleNonExpiringEnrollments;

    /**
     * @var int
     */
    private $ClassroomHeight;

    /**
     * @var int
     */
    private $ClassroomWidth;

    /**
     * @var string
     */
    private $ClassroomTemplate;

    /**
     * @var bool
     */
    private $ForceIECompatibilityMode;

    /**
     * @var bool
     */
    private $AllowModal;

    /**
     * @var bool
     */
    private $FullScreenSize;

    /**
     * @var string
     */
    private $OpenCourseIn;

    /**
     * @var bool
     */
    private $HasThreshold;

    /**
     * @var int
     */
    private $ThresholdValue;

    /**
     * @var bool
     */
    private $LimitSecurityAccess;

    /**
     * @var string
     */
    private $CreatorID;

    /**
     * @var bool
     */
    private $RequirePackageForCompletion;

    /**
     * @var bool
     */
    private $RequireFeedbackForCompletion;

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
    private $RequireStatusSuccessPassed;

    /**
     * @var bool
     */
    private $ProcessUnknown;

    /**
     * @var bool
     */
    private $OverrideAPISucces;

    /**
     * @var int
     */
    private $MinPassingScore;

    /**
     * @var string
     */
    private $PreventCompletionSettings;

    /**
     * @var bool
     */
    private $HasAssessment;

    /**
     * @var int
     */
    private $AssessmentWeight;

    /**
     * @var int
     */
    private $AssignmentWeight;

    /**
     * @var bool
     */
    private $HasFeedback;

    /**
     * @var int
     */
    private $PackageWeight;

    /**
     * @var string
     */
    private $DeploymentType;

    /**
     * @var string
     */
    private $AzureRunMode;

    /**
     * @var bool
     */
    private $DynamicProgram;

    /**
     * @var float
     */
    private $LearningTime;

    /**
     * @var string
     */
    private $EditorXML;

    /**
     * @var string
     */
    private $TranscriptPrintMode;

    /**
     * @var bool
     */
    private $HideTranscriptScore;

    /**
     * @var bool
     */
    private $ShowCustomScoreFeedback;

    /**
     * @var bool
     */
    private $HideInteractionsFromUser;

    /**
     * @var bool
     */
    private $HideInteractionsFromSupervisor;

    /**
     * @var bool
     */
    private $Log;

    /**
     * @var string
     */
    private $CustomScoreFeedbackXml;

    /**
     * @var string
     */
    private $CustomActivityTypeID;

    /**
     * @var bool
     */
    private $ShowHiddenSettings;

    /**
     * @var int
     */
    private $PortfolioEvidenceNumber;

    /**
     * @var int
     */
    private $PortfolioEvidenceMinumumNumber;

    /**
     * @var bool
     */
    private $AllowLearnerNotes;

    /**
     * @var bool
     */
    private $ShowRecommendation;

    /**
     * @var bool
     */
    private $MarkByTA;

    /**
     * @var bool
     */
    private $MarkByModerator;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $Assessments;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $CertificateRules;

    /**
     * @return string
     */
    public function getCourseType()
    {
        return $this->CourseType;
    }

    /**
     * @param string $CourseType
     *
     * @return LearningType
     */
    public function withCourseType($CourseType)
    {
        $new = clone $this;
        $new->CourseType = $CourseType;

        return $new;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     *
     * @return LearningType
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return LearningType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

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
     * @return LearningType
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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return LearningType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     *
     * @return LearningType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     *
     * @return LearningType
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->LastUpdatedTimestamp;
    }

    /**
     * @param \DateTimeInterface $LastUpdatedTimestamp
     *
     * @return LearningType
     */
    public function withLastUpdatedTimestamp($LastUpdatedTimestamp)
    {
        $new = clone $this;
        $new->LastUpdatedTimestamp = $LastUpdatedTimestamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * @param string $Logo
     *
     * @return LearningType
     */
    public function withLogo($Logo)
    {
        $new = clone $this;
        $new->Logo = $Logo;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogoContentType()
    {
        return $this->LogoContentType;
    }

    /**
     * @param string $LogoContentType
     *
     * @return LearningType
     */
    public function withLogoContentType($LogoContentType)
    {
        $new = clone $this;
        $new->LogoContentType = $LogoContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogoID()
    {
        return $this->LogoID;
    }

    /**
     * @param string $LogoID
     *
     * @return LearningType
     */
    public function withLogoID($LogoID)
    {
        $new = clone $this;
        $new->LogoID = $LogoID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesID()
    {
        return $this->SeriesID;
    }

    /**
     * @param string $SeriesID
     *
     * @return LearningType
     */
    public function withSeriesID($SeriesID)
    {
        $new = clone $this;
        $new->SeriesID = $SeriesID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->SeriesName;
    }

    /**
     * @param string $SeriesName
     *
     * @return LearningType
     */
    public function withSeriesName($SeriesName)
    {
        $new = clone $this;
        $new->SeriesName = $SeriesName;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgramID()
    {
        return $this->ProgramID;
    }

    /**
     * @param string $ProgramID
     *
     * @return LearningType
     */
    public function withProgramID($ProgramID)
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }

    /**
     * @param string $ProgramName
     *
     * @return LearningType
     */
    public function withProgramName($ProgramName)
    {
        $new = clone $this;
        $new->ProgramName = $ProgramName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param bool $IsActive
     *
     * @return LearningType
     */
    public function withIsActive($IsActive)
    {
        $new = clone $this;
        $new->IsActive = $IsActive;

        return $new;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
        return $this->SKU;
    }

    /**
     * @param string $SKU
     *
     * @return LearningType
     */
    public function withSKU($SKU)
    {
        $new = clone $this;
        $new->SKU = $SKU;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     *
     * @return LearningType
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return float
     */
    public function getSubsequentPrice()
    {
        return $this->SubsequentPrice;
    }

    /**
     * @param float $SubsequentPrice
     *
     * @return LearningType
     */
    public function withSubsequentPrice($SubsequentPrice)
    {
        $new = clone $this;
        $new->SubsequentPrice = $SubsequentPrice;

        return $new;
    }

    /**
     * @return int
     */
    public function getTokensValue()
    {
        return $this->TokensValue;
    }

    /**
     * @param int $TokensValue
     *
     * @return LearningType
     */
    public function withTokensValue($TokensValue)
    {
        $new = clone $this;
        $new->TokensValue = $TokensValue;

        return $new;
    }

    /**
     * @return int
     */
    public function getSubsequentTokensValue()
    {
        return $this->SubsequentTokensValue;
    }

    /**
     * @param int $SubsequentTokensValue
     *
     * @return LearningType
     */
    public function withSubsequentTokensValue($SubsequentTokensValue)
    {
        $new = clone $this;
        $new->SubsequentTokensValue = $SubsequentTokensValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     *
     * @return LearningType
     */
    public function withCurrency($Currency)
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentProvider()
    {
        return $this->PaymentProvider;
    }

    /**
     * @param string $PaymentProvider
     *
     * @return LearningType
     */
    public function withPaymentProvider($PaymentProvider)
    {
        $new = clone $this;
        $new->PaymentProvider = $PaymentProvider;

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
     * @return LearningType
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
    public function getCertificateExpires()
    {
        return $this->CertificateExpires;
    }

    /**
     * @param bool $CertificateExpires
     *
     * @return LearningType
     */
    public function withCertificateExpires($CertificateExpires)
    {
        $new = clone $this;
        $new->CertificateExpires = $CertificateExpires;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AccreditationDetails
     */
    public function getAccreditationDetails()
    {
        return $this->AccreditationDetails;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AccreditationDetails $AccreditationDetails
     *
     * @return LearningType
     */
    public function withAccreditationDetails($AccreditationDetails)
    {
        $new = clone $this;
        $new->AccreditationDetails = $AccreditationDetails;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfReference
     */
    public function getReferences()
    {
        return $this->References;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfReference $References
     *
     * @return LearningType
     */
    public function withReferences($References)
    {
        $new = clone $this;
        $new->References = $References;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsShared()
    {
        return $this->IsShared;
    }

    /**
     * @param bool $IsShared
     *
     * @return LearningType
     */
    public function withIsShared($IsShared)
    {
        $new = clone $this;
        $new->IsShared = $IsShared;

        return $new;
    }

    /**
     * @return string
     */
    public function getExclusionMode()
    {
        return $this->ExclusionMode;
    }

    /**
     * @param string $ExclusionMode
     *
     * @return LearningType
     */
    public function withExclusionMode($ExclusionMode)
    {
        $new = clone $this;
        $new->ExclusionMode = $ExclusionMode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLeaningPathActivityLayout()
    {
        return $this->LeaningPathActivityLayout;
    }

    /**
     * @param string $LeaningPathActivityLayout
     *
     * @return LearningType
     */
    public function withLeaningPathActivityLayout($LeaningPathActivityLayout)
    {
        $new = clone $this;
        $new->LeaningPathActivityLayout = $LeaningPathActivityLayout;

        return $new;
    }

    /**
     * @return string
     */
    public function getShowLearnerProgressAs()
    {
        return $this->ShowLearnerProgressAs;
    }

    /**
     * @param string $ShowLearnerProgressAs
     *
     * @return LearningType
     */
    public function withShowLearnerProgressAs($ShowLearnerProgressAs)
    {
        $new = clone $this;
        $new->ShowLearnerProgressAs = $ShowLearnerProgressAs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSharingLink()
    {
        return $this->ShowSharingLink;
    }

    /**
     * @param bool $ShowSharingLink
     *
     * @return LearningType
     */
    public function withShowSharingLink($ShowSharingLink)
    {
        $new = clone $this;
        $new->ShowSharingLink = $ShowSharingLink;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoShowScrubber()
    {
        return $this->VideoShowScrubber;
    }

    /**
     * @param bool $VideoShowScrubber
     *
     * @return LearningType
     */
    public function withVideoShowScrubber($VideoShowScrubber)
    {
        $new = clone $this;
        $new->VideoShowScrubber = $VideoShowScrubber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoBookmarkProgress()
    {
        return $this->VideoBookmarkProgress;
    }

    /**
     * @param bool $VideoBookmarkProgress
     *
     * @return LearningType
     */
    public function withVideoBookmarkProgress($VideoBookmarkProgress)
    {
        $new = clone $this;
        $new->VideoBookmarkProgress = $VideoBookmarkProgress;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoStartAuto()
    {
        return $this->VideoStartAuto;
    }

    /**
     * @param bool $VideoStartAuto
     *
     * @return LearningType
     */
    public function withVideoStartAuto($VideoStartAuto)
    {
        $new = clone $this;
        $new->VideoStartAuto = $VideoStartAuto;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoCompleteOnOpen()
    {
        return $this->VideoCompleteOnOpen;
    }

    /**
     * @param bool $VideoCompleteOnOpen
     *
     * @return LearningType
     */
    public function withVideoCompleteOnOpen($VideoCompleteOnOpen)
    {
        $new = clone $this;
        $new->VideoCompleteOnOpen = $VideoCompleteOnOpen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoCompleteOnEnd()
    {
        return $this->VideoCompleteOnEnd;
    }

    /**
     * @param bool $VideoCompleteOnEnd
     *
     * @return LearningType
     */
    public function withVideoCompleteOnEnd($VideoCompleteOnEnd)
    {
        $new = clone $this;
        $new->VideoCompleteOnEnd = $VideoCompleteOnEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVideoCompleteOnTime()
    {
        return $this->VideoCompleteOnTime;
    }

    /**
     * @param bool $VideoCompleteOnTime
     *
     * @return LearningType
     */
    public function withVideoCompleteOnTime($VideoCompleteOnTime)
    {
        $new = clone $this;
        $new->VideoCompleteOnTime = $VideoCompleteOnTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getVideoCompleteOnTime_Minute()
    {
        return $this->VideoCompleteOnTime_Minute;
    }

    /**
     * @param string $VideoCompleteOnTime_Minute
     *
     * @return LearningType
     */
    public function withVideoCompleteOnTime_Minute($VideoCompleteOnTime_Minute)
    {
        $new = clone $this;
        $new->VideoCompleteOnTime_Minute = $VideoCompleteOnTime_Minute;

        return $new;
    }

    /**
     * @return string
     */
    public function getVideoCompleteOnTime_Sec()
    {
        return $this->VideoCompleteOnTime_Sec;
    }

    /**
     * @param string $VideoCompleteOnTime_Sec
     *
     * @return LearningType
     */
    public function withVideoCompleteOnTime_Sec($VideoCompleteOnTime_Sec)
    {
        $new = clone $this;
        $new->VideoCompleteOnTime_Sec = $VideoCompleteOnTime_Sec;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CaptionInfo
     */
    public function getCaptionInfo()
    {
        return $this->CaptionInfo;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CaptionInfo $CaptionInfo
     *
     * @return LearningType
     */
    public function withCaptionInfo($CaptionInfo)
    {
        $new = clone $this;
        $new->CaptionInfo = $CaptionInfo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnrollNoMatch()
    {
        return $this->ManualEnrollNoMatch;
    }

    /**
     * @param bool $ManualEnrollNoMatch
     *
     * @return LearningType
     */
    public function withManualEnrollNoMatch($ManualEnrollNoMatch)
    {
        $new = clone $this;
        $new->ManualEnrollNoMatch = $ManualEnrollNoMatch;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWaitlistEnrollAfterLastWithdrawDate()
    {
        return $this->WaitlistEnrollAfterLastWithdrawDate;
    }

    /**
     * @param bool $WaitlistEnrollAfterLastWithdrawDate
     *
     * @return LearningType
     */
    public function withWaitlistEnrollAfterLastWithdrawDate($WaitlistEnrollAfterLastWithdrawDate)
    {
        $new = clone $this;
        $new->WaitlistEnrollAfterLastWithdrawDate = $WaitlistEnrollAfterLastWithdrawDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUnenrollmentDate()
    {
        return $this->LastUnenrollmentDate;
    }

    /**
     * @param \DateTimeInterface $LastUnenrollmentDate
     *
     * @return LearningType
     */
    public function withLastUnenrollmentDate($LastUnenrollmentDate)
    {
        $new = clone $this;
        $new->LastUnenrollmentDate = $LastUnenrollmentDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFirstEnrollmentDate()
    {
        return $this->FirstEnrollmentDate;
    }

    /**
     * @param \DateTimeInterface $FirstEnrollmentDate
     *
     * @return LearningType
     */
    public function withFirstEnrollmentDate($FirstEnrollmentDate)
    {
        $new = clone $this;
        $new->FirstEnrollmentDate = $FirstEnrollmentDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUnlimitedLastEnrollment()
    {
        return $this->UnlimitedLastEnrollment;
    }

    /**
     * @param bool $UnlimitedLastEnrollment
     *
     * @return LearningType
     */
    public function withUnlimitedLastEnrollment($UnlimitedLastEnrollment)
    {
        $new = clone $this;
        $new->UnlimitedLastEnrollment = $UnlimitedLastEnrollment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLastEnrollmentBasedFirstEnrollmentDate()
    {
        return $this->LastEnrollmentBasedFirstEnrollmentDate;
    }

    /**
     * @param bool $LastEnrollmentBasedFirstEnrollmentDate
     *
     * @return LearningType
     */
    public function withLastEnrollmentBasedFirstEnrollmentDate($LastEnrollmentBasedFirstEnrollmentDate)
    {
        $new = clone $this;
        $new->LastEnrollmentBasedFirstEnrollmentDate = $LastEnrollmentBasedFirstEnrollmentDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastEnrollmentBasedFirstEnrollmentDateSetting()
    {
        return $this->LastEnrollmentBasedFirstEnrollmentDateSetting;
    }

    /**
     * @param string $LastEnrollmentBasedFirstEnrollmentDateSetting
     *
     * @return LearningType
     */
    public function withLastEnrollmentBasedFirstEnrollmentDateSetting($LastEnrollmentBasedFirstEnrollmentDateSetting)
    {
        $new = clone $this;
        $new->LastEnrollmentBasedFirstEnrollmentDateSetting = $LastEnrollmentBasedFirstEnrollmentDateSetting;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastEnrollmentDate()
    {
        return $this->LastEnrollmentDate;
    }

    /**
     * @param \DateTimeInterface $LastEnrollmentDate
     *
     * @return LearningType
     */
    public function withLastEnrollmentDate($LastEnrollmentDate)
    {
        $new = clone $this;
        $new->LastEnrollmentDate = $LastEnrollmentDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowEnrollAfterLastEnrollDate()
    {
        return $this->AllowEnrollAfterLastEnrollDate;
    }

    /**
     * @param bool $AllowEnrollAfterLastEnrollDate
     *
     * @return LearningType
     */
    public function withAllowEnrollAfterLastEnrollDate($AllowEnrollAfterLastEnrollDate)
    {
        $new = clone $this;
        $new->AllowEnrollAfterLastEnrollDate = $AllowEnrollAfterLastEnrollDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getLastEnrollmentCutOff()
    {
        return $this->LastEnrollmentCutOff;
    }

    /**
     * @param int $LastEnrollmentCutOff
     *
     * @return LearningType
     */
    public function withLastEnrollmentCutOff($LastEnrollmentCutOff)
    {
        $new = clone $this;
        $new->LastEnrollmentCutOff = $LastEnrollmentCutOff;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowSupervisorExtendDueDate()
    {
        return $this->AllowSupervisorExtendDueDate;
    }

    /**
     * @param bool $AllowSupervisorExtendDueDate
     *
     * @return LearningType
     */
    public function withAllowSupervisorExtendDueDate($AllowSupervisorExtendDueDate)
    {
        $new = clone $this;
        $new->AllowSupervisorExtendDueDate = $AllowSupervisorExtendDueDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getSupervisorExtensionDaysLimit()
    {
        return $this->SupervisorExtensionDaysLimit;
    }

    /**
     * @param int $SupervisorExtensionDaysLimit
     *
     * @return LearningType
     */
    public function withSupervisorExtensionDaysLimit($SupervisorExtensionDaysLimit)
    {
        $new = clone $this;
        $new->SupervisorExtensionDaysLimit = $SupervisorExtensionDaysLimit;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     *
     * @return LearningType
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param string $DueDate
     *
     * @return LearningType
     */
    public function withDueDate($DueDate)
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowEnrollmentCodeAfterEnrollmentDate()
    {
        return $this->AllowEnrollmentCodeAfterEnrollmentDate;
    }

    /**
     * @param bool $AllowEnrollmentCodeAfterEnrollmentDate
     *
     * @return LearningType
     */
    public function withAllowEnrollmentCodeAfterEnrollmentDate($AllowEnrollmentCodeAfterEnrollmentDate)
    {
        $new = clone $this;
        $new->AllowEnrollmentCodeAfterEnrollmentDate = $AllowEnrollmentCodeAfterEnrollmentDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getEnrollmentCodeAfterEnrollmentDate_NoOfDays()
    {
        return $this->EnrollmentCodeAfterEnrollmentDate_NoOfDays;
    }

    /**
     * @param int $EnrollmentCodeAfterEnrollmentDate_NoOfDays
     *
     * @return LearningType
     */
    public function withEnrollmentCodeAfterEnrollmentDate_NoOfDays($EnrollmentCodeAfterEnrollmentDate_NoOfDays)
    {
        $new = clone $this;
        $new->EnrollmentCodeAfterEnrollmentDate_NoOfDays = $EnrollmentCodeAfterEnrollmentDate_NoOfDays;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBarAccessAfterDue()
    {
        return $this->BarAccessAfterDue;
    }

    /**
     * @param bool $BarAccessAfterDue
     *
     * @return LearningType
     */
    public function withBarAccessAfterDue($BarAccessAfterDue)
    {
        $new = clone $this;
        $new->BarAccessAfterDue = $BarAccessAfterDue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuspendAccess()
    {
        return $this->SuspendAccess;
    }

    /**
     * @param bool $SuspendAccess
     *
     * @return LearningType
     */
    public function withSuspendAccess($SuspendAccess)
    {
        $new = clone $this;
        $new->SuspendAccess = $SuspendAccess;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuspendAccessDays()
    {
        return $this->SuspendAccessDays;
    }

    /**
     * @param string $SuspendAccessDays
     *
     * @return LearningType
     */
    public function withSuspendAccessDays($SuspendAccessDays)
    {
        $new = clone $this;
        $new->SuspendAccessDays = $SuspendAccessDays;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnrollFromLPOnly()
    {
        return $this->EnrollFromLPOnly;
    }

    /**
     * @param bool $EnrollFromLPOnly
     *
     * @return LearningType
     */
    public function withEnrollFromLPOnly($EnrollFromLPOnly)
    {
        $new = clone $this;
        $new->EnrollFromLPOnly = $EnrollFromLPOnly;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnroll()
    {
        return $this->AutoEnroll;
    }

    /**
     * @param bool $AutoEnroll
     *
     * @return LearningType
     */
    public function withAutoEnroll($AutoEnroll)
    {
        $new = clone $this;
        $new->AutoEnroll = $AutoEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnrollAllDomainMembers()
    {
        return $this->AutoEnrollAllDomainMembers;
    }

    /**
     * @param bool $AutoEnrollAllDomainMembers
     *
     * @return LearningType
     */
    public function withAutoEnrollAllDomainMembers($AutoEnrollAllDomainMembers)
    {
        $new = clone $this;
        $new->AutoEnrollAllDomainMembers = $AutoEnrollAllDomainMembers;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAutoenrollRules()
    {
        return $this->AutoenrollRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AutoenrollRules
     *
     * @return LearningType
     */
    public function withAutoenrollRules($AutoenrollRules)
    {
        $new = clone $this;
        $new->AutoenrollRules = $AutoenrollRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoenrollRulesRequired()
    {
        return $this->AutoenrollRulesRequired;
    }

    /**
     * @param bool $AutoenrollRulesRequired
     *
     * @return LearningType
     */
    public function withAutoenrollRulesRequired($AutoenrollRulesRequired)
    {
        $new = clone $this;
        $new->AutoenrollRulesRequired = $AutoenrollRulesRequired;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoenrollRepeatType()
    {
        return $this->AutoenrollRepeatType;
    }

    /**
     * @param string $AutoenrollRepeatType
     *
     * @return LearningType
     */
    public function withAutoenrollRepeatType($AutoenrollRepeatType)
    {
        $new = clone $this;
        $new->AutoenrollRepeatType = $AutoenrollRepeatType;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoenrollRepeatMonthCount()
    {
        return $this->AutoenrollRepeatMonthCount;
    }

    /**
     * @param string $AutoenrollRepeatMonthCount
     *
     * @return LearningType
     */
    public function withAutoenrollRepeatMonthCount($AutoenrollRepeatMonthCount)
    {
        $new = clone $this;
        $new->AutoenrollRepeatMonthCount = $AutoenrollRepeatMonthCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAutoenrollLastRunDate()
    {
        return $this->AutoenrollLastRunDate;
    }

    /**
     * @param \DateTimeInterface $AutoenrollLastRunDate
     *
     * @return LearningType
     */
    public function withAutoenrollLastRunDate($AutoenrollLastRunDate)
    {
        $new = clone $this;
        $new->AutoenrollLastRunDate = $AutoenrollLastRunDate;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAutoenrollExcludeRules()
    {
        return $this->AutoenrollExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AutoenrollExcludeRules
     *
     * @return LearningType
     */
    public function withAutoenrollExcludeRules($AutoenrollExcludeRules)
    {
        $new = clone $this;
        $new->AutoenrollExcludeRules = $AutoenrollExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoenrollExcludeRulesRequired()
    {
        return $this->AutoenrollExcludeRulesRequired;
    }

    /**
     * @param bool $AutoenrollExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withAutoenrollExcludeRulesRequired($AutoenrollExcludeRulesRequired)
    {
        $new = clone $this;
        $new->AutoenrollExcludeRulesRequired = $AutoenrollExcludeRulesRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReAutoEnroll()
    {
        return $this->ReAutoEnroll;
    }

    /**
     * @param bool $ReAutoEnroll
     *
     * @return LearningType
     */
    public function withReAutoEnroll($ReAutoEnroll)
    {
        $new = clone $this;
        $new->ReAutoEnroll = $ReAutoEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseAutoEnrollmentRuleForReEnroll()
    {
        return $this->UseAutoEnrollmentRuleForReEnroll;
    }

    /**
     * @param bool $UseAutoEnrollmentRuleForReEnroll
     *
     * @return LearningType
     */
    public function withUseAutoEnrollmentRuleForReEnroll($UseAutoEnrollmentRuleForReEnroll)
    {
        $new = clone $this;
        $new->UseAutoEnrollmentRuleForReEnroll = $UseAutoEnrollmentRuleForReEnroll;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getRecertificationAutoEnrollRules()
    {
        return $this->RecertificationAutoEnrollRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $RecertificationAutoEnrollRules
     *
     * @return LearningType
     */
    public function withRecertificationAutoEnrollRules($RecertificationAutoEnrollRules)
    {
        $new = clone $this;
        $new->RecertificationAutoEnrollRules = $RecertificationAutoEnrollRules;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getRecertificationAutoEnrollExcludeRules()
    {
        return $this->RecertificationAutoEnrollExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $RecertificationAutoEnrollExcludeRules
     *
     * @return LearningType
     */
    public function withRecertificationAutoEnrollExcludeRules($RecertificationAutoEnrollExcludeRules)
    {
        $new = clone $this;
        $new->RecertificationAutoEnrollExcludeRules = $RecertificationAutoEnrollExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReAutoEnrollmentAllowAll()
    {
        return $this->ReAutoEnrollmentAllowAll;
    }

    /**
     * @param bool $ReAutoEnrollmentAllowAll
     *
     * @return LearningType
     */
    public function withReAutoEnrollmentAllowAll($ReAutoEnrollmentAllowAll)
    {
        $new = clone $this;
        $new->ReAutoEnrollmentAllowAll = $ReAutoEnrollmentAllowAll;

        return $new;
    }

    /**
     * @return string
     */
    public function getReAutoenrollRepeatType()
    {
        return $this->ReAutoenrollRepeatType;
    }

    /**
     * @param string $ReAutoenrollRepeatType
     *
     * @return LearningType
     */
    public function withReAutoenrollRepeatType($ReAutoenrollRepeatType)
    {
        $new = clone $this;
        $new->ReAutoenrollRepeatType = $ReAutoenrollRepeatType;

        return $new;
    }

    /**
     * @return string
     */
    public function getReAutoenrollRepeatMonthCount()
    {
        return $this->ReAutoenrollRepeatMonthCount;
    }

    /**
     * @param string $ReAutoenrollRepeatMonthCount
     *
     * @return LearningType
     */
    public function withReAutoenrollRepeatMonthCount($ReAutoenrollRepeatMonthCount)
    {
        $new = clone $this;
        $new->ReAutoenrollRepeatMonthCount = $ReAutoenrollRepeatMonthCount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReAutoenrollAllRulesRequired()
    {
        return $this->ReAutoenrollAllRulesRequired;
    }

    /**
     * @param bool $ReAutoenrollAllRulesRequired
     *
     * @return LearningType
     */
    public function withReAutoenrollAllRulesRequired($ReAutoenrollAllRulesRequired)
    {
        $new = clone $this;
        $new->ReAutoenrollAllRulesRequired = $ReAutoenrollAllRulesRequired;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReAutoenrollLastRunDate()
    {
        return $this->ReAutoenrollLastRunDate;
    }

    /**
     * @param \DateTimeInterface $ReAutoenrollLastRunDate
     *
     * @return LearningType
     */
    public function withReAutoenrollLastRunDate($ReAutoenrollLastRunDate)
    {
        $new = clone $this;
        $new->ReAutoenrollLastRunDate = $ReAutoenrollLastRunDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReAutoenrollAllExcludeRulesRequired()
    {
        return $this->ReAutoenrollAllExcludeRulesRequired;
    }

    /**
     * @param bool $ReAutoenrollAllExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withReAutoenrollAllExcludeRulesRequired($ReAutoenrollAllExcludeRulesRequired)
    {
        $new = clone $this;
        $new->ReAutoenrollAllExcludeRulesRequired = $ReAutoenrollAllExcludeRulesRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSelfEnroll()
    {
        return $this->SelfEnroll;
    }

    /**
     * @param bool $SelfEnroll
     *
     * @return LearningType
     */
    public function withSelfEnroll($SelfEnroll)
    {
        $new = clone $this;
        $new->SelfEnroll = $SelfEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowTransfer()
    {
        return $this->AllowTransfer;
    }

    /**
     * @param bool $AllowTransfer
     *
     * @return LearningType
     */
    public function withAllowTransfer($AllowTransfer)
    {
        $new = clone $this;
        $new->AllowTransfer = $AllowTransfer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSelfEnrollAllDomainMembers()
    {
        return $this->SelfEnrollAllDomainMembers;
    }

    /**
     * @param bool $SelfEnrollAllDomainMembers
     *
     * @return LearningType
     */
    public function withSelfEnrollAllDomainMembers($SelfEnrollAllDomainMembers)
    {
        $new = clone $this;
        $new->SelfEnrollAllDomainMembers = $SelfEnrollAllDomainMembers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPermissionEnroll()
    {
        return $this->PermissionEnroll;
    }

    /**
     * @param bool $PermissionEnroll
     *
     * @return LearningType
     */
    public function withPermissionEnroll($PermissionEnroll)
    {
        $new = clone $this;
        $new->PermissionEnroll = $PermissionEnroll;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnrollPermissionFrom()
    {
        return $this->EnrollPermissionFrom;
    }

    /**
     * @param string $EnrollPermissionFrom
     *
     * @return LearningType
     */
    public function withEnrollPermissionFrom($EnrollPermissionFrom)
    {
        $new = clone $this;
        $new->EnrollPermissionFrom = $EnrollPermissionFrom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPaymentEnroll()
    {
        return $this->PaymentEnroll;
    }

    /**
     * @param bool $PaymentEnroll
     *
     * @return LearningType
     */
    public function withPaymentEnroll($PaymentEnroll)
    {
        $new = clone $this;
        $new->PaymentEnroll = $PaymentEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTokensEnroll()
    {
        return $this->TokensEnroll;
    }

    /**
     * @param bool $TokensEnroll
     *
     * @return LearningType
     */
    public function withTokensEnroll($TokensEnroll)
    {
        $new = clone $this;
        $new->TokensEnroll = $TokensEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowCoupons()
    {
        return $this->AllowCoupons;
    }

    /**
     * @param bool $AllowCoupons
     *
     * @return LearningType
     */
    public function withAllowCoupons($AllowCoupons)
    {
        $new = clone $this;
        $new->AllowCoupons = $AllowCoupons;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGlobalTokensEnroll()
    {
        return $this->GlobalTokensEnroll;
    }

    /**
     * @param bool $GlobalTokensEnroll
     *
     * @return LearningType
     */
    public function withGlobalTokensEnroll($GlobalTokensEnroll)
    {
        $new = clone $this;
        $new->GlobalTokensEnroll = $GlobalTokensEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPassEnroll()
    {
        return $this->PassEnroll;
    }

    /**
     * @param bool $PassEnroll
     *
     * @return LearningType
     */
    public function withPassEnroll($PassEnroll)
    {
        $new = clone $this;
        $new->PassEnroll = $PassEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowPOPayment()
    {
        return $this->AllowPOPayment;
    }

    /**
     * @param bool $AllowPOPayment
     *
     * @return LearningType
     */
    public function withAllowPOPayment($AllowPOPayment)
    {
        $new = clone $this;
        $new->AllowPOPayment = $AllowPOPayment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowPass()
    {
        return $this->AllowPass;
    }

    /**
     * @param bool $AllowPass
     *
     * @return LearningType
     */
    public function withAllowPass($AllowPass)
    {
        $new = clone $this;
        $new->AllowPass = $AllowPass;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowPurchaseForOthers()
    {
        return $this->AllowPurchaseForOthers;
    }

    /**
     * @param bool $AllowPurchaseForOthers
     *
     * @return LearningType
     */
    public function withAllowPurchaseForOthers($AllowPurchaseForOthers)
    {
        $new = clone $this;
        $new->AllowPurchaseForOthers = $AllowPurchaseForOthers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowAttendanceCodeToEnroll()
    {
        return $this->AllowAttendanceCodeToEnroll;
    }

    /**
     * @param bool $AllowAttendanceCodeToEnroll
     *
     * @return LearningType
     */
    public function withAllowAttendanceCodeToEnroll($AllowAttendanceCodeToEnroll)
    {
        $new = clone $this;
        $new->AllowAttendanceCodeToEnroll = $AllowAttendanceCodeToEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate()
    {
        return $this->NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;
    }

    /**
     * @param bool $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate
     *
     * @return LearningType
     */
    public function withNotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate($NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate)
    {
        $new = clone $this;
        $new->NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate = $NotAllowAttendanceCodeToEnrollAfterLastEnrollmentDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAttendanceCodeEnrollFollowsRules()
    {
        return $this->AttendanceCodeEnrollFollowsRules;
    }

    /**
     * @param bool $AttendanceCodeEnrollFollowsRules
     *
     * @return LearningType
     */
    public function withAttendanceCodeEnrollFollowsRules($AttendanceCodeEnrollFollowsRules)
    {
        $new = clone $this;
        $new->AttendanceCodeEnrollFollowsRules = $AttendanceCodeEnrollFollowsRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowAttendanceCode()
    {
        return $this->AllowAttendanceCode;
    }

    /**
     * @param bool $AllowAttendanceCode
     *
     * @return LearningType
     */
    public function withAllowAttendanceCode($AllowAttendanceCode)
    {
        $new = clone $this;
        $new->AllowAttendanceCode = $AllowAttendanceCode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSelfEnrollRules()
    {
        return $this->SelfEnrollRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $SelfEnrollRules
     *
     * @return LearningType
     */
    public function withSelfEnrollRules($SelfEnrollRules)
    {
        $new = clone $this;
        $new->SelfEnrollRules = $SelfEnrollRules;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSelfEnrollGroups()
    {
        return $this->SelfEnrollGroups;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $SelfEnrollGroups
     *
     * @return LearningType
     */
    public function withSelfEnrollGroups($SelfEnrollGroups)
    {
        $new = clone $this;
        $new->SelfEnrollGroups = $SelfEnrollGroups;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSelfEnrollGroupRequired()
    {
        return $this->SelfEnrollGroupRequired;
    }

    /**
     * @param bool $SelfEnrollGroupRequired
     *
     * @return LearningType
     */
    public function withSelfEnrollGroupRequired($SelfEnrollGroupRequired)
    {
        $new = clone $this;
        $new->SelfEnrollGroupRequired = $SelfEnrollGroupRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSelfEnrollRulesRequired()
    {
        return $this->SelfEnrollRulesRequired;
    }

    /**
     * @param bool $SelfEnrollRulesRequired
     *
     * @return LearningType
     */
    public function withSelfEnrollRulesRequired($SelfEnrollRulesRequired)
    {
        $new = clone $this;
        $new->SelfEnrollRulesRequired = $SelfEnrollRulesRequired;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSelfEnrollExcludeRules()
    {
        return $this->SelfEnrollExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $SelfEnrollExcludeRules
     *
     * @return LearningType
     */
    public function withSelfEnrollExcludeRules($SelfEnrollExcludeRules)
    {
        $new = clone $this;
        $new->SelfEnrollExcludeRules = $SelfEnrollExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSelfEnrollExcludeRulesRequired()
    {
        return $this->SelfEnrollExcludeRulesRequired;
    }

    /**
     * @param bool $SelfEnrollExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withSelfEnrollExcludeRulesRequired($SelfEnrollExcludeRulesRequired)
    {
        $new = clone $this;
        $new->SelfEnrollExcludeRulesRequired = $SelfEnrollExcludeRulesRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUnenroll()
    {
        return $this->CanUnenroll;
    }

    /**
     * @param bool $CanUnenroll
     *
     * @return LearningType
     */
    public function withCanUnenroll($CanUnenroll)
    {
        $new = clone $this;
        $new->CanUnenroll = $CanUnenroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWithdrawAllDomainMembers()
    {
        return $this->WithdrawAllDomainMembers;
    }

    /**
     * @param bool $WithdrawAllDomainMembers
     *
     * @return LearningType
     */
    public function withWithdrawAllDomainMembers($WithdrawAllDomainMembers)
    {
        $new = clone $this;
        $new->WithdrawAllDomainMembers = $WithdrawAllDomainMembers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPermissionUnenroll()
    {
        return $this->PermissionUnenroll;
    }

    /**
     * @param bool $PermissionUnenroll
     *
     * @return LearningType
     */
    public function withPermissionUnenroll($PermissionUnenroll)
    {
        $new = clone $this;
        $new->PermissionUnenroll = $PermissionUnenroll;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnenrollOption()
    {
        return $this->UnenrollOption;
    }

    /**
     * @param string $UnenrollOption
     *
     * @return LearningType
     */
    public function withUnenrollOption($UnenrollOption)
    {
        $new = clone $this;
        $new->UnenrollOption = $UnenrollOption;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnenrollPermissionFrom()
    {
        return $this->UnenrollPermissionFrom;
    }

    /**
     * @param string $UnenrollPermissionFrom
     *
     * @return LearningType
     */
    public function withUnenrollPermissionFrom($UnenrollPermissionFrom)
    {
        $new = clone $this;
        $new->UnenrollPermissionFrom = $UnenrollPermissionFrom;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getWithdrawalRules()
    {
        return $this->WithdrawalRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $WithdrawalRules
     *
     * @return LearningType
     */
    public function withWithdrawalRules($WithdrawalRules)
    {
        $new = clone $this;
        $new->WithdrawalRules = $WithdrawalRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWithdrawalRulesRequired()
    {
        return $this->WithdrawalRulesRequired;
    }

    /**
     * @param bool $WithdrawalRulesRequired
     *
     * @return LearningType
     */
    public function withWithdrawalRulesRequired($WithdrawalRulesRequired)
    {
        $new = clone $this;
        $new->WithdrawalRulesRequired = $WithdrawalRulesRequired;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getWithdrawalExcludeRules()
    {
        return $this->WithdrawalExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $WithdrawalExcludeRules
     *
     * @return LearningType
     */
    public function withWithdrawalExcludeRules($WithdrawalExcludeRules)
    {
        $new = clone $this;
        $new->WithdrawalExcludeRules = $WithdrawalExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWithdrawalExcludeRulesRequired()
    {
        return $this->WithdrawalExcludeRulesRequired;
    }

    /**
     * @param bool $WithdrawalExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withWithdrawalExcludeRulesRequired($WithdrawalExcludeRulesRequired)
    {
        $new = clone $this;
        $new->WithdrawalExcludeRulesRequired = $WithdrawalExcludeRulesRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoWithdraw()
    {
        return $this->AutoWithdraw;
    }

    /**
     * @param bool $AutoWithdraw
     *
     * @return LearningType
     */
    public function withAutoWithdraw($AutoWithdraw)
    {
        $new = clone $this;
        $new->AutoWithdraw = $AutoWithdraw;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoWithdrawNotMatchingAutoRules()
    {
        return $this->AutoWithdrawNotMatchingAutoRules;
    }

    /**
     * @param bool $AutoWithdrawNotMatchingAutoRules
     *
     * @return LearningType
     */
    public function withAutoWithdrawNotMatchingAutoRules($AutoWithdrawNotMatchingAutoRules)
    {
        $new = clone $this;
        $new->AutoWithdrawNotMatchingAutoRules = $AutoWithdrawNotMatchingAutoRules;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAutoWithdrawalRules()
    {
        return $this->AutoWithdrawalRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AutoWithdrawalRules
     *
     * @return LearningType
     */
    public function withAutoWithdrawalRules($AutoWithdrawalRules)
    {
        $new = clone $this;
        $new->AutoWithdrawalRules = $AutoWithdrawalRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoWithdrawalRulesRequired()
    {
        return $this->AutoWithdrawalRulesRequired;
    }

    /**
     * @param bool $AutoWithdrawalRulesRequired
     *
     * @return LearningType
     */
    public function withAutoWithdrawalRulesRequired($AutoWithdrawalRulesRequired)
    {
        $new = clone $this;
        $new->AutoWithdrawalRulesRequired = $AutoWithdrawalRulesRequired;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAutoWithdrawalExcludeRules()
    {
        return $this->AutoWithdrawalExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AutoWithdrawalExcludeRules
     *
     * @return LearningType
     */
    public function withAutoWithdrawalExcludeRules($AutoWithdrawalExcludeRules)
    {
        $new = clone $this;
        $new->AutoWithdrawalExcludeRules = $AutoWithdrawalExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoWithdrawalExcludeRulesRequired()
    {
        return $this->AutoWithdrawalExcludeRulesRequired;
    }

    /**
     * @param bool $AutoWithdrawalExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withAutoWithdrawalExcludeRulesRequired($AutoWithdrawalExcludeRulesRequired)
    {
        $new = clone $this;
        $new->AutoWithdrawalExcludeRulesRequired = $AutoWithdrawalExcludeRulesRequired;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAnnouncementRules()
    {
        return $this->AnnouncementRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AnnouncementRules
     *
     * @return LearningType
     */
    public function withAnnouncementRules($AnnouncementRules)
    {
        $new = clone $this;
        $new->AnnouncementRules = $AnnouncementRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAnnouncementRulesRequired()
    {
        return $this->AnnouncementRulesRequired;
    }

    /**
     * @param bool $AnnouncementRulesRequired
     *
     * @return LearningType
     */
    public function withAnnouncementRulesRequired($AnnouncementRulesRequired)
    {
        $new = clone $this;
        $new->AnnouncementRulesRequired = $AnnouncementRulesRequired;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAnnouncementExcludeRules()
    {
        return $this->AnnouncementExcludeRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AnnouncementExcludeRules
     *
     * @return LearningType
     */
    public function withAnnouncementExcludeRules($AnnouncementExcludeRules)
    {
        $new = clone $this;
        $new->AnnouncementExcludeRules = $AnnouncementExcludeRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAnnouncementExcludeRulesRequired()
    {
        return $this->AnnouncementExcludeRulesRequired;
    }

    /**
     * @param bool $AnnouncementExcludeRulesRequired
     *
     * @return LearningType
     */
    public function withAnnouncementExcludeRulesRequired($AnnouncementExcludeRulesRequired)
    {
        $new = clone $this;
        $new->AnnouncementExcludeRulesRequired = $AnnouncementExcludeRulesRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnrollSelfActivities()
    {
        return $this->AutoEnrollSelfActivities;
    }

    /**
     * @param bool $AutoEnrollSelfActivities
     *
     * @return LearningType
     */
    public function withAutoEnrollSelfActivities($AutoEnrollSelfActivities)
    {
        $new = clone $this;
        $new->AutoEnrollSelfActivities = $AutoEnrollSelfActivities;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnrollManualActivities()
    {
        return $this->AutoEnrollManualActivities;
    }

    /**
     * @param bool $AutoEnrollManualActivities
     *
     * @return LearningType
     */
    public function withAutoEnrollManualActivities($AutoEnrollManualActivities)
    {
        $new = clone $this;
        $new->AutoEnrollManualActivities = $AutoEnrollManualActivities;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeAllInPrice()
    {
        return $this->IncludeAllInPrice;
    }

    /**
     * @param bool $IncludeAllInPrice
     *
     * @return LearningType
     */
    public function withIncludeAllInPrice($IncludeAllInPrice)
    {
        $new = clone $this;
        $new->IncludeAllInPrice = $IncludeAllInPrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnrollLPActivities()
    {
        return $this->AutoEnrollLPActivities;
    }

    /**
     * @param bool $AutoEnrollLPActivities
     *
     * @return LearningType
     */
    public function withAutoEnrollLPActivities($AutoEnrollLPActivities)
    {
        $new = clone $this;
        $new->AutoEnrollLPActivities = $AutoEnrollLPActivities;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExcludeLPEnrollPurchaseActivities()
    {
        return $this->ExcludeLPEnrollPurchaseActivities;
    }

    /**
     * @param bool $ExcludeLPEnrollPurchaseActivities
     *
     * @return LearningType
     */
    public function withExcludeLPEnrollPurchaseActivities($ExcludeLPEnrollPurchaseActivities)
    {
        $new = clone $this;
        $new->ExcludeLPEnrollPurchaseActivities = $ExcludeLPEnrollPurchaseActivities;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExcludeLPEnrollNotSelfEnrollActivities()
    {
        return $this->ExcludeLPEnrollNotSelfEnrollActivities;
    }

    /**
     * @param bool $ExcludeLPEnrollNotSelfEnrollActivities
     *
     * @return LearningType
     */
    public function withExcludeLPEnrollNotSelfEnrollActivities($ExcludeLPEnrollNotSelfEnrollActivities)
    {
        $new = clone $this;
        $new->ExcludeLPEnrollNotSelfEnrollActivities = $ExcludeLPEnrollNotSelfEnrollActivities;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWithdrawIncompleteLPActivitiesOnLPEnroll()
    {
        return $this->WithdrawIncompleteLPActivitiesOnLPEnroll;
    }

    /**
     * @param bool $WithdrawIncompleteLPActivitiesOnLPEnroll
     *
     * @return LearningType
     */
    public function withWithdrawIncompleteLPActivitiesOnLPEnroll($WithdrawIncompleteLPActivitiesOnLPEnroll)
    {
        $new = clone $this;
        $new->WithdrawIncompleteLPActivitiesOnLPEnroll = $WithdrawIncompleteLPActivitiesOnLPEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStudentIsEnrolled()
    {
        return $this->StudentIsEnrolled;
    }

    /**
     * @param bool $StudentIsEnrolled
     *
     * @return LearningType
     */
    public function withStudentIsEnrolled($StudentIsEnrolled)
    {
        $new = clone $this;
        $new->StudentIsEnrolled = $StudentIsEnrolled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStudentHasPendingRequest()
    {
        return $this->StudentHasPendingRequest;
    }

    /**
     * @param bool $StudentHasPendingRequest
     *
     * @return LearningType
     */
    public function withStudentHasPendingRequest($StudentHasPendingRequest)
    {
        $new = clone $this;
        $new->StudentHasPendingRequest = $StudentHasPendingRequest;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStudentHasPass()
    {
        return $this->StudentHasPass;
    }

    /**
     * @param bool $StudentHasPass
     *
     * @return LearningType
     */
    public function withStudentHasPass($StudentHasPass)
    {
        $new = clone $this;
        $new->StudentHasPass = $StudentHasPass;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowAnonPreview()
    {
        return $this->AllowAnonPreview;
    }

    /**
     * @param bool $AllowAnonPreview
     *
     * @return LearningType
     */
    public function withAllowAnonPreview($AllowAnonPreview)
    {
        $new = clone $this;
        $new->AllowAnonPreview = $AllowAnonPreview;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldsXml()
    {
        return $this->FieldsXml;
    }

    /**
     * @param string $FieldsXml
     *
     * @return LearningType
     */
    public function withFieldsXml($FieldsXml)
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->BaseUrl;
    }

    /**
     * @param string $BaseUrl
     *
     * @return LearningType
     */
    public function withBaseUrl($BaseUrl)
    {
        $new = clone $this;
        $new->BaseUrl = $BaseUrl;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAccessCode()
    {
        return $this->HasAccessCode;
    }

    /**
     * @param bool $HasAccessCode
     *
     * @return LearningType
     */
    public function withHasAccessCode($HasAccessCode)
    {
        $new = clone $this;
        $new->HasAccessCode = $HasAccessCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->AccessCode;
    }

    /**
     * @param string $AccessCode
     *
     * @return LearningType
     */
    public function withAccessCode($AccessCode)
    {
        $new = clone $this;
        $new->AccessCode = $AccessCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getCourseSharingCount()
    {
        return $this->CourseSharingCount;
    }

    /**
     * @param int $CourseSharingCount
     *
     * @return LearningType
     */
    public function withCourseSharingCount($CourseSharingCount)
    {
        $new = clone $this;
        $new->CourseSharingCount = $CourseSharingCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }

    /**
     * @param string $Disclaimer
     *
     * @return LearningType
     */
    public function withDisclaimer($Disclaimer)
    {
        $new = clone $this;
        $new->Disclaimer = $Disclaimer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowDisclaimerAlways()
    {
        return $this->ShowDisclaimerAlways;
    }

    /**
     * @param bool $ShowDisclaimerAlways
     *
     * @return LearningType
     */
    public function withShowDisclaimerAlways($ShowDisclaimerAlways)
    {
        $new = clone $this;
        $new->ShowDisclaimerAlways = $ShowDisclaimerAlways;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisclaimerAgreed()
    {
        return $this->DisclaimerAgreed;
    }

    /**
     * @param bool $DisclaimerAgreed
     *
     * @return LearningType
     */
    public function withDisclaimerAgreed($DisclaimerAgreed)
    {
        $new = clone $this;
        $new->DisclaimerAgreed = $DisclaimerAgreed;

        return $new;
    }

    /**
     * @return string
     */
    public function getDisclaimerTextButton()
    {
        return $this->DisclaimerTextButton;
    }

    /**
     * @param string $DisclaimerTextButton
     *
     * @return LearningType
     */
    public function withDisclaimerTextButton($DisclaimerTextButton)
    {
        $new = clone $this;
        $new->DisclaimerTextButton = $DisclaimerTextButton;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasDisclaimer()
    {
        return $this->HasDisclaimer;
    }

    /**
     * @param bool $HasDisclaimer
     *
     * @return LearningType
     */
    public function withHasDisclaimer($HasDisclaimer)
    {
        $new = clone $this;
        $new->HasDisclaimer = $HasDisclaimer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowMobileDownload()
    {
        return $this->AllowMobileDownload;
    }

    /**
     * @param bool $AllowMobileDownload
     *
     * @return LearningType
     */
    public function withAllowMobileDownload($AllowMobileDownload)
    {
        $new = clone $this;
        $new->AllowMobileDownload = $AllowMobileDownload;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAltPrices()
    {
        return $this->AltPrices;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $AltPrices
     *
     * @return LearningType
     */
    public function withAltPrices($AltPrices)
    {
        $new = clone $this;
        $new->AltPrices = $AltPrices;

        return $new;
    }

    /**
     * @return string
     */
    public function getInitialScormVersion()
    {
        return $this->InitialScormVersion;
    }

    /**
     * @param string $InitialScormVersion
     *
     * @return LearningType
     */
    public function withInitialScormVersion($InitialScormVersion)
    {
        $new = clone $this;
        $new->InitialScormVersion = $InitialScormVersion;

        return $new;
    }

    /**
     * @return string
     */
    public function getReviewStatus()
    {
        return $this->ReviewStatus;
    }

    /**
     * @param string $ReviewStatus
     *
     * @return LearningType
     */
    public function withReviewStatus($ReviewStatus)
    {
        $new = clone $this;
        $new->ReviewStatus = $ReviewStatus;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendAccreditationExpiryNotification()
    {
        return $this->SendAccreditationExpiryNotification;
    }

    /**
     * @param bool $SendAccreditationExpiryNotification
     *
     * @return LearningType
     */
    public function withSendAccreditationExpiryNotification($SendAccreditationExpiryNotification)
    {
        $new = clone $this;
        $new->SendAccreditationExpiryNotification = $SendAccreditationExpiryNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendSessionStartLearnerNotification()
    {
        return $this->SendSessionStartLearnerNotification;
    }

    /**
     * @param bool $SendSessionStartLearnerNotification
     *
     * @return LearningType
     */
    public function withSendSessionStartLearnerNotification($SendSessionStartLearnerNotification)
    {
        $new = clone $this;
        $new->SendSessionStartLearnerNotification = $SendSessionStartLearnerNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendSessionStartModeratorNotification()
    {
        return $this->SendSessionStartModeratorNotification;
    }

    /**
     * @param bool $SendSessionStartModeratorNotification
     *
     * @return LearningType
     */
    public function withSendSessionStartModeratorNotification($SendSessionStartModeratorNotification)
    {
        $new = clone $this;
        $new->SendSessionStartModeratorNotification = $SendSessionStartModeratorNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendEnrollmentConfirmation()
    {
        return $this->SendEnrollmentConfirmation;
    }

    /**
     * @param bool $SendEnrollmentConfirmation
     *
     * @return LearningType
     */
    public function withSendEnrollmentConfirmation($SendEnrollmentConfirmation)
    {
        $new = clone $this;
        $new->SendEnrollmentConfirmation = $SendEnrollmentConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendEnrollmentRequestNotification()
    {
        return $this->SendEnrollmentRequestNotification;
    }

    /**
     * @param bool $SendEnrollmentRequestNotification
     *
     * @return LearningType
     */
    public function withSendEnrollmentRequestNotification($SendEnrollmentRequestNotification)
    {
        $new = clone $this;
        $new->SendEnrollmentRequestNotification = $SendEnrollmentRequestNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendThresholdNotification()
    {
        return $this->SendThresholdNotification;
    }

    /**
     * @param bool $SendThresholdNotification
     *
     * @return LearningType
     */
    public function withSendThresholdNotification($SendThresholdNotification)
    {
        $new = clone $this;
        $new->SendThresholdNotification = $SendThresholdNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendStartDateNotificationLearner()
    {
        return $this->SendStartDateNotificationLearner;
    }

    /**
     * @param bool $SendStartDateNotificationLearner
     *
     * @return LearningType
     */
    public function withSendStartDateNotificationLearner($SendStartDateNotificationLearner)
    {
        $new = clone $this;
        $new->SendStartDateNotificationLearner = $SendStartDateNotificationLearner;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorEnroll()
    {
        return $this->NotifyModeratorEnroll;
    }

    /**
     * @param bool $NotifyModeratorEnroll
     *
     * @return LearningType
     */
    public function withNotifyModeratorEnroll($NotifyModeratorEnroll)
    {
        $new = clone $this;
        $new->NotifyModeratorEnroll = $NotifyModeratorEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorEnroll()
    {
        return $this->NotifySupervisorEnroll;
    }

    /**
     * @param bool $NotifySupervisorEnroll
     *
     * @return LearningType
     */
    public function withNotifySupervisorEnroll($NotifySupervisorEnroll)
    {
        $new = clone $this;
        $new->NotifySupervisorEnroll = $NotifySupervisorEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyStudentEnroll()
    {
        return $this->NotifyStudentEnroll;
    }

    /**
     * @param bool $NotifyStudentEnroll
     *
     * @return LearningType
     */
    public function withNotifyStudentEnroll($NotifyStudentEnroll)
    {
        $new = clone $this;
        $new->NotifyStudentEnroll = $NotifyStudentEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendEnrollmentRequestConfirmation()
    {
        return $this->SendEnrollmentRequestConfirmation;
    }

    /**
     * @param bool $SendEnrollmentRequestConfirmation
     *
     * @return LearningType
     */
    public function withSendEnrollmentRequestConfirmation($SendEnrollmentRequestConfirmation)
    {
        $new = clone $this;
        $new->SendEnrollmentRequestConfirmation = $SendEnrollmentRequestConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnEnrollRequestConfirmation()
    {
        return $this->NotifyModeratorOnEnrollRequestConfirmation;
    }

    /**
     * @param bool $NotifyModeratorOnEnrollRequestConfirmation
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnEnrollRequestConfirmation($NotifyModeratorOnEnrollRequestConfirmation)
    {
        $new = clone $this;
        $new->NotifyModeratorOnEnrollRequestConfirmation = $NotifyModeratorOnEnrollRequestConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnEnrollRequestConfirmation()
    {
        return $this->NotifySupervisorOnEnrollRequestConfirmation;
    }

    /**
     * @param bool $NotifySupervisorOnEnrollRequestConfirmation
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnEnrollRequestConfirmation($NotifySupervisorOnEnrollRequestConfirmation)
    {
        $new = clone $this;
        $new->NotifySupervisorOnEnrollRequestConfirmation = $NotifySupervisorOnEnrollRequestConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyLearnerOnEnrollRequestConfirmation()
    {
        return $this->NotifyLearnerOnEnrollRequestConfirmation;
    }

    /**
     * @param bool $NotifyLearnerOnEnrollRequestConfirmation
     *
     * @return LearningType
     */
    public function withNotifyLearnerOnEnrollRequestConfirmation($NotifyLearnerOnEnrollRequestConfirmation)
    {
        $new = clone $this;
        $new->NotifyLearnerOnEnrollRequestConfirmation = $NotifyLearnerOnEnrollRequestConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendDueDateReminder1()
    {
        return $this->SendDueDateReminder1;
    }

    /**
     * @param bool $SendDueDateReminder1
     *
     * @return LearningType
     */
    public function withSendDueDateReminder1($SendDueDateReminder1)
    {
        $new = clone $this;
        $new->SendDueDateReminder1 = $SendDueDateReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendDueDateReminder2()
    {
        return $this->SendDueDateReminder2;
    }

    /**
     * @param bool $SendDueDateReminder2
     *
     * @return LearningType
     */
    public function withSendDueDateReminder2($SendDueDateReminder2)
    {
        $new = clone $this;
        $new->SendDueDateReminder2 = $SendDueDateReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendDueDateReminder3()
    {
        return $this->SendDueDateReminder3;
    }

    /**
     * @param bool $SendDueDateReminder3
     *
     * @return LearningType
     */
    public function withSendDueDateReminder3($SendDueDateReminder3)
    {
        $new = clone $this;
        $new->SendDueDateReminder3 = $SendDueDateReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendUpcomingILTReminder1()
    {
        return $this->SendUpcomingILTReminder1;
    }

    /**
     * @param bool $SendUpcomingILTReminder1
     *
     * @return LearningType
     */
    public function withSendUpcomingILTReminder1($SendUpcomingILTReminder1)
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder1 = $SendUpcomingILTReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendUpcomingILTReminder2()
    {
        return $this->SendUpcomingILTReminder2;
    }

    /**
     * @param bool $SendUpcomingILTReminder2
     *
     * @return LearningType
     */
    public function withSendUpcomingILTReminder2($SendUpcomingILTReminder2)
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder2 = $SendUpcomingILTReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendUpcomingILTReminder3()
    {
        return $this->SendUpcomingILTReminder3;
    }

    /**
     * @param bool $SendUpcomingILTReminder3
     *
     * @return LearningType
     */
    public function withSendUpcomingILTReminder3($SendUpcomingILTReminder3)
    {
        $new = clone $this;
        $new->SendUpcomingILTReminder3 = $SendUpcomingILTReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendEnrollmentReminderNotification()
    {
        return $this->SendEnrollmentReminderNotification;
    }

    /**
     * @param bool $SendEnrollmentReminderNotification
     *
     * @return LearningType
     */
    public function withSendEnrollmentReminderNotification($SendEnrollmentReminderNotification)
    {
        $new = clone $this;
        $new->SendEnrollmentReminderNotification = $SendEnrollmentReminderNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendLearningPathModificationNotification()
    {
        return $this->SendLearningPathModificationNotification;
    }

    /**
     * @param bool $SendLearningPathModificationNotification
     *
     * @return LearningType
     */
    public function withSendLearningPathModificationNotification($SendLearningPathModificationNotification)
    {
        $new = clone $this;
        $new->SendLearningPathModificationNotification = $SendLearningPathModificationNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnEnrollmentReminder()
    {
        return $this->NotifySupervisorOnEnrollmentReminder;
    }

    /**
     * @param bool $NotifySupervisorOnEnrollmentReminder
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnEnrollmentReminder($NotifySupervisorOnEnrollmentReminder)
    {
        $new = clone $this;
        $new->NotifySupervisorOnEnrollmentReminder = $NotifySupervisorOnEnrollmentReminder;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendWithdrawRequestNotification()
    {
        return $this->SendWithdrawRequestNotification;
    }

    /**
     * @param bool $SendWithdrawRequestNotification
     *
     * @return LearningType
     */
    public function withSendWithdrawRequestNotification($SendWithdrawRequestNotification)
    {
        $new = clone $this;
        $new->SendWithdrawRequestNotification = $SendWithdrawRequestNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnWithdrawRequest()
    {
        return $this->NotifyModeratorOnWithdrawRequest;
    }

    /**
     * @param bool $NotifyModeratorOnWithdrawRequest
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnWithdrawRequest($NotifyModeratorOnWithdrawRequest)
    {
        $new = clone $this;
        $new->NotifyModeratorOnWithdrawRequest = $NotifyModeratorOnWithdrawRequest;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnWithdrawRequest()
    {
        return $this->NotifySupervisorOnWithdrawRequest;
    }

    /**
     * @param bool $NotifySupervisorOnWithdrawRequest
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnWithdrawRequest($NotifySupervisorOnWithdrawRequest)
    {
        $new = clone $this;
        $new->NotifySupervisorOnWithdrawRequest = $NotifySupervisorOnWithdrawRequest;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorCompletion()
    {
        return $this->NotifyModeratorCompletion;
    }

    /**
     * @param bool $NotifyModeratorCompletion
     *
     * @return LearningType
     */
    public function withNotifyModeratorCompletion($NotifyModeratorCompletion)
    {
        $new = clone $this;
        $new->NotifyModeratorCompletion = $NotifyModeratorCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorCompletion()
    {
        return $this->NotifySupervisorCompletion;
    }

    /**
     * @param bool $NotifySupervisorCompletion
     *
     * @return LearningType
     */
    public function withNotifySupervisorCompletion($NotifySupervisorCompletion)
    {
        $new = clone $this;
        $new->NotifySupervisorCompletion = $NotifySupervisorCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyLearnerCompletion()
    {
        return $this->NotifyLearnerCompletion;
    }

    /**
     * @param bool $NotifyLearnerCompletion
     *
     * @return LearningType
     */
    public function withNotifyLearnerCompletion($NotifyLearnerCompletion)
    {
        $new = clone $this;
        $new->NotifyLearnerCompletion = $NotifyLearnerCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompletionNotificationIncludeSuccess()
    {
        return $this->CompletionNotificationIncludeSuccess;
    }

    /**
     * @param bool $CompletionNotificationIncludeSuccess
     *
     * @return LearningType
     */
    public function withCompletionNotificationIncludeSuccess($CompletionNotificationIncludeSuccess)
    {
        $new = clone $this;
        $new->CompletionNotificationIncludeSuccess = $CompletionNotificationIncludeSuccess;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompletionNotificationIncludeScore()
    {
        return $this->CompletionNotificationIncludeScore;
    }

    /**
     * @param bool $CompletionNotificationIncludeScore
     *
     * @return LearningType
     */
    public function withCompletionNotificationIncludeScore($CompletionNotificationIncludeScore)
    {
        $new = clone $this;
        $new->CompletionNotificationIncludeScore = $CompletionNotificationIncludeScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnDue()
    {
        return $this->NotifyModeratorOnDue;
    }

    /**
     * @param bool $NotifyModeratorOnDue
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnDue($NotifyModeratorOnDue)
    {
        $new = clone $this;
        $new->NotifyModeratorOnDue = $NotifyModeratorOnDue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnDue()
    {
        return $this->NotifySupervisorOnDue;
    }

    /**
     * @param bool $NotifySupervisorOnDue
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnDue($NotifySupervisorOnDue)
    {
        $new = clone $this;
        $new->NotifySupervisorOnDue = $NotifySupervisorOnDue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnOverDue1()
    {
        return $this->NotifySupervisorOnOverDue1;
    }

    /**
     * @param bool $NotifySupervisorOnOverDue1
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnOverDue1($NotifySupervisorOnOverDue1)
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue1 = $NotifySupervisorOnOverDue1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnOverDue2()
    {
        return $this->NotifySupervisorOnOverDue2;
    }

    /**
     * @param bool $NotifySupervisorOnOverDue2
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnOverDue2($NotifySupervisorOnOverDue2)
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue2 = $NotifySupervisorOnOverDue2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnOverDue3()
    {
        return $this->NotifySupervisorOnOverDue3;
    }

    /**
     * @param bool $NotifySupervisorOnOverDue3
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnOverDue3($NotifySupervisorOnOverDue3)
    {
        $new = clone $this;
        $new->NotifySupervisorOnOverDue3 = $NotifySupervisorOnOverDue3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorSupervisorOnOverDue1()
    {
        return $this->NotifySupervisorSupervisorOnOverDue1;
    }

    /**
     * @param bool $NotifySupervisorSupervisorOnOverDue1
     *
     * @return LearningType
     */
    public function withNotifySupervisorSupervisorOnOverDue1($NotifySupervisorSupervisorOnOverDue1)
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue1 = $NotifySupervisorSupervisorOnOverDue1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorSupervisorOnOverDue2()
    {
        return $this->NotifySupervisorSupervisorOnOverDue2;
    }

    /**
     * @param bool $NotifySupervisorSupervisorOnOverDue2
     *
     * @return LearningType
     */
    public function withNotifySupervisorSupervisorOnOverDue2($NotifySupervisorSupervisorOnOverDue2)
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue2 = $NotifySupervisorSupervisorOnOverDue2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorSupervisorOnOverDue3()
    {
        return $this->NotifySupervisorSupervisorOnOverDue3;
    }

    /**
     * @param bool $NotifySupervisorSupervisorOnOverDue3
     *
     * @return LearningType
     */
    public function withNotifySupervisorSupervisorOnOverDue3($NotifySupervisorSupervisorOnOverDue3)
    {
        $new = clone $this;
        $new->NotifySupervisorSupervisorOnOverDue3 = $NotifySupervisorSupervisorOnOverDue3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnOverDue1()
    {
        return $this->NotifyModeratorOnOverDue1;
    }

    /**
     * @param bool $NotifyModeratorOnOverDue1
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnOverDue1($NotifyModeratorOnOverDue1)
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue1 = $NotifyModeratorOnOverDue1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnOverDue2()
    {
        return $this->NotifyModeratorOnOverDue2;
    }

    /**
     * @param bool $NotifyModeratorOnOverDue2
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnOverDue2($NotifyModeratorOnOverDue2)
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue2 = $NotifyModeratorOnOverDue2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnOverDue3()
    {
        return $this->NotifyModeratorOnOverDue3;
    }

    /**
     * @param bool $NotifyModeratorOnOverDue3
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnOverDue3($NotifyModeratorOnOverDue3)
    {
        $new = clone $this;
        $new->NotifyModeratorOnOverDue3 = $NotifyModeratorOnOverDue3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyLearnerOnOverDue1()
    {
        return $this->NotifyLearnerOnOverDue1;
    }

    /**
     * @param bool $NotifyLearnerOnOverDue1
     *
     * @return LearningType
     */
    public function withNotifyLearnerOnOverDue1($NotifyLearnerOnOverDue1)
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue1 = $NotifyLearnerOnOverDue1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyLearnerOnOverDue2()
    {
        return $this->NotifyLearnerOnOverDue2;
    }

    /**
     * @param bool $NotifyLearnerOnOverDue2
     *
     * @return LearningType
     */
    public function withNotifyLearnerOnOverDue2($NotifyLearnerOnOverDue2)
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue2 = $NotifyLearnerOnOverDue2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyLearnerOnOverDue3()
    {
        return $this->NotifyLearnerOnOverDue3;
    }

    /**
     * @param bool $NotifyLearnerOnOverDue3
     *
     * @return LearningType
     */
    public function withNotifyLearnerOnOverDue3($NotifyLearnerOnOverDue3)
    {
        $new = clone $this;
        $new->NotifyLearnerOnOverDue3 = $NotifyLearnerOnOverDue3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendDueDateNotification()
    {
        return $this->SendDueDateNotification;
    }

    /**
     * @param bool $SendDueDateNotification
     *
     * @return LearningType
     */
    public function withSendDueDateNotification($SendDueDateNotification)
    {
        $new = clone $this;
        $new->SendDueDateNotification = $SendDueDateNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnMissedILTSession()
    {
        return $this->NotifySupervisorOnMissedILTSession;
    }

    /**
     * @param bool $NotifySupervisorOnMissedILTSession
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnMissedILTSession($NotifySupervisorOnMissedILTSession)
    {
        $new = clone $this;
        $new->NotifySupervisorOnMissedILTSession = $NotifySupervisorOnMissedILTSession;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnMissedILTSession()
    {
        return $this->NotifyModeratorOnMissedILTSession;
    }

    /**
     * @param bool $NotifyModeratorOnMissedILTSession
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnMissedILTSession($NotifyModeratorOnMissedILTSession)
    {
        $new = clone $this;
        $new->NotifyModeratorOnMissedILTSession = $NotifyModeratorOnMissedILTSession;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnWaitingList()
    {
        return $this->NotifySupervisorOnWaitingList;
    }

    /**
     * @param bool $NotifySupervisorOnWaitingList
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnWaitingList($NotifySupervisorOnWaitingList)
    {
        $new = clone $this;
        $new->NotifySupervisorOnWaitingList = $NotifySupervisorOnWaitingList;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnWithdraw()
    {
        return $this->NotifySupervisorOnWithdraw;
    }

    /**
     * @param bool $NotifySupervisorOnWithdraw
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnWithdraw($NotifySupervisorOnWithdraw)
    {
        $new = clone $this;
        $new->NotifySupervisorOnWithdraw = $NotifySupervisorOnWithdraw;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnWithdraw()
    {
        return $this->NotifyModeratorOnWithdraw;
    }

    /**
     * @param bool $NotifyModeratorOnWithdraw
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnWithdraw($NotifyModeratorOnWithdraw)
    {
        $new = clone $this;
        $new->NotifyModeratorOnWithdraw = $NotifyModeratorOnWithdraw;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnWaitingList()
    {
        return $this->NotifyModeratorOnWaitingList;
    }

    /**
     * @param bool $NotifyModeratorOnWaitingList
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnWaitingList($NotifyModeratorOnWaitingList)
    {
        $new = clone $this;
        $new->NotifyModeratorOnWaitingList = $NotifyModeratorOnWaitingList;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnDueDateReminder1()
    {
        return $this->NotifyModeratorOnDueDateReminder1;
    }

    /**
     * @param bool $NotifyModeratorOnDueDateReminder1
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnDueDateReminder1($NotifyModeratorOnDueDateReminder1)
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder1 = $NotifyModeratorOnDueDateReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnDueDateReminder2()
    {
        return $this->NotifyModeratorOnDueDateReminder2;
    }

    /**
     * @param bool $NotifyModeratorOnDueDateReminder2
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnDueDateReminder2($NotifyModeratorOnDueDateReminder2)
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder2 = $NotifyModeratorOnDueDateReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnDueDateReminder3()
    {
        return $this->NotifyModeratorOnDueDateReminder3;
    }

    /**
     * @param bool $NotifyModeratorOnDueDateReminder3
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnDueDateReminder3($NotifyModeratorOnDueDateReminder3)
    {
        $new = clone $this;
        $new->NotifyModeratorOnDueDateReminder3 = $NotifyModeratorOnDueDateReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnDueDateReminder1()
    {
        return $this->NotifySupervisorOnDueDateReminder1;
    }

    /**
     * @param bool $NotifySupervisorOnDueDateReminder1
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnDueDateReminder1($NotifySupervisorOnDueDateReminder1)
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder1 = $NotifySupervisorOnDueDateReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnDueDateReminder2()
    {
        return $this->NotifySupervisorOnDueDateReminder2;
    }

    /**
     * @param bool $NotifySupervisorOnDueDateReminder2
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnDueDateReminder2($NotifySupervisorOnDueDateReminder2)
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder2 = $NotifySupervisorOnDueDateReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnDueDateReminder3()
    {
        return $this->NotifySupervisorOnDueDateReminder3;
    }

    /**
     * @param bool $NotifySupervisorOnDueDateReminder3
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnDueDateReminder3($NotifySupervisorOnDueDateReminder3)
    {
        $new = clone $this;
        $new->NotifySupervisorOnDueDateReminder3 = $NotifySupervisorOnDueDateReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnUpcomingILTReminder1()
    {
        return $this->NotifySupervisorOnUpcomingILTReminder1;
    }

    /**
     * @param bool $NotifySupervisorOnUpcomingILTReminder1
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnUpcomingILTReminder1($NotifySupervisorOnUpcomingILTReminder1)
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder1 = $NotifySupervisorOnUpcomingILTReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnUpcomingILTReminder2()
    {
        return $this->NotifySupervisorOnUpcomingILTReminder2;
    }

    /**
     * @param bool $NotifySupervisorOnUpcomingILTReminder2
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnUpcomingILTReminder2($NotifySupervisorOnUpcomingILTReminder2)
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder2 = $NotifySupervisorOnUpcomingILTReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnUpcomingILTReminder3()
    {
        return $this->NotifySupervisorOnUpcomingILTReminder3;
    }

    /**
     * @param bool $NotifySupervisorOnUpcomingILTReminder3
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnUpcomingILTReminder3($NotifySupervisorOnUpcomingILTReminder3)
    {
        $new = clone $this;
        $new->NotifySupervisorOnUpcomingILTReminder3 = $NotifySupervisorOnUpcomingILTReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnUpcomingILTReminder1()
    {
        return $this->NotifyModeratorOnUpcomingILTReminder1;
    }

    /**
     * @param bool $NotifyModeratorOnUpcomingILTReminder1
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnUpcomingILTReminder1($NotifyModeratorOnUpcomingILTReminder1)
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder1 = $NotifyModeratorOnUpcomingILTReminder1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnUpcomingILTReminder2()
    {
        return $this->NotifyModeratorOnUpcomingILTReminder2;
    }

    /**
     * @param bool $NotifyModeratorOnUpcomingILTReminder2
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnUpcomingILTReminder2($NotifyModeratorOnUpcomingILTReminder2)
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder2 = $NotifyModeratorOnUpcomingILTReminder2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnUpcomingILTReminder3()
    {
        return $this->NotifyModeratorOnUpcomingILTReminder3;
    }

    /**
     * @param bool $NotifyModeratorOnUpcomingILTReminder3
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnUpcomingILTReminder3($NotifyModeratorOnUpcomingILTReminder3)
    {
        $new = clone $this;
        $new->NotifyModeratorOnUpcomingILTReminder3 = $NotifyModeratorOnUpcomingILTReminder3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendOverDueNotification1()
    {
        return $this->SendOverDueNotification1;
    }

    /**
     * @param bool $SendOverDueNotification1
     *
     * @return LearningType
     */
    public function withSendOverDueNotification1($SendOverDueNotification1)
    {
        $new = clone $this;
        $new->SendOverDueNotification1 = $SendOverDueNotification1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendOverDueNotification2()
    {
        return $this->SendOverDueNotification2;
    }

    /**
     * @param bool $SendOverDueNotification2
     *
     * @return LearningType
     */
    public function withSendOverDueNotification2($SendOverDueNotification2)
    {
        $new = clone $this;
        $new->SendOverDueNotification2 = $SendOverDueNotification2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendOverDueNotification3()
    {
        return $this->SendOverDueNotification3;
    }

    /**
     * @param bool $SendOverDueNotification3
     *
     * @return LearningType
     */
    public function withSendOverDueNotification3($SendOverDueNotification3)
    {
        $new = clone $this;
        $new->SendOverDueNotification3 = $SendOverDueNotification3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendMissedSessionNotification()
    {
        return $this->SendMissedSessionNotification;
    }

    /**
     * @param bool $SendMissedSessionNotification
     *
     * @return LearningType
     */
    public function withSendMissedSessionNotification($SendMissedSessionNotification)
    {
        $new = clone $this;
        $new->SendMissedSessionNotification = $SendMissedSessionNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendMissedILTSessionNotification()
    {
        return $this->SendMissedILTSessionNotification;
    }

    /**
     * @param bool $SendMissedILTSessionNotification
     *
     * @return LearningType
     */
    public function withSendMissedILTSessionNotification($SendMissedILTSessionNotification)
    {
        $new = clone $this;
        $new->SendMissedILTSessionNotification = $SendMissedILTSessionNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendWaitingListNotification()
    {
        return $this->SendWaitingListNotification;
    }

    /**
     * @param bool $SendWaitingListNotification
     *
     * @return LearningType
     */
    public function withSendWaitingListNotification($SendWaitingListNotification)
    {
        $new = clone $this;
        $new->SendWaitingListNotification = $SendWaitingListNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendWithdrawNotifications()
    {
        return $this->SendWithdrawNotifications;
    }

    /**
     * @param bool $SendWithdrawNotifications
     *
     * @return LearningType
     */
    public function withSendWithdrawNotifications($SendWithdrawNotifications)
    {
        $new = clone $this;
        $new->SendWithdrawNotifications = $SendWithdrawNotifications;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendCourseModificationNotification()
    {
        return $this->SendCourseModificationNotification;
    }

    /**
     * @param bool $SendCourseModificationNotification
     *
     * @return LearningType
     */
    public function withSendCourseModificationNotification($SendCourseModificationNotification)
    {
        $new = clone $this;
        $new->SendCourseModificationNotification = $SendCourseModificationNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendCourseModificationNotificationToCompleted()
    {
        return $this->SendCourseModificationNotificationToCompleted;
    }

    /**
     * @param bool $SendCourseModificationNotificationToCompleted
     *
     * @return LearningType
     */
    public function withSendCourseModificationNotificationToCompleted($SendCourseModificationNotificationToCompleted)
    {
        $new = clone $this;
        $new->SendCourseModificationNotificationToCompleted = $SendCourseModificationNotificationToCompleted;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendCourseResourceModificationNotification()
    {
        return $this->SendCourseResourceModificationNotification;
    }

    /**
     * @param bool $SendCourseResourceModificationNotification
     *
     * @return LearningType
     */
    public function withSendCourseResourceModificationNotification($SendCourseResourceModificationNotification)
    {
        $new = clone $this;
        $new->SendCourseResourceModificationNotification = $SendCourseResourceModificationNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendWaitingListModificationNotification()
    {
        return $this->SendWaitingListModificationNotification;
    }

    /**
     * @param bool $SendWaitingListModificationNotification
     *
     * @return LearningType
     */
    public function withSendWaitingListModificationNotification($SendWaitingListModificationNotification)
    {
        $new = clone $this;
        $new->SendWaitingListModificationNotification = $SendWaitingListModificationNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendAssignmentReviewedNotification()
    {
        return $this->SendAssignmentReviewedNotification;
    }

    /**
     * @param bool $SendAssignmentReviewedNotification
     *
     * @return LearningType
     */
    public function withSendAssignmentReviewedNotification($SendAssignmentReviewedNotification)
    {
        $new = clone $this;
        $new->SendAssignmentReviewedNotification = $SendAssignmentReviewedNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendPerformanceNotification()
    {
        return $this->SendPerformanceNotification;
    }

    /**
     * @param bool $SendPerformanceNotification
     *
     * @return LearningType
     */
    public function withSendPerformanceNotification($SendPerformanceNotification)
    {
        $new = clone $this;
        $new->SendPerformanceNotification = $SendPerformanceNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendBadgeIssuedNotification()
    {
        return $this->SendBadgeIssuedNotification;
    }

    /**
     * @param bool $SendBadgeIssuedNotification
     *
     * @return LearningType
     */
    public function withSendBadgeIssuedNotification($SendBadgeIssuedNotification)
    {
        $new = clone $this;
        $new->SendBadgeIssuedNotification = $SendBadgeIssuedNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendPendingNotification()
    {
        return $this->SendPendingNotification;
    }

    /**
     * @param bool $SendPendingNotification
     *
     * @return LearningType
     */
    public function withSendPendingNotification($SendPendingNotification)
    {
        $new = clone $this;
        $new->SendPendingNotification = $SendPendingNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendFeedbackOverdueNotification()
    {
        return $this->SendFeedbackOverdueNotification;
    }

    /**
     * @param bool $SendFeedbackOverdueNotification
     *
     * @return LearningType
     */
    public function withSendFeedbackOverdueNotification($SendFeedbackOverdueNotification)
    {
        $new = clone $this;
        $new->SendFeedbackOverdueNotification = $SendFeedbackOverdueNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendfeedbackDueDateNotification()
    {
        return $this->SendfeedbackDueDateNotification;
    }

    /**
     * @param bool $SendfeedbackDueDateNotification
     *
     * @return LearningType
     */
    public function withSendfeedbackDueDateNotification($SendfeedbackDueDateNotification)
    {
        $new = clone $this;
        $new->SendfeedbackDueDateNotification = $SendfeedbackDueDateNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendAssignmentSubmittedNotification()
    {
        return $this->SendAssignmentSubmittedNotification;
    }

    /**
     * @param bool $SendAssignmentSubmittedNotification
     *
     * @return LearningType
     */
    public function withSendAssignmentSubmittedNotification($SendAssignmentSubmittedNotification)
    {
        $new = clone $this;
        $new->SendAssignmentSubmittedNotification = $SendAssignmentSubmittedNotification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendActivityPeerReviewCancelled()
    {
        return $this->SendActivityPeerReviewCancelled;
    }

    /**
     * @param bool $SendActivityPeerReviewCancelled
     *
     * @return LearningType
     */
    public function withSendActivityPeerReviewCancelled($SendActivityPeerReviewCancelled)
    {
        $new = clone $this;
        $new->SendActivityPeerReviewCancelled = $SendActivityPeerReviewCancelled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendActivityReviewApprovalExpiryReminder()
    {
        return $this->SendActivityReviewApprovalExpiryReminder;
    }

    /**
     * @param bool $SendActivityReviewApprovalExpiryReminder
     *
     * @return LearningType
     */
    public function withSendActivityReviewApprovalExpiryReminder($SendActivityReviewApprovalExpiryReminder)
    {
        $new = clone $this;
        $new->SendActivityReviewApprovalExpiryReminder = $SendActivityReviewApprovalExpiryReminder;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendExternalActivityApprovedAutomatically()
    {
        return $this->SendExternalActivityApprovedAutomatically;
    }

    /**
     * @param bool $SendExternalActivityApprovedAutomatically
     *
     * @return LearningType
     */
    public function withSendExternalActivityApprovedAutomatically($SendExternalActivityApprovedAutomatically)
    {
        $new = clone $this;
        $new->SendExternalActivityApprovedAutomatically = $SendExternalActivityApprovedAutomatically;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendExternalActivityRequiresApproval()
    {
        return $this->SendExternalActivityRequiresApproval;
    }

    /**
     * @param bool $SendExternalActivityRequiresApproval
     *
     * @return LearningType
     */
    public function withSendExternalActivityRequiresApproval($SendExternalActivityRequiresApproval)
    {
        $new = clone $this;
        $new->SendExternalActivityRequiresApproval = $SendExternalActivityRequiresApproval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendForumPostApprovalRequired()
    {
        return $this->SendForumPostApprovalRequired;
    }

    /**
     * @param bool $SendForumPostApprovalRequired
     *
     * @return LearningType
     */
    public function withSendForumPostApprovalRequired($SendForumPostApprovalRequired)
    {
        $new = clone $this;
        $new->SendForumPostApprovalRequired = $SendForumPostApprovalRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendForumPostApproved()
    {
        return $this->SendForumPostApproved;
    }

    /**
     * @param bool $SendForumPostApproved
     *
     * @return LearningType
     */
    public function withSendForumPostApproved($SendForumPostApproved)
    {
        $new = clone $this;
        $new->SendForumPostApproved = $SendForumPostApproved;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendForumPostDeclined()
    {
        return $this->SendForumPostDeclined;
    }

    /**
     * @param bool $SendForumPostDeclined
     *
     * @return LearningType
     */
    public function withSendForumPostDeclined($SendForumPostDeclined)
    {
        $new = clone $this;
        $new->SendForumPostDeclined = $SendForumPostDeclined;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendPasswordChanged()
    {
        return $this->SendPasswordChanged;
    }

    /**
     * @param bool $SendPasswordChanged
     *
     * @return LearningType
     */
    public function withSendPasswordChanged($SendPasswordChanged)
    {
        $new = clone $this;
        $new->SendPasswordChanged = $SendPasswordChanged;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRecommendationInvitation()
    {
        return $this->SendRecommendationInvitation;
    }

    /**
     * @param bool $SendRecommendationInvitation
     *
     * @return LearningType
     */
    public function withSendRecommendationInvitation($SendRecommendationInvitation)
    {
        $new = clone $this;
        $new->SendRecommendationInvitation = $SendRecommendationInvitation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRecommendationOutCome()
    {
        return $this->SendRecommendationOutCome;
    }

    /**
     * @param bool $SendRecommendationOutCome
     *
     * @return LearningType
     */
    public function withSendRecommendationOutCome($SendRecommendationOutCome)
    {
        $new = clone $this;
        $new->SendRecommendationOutCome = $SendRecommendationOutCome;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendAccountVerification()
    {
        return $this->SendAccountVerification;
    }

    /**
     * @param bool $SendAccountVerification
     *
     * @return LearningType
     */
    public function withSendAccountVerification($SendAccountVerification)
    {
        $new = clone $this;
        $new->SendAccountVerification = $SendAccountVerification;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendSelfWithdraw()
    {
        return $this->SendSelfWithdraw;
    }

    /**
     * @param bool $SendSelfWithdraw
     *
     * @return LearningType
     */
    public function withSendSelfWithdraw($SendSelfWithdraw)
    {
        $new = clone $this;
        $new->SendSelfWithdraw = $SendSelfWithdraw;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifySupervisorOnSelfWithdraw()
    {
        return $this->NotifySupervisorOnSelfWithdraw;
    }

    /**
     * @param bool $NotifySupervisorOnSelfWithdraw
     *
     * @return LearningType
     */
    public function withNotifySupervisorOnSelfWithdraw($NotifySupervisorOnSelfWithdraw)
    {
        $new = clone $this;
        $new->NotifySupervisorOnSelfWithdraw = $NotifySupervisorOnSelfWithdraw;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNotifyModeratorOnSelfWithdraw()
    {
        return $this->NotifyModeratorOnSelfWithdraw;
    }

    /**
     * @param bool $NotifyModeratorOnSelfWithdraw
     *
     * @return LearningType
     */
    public function withNotifyModeratorOnSelfWithdraw($NotifyModeratorOnSelfWithdraw)
    {
        $new = clone $this;
        $new->NotifyModeratorOnSelfWithdraw = $NotifyModeratorOnSelfWithdraw;

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
     * @return LearningType
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
    public function getManualEnollOverrideLastEnrollmentDate()
    {
        return $this->ManualEnollOverrideLastEnrollmentDate;
    }

    /**
     * @param bool $ManualEnollOverrideLastEnrollmentDate
     *
     * @return LearningType
     */
    public function withManualEnollOverrideLastEnrollmentDate($ManualEnollOverrideLastEnrollmentDate)
    {
        $new = clone $this;
        $new->ManualEnollOverrideLastEnrollmentDate = $ManualEnollOverrideLastEnrollmentDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnollOverridePrerequisites()
    {
        return $this->ManualEnollOverridePrerequisites;
    }

    /**
     * @param bool $ManualEnollOverridePrerequisites
     *
     * @return LearningType
     */
    public function withManualEnollOverridePrerequisites($ManualEnollOverridePrerequisites)
    {
        $new = clone $this;
        $new->ManualEnollOverridePrerequisites = $ManualEnollOverridePrerequisites;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnollOverrideNotificationPeriod()
    {
        return $this->ManualEnollOverrideNotificationPeriod;
    }

    /**
     * @param bool $ManualEnollOverrideNotificationPeriod
     *
     * @return LearningType
     */
    public function withManualEnollOverrideNotificationPeriod($ManualEnollOverrideNotificationPeriod)
    {
        $new = clone $this;
        $new->ManualEnollOverrideNotificationPeriod = $ManualEnollOverrideNotificationPeriod;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnollOverrideMaxReEnrollments()
    {
        return $this->ManualEnollOverrideMaxReEnrollments;
    }

    /**
     * @param bool $ManualEnollOverrideMaxReEnrollments
     *
     * @return LearningType
     */
    public function withManualEnollOverrideMaxReEnrollments($ManualEnollOverrideMaxReEnrollments)
    {
        $new = clone $this;
        $new->ManualEnollOverrideMaxReEnrollments = $ManualEnollOverrideMaxReEnrollments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getManualEnollOverrideSingleNonExpiringEnrollments()
    {
        return $this->ManualEnollOverrideSingleNonExpiringEnrollments;
    }

    /**
     * @param bool $ManualEnollOverrideSingleNonExpiringEnrollments
     *
     * @return LearningType
     */
    public function withManualEnollOverrideSingleNonExpiringEnrollments($ManualEnollOverrideSingleNonExpiringEnrollments)
    {
        $new = clone $this;
        $new->ManualEnollOverrideSingleNonExpiringEnrollments = $ManualEnollOverrideSingleNonExpiringEnrollments;

        return $new;
    }

    /**
     * @return int
     */
    public function getClassroomHeight()
    {
        return $this->ClassroomHeight;
    }

    /**
     * @param int $ClassroomHeight
     *
     * @return LearningType
     */
    public function withClassroomHeight($ClassroomHeight)
    {
        $new = clone $this;
        $new->ClassroomHeight = $ClassroomHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getClassroomWidth()
    {
        return $this->ClassroomWidth;
    }

    /**
     * @param int $ClassroomWidth
     *
     * @return LearningType
     */
    public function withClassroomWidth($ClassroomWidth)
    {
        $new = clone $this;
        $new->ClassroomWidth = $ClassroomWidth;

        return $new;
    }

    /**
     * @return string
     */
    public function getClassroomTemplate()
    {
        return $this->ClassroomTemplate;
    }

    /**
     * @param string $ClassroomTemplate
     *
     * @return LearningType
     */
    public function withClassroomTemplate($ClassroomTemplate)
    {
        $new = clone $this;
        $new->ClassroomTemplate = $ClassroomTemplate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForceIECompatibilityMode()
    {
        return $this->ForceIECompatibilityMode;
    }

    /**
     * @param bool $ForceIECompatibilityMode
     *
     * @return LearningType
     */
    public function withForceIECompatibilityMode($ForceIECompatibilityMode)
    {
        $new = clone $this;
        $new->ForceIECompatibilityMode = $ForceIECompatibilityMode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowModal()
    {
        return $this->AllowModal;
    }

    /**
     * @param bool $AllowModal
     *
     * @return LearningType
     */
    public function withAllowModal($AllowModal)
    {
        $new = clone $this;
        $new->AllowModal = $AllowModal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFullScreenSize()
    {
        return $this->FullScreenSize;
    }

    /**
     * @param bool $FullScreenSize
     *
     * @return LearningType
     */
    public function withFullScreenSize($FullScreenSize)
    {
        $new = clone $this;
        $new->FullScreenSize = $FullScreenSize;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenCourseIn()
    {
        return $this->OpenCourseIn;
    }

    /**
     * @param string $OpenCourseIn
     *
     * @return LearningType
     */
    public function withOpenCourseIn($OpenCourseIn)
    {
        $new = clone $this;
        $new->OpenCourseIn = $OpenCourseIn;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasThreshold()
    {
        return $this->HasThreshold;
    }

    /**
     * @param bool $HasThreshold
     *
     * @return LearningType
     */
    public function withHasThreshold($HasThreshold)
    {
        $new = clone $this;
        $new->HasThreshold = $HasThreshold;

        return $new;
    }

    /**
     * @return int
     */
    public function getThresholdValue()
    {
        return $this->ThresholdValue;
    }

    /**
     * @param int $ThresholdValue
     *
     * @return LearningType
     */
    public function withThresholdValue($ThresholdValue)
    {
        $new = clone $this;
        $new->ThresholdValue = $ThresholdValue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLimitSecurityAccess()
    {
        return $this->LimitSecurityAccess;
    }

    /**
     * @param bool $LimitSecurityAccess
     *
     * @return LearningType
     */
    public function withLimitSecurityAccess($LimitSecurityAccess)
    {
        $new = clone $this;
        $new->LimitSecurityAccess = $LimitSecurityAccess;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreatorID()
    {
        return $this->CreatorID;
    }

    /**
     * @param string $CreatorID
     *
     * @return LearningType
     */
    public function withCreatorID($CreatorID)
    {
        $new = clone $this;
        $new->CreatorID = $CreatorID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequirePackageForCompletion()
    {
        return $this->RequirePackageForCompletion;
    }

    /**
     * @param bool $RequirePackageForCompletion
     *
     * @return LearningType
     */
    public function withRequirePackageForCompletion($RequirePackageForCompletion)
    {
        $new = clone $this;
        $new->RequirePackageForCompletion = $RequirePackageForCompletion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequireFeedbackForCompletion()
    {
        return $this->RequireFeedbackForCompletion;
    }

    /**
     * @param bool $RequireFeedbackForCompletion
     *
     * @return LearningType
     */
    public function withRequireFeedbackForCompletion($RequireFeedbackForCompletion)
    {
        $new = clone $this;
        $new->RequireFeedbackForCompletion = $RequireFeedbackForCompletion;

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
     * @return LearningType
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
     * @return LearningType
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
     * @return LearningType
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
    public function getRequireStatusSuccessPassed()
    {
        return $this->RequireStatusSuccessPassed;
    }

    /**
     * @param bool $RequireStatusSuccessPassed
     *
     * @return LearningType
     */
    public function withRequireStatusSuccessPassed($RequireStatusSuccessPassed)
    {
        $new = clone $this;
        $new->RequireStatusSuccessPassed = $RequireStatusSuccessPassed;

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
     * @return LearningType
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
    public function getOverrideAPISucces()
    {
        return $this->OverrideAPISucces;
    }

    /**
     * @param bool $OverrideAPISucces
     *
     * @return LearningType
     */
    public function withOverrideAPISucces($OverrideAPISucces)
    {
        $new = clone $this;
        $new->OverrideAPISucces = $OverrideAPISucces;

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
     * @return LearningType
     */
    public function withMinPassingScore($MinPassingScore)
    {
        $new = clone $this;
        $new->MinPassingScore = $MinPassingScore;

        return $new;
    }

    /**
     * @return string
     */
    public function getPreventCompletionSettings()
    {
        return $this->PreventCompletionSettings;
    }

    /**
     * @param string $PreventCompletionSettings
     *
     * @return LearningType
     */
    public function withPreventCompletionSettings($PreventCompletionSettings)
    {
        $new = clone $this;
        $new->PreventCompletionSettings = $PreventCompletionSettings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAssessment()
    {
        return $this->HasAssessment;
    }

    /**
     * @param bool $HasAssessment
     *
     * @return LearningType
     */
    public function withHasAssessment($HasAssessment)
    {
        $new = clone $this;
        $new->HasAssessment = $HasAssessment;

        return $new;
    }

    /**
     * @return int
     */
    public function getAssessmentWeight()
    {
        return $this->AssessmentWeight;
    }

    /**
     * @param int $AssessmentWeight
     *
     * @return LearningType
     */
    public function withAssessmentWeight($AssessmentWeight)
    {
        $new = clone $this;
        $new->AssessmentWeight = $AssessmentWeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getAssignmentWeight()
    {
        return $this->AssignmentWeight;
    }

    /**
     * @param int $AssignmentWeight
     *
     * @return LearningType
     */
    public function withAssignmentWeight($AssignmentWeight)
    {
        $new = clone $this;
        $new->AssignmentWeight = $AssignmentWeight;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasFeedback()
    {
        return $this->HasFeedback;
    }

    /**
     * @param bool $HasFeedback
     *
     * @return LearningType
     */
    public function withHasFeedback($HasFeedback)
    {
        $new = clone $this;
        $new->HasFeedback = $HasFeedback;

        return $new;
    }

    /**
     * @return int
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }

    /**
     * @param int $PackageWeight
     *
     * @return LearningType
     */
    public function withPackageWeight($PackageWeight)
    {
        $new = clone $this;
        $new->PackageWeight = $PackageWeight;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeploymentType()
    {
        return $this->DeploymentType;
    }

    /**
     * @param string $DeploymentType
     *
     * @return LearningType
     */
    public function withDeploymentType($DeploymentType)
    {
        $new = clone $this;
        $new->DeploymentType = $DeploymentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getAzureRunMode()
    {
        return $this->AzureRunMode;
    }

    /**
     * @param string $AzureRunMode
     *
     * @return LearningType
     */
    public function withAzureRunMode($AzureRunMode)
    {
        $new = clone $this;
        $new->AzureRunMode = $AzureRunMode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDynamicProgram()
    {
        return $this->DynamicProgram;
    }

    /**
     * @param bool $DynamicProgram
     *
     * @return LearningType
     */
    public function withDynamicProgram($DynamicProgram)
    {
        $new = clone $this;
        $new->DynamicProgram = $DynamicProgram;

        return $new;
    }

    /**
     * @return float
     */
    public function getLearningTime()
    {
        return $this->LearningTime;
    }

    /**
     * @param float $LearningTime
     *
     * @return LearningType
     */
    public function withLearningTime($LearningTime)
    {
        $new = clone $this;
        $new->LearningTime = $LearningTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEditorXML()
    {
        return $this->EditorXML;
    }

    /**
     * @param string $EditorXML
     *
     * @return LearningType
     */
    public function withEditorXML($EditorXML)
    {
        $new = clone $this;
        $new->EditorXML = $EditorXML;

        return $new;
    }

    /**
     * @return string
     */
    public function getTranscriptPrintMode()
    {
        return $this->TranscriptPrintMode;
    }

    /**
     * @param string $TranscriptPrintMode
     *
     * @return LearningType
     */
    public function withTranscriptPrintMode($TranscriptPrintMode)
    {
        $new = clone $this;
        $new->TranscriptPrintMode = $TranscriptPrintMode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideTranscriptScore()
    {
        return $this->HideTranscriptScore;
    }

    /**
     * @param bool $HideTranscriptScore
     *
     * @return LearningType
     */
    public function withHideTranscriptScore($HideTranscriptScore)
    {
        $new = clone $this;
        $new->HideTranscriptScore = $HideTranscriptScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowCustomScoreFeedback()
    {
        return $this->ShowCustomScoreFeedback;
    }

    /**
     * @param bool $ShowCustomScoreFeedback
     *
     * @return LearningType
     */
    public function withShowCustomScoreFeedback($ShowCustomScoreFeedback)
    {
        $new = clone $this;
        $new->ShowCustomScoreFeedback = $ShowCustomScoreFeedback;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideInteractionsFromUser()
    {
        return $this->HideInteractionsFromUser;
    }

    /**
     * @param bool $HideInteractionsFromUser
     *
     * @return LearningType
     */
    public function withHideInteractionsFromUser($HideInteractionsFromUser)
    {
        $new = clone $this;
        $new->HideInteractionsFromUser = $HideInteractionsFromUser;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideInteractionsFromSupervisor()
    {
        return $this->HideInteractionsFromSupervisor;
    }

    /**
     * @param bool $HideInteractionsFromSupervisor
     *
     * @return LearningType
     */
    public function withHideInteractionsFromSupervisor($HideInteractionsFromSupervisor)
    {
        $new = clone $this;
        $new->HideInteractionsFromSupervisor = $HideInteractionsFromSupervisor;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLog()
    {
        return $this->Log;
    }

    /**
     * @param bool $Log
     *
     * @return LearningType
     */
    public function withLog($Log)
    {
        $new = clone $this;
        $new->Log = $Log;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomScoreFeedbackXml()
    {
        return $this->CustomScoreFeedbackXml;
    }

    /**
     * @param string $CustomScoreFeedbackXml
     *
     * @return LearningType
     */
    public function withCustomScoreFeedbackXml($CustomScoreFeedbackXml)
    {
        $new = clone $this;
        $new->CustomScoreFeedbackXml = $CustomScoreFeedbackXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomActivityTypeID()
    {
        return $this->CustomActivityTypeID;
    }

    /**
     * @param string $CustomActivityTypeID
     *
     * @return LearningType
     */
    public function withCustomActivityTypeID($CustomActivityTypeID)
    {
        $new = clone $this;
        $new->CustomActivityTypeID = $CustomActivityTypeID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowHiddenSettings()
    {
        return $this->ShowHiddenSettings;
    }

    /**
     * @param bool $ShowHiddenSettings
     *
     * @return LearningType
     */
    public function withShowHiddenSettings($ShowHiddenSettings)
    {
        $new = clone $this;
        $new->ShowHiddenSettings = $ShowHiddenSettings;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortfolioEvidenceNumber()
    {
        return $this->PortfolioEvidenceNumber;
    }

    /**
     * @param int $PortfolioEvidenceNumber
     *
     * @return LearningType
     */
    public function withPortfolioEvidenceNumber($PortfolioEvidenceNumber)
    {
        $new = clone $this;
        $new->PortfolioEvidenceNumber = $PortfolioEvidenceNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getPortfolioEvidenceMinumumNumber()
    {
        return $this->PortfolioEvidenceMinumumNumber;
    }

    /**
     * @param int $PortfolioEvidenceMinumumNumber
     *
     * @return LearningType
     */
    public function withPortfolioEvidenceMinumumNumber($PortfolioEvidenceMinumumNumber)
    {
        $new = clone $this;
        $new->PortfolioEvidenceMinumumNumber = $PortfolioEvidenceMinumumNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowLearnerNotes()
    {
        return $this->AllowLearnerNotes;
    }

    /**
     * @param bool $AllowLearnerNotes
     *
     * @return LearningType
     */
    public function withAllowLearnerNotes($AllowLearnerNotes)
    {
        $new = clone $this;
        $new->AllowLearnerNotes = $AllowLearnerNotes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowRecommendation()
    {
        return $this->ShowRecommendation;
    }

    /**
     * @param bool $ShowRecommendation
     *
     * @return LearningType
     */
    public function withShowRecommendation($ShowRecommendation)
    {
        $new = clone $this;
        $new->ShowRecommendation = $ShowRecommendation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMarkByTA()
    {
        return $this->MarkByTA;
    }

    /**
     * @param bool $MarkByTA
     *
     * @return LearningType
     */
    public function withMarkByTA($MarkByTA)
    {
        $new = clone $this;
        $new->MarkByTA = $MarkByTA;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMarkByModerator()
    {
        return $this->MarkByModerator;
    }

    /**
     * @param bool $MarkByModerator
     *
     * @return LearningType
     */
    public function withMarkByModerator($MarkByModerator)
    {
        $new = clone $this;
        $new->MarkByModerator = $MarkByModerator;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getAssessments()
    {
        return $this->Assessments;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $Assessments
     *
     * @return LearningType
     */
    public function withAssessments($Assessments)
    {
        $new = clone $this;
        $new->Assessments = $Assessments;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getCertificateRules()
    {
        return $this->CertificateRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $CertificateRules
     *
     * @return LearningType
     */
    public function withCertificateRules($CertificateRules)
    {
        $new = clone $this;
        $new->CertificateRules = $CertificateRules;

        return $new;
    }
}
