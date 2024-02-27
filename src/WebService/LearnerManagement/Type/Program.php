<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Program
{
    private ?string $ID;

    
    private ?string $Name;

    
    private ?string $Code;

    
    private ?string $Description;

    
    private ?string $ParentID;

    
    private ?string $ParentPath;

    
    private ?string $ProgramPath;

    
    private bool $AutoEnrollSubprograms;

    
    private ?string $AutoIncludeUsersType;

    
    private bool $AutoIncludeUsers;

    
    private ?string $AutoIncludeUsersFields;

    
    private ?string $AutoIncludeCoursesType;

    
    private bool $AutoIncludeCourses;

    
    private ?string $AutoIncludeCoursesFields;

    
    private bool $IsSearchFilter;

    
    private bool $AllowSelfRegistration;

    
    private bool $RequiresRegistrationApproval;

    
    private bool $RequiresRegistrationCodeForExistingAccounts;

    
    private bool $RegistrationAutomaticApproval;

    
    private bool $RegistrationRequiresCode;

    
    private bool $RegistrationRequiresRequest;

    
    private ?ArrayOfAnyType $AltPrices;

    
    private ?string $RegistrationAccessCodes;

    
    private ?string $RegistrationAccessCode;

    
    private ?string $RegistrationInstruction;

    
    private bool $RegistrationAutomaticApproval_Domain;

    
    private ?string $AutomaticApproveRegistrationDomain;

    
    private ?string $RegistrationFields;

    
    private ?string $RegistrationSubdomains;

    
    private bool $AllowUserDomainSelection;

    
    private bool $UserDomainSelectionRequired;

    
    private bool $UserDomainSelectAll;

    
    private ?string $UserDomainDisplayLabel;

    
    private ?string $UserRegistrationDomains;

    
    private ?ArrayOfProgram $UserRegistrationDomainsList;

    
    private ?string $UserRegistrationDomainsDisplay;

    
    private ?string $UserRegistrationDomainsMode;

    
    private ?string $RegistrationConfirmationText;

    
    private ?string $RegistrationIntroText;

    
    private ?string $RegistrationToDomainIntroText;

    
    private ?string $RegistrationRequestConfirmationText;

    
    private ?string $RegistrationDisclaimerText;

    
    private bool $RequiresRegistrationDisclaimerAck;

    
    private bool $RegistrationRequiresPurchase;

    
    private bool $RegistrationRequiresVerification;

    
    private ?string $RegistrationSubscription;

    
    private ?string $RegistrationPasses;

    
    private bool $CollectLoginMetadataOnce;

    
    private bool $ShowLoginNotRequiredFields;

    
    private bool $SendRegistrationConfirmation;

    
    private bool $SendRegistrationRequest;

    
    private int $PasswordExpirationDurationInSeconds;

    
    private bool $SendRegistrationApproval;

    
    private bool $SendRegistrationDenial;

    
    private bool $OverrideGlobalRegistrationConfirmation;

    
    private bool $OverrideGlobalRegistrationRequest;

    
    private bool $OverrideGlobalRegistrationApproval;

    
    private bool $OverrideGlobalRegistrationDenial;

    
    private ?string $RegistrationConfirmationEmailText;

    
    private ?string $RegistrationRequestEmailText;

    
    private ?string $RegistrationApprovalEmailText;

    
    private ?string $RegistrationDenialEmailText;

    
    private ?string $RegistrationCaptchaMode;

    
    private ?string $RegistrationCaptchaType;

    
    private ?string $ForumCaptchaType;

    
    private ?string $ForumDisclaimerText;

    
    private ?string $ShowForumDisclaimerWhen;

    
    private ?string $ForumDisclaimerButtonText;

    
    private bool $ForumHasDisclaimer;

    
    private bool $RegistrationDenyPublicEmails;

    
    private bool $RegistrationAutoFillDefaultFields;

    
    private ?ArrayOfProgram $SubPrograms;

    
    private ?string $ClassroomTemplate;

    /**
     * @var null | mixed
     */
    private mixed $Logo;

    
    private ?string $LogoContentType;

    
    private bool $UseCustomLearnerUrl;

    
    private bool $UseSSL;

    
    private bool $AllowAdminsLMSLogin;

    
    private bool $AllowLearnersLMSLogin;

    
    private bool $UseMFA;

    
    private ?string $MFAMethod;

    
    private bool $UseMFAForLearner;

    
    private bool $UseMFAForAdmin;

    
    private int $MFAAdminInterval;

    
    private int $MFALearnerInterval;

    
    private bool $UseMFAOnSSO;

    
    private bool $UseMFAOnLMSLogin;

    
    private bool $HideUrlFromSearch;

    
    private bool $CanConsumeShared;

    
    private bool $CanShare;

    
    private bool $CanSiblingShareOnly;

    
    private bool $DoNotInheritRosterOptions;

    
    private bool $AllowChildRosterEnroll;

    
    private bool $AllowAddUsersFromRoster;

    
    private bool $AddUsersFromRosterToRoot;

    
    private bool $RosterCompletionAfterStartDate;

    
    private bool $LimitRosterUploadDate;

    
    private int $LimitRosterUploadUnit;

    
    private bool $IncludeStatusInRoster;

    
    private bool $IncludeSuccessInRoster;

    
    private bool $IncludeScoreInRoster;

    
    private bool $IncludeTimeSpentInRoster;

    
    private bool $AllColumnsRequiredInRoster;

    
    private bool $OverrideSessionCertificate;

    
    private ?ArrayOfString $AllowedLearningActivities;

    
    private ?ArrayOfString $ParentAllowedLearningActivities;

    
    private ?ArrayOfString $LearningActivityTypeOffFilters;

    
    private ?ArrayOfString $ParentLearningActivityTypeOffFilters;

    
    private ?ArrayOfString $LearningActivityStatusOffFilters;

    
    private ?ArrayOfString $ParentLearningActivityStatusOffFilters;

    
    private ?ArrayOfString $LearningActivityOriginOffFilters;

    
    private ?ArrayOfString $ParentLearningActivityOriginOffFilters;

    
    private bool $LearningActivityHideFilters;

    
    private bool $ParentLearningActivityHideFilters;

    
    private ?string $LearningActivitiesSortSettings;

    
    private bool $DenyChildLearningObjects;

    
    private bool $GenerateLearningActivitiesCode;

    
    private bool $AllowOverrideLearningActivitiesCode;

    
    private bool $WithdrawInactiveLearners;

    
    private bool $IsParent;

    
    private ?ArrayOfAnyType $SubscriptionRules;

    
    private ?RegistrationIntroXmlNode $RegistrationIntroXmlNode;

    
    private ?RegistrationDuplicateAccountInstrXmlNode $RegistrationDuplicateAccountInstrXmlNode;

    
    private ?RegistrationDisclaimerXmlNode $RegistrationDisclaimerXmlNode;

    
    private ?RegistrationConfirmationTextXmlNode $RegistrationConfirmationTextXmlNode;

    
    private ?RegistrationRequestConfirmationTextXmlNode $RegistrationRequestConfirmationTextXmlNode;

    
    private ?RegistrationConfirmationEmailXmlNode $RegistrationConfirmationEmailXmlNode;

    
    private ?RegistrationRequestEmailXmlNode $RegistrationRequestEmailXmlNode;

    
    private ?RegistrationRequestApprovalEmailXmlNode $RegistrationRequestApprovalEmailXmlNode;

    
    private ?RegistrationRequestDenialEmailXmlNode $RegistrationRequestDenialEmailXmlNode;

    
    private ?UserDomainDisplayLabelXmlNode $UserDomainDisplayLabelXmlNode;

    
    private bool $CapLicenseTotal;

    
    private bool $CapLicenseActive;

    
    private int $LicenseTotalUsers;

    
    private int $LicenseActiveUsers;

    
    private ?string $LicenseContact;

    
    private ?string $LicenseAniversary;

    
    private int $LicenseCycleDay;

    
    private int $MonthlyUniqueLogins;

    
    private ?string $OwnerID;

    
    private ?string $FromName;

    
    private ?string $FromEmail;

    
    private bool $UseParentEmail;

    
    private bool $DoNotInheritCreditSettings;

    
    private bool $AwardCreditsAcrossVariousCategories;

    
    private bool $DoNotInheritILTSettings;

    
    private bool $LimitCredits;

    
    private int $MaxCreditsPerHour;

    
    private int $MaxCreditsPerSession;

    
    private int $MaxCreditsPerDay;

    
    private float $FacilitatorCredits;

    
    private float $SpeakerCredits;

    
    private float $ReviewerCredits;

    
    private bool $ShowSessionLocation;

    
    private bool $ShowSessionFecilitators;

    
    private bool $ShowSessionSpeakers;

    
    private bool $ShowSessionCertificates;

    
    private bool $ShowSessionCredits;

    
    private bool $ShowSessionRequired;

    
    private bool $ShowSessionTimeDateTBD;

    
    private bool $ShowLocationTimezone;

    
    private bool $ShowAccommodationLink;

    
    private bool $DenyOutsideDomainsTranscriptVisibility;

    
    private bool $ParentDenyOutsideDomainsTranscriptVisibility;

    
    private bool $AllowDomainMembershipExtension;

    
    private bool $PendingUserMembership;

    
    private bool $ForceDisplayDomainTimezone;

    
    private bool $RemoveNotMatchingRulesUsers;

    
    private bool $LearningActivityDetailsPrivate;

    
    private ?ArrayOfAnyType $SupervisorRules;

    
    public function getID(): ?string
    {
        return $this->ID;
    }

    
    public function withID(?string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getName(): ?string
    {
        return $this->Name;
    }

    
    public function withName(?string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    
    public function getCode(): ?string
    {
        return $this->Code;
    }

    
    public function withCode(?string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    
    public function withDescription(?string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    
    public function getParentID(): ?string
    {
        return $this->ParentID;
    }

    
    public function withParentID(?string $ParentID): static
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    
    public function getParentPath(): ?string
    {
        return $this->ParentPath;
    }

    
    public function withParentPath(?string $ParentPath): static
    {
        $new = clone $this;
        $new->ParentPath = $ParentPath;

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

    
    public function getAutoEnrollSubprograms(): bool
    {
        return $this->AutoEnrollSubprograms;
    }

    
    public function withAutoEnrollSubprograms(bool $AutoEnrollSubprograms): static
    {
        $new = clone $this;
        $new->AutoEnrollSubprograms = $AutoEnrollSubprograms;

        return $new;
    }

    
    public function getAutoIncludeUsersType(): ?string
    {
        return $this->AutoIncludeUsersType;
    }

    
    public function withAutoIncludeUsersType(?string $AutoIncludeUsersType): static
    {
        $new = clone $this;
        $new->AutoIncludeUsersType = $AutoIncludeUsersType;

        return $new;
    }

    
    public function getAutoIncludeUsers(): bool
    {
        return $this->AutoIncludeUsers;
    }

    
    public function withAutoIncludeUsers(bool $AutoIncludeUsers): static
    {
        $new = clone $this;
        $new->AutoIncludeUsers = $AutoIncludeUsers;

        return $new;
    }

    
    public function getAutoIncludeUsersFields(): ?string
    {
        return $this->AutoIncludeUsersFields;
    }

    
    public function withAutoIncludeUsersFields(?string $AutoIncludeUsersFields): static
    {
        $new = clone $this;
        $new->AutoIncludeUsersFields = $AutoIncludeUsersFields;

        return $new;
    }

    
    public function getAutoIncludeCoursesType(): ?string
    {
        return $this->AutoIncludeCoursesType;
    }

    
    public function withAutoIncludeCoursesType(?string $AutoIncludeCoursesType): static
    {
        $new = clone $this;
        $new->AutoIncludeCoursesType = $AutoIncludeCoursesType;

        return $new;
    }

    
    public function getAutoIncludeCourses(): bool
    {
        return $this->AutoIncludeCourses;
    }

    
    public function withAutoIncludeCourses(bool $AutoIncludeCourses): static
    {
        $new = clone $this;
        $new->AutoIncludeCourses = $AutoIncludeCourses;

        return $new;
    }

    
    public function getAutoIncludeCoursesFields(): ?string
    {
        return $this->AutoIncludeCoursesFields;
    }

    
    public function withAutoIncludeCoursesFields(?string $AutoIncludeCoursesFields): static
    {
        $new = clone $this;
        $new->AutoIncludeCoursesFields = $AutoIncludeCoursesFields;

        return $new;
    }

    
    public function getIsSearchFilter(): bool
    {
        return $this->IsSearchFilter;
    }

    
    public function withIsSearchFilter(bool $IsSearchFilter): static
    {
        $new = clone $this;
        $new->IsSearchFilter = $IsSearchFilter;

        return $new;
    }

    
    public function getAllowSelfRegistration(): bool
    {
        return $this->AllowSelfRegistration;
    }

    
    public function withAllowSelfRegistration(bool $AllowSelfRegistration): static
    {
        $new = clone $this;
        $new->AllowSelfRegistration = $AllowSelfRegistration;

        return $new;
    }

    
    public function getRequiresRegistrationApproval(): bool
    {
        return $this->RequiresRegistrationApproval;
    }

    
    public function withRequiresRegistrationApproval(bool $RequiresRegistrationApproval): static
    {
        $new = clone $this;
        $new->RequiresRegistrationApproval = $RequiresRegistrationApproval;

        return $new;
    }

    
    public function getRequiresRegistrationCodeForExistingAccounts(): bool
    {
        return $this->RequiresRegistrationCodeForExistingAccounts;
    }

    
    public function withRequiresRegistrationCodeForExistingAccounts(bool $RequiresRegistrationCodeForExistingAccounts): static
    {
        $new = clone $this;
        $new->RequiresRegistrationCodeForExistingAccounts = $RequiresRegistrationCodeForExistingAccounts;

        return $new;
    }

    
    public function getRegistrationAutomaticApproval(): bool
    {
        return $this->RegistrationAutomaticApproval;
    }

    
    public function withRegistrationAutomaticApproval(bool $RegistrationAutomaticApproval): static
    {
        $new = clone $this;
        $new->RegistrationAutomaticApproval = $RegistrationAutomaticApproval;

        return $new;
    }

    
    public function getRegistrationRequiresCode(): bool
    {
        return $this->RegistrationRequiresCode;
    }

    
    public function withRegistrationRequiresCode(bool $RegistrationRequiresCode): static
    {
        $new = clone $this;
        $new->RegistrationRequiresCode = $RegistrationRequiresCode;

        return $new;
    }

    
    public function getRegistrationRequiresRequest(): bool
    {
        return $this->RegistrationRequiresRequest;
    }

    
    public function withRegistrationRequiresRequest(bool $RegistrationRequiresRequest): static
    {
        $new = clone $this;
        $new->RegistrationRequiresRequest = $RegistrationRequiresRequest;

        return $new;
    }

    
    public function getAltPrices(): ?ArrayOfAnyType
    {
        return $this->AltPrices;
    }

    
    public function withAltPrices(?ArrayOfAnyType $AltPrices): static
    {
        $new = clone $this;
        $new->AltPrices = $AltPrices;

        return $new;
    }

    
    public function getRegistrationAccessCodes(): ?string
    {
        return $this->RegistrationAccessCodes;
    }

    
    public function withRegistrationAccessCodes(?string $RegistrationAccessCodes): static
    {
        $new = clone $this;
        $new->RegistrationAccessCodes = $RegistrationAccessCodes;

        return $new;
    }

    
    public function getRegistrationAccessCode(): ?string
    {
        return $this->RegistrationAccessCode;
    }

    
    public function withRegistrationAccessCode(?string $RegistrationAccessCode): static
    {
        $new = clone $this;
        $new->RegistrationAccessCode = $RegistrationAccessCode;

        return $new;
    }

    
    public function getRegistrationInstruction(): ?string
    {
        return $this->RegistrationInstruction;
    }

    
    public function withRegistrationInstruction(?string $RegistrationInstruction): static
    {
        $new = clone $this;
        $new->RegistrationInstruction = $RegistrationInstruction;

        return $new;
    }

    
    public function getRegistrationAutomaticApprovalDomain(): bool
    {
        return $this->RegistrationAutomaticApproval_Domain;
    }

    
    public function withRegistrationAutomaticApprovalDomain(bool $RegistrationAutomaticApproval_Domain): static
    {
        $new = clone $this;
        $new->RegistrationAutomaticApproval_Domain = $RegistrationAutomaticApproval_Domain;

        return $new;
    }

    
    public function getAutomaticApproveRegistrationDomain(): ?string
    {
        return $this->AutomaticApproveRegistrationDomain;
    }

    
    public function withAutomaticApproveRegistrationDomain(?string $AutomaticApproveRegistrationDomain): static
    {
        $new = clone $this;
        $new->AutomaticApproveRegistrationDomain = $AutomaticApproveRegistrationDomain;

        return $new;
    }

    
    public function getRegistrationFields(): ?string
    {
        return $this->RegistrationFields;
    }

    
    public function withRegistrationFields(?string $RegistrationFields): static
    {
        $new = clone $this;
        $new->RegistrationFields = $RegistrationFields;

        return $new;
    }

    
    public function getRegistrationSubdomains(): ?string
    {
        return $this->RegistrationSubdomains;
    }

    
    public function withRegistrationSubdomains(?string $RegistrationSubdomains): static
    {
        $new = clone $this;
        $new->RegistrationSubdomains = $RegistrationSubdomains;

        return $new;
    }

    
    public function getAllowUserDomainSelection(): bool
    {
        return $this->AllowUserDomainSelection;
    }

    
    public function withAllowUserDomainSelection(bool $AllowUserDomainSelection): static
    {
        $new = clone $this;
        $new->AllowUserDomainSelection = $AllowUserDomainSelection;

        return $new;
    }

    
    public function getUserDomainSelectionRequired(): bool
    {
        return $this->UserDomainSelectionRequired;
    }

    
    public function withUserDomainSelectionRequired(bool $UserDomainSelectionRequired): static
    {
        $new = clone $this;
        $new->UserDomainSelectionRequired = $UserDomainSelectionRequired;

        return $new;
    }

    
    public function getUserDomainSelectAll(): bool
    {
        return $this->UserDomainSelectAll;
    }

    
    public function withUserDomainSelectAll(bool $UserDomainSelectAll): static
    {
        $new = clone $this;
        $new->UserDomainSelectAll = $UserDomainSelectAll;

        return $new;
    }

    
    public function getUserDomainDisplayLabel(): ?string
    {
        return $this->UserDomainDisplayLabel;
    }

    
    public function withUserDomainDisplayLabel(?string $UserDomainDisplayLabel): static
    {
        $new = clone $this;
        $new->UserDomainDisplayLabel = $UserDomainDisplayLabel;

        return $new;
    }

    
    public function getUserRegistrationDomains(): ?string
    {
        return $this->UserRegistrationDomains;
    }

    
    public function withUserRegistrationDomains(?string $UserRegistrationDomains): static
    {
        $new = clone $this;
        $new->UserRegistrationDomains = $UserRegistrationDomains;

        return $new;
    }

    
    public function getUserRegistrationDomainsList(): ?ArrayOfProgram
    {
        return $this->UserRegistrationDomainsList;
    }

    
    public function withUserRegistrationDomainsList(?ArrayOfProgram $UserRegistrationDomainsList): static
    {
        $new = clone $this;
        $new->UserRegistrationDomainsList = $UserRegistrationDomainsList;

        return $new;
    }

    
    public function getUserRegistrationDomainsDisplay(): ?string
    {
        return $this->UserRegistrationDomainsDisplay;
    }

    
    public function withUserRegistrationDomainsDisplay(?string $UserRegistrationDomainsDisplay): static
    {
        $new = clone $this;
        $new->UserRegistrationDomainsDisplay = $UserRegistrationDomainsDisplay;

        return $new;
    }

    
    public function getUserRegistrationDomainsMode(): ?string
    {
        return $this->UserRegistrationDomainsMode;
    }

    
    public function withUserRegistrationDomainsMode(?string $UserRegistrationDomainsMode): static
    {
        $new = clone $this;
        $new->UserRegistrationDomainsMode = $UserRegistrationDomainsMode;

        return $new;
    }

    
    public function getRegistrationConfirmationText(): ?string
    {
        return $this->RegistrationConfirmationText;
    }

    
    public function withRegistrationConfirmationText(?string $RegistrationConfirmationText): static
    {
        $new = clone $this;
        $new->RegistrationConfirmationText = $RegistrationConfirmationText;

        return $new;
    }

    
    public function getRegistrationIntroText(): ?string
    {
        return $this->RegistrationIntroText;
    }

    
    public function withRegistrationIntroText(?string $RegistrationIntroText): static
    {
        $new = clone $this;
        $new->RegistrationIntroText = $RegistrationIntroText;

        return $new;
    }

    
    public function getRegistrationToDomainIntroText(): ?string
    {
        return $this->RegistrationToDomainIntroText;
    }

    
    public function withRegistrationToDomainIntroText(?string $RegistrationToDomainIntroText): static
    {
        $new = clone $this;
        $new->RegistrationToDomainIntroText = $RegistrationToDomainIntroText;

        return $new;
    }

    
    public function getRegistrationRequestConfirmationText(): ?string
    {
        return $this->RegistrationRequestConfirmationText;
    }

    
    public function withRegistrationRequestConfirmationText(?string $RegistrationRequestConfirmationText): static
    {
        $new = clone $this;
        $new->RegistrationRequestConfirmationText = $RegistrationRequestConfirmationText;

        return $new;
    }

    
    public function getRegistrationDisclaimerText(): ?string
    {
        return $this->RegistrationDisclaimerText;
    }

    
    public function withRegistrationDisclaimerText(?string $RegistrationDisclaimerText): static
    {
        $new = clone $this;
        $new->RegistrationDisclaimerText = $RegistrationDisclaimerText;

        return $new;
    }

    
    public function getRequiresRegistrationDisclaimerAck(): bool
    {
        return $this->RequiresRegistrationDisclaimerAck;
    }

    
    public function withRequiresRegistrationDisclaimerAck(bool $RequiresRegistrationDisclaimerAck): static
    {
        $new = clone $this;
        $new->RequiresRegistrationDisclaimerAck = $RequiresRegistrationDisclaimerAck;

        return $new;
    }

    
    public function getRegistrationRequiresPurchase(): bool
    {
        return $this->RegistrationRequiresPurchase;
    }

    
    public function withRegistrationRequiresPurchase(bool $RegistrationRequiresPurchase): static
    {
        $new = clone $this;
        $new->RegistrationRequiresPurchase = $RegistrationRequiresPurchase;

        return $new;
    }

    
    public function getRegistrationRequiresVerification(): bool
    {
        return $this->RegistrationRequiresVerification;
    }

    
    public function withRegistrationRequiresVerification(bool $RegistrationRequiresVerification): static
    {
        $new = clone $this;
        $new->RegistrationRequiresVerification = $RegistrationRequiresVerification;

        return $new;
    }

    
    public function getRegistrationSubscription(): ?string
    {
        return $this->RegistrationSubscription;
    }

    
    public function withRegistrationSubscription(?string $RegistrationSubscription): static
    {
        $new = clone $this;
        $new->RegistrationSubscription = $RegistrationSubscription;

        return $new;
    }

    
    public function getRegistrationPasses(): ?string
    {
        return $this->RegistrationPasses;
    }

    
    public function withRegistrationPasses(?string $RegistrationPasses): static
    {
        $new = clone $this;
        $new->RegistrationPasses = $RegistrationPasses;

        return $new;
    }

    
    public function getCollectLoginMetadataOnce(): bool
    {
        return $this->CollectLoginMetadataOnce;
    }

    
    public function withCollectLoginMetadataOnce(bool $CollectLoginMetadataOnce): static
    {
        $new = clone $this;
        $new->CollectLoginMetadataOnce = $CollectLoginMetadataOnce;

        return $new;
    }

    
    public function getShowLoginNotRequiredFields(): bool
    {
        return $this->ShowLoginNotRequiredFields;
    }

    
    public function withShowLoginNotRequiredFields(bool $ShowLoginNotRequiredFields): static
    {
        $new = clone $this;
        $new->ShowLoginNotRequiredFields = $ShowLoginNotRequiredFields;

        return $new;
    }

    
    public function getSendRegistrationConfirmation(): bool
    {
        return $this->SendRegistrationConfirmation;
    }

    
    public function withSendRegistrationConfirmation(bool $SendRegistrationConfirmation): static
    {
        $new = clone $this;
        $new->SendRegistrationConfirmation = $SendRegistrationConfirmation;

        return $new;
    }

    
    public function getSendRegistrationRequest(): bool
    {
        return $this->SendRegistrationRequest;
    }

    
    public function withSendRegistrationRequest(bool $SendRegistrationRequest): static
    {
        $new = clone $this;
        $new->SendRegistrationRequest = $SendRegistrationRequest;

        return $new;
    }

    
    public function getPasswordExpirationDurationInSeconds(): int
    {
        return $this->PasswordExpirationDurationInSeconds;
    }

    
    public function withPasswordExpirationDurationInSeconds(int $PasswordExpirationDurationInSeconds): static
    {
        $new = clone $this;
        $new->PasswordExpirationDurationInSeconds = $PasswordExpirationDurationInSeconds;

        return $new;
    }

    
    public function getSendRegistrationApproval(): bool
    {
        return $this->SendRegistrationApproval;
    }

    
    public function withSendRegistrationApproval(bool $SendRegistrationApproval): static
    {
        $new = clone $this;
        $new->SendRegistrationApproval = $SendRegistrationApproval;

        return $new;
    }

    
    public function getSendRegistrationDenial(): bool
    {
        return $this->SendRegistrationDenial;
    }

    
    public function withSendRegistrationDenial(bool $SendRegistrationDenial): static
    {
        $new = clone $this;
        $new->SendRegistrationDenial = $SendRegistrationDenial;

        return $new;
    }

    
    public function getOverrideGlobalRegistrationConfirmation(): bool
    {
        return $this->OverrideGlobalRegistrationConfirmation;
    }

    
    public function withOverrideGlobalRegistrationConfirmation(bool $OverrideGlobalRegistrationConfirmation): static
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationConfirmation = $OverrideGlobalRegistrationConfirmation;

        return $new;
    }

    
    public function getOverrideGlobalRegistrationRequest(): bool
    {
        return $this->OverrideGlobalRegistrationRequest;
    }

    
    public function withOverrideGlobalRegistrationRequest(bool $OverrideGlobalRegistrationRequest): static
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationRequest = $OverrideGlobalRegistrationRequest;

        return $new;
    }

    
    public function getOverrideGlobalRegistrationApproval(): bool
    {
        return $this->OverrideGlobalRegistrationApproval;
    }

    
    public function withOverrideGlobalRegistrationApproval(bool $OverrideGlobalRegistrationApproval): static
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationApproval = $OverrideGlobalRegistrationApproval;

        return $new;
    }

    
    public function getOverrideGlobalRegistrationDenial(): bool
    {
        return $this->OverrideGlobalRegistrationDenial;
    }

    
    public function withOverrideGlobalRegistrationDenial(bool $OverrideGlobalRegistrationDenial): static
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationDenial = $OverrideGlobalRegistrationDenial;

        return $new;
    }

    
    public function getRegistrationConfirmationEmailText(): ?string
    {
        return $this->RegistrationConfirmationEmailText;
    }

    
    public function withRegistrationConfirmationEmailText(?string $RegistrationConfirmationEmailText): static
    {
        $new = clone $this;
        $new->RegistrationConfirmationEmailText = $RegistrationConfirmationEmailText;

        return $new;
    }

    
    public function getRegistrationRequestEmailText(): ?string
    {
        return $this->RegistrationRequestEmailText;
    }

    
    public function withRegistrationRequestEmailText(?string $RegistrationRequestEmailText): static
    {
        $new = clone $this;
        $new->RegistrationRequestEmailText = $RegistrationRequestEmailText;

        return $new;
    }

    
    public function getRegistrationApprovalEmailText(): ?string
    {
        return $this->RegistrationApprovalEmailText;
    }

    
    public function withRegistrationApprovalEmailText(?string $RegistrationApprovalEmailText): static
    {
        $new = clone $this;
        $new->RegistrationApprovalEmailText = $RegistrationApprovalEmailText;

        return $new;
    }

    
    public function getRegistrationDenialEmailText(): ?string
    {
        return $this->RegistrationDenialEmailText;
    }

    
    public function withRegistrationDenialEmailText(?string $RegistrationDenialEmailText): static
    {
        $new = clone $this;
        $new->RegistrationDenialEmailText = $RegistrationDenialEmailText;

        return $new;
    }

    
    public function getRegistrationCaptchaMode(): ?string
    {
        return $this->RegistrationCaptchaMode;
    }

    
    public function withRegistrationCaptchaMode(?string $RegistrationCaptchaMode): static
    {
        $new = clone $this;
        $new->RegistrationCaptchaMode = $RegistrationCaptchaMode;

        return $new;
    }

    
    public function getRegistrationCaptchaType(): ?string
    {
        return $this->RegistrationCaptchaType;
    }

    
    public function withRegistrationCaptchaType(?string $RegistrationCaptchaType): static
    {
        $new = clone $this;
        $new->RegistrationCaptchaType = $RegistrationCaptchaType;

        return $new;
    }

    
    public function getForumCaptchaType(): ?string
    {
        return $this->ForumCaptchaType;
    }

    
    public function withForumCaptchaType(?string $ForumCaptchaType): static
    {
        $new = clone $this;
        $new->ForumCaptchaType = $ForumCaptchaType;

        return $new;
    }

    
    public function getForumDisclaimerText(): ?string
    {
        return $this->ForumDisclaimerText;
    }

    
    public function withForumDisclaimerText(?string $ForumDisclaimerText): static
    {
        $new = clone $this;
        $new->ForumDisclaimerText = $ForumDisclaimerText;

        return $new;
    }

    
    public function getShowForumDisclaimerWhen(): ?string
    {
        return $this->ShowForumDisclaimerWhen;
    }

    
    public function withShowForumDisclaimerWhen(?string $ShowForumDisclaimerWhen): static
    {
        $new = clone $this;
        $new->ShowForumDisclaimerWhen = $ShowForumDisclaimerWhen;

        return $new;
    }

    
    public function getForumDisclaimerButtonText(): ?string
    {
        return $this->ForumDisclaimerButtonText;
    }

    
    public function withForumDisclaimerButtonText(?string $ForumDisclaimerButtonText): static
    {
        $new = clone $this;
        $new->ForumDisclaimerButtonText = $ForumDisclaimerButtonText;

        return $new;
    }

    
    public function getForumHasDisclaimer(): bool
    {
        return $this->ForumHasDisclaimer;
    }

    
    public function withForumHasDisclaimer(bool $ForumHasDisclaimer): static
    {
        $new = clone $this;
        $new->ForumHasDisclaimer = $ForumHasDisclaimer;

        return $new;
    }

    
    public function getRegistrationDenyPublicEmails(): bool
    {
        return $this->RegistrationDenyPublicEmails;
    }

    
    public function withRegistrationDenyPublicEmails(bool $RegistrationDenyPublicEmails): static
    {
        $new = clone $this;
        $new->RegistrationDenyPublicEmails = $RegistrationDenyPublicEmails;

        return $new;
    }

    
    public function getRegistrationAutoFillDefaultFields(): bool
    {
        return $this->RegistrationAutoFillDefaultFields;
    }

    
    public function withRegistrationAutoFillDefaultFields(bool $RegistrationAutoFillDefaultFields): static
    {
        $new = clone $this;
        $new->RegistrationAutoFillDefaultFields = $RegistrationAutoFillDefaultFields;

        return $new;
    }

    
    public function getSubPrograms(): ?ArrayOfProgram
    {
        return $this->SubPrograms;
    }

    
    public function withSubPrograms(?ArrayOfProgram $SubPrograms): static
    {
        $new = clone $this;
        $new->SubPrograms = $SubPrograms;

        return $new;
    }

    
    public function getClassroomTemplate(): ?string
    {
        return $this->ClassroomTemplate;
    }

    
    public function withClassroomTemplate(?string $ClassroomTemplate): static
    {
        $new = clone $this;
        $new->ClassroomTemplate = $ClassroomTemplate;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getLogo(): mixed
    {
        return $this->Logo;
    }

    /**
     * @param null | mixed $Logo
     */
    public function withLogo(mixed $Logo): static
    {
        $new = clone $this;
        $new->Logo = $Logo;

        return $new;
    }

    
    public function getLogoContentType(): ?string
    {
        return $this->LogoContentType;
    }

    
    public function withLogoContentType(?string $LogoContentType): static
    {
        $new = clone $this;
        $new->LogoContentType = $LogoContentType;

        return $new;
    }

    
    public function getUseCustomLearnerUrl(): bool
    {
        return $this->UseCustomLearnerUrl;
    }

    
    public function withUseCustomLearnerUrl(bool $UseCustomLearnerUrl): static
    {
        $new = clone $this;
        $new->UseCustomLearnerUrl = $UseCustomLearnerUrl;

        return $new;
    }

    
    public function getUseSSL(): bool
    {
        return $this->UseSSL;
    }

    
    public function withUseSSL(bool $UseSSL): static
    {
        $new = clone $this;
        $new->UseSSL = $UseSSL;

        return $new;
    }

    
    public function getAllowAdminsLMSLogin(): bool
    {
        return $this->AllowAdminsLMSLogin;
    }

    
    public function withAllowAdminsLMSLogin(bool $AllowAdminsLMSLogin): static
    {
        $new = clone $this;
        $new->AllowAdminsLMSLogin = $AllowAdminsLMSLogin;

        return $new;
    }

    
    public function getAllowLearnersLMSLogin(): bool
    {
        return $this->AllowLearnersLMSLogin;
    }

    
    public function withAllowLearnersLMSLogin(bool $AllowLearnersLMSLogin): static
    {
        $new = clone $this;
        $new->AllowLearnersLMSLogin = $AllowLearnersLMSLogin;

        return $new;
    }

    
    public function getUseMFA(): bool
    {
        return $this->UseMFA;
    }

    
    public function withUseMFA(bool $UseMFA): static
    {
        $new = clone $this;
        $new->UseMFA = $UseMFA;

        return $new;
    }

    
    public function getMFAMethod(): ?string
    {
        return $this->MFAMethod;
    }

    
    public function withMFAMethod(?string $MFAMethod): static
    {
        $new = clone $this;
        $new->MFAMethod = $MFAMethod;

        return $new;
    }

    
    public function getUseMFAForLearner(): bool
    {
        return $this->UseMFAForLearner;
    }

    
    public function withUseMFAForLearner(bool $UseMFAForLearner): static
    {
        $new = clone $this;
        $new->UseMFAForLearner = $UseMFAForLearner;

        return $new;
    }

    
    public function getUseMFAForAdmin(): bool
    {
        return $this->UseMFAForAdmin;
    }

    
    public function withUseMFAForAdmin(bool $UseMFAForAdmin): static
    {
        $new = clone $this;
        $new->UseMFAForAdmin = $UseMFAForAdmin;

        return $new;
    }

    
    public function getMFAAdminInterval(): int
    {
        return $this->MFAAdminInterval;
    }

    
    public function withMFAAdminInterval(int $MFAAdminInterval): static
    {
        $new = clone $this;
        $new->MFAAdminInterval = $MFAAdminInterval;

        return $new;
    }

    
    public function getMFALearnerInterval(): int
    {
        return $this->MFALearnerInterval;
    }

    
    public function withMFALearnerInterval(int $MFALearnerInterval): static
    {
        $new = clone $this;
        $new->MFALearnerInterval = $MFALearnerInterval;

        return $new;
    }

    
    public function getUseMFAOnSSO(): bool
    {
        return $this->UseMFAOnSSO;
    }

    
    public function withUseMFAOnSSO(bool $UseMFAOnSSO): static
    {
        $new = clone $this;
        $new->UseMFAOnSSO = $UseMFAOnSSO;

        return $new;
    }

    
    public function getUseMFAOnLMSLogin(): bool
    {
        return $this->UseMFAOnLMSLogin;
    }

    
    public function withUseMFAOnLMSLogin(bool $UseMFAOnLMSLogin): static
    {
        $new = clone $this;
        $new->UseMFAOnLMSLogin = $UseMFAOnLMSLogin;

        return $new;
    }

    
    public function getHideUrlFromSearch(): bool
    {
        return $this->HideUrlFromSearch;
    }

    
    public function withHideUrlFromSearch(bool $HideUrlFromSearch): static
    {
        $new = clone $this;
        $new->HideUrlFromSearch = $HideUrlFromSearch;

        return $new;
    }

    
    public function getCanConsumeShared(): bool
    {
        return $this->CanConsumeShared;
    }

    
    public function withCanConsumeShared(bool $CanConsumeShared): static
    {
        $new = clone $this;
        $new->CanConsumeShared = $CanConsumeShared;

        return $new;
    }

    
    public function getCanShare(): bool
    {
        return $this->CanShare;
    }

    
    public function withCanShare(bool $CanShare): static
    {
        $new = clone $this;
        $new->CanShare = $CanShare;

        return $new;
    }

    
    public function getCanSiblingShareOnly(): bool
    {
        return $this->CanSiblingShareOnly;
    }

    
    public function withCanSiblingShareOnly(bool $CanSiblingShareOnly): static
    {
        $new = clone $this;
        $new->CanSiblingShareOnly = $CanSiblingShareOnly;

        return $new;
    }

    
    public function getDoNotInheritRosterOptions(): bool
    {
        return $this->DoNotInheritRosterOptions;
    }

    
    public function withDoNotInheritRosterOptions(bool $DoNotInheritRosterOptions): static
    {
        $new = clone $this;
        $new->DoNotInheritRosterOptions = $DoNotInheritRosterOptions;

        return $new;
    }

    
    public function getAllowChildRosterEnroll(): bool
    {
        return $this->AllowChildRosterEnroll;
    }

    
    public function withAllowChildRosterEnroll(bool $AllowChildRosterEnroll): static
    {
        $new = clone $this;
        $new->AllowChildRosterEnroll = $AllowChildRosterEnroll;

        return $new;
    }

    
    public function getAllowAddUsersFromRoster(): bool
    {
        return $this->AllowAddUsersFromRoster;
    }

    
    public function withAllowAddUsersFromRoster(bool $AllowAddUsersFromRoster): static
    {
        $new = clone $this;
        $new->AllowAddUsersFromRoster = $AllowAddUsersFromRoster;

        return $new;
    }

    
    public function getAddUsersFromRosterToRoot(): bool
    {
        return $this->AddUsersFromRosterToRoot;
    }

    
    public function withAddUsersFromRosterToRoot(bool $AddUsersFromRosterToRoot): static
    {
        $new = clone $this;
        $new->AddUsersFromRosterToRoot = $AddUsersFromRosterToRoot;

        return $new;
    }

    
    public function getRosterCompletionAfterStartDate(): bool
    {
        return $this->RosterCompletionAfterStartDate;
    }

    
    public function withRosterCompletionAfterStartDate(bool $RosterCompletionAfterStartDate): static
    {
        $new = clone $this;
        $new->RosterCompletionAfterStartDate = $RosterCompletionAfterStartDate;

        return $new;
    }

    
    public function getLimitRosterUploadDate(): bool
    {
        return $this->LimitRosterUploadDate;
    }

    
    public function withLimitRosterUploadDate(bool $LimitRosterUploadDate): static
    {
        $new = clone $this;
        $new->LimitRosterUploadDate = $LimitRosterUploadDate;

        return $new;
    }

    
    public function getLimitRosterUploadUnit(): int
    {
        return $this->LimitRosterUploadUnit;
    }

    
    public function withLimitRosterUploadUnit(int $LimitRosterUploadUnit): static
    {
        $new = clone $this;
        $new->LimitRosterUploadUnit = $LimitRosterUploadUnit;

        return $new;
    }

    
    public function getIncludeStatusInRoster(): bool
    {
        return $this->IncludeStatusInRoster;
    }

    
    public function withIncludeStatusInRoster(bool $IncludeStatusInRoster): static
    {
        $new = clone $this;
        $new->IncludeStatusInRoster = $IncludeStatusInRoster;

        return $new;
    }

    
    public function getIncludeSuccessInRoster(): bool
    {
        return $this->IncludeSuccessInRoster;
    }

    
    public function withIncludeSuccessInRoster(bool $IncludeSuccessInRoster): static
    {
        $new = clone $this;
        $new->IncludeSuccessInRoster = $IncludeSuccessInRoster;

        return $new;
    }

    
    public function getIncludeScoreInRoster(): bool
    {
        return $this->IncludeScoreInRoster;
    }

    
    public function withIncludeScoreInRoster(bool $IncludeScoreInRoster): static
    {
        $new = clone $this;
        $new->IncludeScoreInRoster = $IncludeScoreInRoster;

        return $new;
    }

    
    public function getIncludeTimeSpentInRoster(): bool
    {
        return $this->IncludeTimeSpentInRoster;
    }

    
    public function withIncludeTimeSpentInRoster(bool $IncludeTimeSpentInRoster): static
    {
        $new = clone $this;
        $new->IncludeTimeSpentInRoster = $IncludeTimeSpentInRoster;

        return $new;
    }

    
    public function getAllColumnsRequiredInRoster(): bool
    {
        return $this->AllColumnsRequiredInRoster;
    }

    
    public function withAllColumnsRequiredInRoster(bool $AllColumnsRequiredInRoster): static
    {
        $new = clone $this;
        $new->AllColumnsRequiredInRoster = $AllColumnsRequiredInRoster;

        return $new;
    }

    
    public function getOverrideSessionCertificate(): bool
    {
        return $this->OverrideSessionCertificate;
    }

    
    public function withOverrideSessionCertificate(bool $OverrideSessionCertificate): static
    {
        $new = clone $this;
        $new->OverrideSessionCertificate = $OverrideSessionCertificate;

        return $new;
    }

    
    public function getAllowedLearningActivities(): ?ArrayOfString
    {
        return $this->AllowedLearningActivities;
    }

    
    public function withAllowedLearningActivities(?ArrayOfString $AllowedLearningActivities): static
    {
        $new = clone $this;
        $new->AllowedLearningActivities = $AllowedLearningActivities;

        return $new;
    }

    
    public function getParentAllowedLearningActivities(): ?ArrayOfString
    {
        return $this->ParentAllowedLearningActivities;
    }

    
    public function withParentAllowedLearningActivities(?ArrayOfString $ParentAllowedLearningActivities): static
    {
        $new = clone $this;
        $new->ParentAllowedLearningActivities = $ParentAllowedLearningActivities;

        return $new;
    }

    
    public function getLearningActivityTypeOffFilters(): ?ArrayOfString
    {
        return $this->LearningActivityTypeOffFilters;
    }

    
    public function withLearningActivityTypeOffFilters(?ArrayOfString $LearningActivityTypeOffFilters): static
    {
        $new = clone $this;
        $new->LearningActivityTypeOffFilters = $LearningActivityTypeOffFilters;

        return $new;
    }

    
    public function getParentLearningActivityTypeOffFilters(): ?ArrayOfString
    {
        return $this->ParentLearningActivityTypeOffFilters;
    }

    
    public function withParentLearningActivityTypeOffFilters(?ArrayOfString $ParentLearningActivityTypeOffFilters): static
    {
        $new = clone $this;
        $new->ParentLearningActivityTypeOffFilters = $ParentLearningActivityTypeOffFilters;

        return $new;
    }

    
    public function getLearningActivityStatusOffFilters(): ?ArrayOfString
    {
        return $this->LearningActivityStatusOffFilters;
    }

    
    public function withLearningActivityStatusOffFilters(?ArrayOfString $LearningActivityStatusOffFilters): static
    {
        $new = clone $this;
        $new->LearningActivityStatusOffFilters = $LearningActivityStatusOffFilters;

        return $new;
    }

    
    public function getParentLearningActivityStatusOffFilters(): ?ArrayOfString
    {
        return $this->ParentLearningActivityStatusOffFilters;
    }

    
    public function withParentLearningActivityStatusOffFilters(?ArrayOfString $ParentLearningActivityStatusOffFilters): static
    {
        $new = clone $this;
        $new->ParentLearningActivityStatusOffFilters = $ParentLearningActivityStatusOffFilters;

        return $new;
    }

    
    public function getLearningActivityOriginOffFilters(): ?ArrayOfString
    {
        return $this->LearningActivityOriginOffFilters;
    }

    
    public function withLearningActivityOriginOffFilters(?ArrayOfString $LearningActivityOriginOffFilters): static
    {
        $new = clone $this;
        $new->LearningActivityOriginOffFilters = $LearningActivityOriginOffFilters;

        return $new;
    }

    
    public function getParentLearningActivityOriginOffFilters(): ?ArrayOfString
    {
        return $this->ParentLearningActivityOriginOffFilters;
    }

    
    public function withParentLearningActivityOriginOffFilters(?ArrayOfString $ParentLearningActivityOriginOffFilters): static
    {
        $new = clone $this;
        $new->ParentLearningActivityOriginOffFilters = $ParentLearningActivityOriginOffFilters;

        return $new;
    }

    
    public function getLearningActivityHideFilters(): bool
    {
        return $this->LearningActivityHideFilters;
    }

    
    public function withLearningActivityHideFilters(bool $LearningActivityHideFilters): static
    {
        $new = clone $this;
        $new->LearningActivityHideFilters = $LearningActivityHideFilters;

        return $new;
    }

    
    public function getParentLearningActivityHideFilters(): bool
    {
        return $this->ParentLearningActivityHideFilters;
    }

    
    public function withParentLearningActivityHideFilters(bool $ParentLearningActivityHideFilters): static
    {
        $new = clone $this;
        $new->ParentLearningActivityHideFilters = $ParentLearningActivityHideFilters;

        return $new;
    }

    
    public function getLearningActivitiesSortSettings(): ?string
    {
        return $this->LearningActivitiesSortSettings;
    }

    
    public function withLearningActivitiesSortSettings(?string $LearningActivitiesSortSettings): static
    {
        $new = clone $this;
        $new->LearningActivitiesSortSettings = $LearningActivitiesSortSettings;

        return $new;
    }

    
    public function getDenyChildLearningObjects(): bool
    {
        return $this->DenyChildLearningObjects;
    }

    
    public function withDenyChildLearningObjects(bool $DenyChildLearningObjects): static
    {
        $new = clone $this;
        $new->DenyChildLearningObjects = $DenyChildLearningObjects;

        return $new;
    }

    
    public function getGenerateLearningActivitiesCode(): bool
    {
        return $this->GenerateLearningActivitiesCode;
    }

    
    public function withGenerateLearningActivitiesCode(bool $GenerateLearningActivitiesCode): static
    {
        $new = clone $this;
        $new->GenerateLearningActivitiesCode = $GenerateLearningActivitiesCode;

        return $new;
    }

    
    public function getAllowOverrideLearningActivitiesCode(): bool
    {
        return $this->AllowOverrideLearningActivitiesCode;
    }

    
    public function withAllowOverrideLearningActivitiesCode(bool $AllowOverrideLearningActivitiesCode): static
    {
        $new = clone $this;
        $new->AllowOverrideLearningActivitiesCode = $AllowOverrideLearningActivitiesCode;

        return $new;
    }

    
    public function getWithdrawInactiveLearners(): bool
    {
        return $this->WithdrawInactiveLearners;
    }

    
    public function withWithdrawInactiveLearners(bool $WithdrawInactiveLearners): static
    {
        $new = clone $this;
        $new->WithdrawInactiveLearners = $WithdrawInactiveLearners;

        return $new;
    }

    
    public function getIsParent(): bool
    {
        return $this->IsParent;
    }

    
    public function withIsParent(bool $IsParent): static
    {
        $new = clone $this;
        $new->IsParent = $IsParent;

        return $new;
    }

    
    public function getSubscriptionRules(): ?ArrayOfAnyType
    {
        return $this->SubscriptionRules;
    }

    
    public function withSubscriptionRules(?ArrayOfAnyType $SubscriptionRules): static
    {
        $new = clone $this;
        $new->SubscriptionRules = $SubscriptionRules;

        return $new;
    }

    
    public function getRegistrationIntroXmlNode(): ?RegistrationIntroXmlNode
    {
        return $this->RegistrationIntroXmlNode;
    }

    
    public function withRegistrationIntroXmlNode(?RegistrationIntroXmlNode $RegistrationIntroXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationIntroXmlNode = $RegistrationIntroXmlNode;

        return $new;
    }

    
    public function getRegistrationDuplicateAccountInstrXmlNode(): ?RegistrationDuplicateAccountInstrXmlNode
    {
        return $this->RegistrationDuplicateAccountInstrXmlNode;
    }

    
    public function withRegistrationDuplicateAccountInstrXmlNode(?RegistrationDuplicateAccountInstrXmlNode $RegistrationDuplicateAccountInstrXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationDuplicateAccountInstrXmlNode = $RegistrationDuplicateAccountInstrXmlNode;

        return $new;
    }

    
    public function getRegistrationDisclaimerXmlNode(): ?RegistrationDisclaimerXmlNode
    {
        return $this->RegistrationDisclaimerXmlNode;
    }

    
    public function withRegistrationDisclaimerXmlNode(?RegistrationDisclaimerXmlNode $RegistrationDisclaimerXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationDisclaimerXmlNode = $RegistrationDisclaimerXmlNode;

        return $new;
    }

    
    public function getRegistrationConfirmationTextXmlNode(): ?RegistrationConfirmationTextXmlNode
    {
        return $this->RegistrationConfirmationTextXmlNode;
    }

    
    public function withRegistrationConfirmationTextXmlNode(?RegistrationConfirmationTextXmlNode $RegistrationConfirmationTextXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationConfirmationTextXmlNode = $RegistrationConfirmationTextXmlNode;

        return $new;
    }

    
    public function getRegistrationRequestConfirmationTextXmlNode(): ?RegistrationRequestConfirmationTextXmlNode
    {
        return $this->RegistrationRequestConfirmationTextXmlNode;
    }

    
    public function withRegistrationRequestConfirmationTextXmlNode(?RegistrationRequestConfirmationTextXmlNode $RegistrationRequestConfirmationTextXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationRequestConfirmationTextXmlNode = $RegistrationRequestConfirmationTextXmlNode;

        return $new;
    }

    
    public function getRegistrationConfirmationEmailXmlNode(): ?RegistrationConfirmationEmailXmlNode
    {
        return $this->RegistrationConfirmationEmailXmlNode;
    }

    
    public function withRegistrationConfirmationEmailXmlNode(?RegistrationConfirmationEmailXmlNode $RegistrationConfirmationEmailXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationConfirmationEmailXmlNode = $RegistrationConfirmationEmailXmlNode;

        return $new;
    }

    
    public function getRegistrationRequestEmailXmlNode(): ?RegistrationRequestEmailXmlNode
    {
        return $this->RegistrationRequestEmailXmlNode;
    }

    
    public function withRegistrationRequestEmailXmlNode(?RegistrationRequestEmailXmlNode $RegistrationRequestEmailXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationRequestEmailXmlNode = $RegistrationRequestEmailXmlNode;

        return $new;
    }

    
    public function getRegistrationRequestApprovalEmailXmlNode(): ?RegistrationRequestApprovalEmailXmlNode
    {
        return $this->RegistrationRequestApprovalEmailXmlNode;
    }

    
    public function withRegistrationRequestApprovalEmailXmlNode(?RegistrationRequestApprovalEmailXmlNode $RegistrationRequestApprovalEmailXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationRequestApprovalEmailXmlNode = $RegistrationRequestApprovalEmailXmlNode;

        return $new;
    }

    
    public function getRegistrationRequestDenialEmailXmlNode(): ?RegistrationRequestDenialEmailXmlNode
    {
        return $this->RegistrationRequestDenialEmailXmlNode;
    }

    
    public function withRegistrationRequestDenialEmailXmlNode(?RegistrationRequestDenialEmailXmlNode $RegistrationRequestDenialEmailXmlNode): static
    {
        $new = clone $this;
        $new->RegistrationRequestDenialEmailXmlNode = $RegistrationRequestDenialEmailXmlNode;

        return $new;
    }

    
    public function getUserDomainDisplayLabelXmlNode(): ?UserDomainDisplayLabelXmlNode
    {
        return $this->UserDomainDisplayLabelXmlNode;
    }

    
    public function withUserDomainDisplayLabelXmlNode(?UserDomainDisplayLabelXmlNode $UserDomainDisplayLabelXmlNode): static
    {
        $new = clone $this;
        $new->UserDomainDisplayLabelXmlNode = $UserDomainDisplayLabelXmlNode;

        return $new;
    }

    
    public function getCapLicenseTotal(): bool
    {
        return $this->CapLicenseTotal;
    }

    
    public function withCapLicenseTotal(bool $CapLicenseTotal): static
    {
        $new = clone $this;
        $new->CapLicenseTotal = $CapLicenseTotal;

        return $new;
    }

    
    public function getCapLicenseActive(): bool
    {
        return $this->CapLicenseActive;
    }

    
    public function withCapLicenseActive(bool $CapLicenseActive): static
    {
        $new = clone $this;
        $new->CapLicenseActive = $CapLicenseActive;

        return $new;
    }

    
    public function getLicenseTotalUsers(): int
    {
        return $this->LicenseTotalUsers;
    }

    
    public function withLicenseTotalUsers(int $LicenseTotalUsers): static
    {
        $new = clone $this;
        $new->LicenseTotalUsers = $LicenseTotalUsers;

        return $new;
    }

    
    public function getLicenseActiveUsers(): int
    {
        return $this->LicenseActiveUsers;
    }

    
    public function withLicenseActiveUsers(int $LicenseActiveUsers): static
    {
        $new = clone $this;
        $new->LicenseActiveUsers = $LicenseActiveUsers;

        return $new;
    }

    
    public function getLicenseContact(): ?string
    {
        return $this->LicenseContact;
    }

    
    public function withLicenseContact(?string $LicenseContact): static
    {
        $new = clone $this;
        $new->LicenseContact = $LicenseContact;

        return $new;
    }

    
    public function getLicenseAniversary(): ?string
    {
        return $this->LicenseAniversary;
    }

    
    public function withLicenseAniversary(?string $LicenseAniversary): static
    {
        $new = clone $this;
        $new->LicenseAniversary = $LicenseAniversary;

        return $new;
    }

    
    public function getLicenseCycleDay(): int
    {
        return $this->LicenseCycleDay;
    }

    
    public function withLicenseCycleDay(int $LicenseCycleDay): static
    {
        $new = clone $this;
        $new->LicenseCycleDay = $LicenseCycleDay;

        return $new;
    }

    
    public function getMonthlyUniqueLogins(): int
    {
        return $this->MonthlyUniqueLogins;
    }

    
    public function withMonthlyUniqueLogins(int $MonthlyUniqueLogins): static
    {
        $new = clone $this;
        $new->MonthlyUniqueLogins = $MonthlyUniqueLogins;

        return $new;
    }

    
    public function getOwnerID(): ?string
    {
        return $this->OwnerID;
    }

    
    public function withOwnerID(?string $OwnerID): static
    {
        $new = clone $this;
        $new->OwnerID = $OwnerID;

        return $new;
    }

    
    public function getFromName(): ?string
    {
        return $this->FromName;
    }

    
    public function withFromName(?string $FromName): static
    {
        $new = clone $this;
        $new->FromName = $FromName;

        return $new;
    }

    
    public function getFromEmail(): ?string
    {
        return $this->FromEmail;
    }

    
    public function withFromEmail(?string $FromEmail): static
    {
        $new = clone $this;
        $new->FromEmail = $FromEmail;

        return $new;
    }

    
    public function getUseParentEmail(): bool
    {
        return $this->UseParentEmail;
    }

    
    public function withUseParentEmail(bool $UseParentEmail): static
    {
        $new = clone $this;
        $new->UseParentEmail = $UseParentEmail;

        return $new;
    }

    
    public function getDoNotInheritCreditSettings(): bool
    {
        return $this->DoNotInheritCreditSettings;
    }

    
    public function withDoNotInheritCreditSettings(bool $DoNotInheritCreditSettings): static
    {
        $new = clone $this;
        $new->DoNotInheritCreditSettings = $DoNotInheritCreditSettings;

        return $new;
    }

    
    public function getAwardCreditsAcrossVariousCategories(): bool
    {
        return $this->AwardCreditsAcrossVariousCategories;
    }

    
    public function withAwardCreditsAcrossVariousCategories(bool $AwardCreditsAcrossVariousCategories): static
    {
        $new = clone $this;
        $new->AwardCreditsAcrossVariousCategories = $AwardCreditsAcrossVariousCategories;

        return $new;
    }

    
    public function getDoNotInheritILTSettings(): bool
    {
        return $this->DoNotInheritILTSettings;
    }

    
    public function withDoNotInheritILTSettings(bool $DoNotInheritILTSettings): static
    {
        $new = clone $this;
        $new->DoNotInheritILTSettings = $DoNotInheritILTSettings;

        return $new;
    }

    
    public function getLimitCredits(): bool
    {
        return $this->LimitCredits;
    }

    
    public function withLimitCredits(bool $LimitCredits): static
    {
        $new = clone $this;
        $new->LimitCredits = $LimitCredits;

        return $new;
    }

    
    public function getMaxCreditsPerHour(): int
    {
        return $this->MaxCreditsPerHour;
    }

    
    public function withMaxCreditsPerHour(int $MaxCreditsPerHour): static
    {
        $new = clone $this;
        $new->MaxCreditsPerHour = $MaxCreditsPerHour;

        return $new;
    }

    
    public function getMaxCreditsPerSession(): int
    {
        return $this->MaxCreditsPerSession;
    }

    
    public function withMaxCreditsPerSession(int $MaxCreditsPerSession): static
    {
        $new = clone $this;
        $new->MaxCreditsPerSession = $MaxCreditsPerSession;

        return $new;
    }

    
    public function getMaxCreditsPerDay(): int
    {
        return $this->MaxCreditsPerDay;
    }

    
    public function withMaxCreditsPerDay(int $MaxCreditsPerDay): static
    {
        $new = clone $this;
        $new->MaxCreditsPerDay = $MaxCreditsPerDay;

        return $new;
    }

    
    public function getFacilitatorCredits(): float
    {
        return $this->FacilitatorCredits;
    }

    
    public function withFacilitatorCredits(float $FacilitatorCredits): static
    {
        $new = clone $this;
        $new->FacilitatorCredits = $FacilitatorCredits;

        return $new;
    }

    
    public function getSpeakerCredits(): float
    {
        return $this->SpeakerCredits;
    }

    
    public function withSpeakerCredits(float $SpeakerCredits): static
    {
        $new = clone $this;
        $new->SpeakerCredits = $SpeakerCredits;

        return $new;
    }

    
    public function getReviewerCredits(): float
    {
        return $this->ReviewerCredits;
    }

    
    public function withReviewerCredits(float $ReviewerCredits): static
    {
        $new = clone $this;
        $new->ReviewerCredits = $ReviewerCredits;

        return $new;
    }

    
    public function getShowSessionLocation(): bool
    {
        return $this->ShowSessionLocation;
    }

    
    public function withShowSessionLocation(bool $ShowSessionLocation): static
    {
        $new = clone $this;
        $new->ShowSessionLocation = $ShowSessionLocation;

        return $new;
    }

    
    public function getShowSessionFecilitators(): bool
    {
        return $this->ShowSessionFecilitators;
    }

    
    public function withShowSessionFecilitators(bool $ShowSessionFecilitators): static
    {
        $new = clone $this;
        $new->ShowSessionFecilitators = $ShowSessionFecilitators;

        return $new;
    }

    
    public function getShowSessionSpeakers(): bool
    {
        return $this->ShowSessionSpeakers;
    }

    
    public function withShowSessionSpeakers(bool $ShowSessionSpeakers): static
    {
        $new = clone $this;
        $new->ShowSessionSpeakers = $ShowSessionSpeakers;

        return $new;
    }

    
    public function getShowSessionCertificates(): bool
    {
        return $this->ShowSessionCertificates;
    }

    
    public function withShowSessionCertificates(bool $ShowSessionCertificates): static
    {
        $new = clone $this;
        $new->ShowSessionCertificates = $ShowSessionCertificates;

        return $new;
    }

    
    public function getShowSessionCredits(): bool
    {
        return $this->ShowSessionCredits;
    }

    
    public function withShowSessionCredits(bool $ShowSessionCredits): static
    {
        $new = clone $this;
        $new->ShowSessionCredits = $ShowSessionCredits;

        return $new;
    }

    
    public function getShowSessionRequired(): bool
    {
        return $this->ShowSessionRequired;
    }

    
    public function withShowSessionRequired(bool $ShowSessionRequired): static
    {
        $new = clone $this;
        $new->ShowSessionRequired = $ShowSessionRequired;

        return $new;
    }

    
    public function getShowSessionTimeDateTBD(): bool
    {
        return $this->ShowSessionTimeDateTBD;
    }

    
    public function withShowSessionTimeDateTBD(bool $ShowSessionTimeDateTBD): static
    {
        $new = clone $this;
        $new->ShowSessionTimeDateTBD = $ShowSessionTimeDateTBD;

        return $new;
    }

    
    public function getShowLocationTimezone(): bool
    {
        return $this->ShowLocationTimezone;
    }

    
    public function withShowLocationTimezone(bool $ShowLocationTimezone): static
    {
        $new = clone $this;
        $new->ShowLocationTimezone = $ShowLocationTimezone;

        return $new;
    }

    
    public function getShowAccommodationLink(): bool
    {
        return $this->ShowAccommodationLink;
    }

    
    public function withShowAccommodationLink(bool $ShowAccommodationLink): static
    {
        $new = clone $this;
        $new->ShowAccommodationLink = $ShowAccommodationLink;

        return $new;
    }

    
    public function getDenyOutsideDomainsTranscriptVisibility(): bool
    {
        return $this->DenyOutsideDomainsTranscriptVisibility;
    }

    
    public function withDenyOutsideDomainsTranscriptVisibility(bool $DenyOutsideDomainsTranscriptVisibility): static
    {
        $new = clone $this;
        $new->DenyOutsideDomainsTranscriptVisibility = $DenyOutsideDomainsTranscriptVisibility;

        return $new;
    }

    
    public function getParentDenyOutsideDomainsTranscriptVisibility(): bool
    {
        return $this->ParentDenyOutsideDomainsTranscriptVisibility;
    }

    
    public function withParentDenyOutsideDomainsTranscriptVisibility(bool $ParentDenyOutsideDomainsTranscriptVisibility): static
    {
        $new = clone $this;
        $new->ParentDenyOutsideDomainsTranscriptVisibility = $ParentDenyOutsideDomainsTranscriptVisibility;

        return $new;
    }

    
    public function getAllowDomainMembershipExtension(): bool
    {
        return $this->AllowDomainMembershipExtension;
    }

    
    public function withAllowDomainMembershipExtension(bool $AllowDomainMembershipExtension): static
    {
        $new = clone $this;
        $new->AllowDomainMembershipExtension = $AllowDomainMembershipExtension;

        return $new;
    }

    
    public function getPendingUserMembership(): bool
    {
        return $this->PendingUserMembership;
    }

    
    public function withPendingUserMembership(bool $PendingUserMembership): static
    {
        $new = clone $this;
        $new->PendingUserMembership = $PendingUserMembership;

        return $new;
    }

    
    public function getForceDisplayDomainTimezone(): bool
    {
        return $this->ForceDisplayDomainTimezone;
    }

    
    public function withForceDisplayDomainTimezone(bool $ForceDisplayDomainTimezone): static
    {
        $new = clone $this;
        $new->ForceDisplayDomainTimezone = $ForceDisplayDomainTimezone;

        return $new;
    }

    
    public function getRemoveNotMatchingRulesUsers(): bool
    {
        return $this->RemoveNotMatchingRulesUsers;
    }

    
    public function withRemoveNotMatchingRulesUsers(bool $RemoveNotMatchingRulesUsers): static
    {
        $new = clone $this;
        $new->RemoveNotMatchingRulesUsers = $RemoveNotMatchingRulesUsers;

        return $new;
    }

    
    public function getLearningActivityDetailsPrivate(): bool
    {
        return $this->LearningActivityDetailsPrivate;
    }

    
    public function withLearningActivityDetailsPrivate(bool $LearningActivityDetailsPrivate): static
    {
        $new = clone $this;
        $new->LearningActivityDetailsPrivate = $LearningActivityDetailsPrivate;

        return $new;
    }

    
    public function getSupervisorRules(): ?ArrayOfAnyType
    {
        return $this->SupervisorRules;
    }

    
    public function withSupervisorRules(?ArrayOfAnyType $SupervisorRules): static
    {
        $new = clone $this;
        $new->SupervisorRules = $SupervisorRules;

        return $new;
    }
}
