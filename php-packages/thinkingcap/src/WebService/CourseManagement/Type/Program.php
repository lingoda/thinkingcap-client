<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Program
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $ParentID;

    /**
     * @var string
     */
    private $ParentPath;

    /**
     * @var string
     */
    private $ProgramPath;

    /**
     * @var bool
     */
    private $AutoEnrollSubprograms;

    /**
     * @var string
     */
    private $AutoIncludeUsersType;

    /**
     * @var bool
     */
    private $AutoIncludeUsers;

    /**
     * @var string
     */
    private $AutoIncludeUsersFields;

    /**
     * @var string
     */
    private $AutoIncludeCoursesType;

    /**
     * @var bool
     */
    private $AutoIncludeCourses;

    /**
     * @var string
     */
    private $AutoIncludeCoursesFields;

    /**
     * @var bool
     */
    private $IsSearchFilter;

    /**
     * @var bool
     */
    private $AllowSelfRegistration;

    /**
     * @var bool
     */
    private $RequiresRegistrationApproval;

    /**
     * @var bool
     */
    private $RegistrationAutomaticApproval;

    /**
     * @var bool
     */
    private $RegistrationRequiresCode;

    /**
     * @var bool
     */
    private $RegistrationRequiresRequest;

    /**
     * @var string
     */
    private $RegistrationAccessCodes;

    /**
     * @var string
     */
    private $RegistrationAccessCode;

    /**
     * @var string
     */
    private $RegistrationInstruction;

    /**
     * @var bool
     */
    private $RegistrationAutomaticApproval_Domain;

    /**
     * @var string
     */
    private $AutomaticApproveRegistrationDomain;

    /**
     * @var string
     */
    private $RegistrationFields;

    /**
     * @var string
     */
    private $RegistrationSubdomains;

    /**
     * @var bool
     */
    private $AllowUserDomainSelection;

    /**
     * @var bool
     */
    private $UserDomainSelectionRequired;

    /**
     * @var bool
     */
    private $UserDomainSelectAll;

    /**
     * @var string
     */
    private $UserDomainDisplayLabel;

    /**
     * @var string
     */
    private $UserRegistrationDomains;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    private $UserRegistrationDomainsList;

    /**
     * @var string
     */
    private $UserRegistrationDomainsDisplay;

    /**
     * @var string
     */
    private $UserRegistrationDomainsMode;

    /**
     * @var string
     */
    private $RegistrationConfirmationText;

    /**
     * @var string
     */
    private $RegistrationIntroText;

    /**
     * @var string
     */
    private $RegistrationToDomainIntroText;

    /**
     * @var string
     */
    private $RegistrationRequestConfirmationText;

    /**
     * @var string
     */
    private $RegistrationDisclaimerText;

    /**
     * @var bool
     */
    private $RequiresRegistrationDisclaimerAck;

    /**
     * @var bool
     */
    private $RegistrationRequiresPurchase;

    /**
     * @var bool
     */
    private $RegistrationRequiresVerification;

    /**
     * @var string
     */
    private $RegistrationSubscription;

    /**
     * @var string
     */
    private $RegistrationPasses;

    /**
     * @var bool
     */
    private $CollectLoginMetadataOnce;

    /**
     * @var bool
     */
    private $ShowLoginNotRequiredFields;

    /**
     * @var bool
     */
    private $SendRegistrationConfirmation;

    /**
     * @var bool
     */
    private $SendRegistrationRequest;

    /**
     * @var int
     */
    private $PasswordExpirationDurationInSeconds;

    /**
     * @var bool
     */
    private $SendRegistrationApproval;

    /**
     * @var bool
     */
    private $SendRegistrationDenial;

    /**
     * @var bool
     */
    private $OverrideGlobalRegistrationConfirmation;

    /**
     * @var bool
     */
    private $OverrideGlobalRegistrationRequest;

    /**
     * @var bool
     */
    private $OverrideGlobalRegistrationApproval;

    /**
     * @var bool
     */
    private $OverrideGlobalRegistrationDenial;

    /**
     * @var string
     */
    private $RegistrationConfirmationEmailText;

    /**
     * @var string
     */
    private $RegistrationRequestEmailText;

    /**
     * @var string
     */
    private $RegistrationApprovalEmailText;

    /**
     * @var string
     */
    private $RegistrationDenialEmailText;

    /**
     * @var string
     */
    private $RegistrationCaptchaMode;

    /**
     * @var string
     */
    private $RegistrationCaptchaType;

    /**
     * @var string
     */
    private $ForumCaptchaType;

    /**
     * @var string
     */
    private $ForumDisclaimerText;

    /**
     * @var string
     */
    private $ShowForumDisclaimerWhen;

    /**
     * @var string
     */
    private $ForumDisclaimerButtonText;

    /**
     * @var bool
     */
    private $ForumHasDisclaimer;

    /**
     * @var bool
     */
    private $RegistrationDenyPublicEmails;

    /**
     * @var bool
     */
    private $RegistrationAutoFillDefaultFields;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    private $SubPrograms;

    /**
     * @var string
     */
    private $ClassroomTemplate;

    /**
     * @var string
     */
    private $Logo;

    /**
     * @var string
     */
    private $LogoContentType;

    /**
     * @var bool
     */
    private $UseCustomLearnerUrl;

    /**
     * @var bool
     */
    private $UseSSL;

    /**
     * @var bool
     */
    private $HideUrlFromSearch;

    /**
     * @var bool
     */
    private $CanConsumeShared;

    /**
     * @var bool
     */
    private $CanShare;

    /**
     * @var bool
     */
    private $CanSiblingShareOnly;

    /**
     * @var bool
     */
    private $DoNotInheritRosterOptions;

    /**
     * @var bool
     */
    private $AllowChildRosterEnroll;

    /**
     * @var bool
     */
    private $AllowAddUsersFromRoster;

    /**
     * @var bool
     */
    private $AddUsersFromRosterToRoot;

    /**
     * @var bool
     */
    private $RosterCompletionAfterStartDate;

    /**
     * @var bool
     */
    private $LimitRosterUploadDate;

    /**
     * @var int
     */
    private $LimitRosterUploadUnit;

    /**
     * @var bool
     */
    private $IncludeStatusInRoster;

    /**
     * @var bool
     */
    private $IncludeSuccessInRoster;

    /**
     * @var bool
     */
    private $IncludeScoreInRoster;

    /**
     * @var bool
     */
    private $IncludeTimeSpentInRoster;

    /**
     * @var bool
     */
    private $AllColumnsRequiredInRoster;

    /**
     * @var bool
     */
    private $OverrideSessionCertificate;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $AllowedLearningActivities;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $ParentAllowedLearningActivities;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $LearningActivityTypeOffFilters;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $ParentLearningActivityTypeOffFilters;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $LearningActivityStatusOffFilters;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $ParentLearningActivityStatusOffFilters;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $LearningActivityOriginOffFilters;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $ParentLearningActivityOriginOffFilters;

    /**
     * @var bool
     */
    private $LearningActivityHideFilters;

    /**
     * @var bool
     */
    private $ParentLearningActivityHideFilters;

    /**
     * @var string
     */
    private $LearningActivitiesSortSettings;

    /**
     * @var bool
     */
    private $DenyChildLearningObjects;

    /**
     * @var bool
     */
    private $GenerateLearningActivitiesCode;

    /**
     * @var bool
     */
    private $AllowOverrideLearningActivitiesCode;

    /**
     * @var bool
     */
    private $IsParent;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $SubscriptionRules;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationIntroXmlNode
     */
    private $RegistrationIntroXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDuplicateAccountInstrXmlNode
     */
    private $RegistrationDuplicateAccountInstrXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDisclaimerXmlNode
     */
    private $RegistrationDisclaimerXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationTextXmlNode
     */
    private $RegistrationConfirmationTextXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestConfirmationTextXmlNode
     */
    private $RegistrationRequestConfirmationTextXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationEmailXmlNode
     */
    private $RegistrationConfirmationEmailXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestEmailXmlNode
     */
    private $RegistrationRequestEmailXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestApprovalEmailXmlNode
     */
    private $RegistrationRequestApprovalEmailXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestDenialEmailXmlNode
     */
    private $RegistrationRequestDenialEmailXmlNode;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UserDomainDisplayLabelXmlNode
     */
    private $UserDomainDisplayLabelXmlNode;

    /**
     * @var bool
     */
    private $CapLicenseTotal;

    /**
     * @var bool
     */
    private $CapLicenseActive;

    /**
     * @var int
     */
    private $LicenseTotalUsers;

    /**
     * @var int
     */
    private $LicenseActiveUsers;

    /**
     * @var string
     */
    private $LicenseContact;

    /**
     * @var string
     */
    private $LicenseAniversary;

    /**
     * @var int
     */
    private $LicenseCycleDay;

    /**
     * @var int
     */
    private $MonthlyUniqueLogins;

    /**
     * @var string
     */
    private $OwnerID;

    /**
     * @var string
     */
    private $FromName;

    /**
     * @var string
     */
    private $FromEmail;

    /**
     * @var bool
     */
    private $UseParentEmail;

    /**
     * @var bool
     */
    private $DoNotInheritCreditSettings;

    /**
     * @var bool
     */
    private $AwardCreditsAcrossVariousCategories;

    /**
     * @var bool
     */
    private $DoNotInheritILTSettings;

    /**
     * @var bool
     */
    private $LimitCredits;

    /**
     * @var int
     */
    private $MaxCreditsPerHour;

    /**
     * @var int
     */
    private $MaxCreditsPerSession;

    /**
     * @var int
     */
    private $MaxCreditsPerDay;

    /**
     * @var float
     */
    private $FacilitatorCredits;

    /**
     * @var float
     */
    private $SpeakerCredits;

    /**
     * @var float
     */
    private $ReviewerCredits;

    /**
     * @var bool
     */
    private $ShowSessionLocation;

    /**
     * @var bool
     */
    private $ShowSessionFecilitators;

    /**
     * @var bool
     */
    private $ShowSessionSpeakers;

    /**
     * @var bool
     */
    private $ShowSessionCertificates;

    /**
     * @var bool
     */
    private $ShowSessionCredits;

    /**
     * @var bool
     */
    private $ShowSessionRequired;

    /**
     * @var bool
     */
    private $ShowSessionTimeDateTBD;

    /**
     * @var bool
     */
    private $ShowLocationTimezone;

    /**
     * @var bool
     */
    private $ShowAccommodationLink;

    /**
     * @var bool
     */
    private $DenyOutsideDomainsTranscriptVisibility;

    /**
     * @var bool
     */
    private $ParentDenyOutsideDomainsTranscriptVisibility;

    /**
     * @var bool
     */
    private $AllowDomainMembershipExtension;

    /**
     * @var bool
     */
    private $PendingUserMembership;

    /**
     * @var bool
     */
    private $ForceDisplayDomainTimezone;

    /**
     * @var bool
     */
    private $RemoveNotMatchingRulesUsers;

    /**
     * @var bool
     */
    private $LearningActivityDetailsPrivate;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $SupervisorRules;

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
     * @return Program
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return Program
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return Program
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     *
     * @return Program
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
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param string $ParentID
     *
     * @return Program
     */
    public function withParentID($ParentID)
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getParentPath()
    {
        return $this->ParentPath;
    }

    /**
     * @param string $ParentPath
     *
     * @return Program
     */
    public function withParentPath($ParentPath)
    {
        $new = clone $this;
        $new->ParentPath = $ParentPath;

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
     * @return Program
     */
    public function withProgramPath($ProgramPath)
    {
        $new = clone $this;
        $new->ProgramPath = $ProgramPath;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoEnrollSubprograms()
    {
        return $this->AutoEnrollSubprograms;
    }

    /**
     * @param bool $AutoEnrollSubprograms
     *
     * @return Program
     */
    public function withAutoEnrollSubprograms($AutoEnrollSubprograms)
    {
        $new = clone $this;
        $new->AutoEnrollSubprograms = $AutoEnrollSubprograms;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoIncludeUsersType()
    {
        return $this->AutoIncludeUsersType;
    }

    /**
     * @param string $AutoIncludeUsersType
     *
     * @return Program
     */
    public function withAutoIncludeUsersType($AutoIncludeUsersType)
    {
        $new = clone $this;
        $new->AutoIncludeUsersType = $AutoIncludeUsersType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoIncludeUsers()
    {
        return $this->AutoIncludeUsers;
    }

    /**
     * @param bool $AutoIncludeUsers
     *
     * @return Program
     */
    public function withAutoIncludeUsers($AutoIncludeUsers)
    {
        $new = clone $this;
        $new->AutoIncludeUsers = $AutoIncludeUsers;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoIncludeUsersFields()
    {
        return $this->AutoIncludeUsersFields;
    }

    /**
     * @param string $AutoIncludeUsersFields
     *
     * @return Program
     */
    public function withAutoIncludeUsersFields($AutoIncludeUsersFields)
    {
        $new = clone $this;
        $new->AutoIncludeUsersFields = $AutoIncludeUsersFields;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoIncludeCoursesType()
    {
        return $this->AutoIncludeCoursesType;
    }

    /**
     * @param string $AutoIncludeCoursesType
     *
     * @return Program
     */
    public function withAutoIncludeCoursesType($AutoIncludeCoursesType)
    {
        $new = clone $this;
        $new->AutoIncludeCoursesType = $AutoIncludeCoursesType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoIncludeCourses()
    {
        return $this->AutoIncludeCourses;
    }

    /**
     * @param bool $AutoIncludeCourses
     *
     * @return Program
     */
    public function withAutoIncludeCourses($AutoIncludeCourses)
    {
        $new = clone $this;
        $new->AutoIncludeCourses = $AutoIncludeCourses;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutoIncludeCoursesFields()
    {
        return $this->AutoIncludeCoursesFields;
    }

    /**
     * @param string $AutoIncludeCoursesFields
     *
     * @return Program
     */
    public function withAutoIncludeCoursesFields($AutoIncludeCoursesFields)
    {
        $new = clone $this;
        $new->AutoIncludeCoursesFields = $AutoIncludeCoursesFields;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsSearchFilter()
    {
        return $this->IsSearchFilter;
    }

    /**
     * @param bool $IsSearchFilter
     *
     * @return Program
     */
    public function withIsSearchFilter($IsSearchFilter)
    {
        $new = clone $this;
        $new->IsSearchFilter = $IsSearchFilter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowSelfRegistration()
    {
        return $this->AllowSelfRegistration;
    }

    /**
     * @param bool $AllowSelfRegistration
     *
     * @return Program
     */
    public function withAllowSelfRegistration($AllowSelfRegistration)
    {
        $new = clone $this;
        $new->AllowSelfRegistration = $AllowSelfRegistration;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresRegistrationApproval()
    {
        return $this->RequiresRegistrationApproval;
    }

    /**
     * @param bool $RequiresRegistrationApproval
     *
     * @return Program
     */
    public function withRequiresRegistrationApproval($RequiresRegistrationApproval)
    {
        $new = clone $this;
        $new->RequiresRegistrationApproval = $RequiresRegistrationApproval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationAutomaticApproval()
    {
        return $this->RegistrationAutomaticApproval;
    }

    /**
     * @param bool $RegistrationAutomaticApproval
     *
     * @return Program
     */
    public function withRegistrationAutomaticApproval($RegistrationAutomaticApproval)
    {
        $new = clone $this;
        $new->RegistrationAutomaticApproval = $RegistrationAutomaticApproval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationRequiresCode()
    {
        return $this->RegistrationRequiresCode;
    }

    /**
     * @param bool $RegistrationRequiresCode
     *
     * @return Program
     */
    public function withRegistrationRequiresCode($RegistrationRequiresCode)
    {
        $new = clone $this;
        $new->RegistrationRequiresCode = $RegistrationRequiresCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationRequiresRequest()
    {
        return $this->RegistrationRequiresRequest;
    }

    /**
     * @param bool $RegistrationRequiresRequest
     *
     * @return Program
     */
    public function withRegistrationRequiresRequest($RegistrationRequiresRequest)
    {
        $new = clone $this;
        $new->RegistrationRequiresRequest = $RegistrationRequiresRequest;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationAccessCodes()
    {
        return $this->RegistrationAccessCodes;
    }

    /**
     * @param string $RegistrationAccessCodes
     *
     * @return Program
     */
    public function withRegistrationAccessCodes($RegistrationAccessCodes)
    {
        $new = clone $this;
        $new->RegistrationAccessCodes = $RegistrationAccessCodes;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationAccessCode()
    {
        return $this->RegistrationAccessCode;
    }

    /**
     * @param string $RegistrationAccessCode
     *
     * @return Program
     */
    public function withRegistrationAccessCode($RegistrationAccessCode)
    {
        $new = clone $this;
        $new->RegistrationAccessCode = $RegistrationAccessCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationInstruction()
    {
        return $this->RegistrationInstruction;
    }

    /**
     * @param string $RegistrationInstruction
     *
     * @return Program
     */
    public function withRegistrationInstruction($RegistrationInstruction)
    {
        $new = clone $this;
        $new->RegistrationInstruction = $RegistrationInstruction;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationAutomaticApproval_Domain()
    {
        return $this->RegistrationAutomaticApproval_Domain;
    }

    /**
     * @param bool $RegistrationAutomaticApproval_Domain
     *
     * @return Program
     */
    public function withRegistrationAutomaticApproval_Domain($RegistrationAutomaticApproval_Domain)
    {
        $new = clone $this;
        $new->RegistrationAutomaticApproval_Domain = $RegistrationAutomaticApproval_Domain;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutomaticApproveRegistrationDomain()
    {
        return $this->AutomaticApproveRegistrationDomain;
    }

    /**
     * @param string $AutomaticApproveRegistrationDomain
     *
     * @return Program
     */
    public function withAutomaticApproveRegistrationDomain($AutomaticApproveRegistrationDomain)
    {
        $new = clone $this;
        $new->AutomaticApproveRegistrationDomain = $AutomaticApproveRegistrationDomain;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationFields()
    {
        return $this->RegistrationFields;
    }

    /**
     * @param string $RegistrationFields
     *
     * @return Program
     */
    public function withRegistrationFields($RegistrationFields)
    {
        $new = clone $this;
        $new->RegistrationFields = $RegistrationFields;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationSubdomains()
    {
        return $this->RegistrationSubdomains;
    }

    /**
     * @param string $RegistrationSubdomains
     *
     * @return Program
     */
    public function withRegistrationSubdomains($RegistrationSubdomains)
    {
        $new = clone $this;
        $new->RegistrationSubdomains = $RegistrationSubdomains;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowUserDomainSelection()
    {
        return $this->AllowUserDomainSelection;
    }

    /**
     * @param bool $AllowUserDomainSelection
     *
     * @return Program
     */
    public function withAllowUserDomainSelection($AllowUserDomainSelection)
    {
        $new = clone $this;
        $new->AllowUserDomainSelection = $AllowUserDomainSelection;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUserDomainSelectionRequired()
    {
        return $this->UserDomainSelectionRequired;
    }

    /**
     * @param bool $UserDomainSelectionRequired
     *
     * @return Program
     */
    public function withUserDomainSelectionRequired($UserDomainSelectionRequired)
    {
        $new = clone $this;
        $new->UserDomainSelectionRequired = $UserDomainSelectionRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUserDomainSelectAll()
    {
        return $this->UserDomainSelectAll;
    }

    /**
     * @param bool $UserDomainSelectAll
     *
     * @return Program
     */
    public function withUserDomainSelectAll($UserDomainSelectAll)
    {
        $new = clone $this;
        $new->UserDomainSelectAll = $UserDomainSelectAll;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserDomainDisplayLabel()
    {
        return $this->UserDomainDisplayLabel;
    }

    /**
     * @param string $UserDomainDisplayLabel
     *
     * @return Program
     */
    public function withUserDomainDisplayLabel($UserDomainDisplayLabel)
    {
        $new = clone $this;
        $new->UserDomainDisplayLabel = $UserDomainDisplayLabel;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserRegistrationDomains()
    {
        return $this->UserRegistrationDomains;
    }

    /**
     * @param string $UserRegistrationDomains
     *
     * @return Program
     */
    public function withUserRegistrationDomains($UserRegistrationDomains)
    {
        $new = clone $this;
        $new->UserRegistrationDomains = $UserRegistrationDomains;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    public function getUserRegistrationDomainsList()
    {
        return $this->UserRegistrationDomainsList;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram $UserRegistrationDomainsList
     *
     * @return Program
     */
    public function withUserRegistrationDomainsList($UserRegistrationDomainsList)
    {
        $new = clone $this;
        $new->UserRegistrationDomainsList = $UserRegistrationDomainsList;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserRegistrationDomainsDisplay()
    {
        return $this->UserRegistrationDomainsDisplay;
    }

    /**
     * @param string $UserRegistrationDomainsDisplay
     *
     * @return Program
     */
    public function withUserRegistrationDomainsDisplay($UserRegistrationDomainsDisplay)
    {
        $new = clone $this;
        $new->UserRegistrationDomainsDisplay = $UserRegistrationDomainsDisplay;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserRegistrationDomainsMode()
    {
        return $this->UserRegistrationDomainsMode;
    }

    /**
     * @param string $UserRegistrationDomainsMode
     *
     * @return Program
     */
    public function withUserRegistrationDomainsMode($UserRegistrationDomainsMode)
    {
        $new = clone $this;
        $new->UserRegistrationDomainsMode = $UserRegistrationDomainsMode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationConfirmationText()
    {
        return $this->RegistrationConfirmationText;
    }

    /**
     * @param string $RegistrationConfirmationText
     *
     * @return Program
     */
    public function withRegistrationConfirmationText($RegistrationConfirmationText)
    {
        $new = clone $this;
        $new->RegistrationConfirmationText = $RegistrationConfirmationText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationIntroText()
    {
        return $this->RegistrationIntroText;
    }

    /**
     * @param string $RegistrationIntroText
     *
     * @return Program
     */
    public function withRegistrationIntroText($RegistrationIntroText)
    {
        $new = clone $this;
        $new->RegistrationIntroText = $RegistrationIntroText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationToDomainIntroText()
    {
        return $this->RegistrationToDomainIntroText;
    }

    /**
     * @param string $RegistrationToDomainIntroText
     *
     * @return Program
     */
    public function withRegistrationToDomainIntroText($RegistrationToDomainIntroText)
    {
        $new = clone $this;
        $new->RegistrationToDomainIntroText = $RegistrationToDomainIntroText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationRequestConfirmationText()
    {
        return $this->RegistrationRequestConfirmationText;
    }

    /**
     * @param string $RegistrationRequestConfirmationText
     *
     * @return Program
     */
    public function withRegistrationRequestConfirmationText($RegistrationRequestConfirmationText)
    {
        $new = clone $this;
        $new->RegistrationRequestConfirmationText = $RegistrationRequestConfirmationText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationDisclaimerText()
    {
        return $this->RegistrationDisclaimerText;
    }

    /**
     * @param string $RegistrationDisclaimerText
     *
     * @return Program
     */
    public function withRegistrationDisclaimerText($RegistrationDisclaimerText)
    {
        $new = clone $this;
        $new->RegistrationDisclaimerText = $RegistrationDisclaimerText;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequiresRegistrationDisclaimerAck()
    {
        return $this->RequiresRegistrationDisclaimerAck;
    }

    /**
     * @param bool $RequiresRegistrationDisclaimerAck
     *
     * @return Program
     */
    public function withRequiresRegistrationDisclaimerAck($RequiresRegistrationDisclaimerAck)
    {
        $new = clone $this;
        $new->RequiresRegistrationDisclaimerAck = $RequiresRegistrationDisclaimerAck;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationRequiresPurchase()
    {
        return $this->RegistrationRequiresPurchase;
    }

    /**
     * @param bool $RegistrationRequiresPurchase
     *
     * @return Program
     */
    public function withRegistrationRequiresPurchase($RegistrationRequiresPurchase)
    {
        $new = clone $this;
        $new->RegistrationRequiresPurchase = $RegistrationRequiresPurchase;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationRequiresVerification()
    {
        return $this->RegistrationRequiresVerification;
    }

    /**
     * @param bool $RegistrationRequiresVerification
     *
     * @return Program
     */
    public function withRegistrationRequiresVerification($RegistrationRequiresVerification)
    {
        $new = clone $this;
        $new->RegistrationRequiresVerification = $RegistrationRequiresVerification;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationSubscription()
    {
        return $this->RegistrationSubscription;
    }

    /**
     * @param string $RegistrationSubscription
     *
     * @return Program
     */
    public function withRegistrationSubscription($RegistrationSubscription)
    {
        $new = clone $this;
        $new->RegistrationSubscription = $RegistrationSubscription;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationPasses()
    {
        return $this->RegistrationPasses;
    }

    /**
     * @param string $RegistrationPasses
     *
     * @return Program
     */
    public function withRegistrationPasses($RegistrationPasses)
    {
        $new = clone $this;
        $new->RegistrationPasses = $RegistrationPasses;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCollectLoginMetadataOnce()
    {
        return $this->CollectLoginMetadataOnce;
    }

    /**
     * @param bool $CollectLoginMetadataOnce
     *
     * @return Program
     */
    public function withCollectLoginMetadataOnce($CollectLoginMetadataOnce)
    {
        $new = clone $this;
        $new->CollectLoginMetadataOnce = $CollectLoginMetadataOnce;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowLoginNotRequiredFields()
    {
        return $this->ShowLoginNotRequiredFields;
    }

    /**
     * @param bool $ShowLoginNotRequiredFields
     *
     * @return Program
     */
    public function withShowLoginNotRequiredFields($ShowLoginNotRequiredFields)
    {
        $new = clone $this;
        $new->ShowLoginNotRequiredFields = $ShowLoginNotRequiredFields;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRegistrationConfirmation()
    {
        return $this->SendRegistrationConfirmation;
    }

    /**
     * @param bool $SendRegistrationConfirmation
     *
     * @return Program
     */
    public function withSendRegistrationConfirmation($SendRegistrationConfirmation)
    {
        $new = clone $this;
        $new->SendRegistrationConfirmation = $SendRegistrationConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRegistrationRequest()
    {
        return $this->SendRegistrationRequest;
    }

    /**
     * @param bool $SendRegistrationRequest
     *
     * @return Program
     */
    public function withSendRegistrationRequest($SendRegistrationRequest)
    {
        $new = clone $this;
        $new->SendRegistrationRequest = $SendRegistrationRequest;

        return $new;
    }

    /**
     * @return int
     */
    public function getPasswordExpirationDurationInSeconds()
    {
        return $this->PasswordExpirationDurationInSeconds;
    }

    /**
     * @param int $PasswordExpirationDurationInSeconds
     *
     * @return Program
     */
    public function withPasswordExpirationDurationInSeconds($PasswordExpirationDurationInSeconds)
    {
        $new = clone $this;
        $new->PasswordExpirationDurationInSeconds = $PasswordExpirationDurationInSeconds;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRegistrationApproval()
    {
        return $this->SendRegistrationApproval;
    }

    /**
     * @param bool $SendRegistrationApproval
     *
     * @return Program
     */
    public function withSendRegistrationApproval($SendRegistrationApproval)
    {
        $new = clone $this;
        $new->SendRegistrationApproval = $SendRegistrationApproval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendRegistrationDenial()
    {
        return $this->SendRegistrationDenial;
    }

    /**
     * @param bool $SendRegistrationDenial
     *
     * @return Program
     */
    public function withSendRegistrationDenial($SendRegistrationDenial)
    {
        $new = clone $this;
        $new->SendRegistrationDenial = $SendRegistrationDenial;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideGlobalRegistrationConfirmation()
    {
        return $this->OverrideGlobalRegistrationConfirmation;
    }

    /**
     * @param bool $OverrideGlobalRegistrationConfirmation
     *
     * @return Program
     */
    public function withOverrideGlobalRegistrationConfirmation($OverrideGlobalRegistrationConfirmation)
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationConfirmation = $OverrideGlobalRegistrationConfirmation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideGlobalRegistrationRequest()
    {
        return $this->OverrideGlobalRegistrationRequest;
    }

    /**
     * @param bool $OverrideGlobalRegistrationRequest
     *
     * @return Program
     */
    public function withOverrideGlobalRegistrationRequest($OverrideGlobalRegistrationRequest)
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationRequest = $OverrideGlobalRegistrationRequest;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideGlobalRegistrationApproval()
    {
        return $this->OverrideGlobalRegistrationApproval;
    }

    /**
     * @param bool $OverrideGlobalRegistrationApproval
     *
     * @return Program
     */
    public function withOverrideGlobalRegistrationApproval($OverrideGlobalRegistrationApproval)
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationApproval = $OverrideGlobalRegistrationApproval;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideGlobalRegistrationDenial()
    {
        return $this->OverrideGlobalRegistrationDenial;
    }

    /**
     * @param bool $OverrideGlobalRegistrationDenial
     *
     * @return Program
     */
    public function withOverrideGlobalRegistrationDenial($OverrideGlobalRegistrationDenial)
    {
        $new = clone $this;
        $new->OverrideGlobalRegistrationDenial = $OverrideGlobalRegistrationDenial;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationConfirmationEmailText()
    {
        return $this->RegistrationConfirmationEmailText;
    }

    /**
     * @param string $RegistrationConfirmationEmailText
     *
     * @return Program
     */
    public function withRegistrationConfirmationEmailText($RegistrationConfirmationEmailText)
    {
        $new = clone $this;
        $new->RegistrationConfirmationEmailText = $RegistrationConfirmationEmailText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationRequestEmailText()
    {
        return $this->RegistrationRequestEmailText;
    }

    /**
     * @param string $RegistrationRequestEmailText
     *
     * @return Program
     */
    public function withRegistrationRequestEmailText($RegistrationRequestEmailText)
    {
        $new = clone $this;
        $new->RegistrationRequestEmailText = $RegistrationRequestEmailText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationApprovalEmailText()
    {
        return $this->RegistrationApprovalEmailText;
    }

    /**
     * @param string $RegistrationApprovalEmailText
     *
     * @return Program
     */
    public function withRegistrationApprovalEmailText($RegistrationApprovalEmailText)
    {
        $new = clone $this;
        $new->RegistrationApprovalEmailText = $RegistrationApprovalEmailText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationDenialEmailText()
    {
        return $this->RegistrationDenialEmailText;
    }

    /**
     * @param string $RegistrationDenialEmailText
     *
     * @return Program
     */
    public function withRegistrationDenialEmailText($RegistrationDenialEmailText)
    {
        $new = clone $this;
        $new->RegistrationDenialEmailText = $RegistrationDenialEmailText;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationCaptchaMode()
    {
        return $this->RegistrationCaptchaMode;
    }

    /**
     * @param string $RegistrationCaptchaMode
     *
     * @return Program
     */
    public function withRegistrationCaptchaMode($RegistrationCaptchaMode)
    {
        $new = clone $this;
        $new->RegistrationCaptchaMode = $RegistrationCaptchaMode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistrationCaptchaType()
    {
        return $this->RegistrationCaptchaType;
    }

    /**
     * @param string $RegistrationCaptchaType
     *
     * @return Program
     */
    public function withRegistrationCaptchaType($RegistrationCaptchaType)
    {
        $new = clone $this;
        $new->RegistrationCaptchaType = $RegistrationCaptchaType;

        return $new;
    }

    /**
     * @return string
     */
    public function getForumCaptchaType()
    {
        return $this->ForumCaptchaType;
    }

    /**
     * @param string $ForumCaptchaType
     *
     * @return Program
     */
    public function withForumCaptchaType($ForumCaptchaType)
    {
        $new = clone $this;
        $new->ForumCaptchaType = $ForumCaptchaType;

        return $new;
    }

    /**
     * @return string
     */
    public function getForumDisclaimerText()
    {
        return $this->ForumDisclaimerText;
    }

    /**
     * @param string $ForumDisclaimerText
     *
     * @return Program
     */
    public function withForumDisclaimerText($ForumDisclaimerText)
    {
        $new = clone $this;
        $new->ForumDisclaimerText = $ForumDisclaimerText;

        return $new;
    }

    /**
     * @return string
     */
    public function getShowForumDisclaimerWhen()
    {
        return $this->ShowForumDisclaimerWhen;
    }

    /**
     * @param string $ShowForumDisclaimerWhen
     *
     * @return Program
     */
    public function withShowForumDisclaimerWhen($ShowForumDisclaimerWhen)
    {
        $new = clone $this;
        $new->ShowForumDisclaimerWhen = $ShowForumDisclaimerWhen;

        return $new;
    }

    /**
     * @return string
     */
    public function getForumDisclaimerButtonText()
    {
        return $this->ForumDisclaimerButtonText;
    }

    /**
     * @param string $ForumDisclaimerButtonText
     *
     * @return Program
     */
    public function withForumDisclaimerButtonText($ForumDisclaimerButtonText)
    {
        $new = clone $this;
        $new->ForumDisclaimerButtonText = $ForumDisclaimerButtonText;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForumHasDisclaimer()
    {
        return $this->ForumHasDisclaimer;
    }

    /**
     * @param bool $ForumHasDisclaimer
     *
     * @return Program
     */
    public function withForumHasDisclaimer($ForumHasDisclaimer)
    {
        $new = clone $this;
        $new->ForumHasDisclaimer = $ForumHasDisclaimer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationDenyPublicEmails()
    {
        return $this->RegistrationDenyPublicEmails;
    }

    /**
     * @param bool $RegistrationDenyPublicEmails
     *
     * @return Program
     */
    public function withRegistrationDenyPublicEmails($RegistrationDenyPublicEmails)
    {
        $new = clone $this;
        $new->RegistrationDenyPublicEmails = $RegistrationDenyPublicEmails;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegistrationAutoFillDefaultFields()
    {
        return $this->RegistrationAutoFillDefaultFields;
    }

    /**
     * @param bool $RegistrationAutoFillDefaultFields
     *
     * @return Program
     */
    public function withRegistrationAutoFillDefaultFields($RegistrationAutoFillDefaultFields)
    {
        $new = clone $this;
        $new->RegistrationAutoFillDefaultFields = $RegistrationAutoFillDefaultFields;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    public function getSubPrograms()
    {
        return $this->SubPrograms;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram $SubPrograms
     *
     * @return Program
     */
    public function withSubPrograms($SubPrograms)
    {
        $new = clone $this;
        $new->SubPrograms = $SubPrograms;

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
     * @return Program
     */
    public function withClassroomTemplate($ClassroomTemplate)
    {
        $new = clone $this;
        $new->ClassroomTemplate = $ClassroomTemplate;

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
     * @return Program
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
     * @return Program
     */
    public function withLogoContentType($LogoContentType)
    {
        $new = clone $this;
        $new->LogoContentType = $LogoContentType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseCustomLearnerUrl()
    {
        return $this->UseCustomLearnerUrl;
    }

    /**
     * @param bool $UseCustomLearnerUrl
     *
     * @return Program
     */
    public function withUseCustomLearnerUrl($UseCustomLearnerUrl)
    {
        $new = clone $this;
        $new->UseCustomLearnerUrl = $UseCustomLearnerUrl;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseSSL()
    {
        return $this->UseSSL;
    }

    /**
     * @param bool $UseSSL
     *
     * @return Program
     */
    public function withUseSSL($UseSSL)
    {
        $new = clone $this;
        $new->UseSSL = $UseSSL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideUrlFromSearch()
    {
        return $this->HideUrlFromSearch;
    }

    /**
     * @param bool $HideUrlFromSearch
     *
     * @return Program
     */
    public function withHideUrlFromSearch($HideUrlFromSearch)
    {
        $new = clone $this;
        $new->HideUrlFromSearch = $HideUrlFromSearch;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConsumeShared()
    {
        return $this->CanConsumeShared;
    }

    /**
     * @param bool $CanConsumeShared
     *
     * @return Program
     */
    public function withCanConsumeShared($CanConsumeShared)
    {
        $new = clone $this;
        $new->CanConsumeShared = $CanConsumeShared;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanShare()
    {
        return $this->CanShare;
    }

    /**
     * @param bool $CanShare
     *
     * @return Program
     */
    public function withCanShare($CanShare)
    {
        $new = clone $this;
        $new->CanShare = $CanShare;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanSiblingShareOnly()
    {
        return $this->CanSiblingShareOnly;
    }

    /**
     * @param bool $CanSiblingShareOnly
     *
     * @return Program
     */
    public function withCanSiblingShareOnly($CanSiblingShareOnly)
    {
        $new = clone $this;
        $new->CanSiblingShareOnly = $CanSiblingShareOnly;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotInheritRosterOptions()
    {
        return $this->DoNotInheritRosterOptions;
    }

    /**
     * @param bool $DoNotInheritRosterOptions
     *
     * @return Program
     */
    public function withDoNotInheritRosterOptions($DoNotInheritRosterOptions)
    {
        $new = clone $this;
        $new->DoNotInheritRosterOptions = $DoNotInheritRosterOptions;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowChildRosterEnroll()
    {
        return $this->AllowChildRosterEnroll;
    }

    /**
     * @param bool $AllowChildRosterEnroll
     *
     * @return Program
     */
    public function withAllowChildRosterEnroll($AllowChildRosterEnroll)
    {
        $new = clone $this;
        $new->AllowChildRosterEnroll = $AllowChildRosterEnroll;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowAddUsersFromRoster()
    {
        return $this->AllowAddUsersFromRoster;
    }

    /**
     * @param bool $AllowAddUsersFromRoster
     *
     * @return Program
     */
    public function withAllowAddUsersFromRoster($AllowAddUsersFromRoster)
    {
        $new = clone $this;
        $new->AllowAddUsersFromRoster = $AllowAddUsersFromRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddUsersFromRosterToRoot()
    {
        return $this->AddUsersFromRosterToRoot;
    }

    /**
     * @param bool $AddUsersFromRosterToRoot
     *
     * @return Program
     */
    public function withAddUsersFromRosterToRoot($AddUsersFromRosterToRoot)
    {
        $new = clone $this;
        $new->AddUsersFromRosterToRoot = $AddUsersFromRosterToRoot;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRosterCompletionAfterStartDate()
    {
        return $this->RosterCompletionAfterStartDate;
    }

    /**
     * @param bool $RosterCompletionAfterStartDate
     *
     * @return Program
     */
    public function withRosterCompletionAfterStartDate($RosterCompletionAfterStartDate)
    {
        $new = clone $this;
        $new->RosterCompletionAfterStartDate = $RosterCompletionAfterStartDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLimitRosterUploadDate()
    {
        return $this->LimitRosterUploadDate;
    }

    /**
     * @param bool $LimitRosterUploadDate
     *
     * @return Program
     */
    public function withLimitRosterUploadDate($LimitRosterUploadDate)
    {
        $new = clone $this;
        $new->LimitRosterUploadDate = $LimitRosterUploadDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getLimitRosterUploadUnit()
    {
        return $this->LimitRosterUploadUnit;
    }

    /**
     * @param int $LimitRosterUploadUnit
     *
     * @return Program
     */
    public function withLimitRosterUploadUnit($LimitRosterUploadUnit)
    {
        $new = clone $this;
        $new->LimitRosterUploadUnit = $LimitRosterUploadUnit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeStatusInRoster()
    {
        return $this->IncludeStatusInRoster;
    }

    /**
     * @param bool $IncludeStatusInRoster
     *
     * @return Program
     */
    public function withIncludeStatusInRoster($IncludeStatusInRoster)
    {
        $new = clone $this;
        $new->IncludeStatusInRoster = $IncludeStatusInRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeSuccessInRoster()
    {
        return $this->IncludeSuccessInRoster;
    }

    /**
     * @param bool $IncludeSuccessInRoster
     *
     * @return Program
     */
    public function withIncludeSuccessInRoster($IncludeSuccessInRoster)
    {
        $new = clone $this;
        $new->IncludeSuccessInRoster = $IncludeSuccessInRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeScoreInRoster()
    {
        return $this->IncludeScoreInRoster;
    }

    /**
     * @param bool $IncludeScoreInRoster
     *
     * @return Program
     */
    public function withIncludeScoreInRoster($IncludeScoreInRoster)
    {
        $new = clone $this;
        $new->IncludeScoreInRoster = $IncludeScoreInRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeTimeSpentInRoster()
    {
        return $this->IncludeTimeSpentInRoster;
    }

    /**
     * @param bool $IncludeTimeSpentInRoster
     *
     * @return Program
     */
    public function withIncludeTimeSpentInRoster($IncludeTimeSpentInRoster)
    {
        $new = clone $this;
        $new->IncludeTimeSpentInRoster = $IncludeTimeSpentInRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllColumnsRequiredInRoster()
    {
        return $this->AllColumnsRequiredInRoster;
    }

    /**
     * @param bool $AllColumnsRequiredInRoster
     *
     * @return Program
     */
    public function withAllColumnsRequiredInRoster($AllColumnsRequiredInRoster)
    {
        $new = clone $this;
        $new->AllColumnsRequiredInRoster = $AllColumnsRequiredInRoster;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideSessionCertificate()
    {
        return $this->OverrideSessionCertificate;
    }

    /**
     * @param bool $OverrideSessionCertificate
     *
     * @return Program
     */
    public function withOverrideSessionCertificate($OverrideSessionCertificate)
    {
        $new = clone $this;
        $new->OverrideSessionCertificate = $OverrideSessionCertificate;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getAllowedLearningActivities()
    {
        return $this->AllowedLearningActivities;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $AllowedLearningActivities
     *
     * @return Program
     */
    public function withAllowedLearningActivities($AllowedLearningActivities)
    {
        $new = clone $this;
        $new->AllowedLearningActivities = $AllowedLearningActivities;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getParentAllowedLearningActivities()
    {
        return $this->ParentAllowedLearningActivities;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $ParentAllowedLearningActivities
     *
     * @return Program
     */
    public function withParentAllowedLearningActivities($ParentAllowedLearningActivities)
    {
        $new = clone $this;
        $new->ParentAllowedLearningActivities = $ParentAllowedLearningActivities;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getLearningActivityTypeOffFilters()
    {
        return $this->LearningActivityTypeOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $LearningActivityTypeOffFilters
     *
     * @return Program
     */
    public function withLearningActivityTypeOffFilters($LearningActivityTypeOffFilters)
    {
        $new = clone $this;
        $new->LearningActivityTypeOffFilters = $LearningActivityTypeOffFilters;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getParentLearningActivityTypeOffFilters()
    {
        return $this->ParentLearningActivityTypeOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $ParentLearningActivityTypeOffFilters
     *
     * @return Program
     */
    public function withParentLearningActivityTypeOffFilters($ParentLearningActivityTypeOffFilters)
    {
        $new = clone $this;
        $new->ParentLearningActivityTypeOffFilters = $ParentLearningActivityTypeOffFilters;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getLearningActivityStatusOffFilters()
    {
        return $this->LearningActivityStatusOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $LearningActivityStatusOffFilters
     *
     * @return Program
     */
    public function withLearningActivityStatusOffFilters($LearningActivityStatusOffFilters)
    {
        $new = clone $this;
        $new->LearningActivityStatusOffFilters = $LearningActivityStatusOffFilters;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getParentLearningActivityStatusOffFilters()
    {
        return $this->ParentLearningActivityStatusOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $ParentLearningActivityStatusOffFilters
     *
     * @return Program
     */
    public function withParentLearningActivityStatusOffFilters($ParentLearningActivityStatusOffFilters)
    {
        $new = clone $this;
        $new->ParentLearningActivityStatusOffFilters = $ParentLearningActivityStatusOffFilters;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getLearningActivityOriginOffFilters()
    {
        return $this->LearningActivityOriginOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $LearningActivityOriginOffFilters
     *
     * @return Program
     */
    public function withLearningActivityOriginOffFilters($LearningActivityOriginOffFilters)
    {
        $new = clone $this;
        $new->LearningActivityOriginOffFilters = $LearningActivityOriginOffFilters;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getParentLearningActivityOriginOffFilters()
    {
        return $this->ParentLearningActivityOriginOffFilters;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $ParentLearningActivityOriginOffFilters
     *
     * @return Program
     */
    public function withParentLearningActivityOriginOffFilters($ParentLearningActivityOriginOffFilters)
    {
        $new = clone $this;
        $new->ParentLearningActivityOriginOffFilters = $ParentLearningActivityOriginOffFilters;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearningActivityHideFilters()
    {
        return $this->LearningActivityHideFilters;
    }

    /**
     * @param bool $LearningActivityHideFilters
     *
     * @return Program
     */
    public function withLearningActivityHideFilters($LearningActivityHideFilters)
    {
        $new = clone $this;
        $new->LearningActivityHideFilters = $LearningActivityHideFilters;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParentLearningActivityHideFilters()
    {
        return $this->ParentLearningActivityHideFilters;
    }

    /**
     * @param bool $ParentLearningActivityHideFilters
     *
     * @return Program
     */
    public function withParentLearningActivityHideFilters($ParentLearningActivityHideFilters)
    {
        $new = clone $this;
        $new->ParentLearningActivityHideFilters = $ParentLearningActivityHideFilters;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivitiesSortSettings()
    {
        return $this->LearningActivitiesSortSettings;
    }

    /**
     * @param string $LearningActivitiesSortSettings
     *
     * @return Program
     */
    public function withLearningActivitiesSortSettings($LearningActivitiesSortSettings)
    {
        $new = clone $this;
        $new->LearningActivitiesSortSettings = $LearningActivitiesSortSettings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDenyChildLearningObjects()
    {
        return $this->DenyChildLearningObjects;
    }

    /**
     * @param bool $DenyChildLearningObjects
     *
     * @return Program
     */
    public function withDenyChildLearningObjects($DenyChildLearningObjects)
    {
        $new = clone $this;
        $new->DenyChildLearningObjects = $DenyChildLearningObjects;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGenerateLearningActivitiesCode()
    {
        return $this->GenerateLearningActivitiesCode;
    }

    /**
     * @param bool $GenerateLearningActivitiesCode
     *
     * @return Program
     */
    public function withGenerateLearningActivitiesCode($GenerateLearningActivitiesCode)
    {
        $new = clone $this;
        $new->GenerateLearningActivitiesCode = $GenerateLearningActivitiesCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowOverrideLearningActivitiesCode()
    {
        return $this->AllowOverrideLearningActivitiesCode;
    }

    /**
     * @param bool $AllowOverrideLearningActivitiesCode
     *
     * @return Program
     */
    public function withAllowOverrideLearningActivitiesCode($AllowOverrideLearningActivitiesCode)
    {
        $new = clone $this;
        $new->AllowOverrideLearningActivitiesCode = $AllowOverrideLearningActivitiesCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsParent()
    {
        return $this->IsParent;
    }

    /**
     * @param bool $IsParent
     *
     * @return Program
     */
    public function withIsParent($IsParent)
    {
        $new = clone $this;
        $new->IsParent = $IsParent;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSubscriptionRules()
    {
        return $this->SubscriptionRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $SubscriptionRules
     *
     * @return Program
     */
    public function withSubscriptionRules($SubscriptionRules)
    {
        $new = clone $this;
        $new->SubscriptionRules = $SubscriptionRules;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationIntroXmlNode
     */
    public function getRegistrationIntroXmlNode()
    {
        return $this->RegistrationIntroXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationIntroXmlNode $RegistrationIntroXmlNode
     *
     * @return Program
     */
    public function withRegistrationIntroXmlNode($RegistrationIntroXmlNode)
    {
        $new = clone $this;
        $new->RegistrationIntroXmlNode = $RegistrationIntroXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDuplicateAccountInstrXmlNode
     */
    public function getRegistrationDuplicateAccountInstrXmlNode()
    {
        return $this->RegistrationDuplicateAccountInstrXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDuplicateAccountInstrXmlNode $RegistrationDuplicateAccountInstrXmlNode
     *
     * @return Program
     */
    public function withRegistrationDuplicateAccountInstrXmlNode($RegistrationDuplicateAccountInstrXmlNode)
    {
        $new = clone $this;
        $new->RegistrationDuplicateAccountInstrXmlNode = $RegistrationDuplicateAccountInstrXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDisclaimerXmlNode
     */
    public function getRegistrationDisclaimerXmlNode()
    {
        return $this->RegistrationDisclaimerXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationDisclaimerXmlNode $RegistrationDisclaimerXmlNode
     *
     * @return Program
     */
    public function withRegistrationDisclaimerXmlNode($RegistrationDisclaimerXmlNode)
    {
        $new = clone $this;
        $new->RegistrationDisclaimerXmlNode = $RegistrationDisclaimerXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationTextXmlNode
     */
    public function getRegistrationConfirmationTextXmlNode()
    {
        return $this->RegistrationConfirmationTextXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationTextXmlNode $RegistrationConfirmationTextXmlNode
     *
     * @return Program
     */
    public function withRegistrationConfirmationTextXmlNode($RegistrationConfirmationTextXmlNode)
    {
        $new = clone $this;
        $new->RegistrationConfirmationTextXmlNode = $RegistrationConfirmationTextXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestConfirmationTextXmlNode
     */
    public function getRegistrationRequestConfirmationTextXmlNode()
    {
        return $this->RegistrationRequestConfirmationTextXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestConfirmationTextXmlNode $RegistrationRequestConfirmationTextXmlNode
     *
     * @return Program
     */
    public function withRegistrationRequestConfirmationTextXmlNode($RegistrationRequestConfirmationTextXmlNode)
    {
        $new = clone $this;
        $new->RegistrationRequestConfirmationTextXmlNode = $RegistrationRequestConfirmationTextXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationEmailXmlNode
     */
    public function getRegistrationConfirmationEmailXmlNode()
    {
        return $this->RegistrationConfirmationEmailXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationConfirmationEmailXmlNode $RegistrationConfirmationEmailXmlNode
     *
     * @return Program
     */
    public function withRegistrationConfirmationEmailXmlNode($RegistrationConfirmationEmailXmlNode)
    {
        $new = clone $this;
        $new->RegistrationConfirmationEmailXmlNode = $RegistrationConfirmationEmailXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestEmailXmlNode
     */
    public function getRegistrationRequestEmailXmlNode()
    {
        return $this->RegistrationRequestEmailXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestEmailXmlNode $RegistrationRequestEmailXmlNode
     *
     * @return Program
     */
    public function withRegistrationRequestEmailXmlNode($RegistrationRequestEmailXmlNode)
    {
        $new = clone $this;
        $new->RegistrationRequestEmailXmlNode = $RegistrationRequestEmailXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestApprovalEmailXmlNode
     */
    public function getRegistrationRequestApprovalEmailXmlNode()
    {
        return $this->RegistrationRequestApprovalEmailXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestApprovalEmailXmlNode $RegistrationRequestApprovalEmailXmlNode
     *
     * @return Program
     */
    public function withRegistrationRequestApprovalEmailXmlNode($RegistrationRequestApprovalEmailXmlNode)
    {
        $new = clone $this;
        $new->RegistrationRequestApprovalEmailXmlNode = $RegistrationRequestApprovalEmailXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestDenialEmailXmlNode
     */
    public function getRegistrationRequestDenialEmailXmlNode()
    {
        return $this->RegistrationRequestDenialEmailXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\RegistrationRequestDenialEmailXmlNode $RegistrationRequestDenialEmailXmlNode
     *
     * @return Program
     */
    public function withRegistrationRequestDenialEmailXmlNode($RegistrationRequestDenialEmailXmlNode)
    {
        $new = clone $this;
        $new->RegistrationRequestDenialEmailXmlNode = $RegistrationRequestDenialEmailXmlNode;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UserDomainDisplayLabelXmlNode
     */
    public function getUserDomainDisplayLabelXmlNode()
    {
        return $this->UserDomainDisplayLabelXmlNode;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UserDomainDisplayLabelXmlNode $UserDomainDisplayLabelXmlNode
     *
     * @return Program
     */
    public function withUserDomainDisplayLabelXmlNode($UserDomainDisplayLabelXmlNode)
    {
        $new = clone $this;
        $new->UserDomainDisplayLabelXmlNode = $UserDomainDisplayLabelXmlNode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCapLicenseTotal()
    {
        return $this->CapLicenseTotal;
    }

    /**
     * @param bool $CapLicenseTotal
     *
     * @return Program
     */
    public function withCapLicenseTotal($CapLicenseTotal)
    {
        $new = clone $this;
        $new->CapLicenseTotal = $CapLicenseTotal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCapLicenseActive()
    {
        return $this->CapLicenseActive;
    }

    /**
     * @param bool $CapLicenseActive
     *
     * @return Program
     */
    public function withCapLicenseActive($CapLicenseActive)
    {
        $new = clone $this;
        $new->CapLicenseActive = $CapLicenseActive;

        return $new;
    }

    /**
     * @return int
     */
    public function getLicenseTotalUsers()
    {
        return $this->LicenseTotalUsers;
    }

    /**
     * @param int $LicenseTotalUsers
     *
     * @return Program
     */
    public function withLicenseTotalUsers($LicenseTotalUsers)
    {
        $new = clone $this;
        $new->LicenseTotalUsers = $LicenseTotalUsers;

        return $new;
    }

    /**
     * @return int
     */
    public function getLicenseActiveUsers()
    {
        return $this->LicenseActiveUsers;
    }

    /**
     * @param int $LicenseActiveUsers
     *
     * @return Program
     */
    public function withLicenseActiveUsers($LicenseActiveUsers)
    {
        $new = clone $this;
        $new->LicenseActiveUsers = $LicenseActiveUsers;

        return $new;
    }

    /**
     * @return string
     */
    public function getLicenseContact()
    {
        return $this->LicenseContact;
    }

    /**
     * @param string $LicenseContact
     *
     * @return Program
     */
    public function withLicenseContact($LicenseContact)
    {
        $new = clone $this;
        $new->LicenseContact = $LicenseContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getLicenseAniversary()
    {
        return $this->LicenseAniversary;
    }

    /**
     * @param string $LicenseAniversary
     *
     * @return Program
     */
    public function withLicenseAniversary($LicenseAniversary)
    {
        $new = clone $this;
        $new->LicenseAniversary = $LicenseAniversary;

        return $new;
    }

    /**
     * @return int
     */
    public function getLicenseCycleDay()
    {
        return $this->LicenseCycleDay;
    }

    /**
     * @param int $LicenseCycleDay
     *
     * @return Program
     */
    public function withLicenseCycleDay($LicenseCycleDay)
    {
        $new = clone $this;
        $new->LicenseCycleDay = $LicenseCycleDay;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonthlyUniqueLogins()
    {
        return $this->MonthlyUniqueLogins;
    }

    /**
     * @param int $MonthlyUniqueLogins
     *
     * @return Program
     */
    public function withMonthlyUniqueLogins($MonthlyUniqueLogins)
    {
        $new = clone $this;
        $new->MonthlyUniqueLogins = $MonthlyUniqueLogins;

        return $new;
    }

    /**
     * @return string
     */
    public function getOwnerID()
    {
        return $this->OwnerID;
    }

    /**
     * @param string $OwnerID
     *
     * @return Program
     */
    public function withOwnerID($OwnerID)
    {
        $new = clone $this;
        $new->OwnerID = $OwnerID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->FromName;
    }

    /**
     * @param string $FromName
     *
     * @return Program
     */
    public function withFromName($FromName)
    {
        $new = clone $this;
        $new->FromName = $FromName;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromEmail()
    {
        return $this->FromEmail;
    }

    /**
     * @param string $FromEmail
     *
     * @return Program
     */
    public function withFromEmail($FromEmail)
    {
        $new = clone $this;
        $new->FromEmail = $FromEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseParentEmail()
    {
        return $this->UseParentEmail;
    }

    /**
     * @param bool $UseParentEmail
     *
     * @return Program
     */
    public function withUseParentEmail($UseParentEmail)
    {
        $new = clone $this;
        $new->UseParentEmail = $UseParentEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotInheritCreditSettings()
    {
        return $this->DoNotInheritCreditSettings;
    }

    /**
     * @param bool $DoNotInheritCreditSettings
     *
     * @return Program
     */
    public function withDoNotInheritCreditSettings($DoNotInheritCreditSettings)
    {
        $new = clone $this;
        $new->DoNotInheritCreditSettings = $DoNotInheritCreditSettings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAwardCreditsAcrossVariousCategories()
    {
        return $this->AwardCreditsAcrossVariousCategories;
    }

    /**
     * @param bool $AwardCreditsAcrossVariousCategories
     *
     * @return Program
     */
    public function withAwardCreditsAcrossVariousCategories($AwardCreditsAcrossVariousCategories)
    {
        $new = clone $this;
        $new->AwardCreditsAcrossVariousCategories = $AwardCreditsAcrossVariousCategories;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotInheritILTSettings()
    {
        return $this->DoNotInheritILTSettings;
    }

    /**
     * @param bool $DoNotInheritILTSettings
     *
     * @return Program
     */
    public function withDoNotInheritILTSettings($DoNotInheritILTSettings)
    {
        $new = clone $this;
        $new->DoNotInheritILTSettings = $DoNotInheritILTSettings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLimitCredits()
    {
        return $this->LimitCredits;
    }

    /**
     * @param bool $LimitCredits
     *
     * @return Program
     */
    public function withLimitCredits($LimitCredits)
    {
        $new = clone $this;
        $new->LimitCredits = $LimitCredits;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCreditsPerHour()
    {
        return $this->MaxCreditsPerHour;
    }

    /**
     * @param int $MaxCreditsPerHour
     *
     * @return Program
     */
    public function withMaxCreditsPerHour($MaxCreditsPerHour)
    {
        $new = clone $this;
        $new->MaxCreditsPerHour = $MaxCreditsPerHour;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCreditsPerSession()
    {
        return $this->MaxCreditsPerSession;
    }

    /**
     * @param int $MaxCreditsPerSession
     *
     * @return Program
     */
    public function withMaxCreditsPerSession($MaxCreditsPerSession)
    {
        $new = clone $this;
        $new->MaxCreditsPerSession = $MaxCreditsPerSession;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCreditsPerDay()
    {
        return $this->MaxCreditsPerDay;
    }

    /**
     * @param int $MaxCreditsPerDay
     *
     * @return Program
     */
    public function withMaxCreditsPerDay($MaxCreditsPerDay)
    {
        $new = clone $this;
        $new->MaxCreditsPerDay = $MaxCreditsPerDay;

        return $new;
    }

    /**
     * @return float
     */
    public function getFacilitatorCredits()
    {
        return $this->FacilitatorCredits;
    }

    /**
     * @param float $FacilitatorCredits
     *
     * @return Program
     */
    public function withFacilitatorCredits($FacilitatorCredits)
    {
        $new = clone $this;
        $new->FacilitatorCredits = $FacilitatorCredits;

        return $new;
    }

    /**
     * @return float
     */
    public function getSpeakerCredits()
    {
        return $this->SpeakerCredits;
    }

    /**
     * @param float $SpeakerCredits
     *
     * @return Program
     */
    public function withSpeakerCredits($SpeakerCredits)
    {
        $new = clone $this;
        $new->SpeakerCredits = $SpeakerCredits;

        return $new;
    }

    /**
     * @return float
     */
    public function getReviewerCredits()
    {
        return $this->ReviewerCredits;
    }

    /**
     * @param float $ReviewerCredits
     *
     * @return Program
     */
    public function withReviewerCredits($ReviewerCredits)
    {
        $new = clone $this;
        $new->ReviewerCredits = $ReviewerCredits;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionLocation()
    {
        return $this->ShowSessionLocation;
    }

    /**
     * @param bool $ShowSessionLocation
     *
     * @return Program
     */
    public function withShowSessionLocation($ShowSessionLocation)
    {
        $new = clone $this;
        $new->ShowSessionLocation = $ShowSessionLocation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionFecilitators()
    {
        return $this->ShowSessionFecilitators;
    }

    /**
     * @param bool $ShowSessionFecilitators
     *
     * @return Program
     */
    public function withShowSessionFecilitators($ShowSessionFecilitators)
    {
        $new = clone $this;
        $new->ShowSessionFecilitators = $ShowSessionFecilitators;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionSpeakers()
    {
        return $this->ShowSessionSpeakers;
    }

    /**
     * @param bool $ShowSessionSpeakers
     *
     * @return Program
     */
    public function withShowSessionSpeakers($ShowSessionSpeakers)
    {
        $new = clone $this;
        $new->ShowSessionSpeakers = $ShowSessionSpeakers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionCertificates()
    {
        return $this->ShowSessionCertificates;
    }

    /**
     * @param bool $ShowSessionCertificates
     *
     * @return Program
     */
    public function withShowSessionCertificates($ShowSessionCertificates)
    {
        $new = clone $this;
        $new->ShowSessionCertificates = $ShowSessionCertificates;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionCredits()
    {
        return $this->ShowSessionCredits;
    }

    /**
     * @param bool $ShowSessionCredits
     *
     * @return Program
     */
    public function withShowSessionCredits($ShowSessionCredits)
    {
        $new = clone $this;
        $new->ShowSessionCredits = $ShowSessionCredits;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionRequired()
    {
        return $this->ShowSessionRequired;
    }

    /**
     * @param bool $ShowSessionRequired
     *
     * @return Program
     */
    public function withShowSessionRequired($ShowSessionRequired)
    {
        $new = clone $this;
        $new->ShowSessionRequired = $ShowSessionRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowSessionTimeDateTBD()
    {
        return $this->ShowSessionTimeDateTBD;
    }

    /**
     * @param bool $ShowSessionTimeDateTBD
     *
     * @return Program
     */
    public function withShowSessionTimeDateTBD($ShowSessionTimeDateTBD)
    {
        $new = clone $this;
        $new->ShowSessionTimeDateTBD = $ShowSessionTimeDateTBD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowLocationTimezone()
    {
        return $this->ShowLocationTimezone;
    }

    /**
     * @param bool $ShowLocationTimezone
     *
     * @return Program
     */
    public function withShowLocationTimezone($ShowLocationTimezone)
    {
        $new = clone $this;
        $new->ShowLocationTimezone = $ShowLocationTimezone;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowAccommodationLink()
    {
        return $this->ShowAccommodationLink;
    }

    /**
     * @param bool $ShowAccommodationLink
     *
     * @return Program
     */
    public function withShowAccommodationLink($ShowAccommodationLink)
    {
        $new = clone $this;
        $new->ShowAccommodationLink = $ShowAccommodationLink;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDenyOutsideDomainsTranscriptVisibility()
    {
        return $this->DenyOutsideDomainsTranscriptVisibility;
    }

    /**
     * @param bool $DenyOutsideDomainsTranscriptVisibility
     *
     * @return Program
     */
    public function withDenyOutsideDomainsTranscriptVisibility($DenyOutsideDomainsTranscriptVisibility)
    {
        $new = clone $this;
        $new->DenyOutsideDomainsTranscriptVisibility = $DenyOutsideDomainsTranscriptVisibility;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParentDenyOutsideDomainsTranscriptVisibility()
    {
        return $this->ParentDenyOutsideDomainsTranscriptVisibility;
    }

    /**
     * @param bool $ParentDenyOutsideDomainsTranscriptVisibility
     *
     * @return Program
     */
    public function withParentDenyOutsideDomainsTranscriptVisibility($ParentDenyOutsideDomainsTranscriptVisibility)
    {
        $new = clone $this;
        $new->ParentDenyOutsideDomainsTranscriptVisibility = $ParentDenyOutsideDomainsTranscriptVisibility;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowDomainMembershipExtension()
    {
        return $this->AllowDomainMembershipExtension;
    }

    /**
     * @param bool $AllowDomainMembershipExtension
     *
     * @return Program
     */
    public function withAllowDomainMembershipExtension($AllowDomainMembershipExtension)
    {
        $new = clone $this;
        $new->AllowDomainMembershipExtension = $AllowDomainMembershipExtension;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPendingUserMembership()
    {
        return $this->PendingUserMembership;
    }

    /**
     * @param bool $PendingUserMembership
     *
     * @return Program
     */
    public function withPendingUserMembership($PendingUserMembership)
    {
        $new = clone $this;
        $new->PendingUserMembership = $PendingUserMembership;

        return $new;
    }

    /**
     * @return bool
     */
    public function getForceDisplayDomainTimezone()
    {
        return $this->ForceDisplayDomainTimezone;
    }

    /**
     * @param bool $ForceDisplayDomainTimezone
     *
     * @return Program
     */
    public function withForceDisplayDomainTimezone($ForceDisplayDomainTimezone)
    {
        $new = clone $this;
        $new->ForceDisplayDomainTimezone = $ForceDisplayDomainTimezone;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRemoveNotMatchingRulesUsers()
    {
        return $this->RemoveNotMatchingRulesUsers;
    }

    /**
     * @param bool $RemoveNotMatchingRulesUsers
     *
     * @return Program
     */
    public function withRemoveNotMatchingRulesUsers($RemoveNotMatchingRulesUsers)
    {
        $new = clone $this;
        $new->RemoveNotMatchingRulesUsers = $RemoveNotMatchingRulesUsers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearningActivityDetailsPrivate()
    {
        return $this->LearningActivityDetailsPrivate;
    }

    /**
     * @param bool $LearningActivityDetailsPrivate
     *
     * @return Program
     */
    public function withLearningActivityDetailsPrivate($LearningActivityDetailsPrivate)
    {
        $new = clone $this;
        $new->LearningActivityDetailsPrivate = $LearningActivityDetailsPrivate;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getSupervisorRules()
    {
        return $this->SupervisorRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $SupervisorRules
     *
     * @return Program
     */
    public function withSupervisorRules($SupervisorRules)
    {
        $new = clone $this;
        $new->SupervisorRules = $SupervisorRules;

        return $new;
    }
}
