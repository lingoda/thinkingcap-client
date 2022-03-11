<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class LearningActivity
{
    /**
     * @var string
     */
    private $Type;

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
    private $Title;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Instructions;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var bool
     */
    private $IsOnline;

    /**
     * @var bool
     */
    private $IsAssessment;

    /**
     * @var string
     */
    private $OwnerDomainID;

    /**
     * @var string
     */
    private $OwnerDomainName;

    /**
     * @var string
     */
    private $EquivalencyID;

    /**
     * @var string
     */
    private $EquivalencyName;

    /**
     * @var bool
     */
    private $IsActive;

    /**
     * @var string
     */
    private $Tags;

    /**
     * @var string
     */
    private $LogoUrl;

    /**
     * @var bool
     */
    private $HasForum;

    /**
     * @var bool
     */
    private $HasFeedback;

    /**
     * @var bool
     */
    private $HasAssignments;

    /**
     * @var bool
     */
    private $HasSample;

    /**
     * @var float
     */
    private $LearningTime;

    /**
     * @var bool
     */
    private $GrantCertificate;

    /**
     * @var float
     */
    private $CreditValue;

    /**
     * @var bool
     */
    private $GrantBadge;

    /**
     * @var \DateTimeInterface
     */
    private $StartDate;

    /**
     * @var \DateTimeInterface
     */
    private $FirstEnrollmentDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastEnrollmentDate;

    /**
     * @var string
     */
    private $DueDate;

    /**
     * @var bool
     */
    private $AccreditationExpires;

    /**
     * @var int
     */
    private $AllowedReenrollmentsNumber;

    /**
     * @var bool
     */
    private $AccreditationExpiresBasedOnEnrollmentDate;

    /**
     * @var int
     */
    private $AccreditationExpiresUnits;

    /**
     * @var string
     */
    private $AccreditationExpiresInterval;

    /**
     * @var int
     */
    private $ReenrollmentAllowedBeforeExpiringUnits;

    /**
     * @var string
     */
    private $ReenrollmentAllowedBeforeExpiringInterval;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCustomField
     */
    private $CustomFields;

    /**
     * @var string
     */
    private $DetailsLink;

    /**
     * @var \DateTimeInterface
     */
    private $LastModifiedTimestamp;

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
     * @return LearningActivity
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

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
     * @return LearningActivity
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
     * @return LearningActivity
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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return LearningActivity
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
     * @return LearningActivity
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
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     *
     * @return LearningActivity
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

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
     * @return LearningActivity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

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
     * @return LearningActivity
     */
    public function withIsOnline($IsOnline)
    {
        $new = clone $this;
        $new->IsOnline = $IsOnline;

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
     * @return LearningActivity
     */
    public function withIsAssessment($IsAssessment)
    {
        $new = clone $this;
        $new->IsAssessment = $IsAssessment;

        return $new;
    }

    /**
     * @return string
     */
    public function getOwnerDomainID()
    {
        return $this->OwnerDomainID;
    }

    /**
     * @param string $OwnerDomainID
     *
     * @return LearningActivity
     */
    public function withOwnerDomainID($OwnerDomainID)
    {
        $new = clone $this;
        $new->OwnerDomainID = $OwnerDomainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getOwnerDomainName()
    {
        return $this->OwnerDomainName;
    }

    /**
     * @param string $OwnerDomainName
     *
     * @return LearningActivity
     */
    public function withOwnerDomainName($OwnerDomainName)
    {
        $new = clone $this;
        $new->OwnerDomainName = $OwnerDomainName;

        return $new;
    }

    /**
     * @return string
     */
    public function getEquivalencyID()
    {
        return $this->EquivalencyID;
    }

    /**
     * @param string $EquivalencyID
     *
     * @return LearningActivity
     */
    public function withEquivalencyID($EquivalencyID)
    {
        $new = clone $this;
        $new->EquivalencyID = $EquivalencyID;

        return $new;
    }

    /**
     * @return string
     */
    public function getEquivalencyName()
    {
        return $this->EquivalencyName;
    }

    /**
     * @param string $EquivalencyName
     *
     * @return LearningActivity
     */
    public function withEquivalencyName($EquivalencyName)
    {
        $new = clone $this;
        $new->EquivalencyName = $EquivalencyName;

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
     * @return LearningActivity
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
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * @param string $Tags
     *
     * @return LearningActivity
     */
    public function withTags($Tags)
    {
        $new = clone $this;
        $new->Tags = $Tags;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->LogoUrl;
    }

    /**
     * @param string $LogoUrl
     *
     * @return LearningActivity
     */
    public function withLogoUrl($LogoUrl)
    {
        $new = clone $this;
        $new->LogoUrl = $LogoUrl;

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
     * @return LearningActivity
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
    public function getHasFeedback()
    {
        return $this->HasFeedback;
    }

    /**
     * @param bool $HasFeedback
     *
     * @return LearningActivity
     */
    public function withHasFeedback($HasFeedback)
    {
        $new = clone $this;
        $new->HasFeedback = $HasFeedback;

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
     * @return LearningActivity
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
    public function getHasSample()
    {
        return $this->HasSample;
    }

    /**
     * @param bool $HasSample
     *
     * @return LearningActivity
     */
    public function withHasSample($HasSample)
    {
        $new = clone $this;
        $new->HasSample = $HasSample;

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
     * @return LearningActivity
     */
    public function withLearningTime($LearningTime)
    {
        $new = clone $this;
        $new->LearningTime = $LearningTime;

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
     * @return LearningActivity
     */
    public function withGrantCertificate($GrantCertificate)
    {
        $new = clone $this;
        $new->GrantCertificate = $GrantCertificate;

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
     * @return LearningActivity
     */
    public function withCreditValue($CreditValue)
    {
        $new = clone $this;
        $new->CreditValue = $CreditValue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGrantBadge()
    {
        return $this->GrantBadge;
    }

    /**
     * @param bool $GrantBadge
     *
     * @return LearningActivity
     */
    public function withGrantBadge($GrantBadge)
    {
        $new = clone $this;
        $new->GrantBadge = $GrantBadge;

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
     * @return LearningActivity
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

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
     * @return LearningActivity
     */
    public function withFirstEnrollmentDate($FirstEnrollmentDate)
    {
        $new = clone $this;
        $new->FirstEnrollmentDate = $FirstEnrollmentDate;

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
     * @return LearningActivity
     */
    public function withLastEnrollmentDate($LastEnrollmentDate)
    {
        $new = clone $this;
        $new->LastEnrollmentDate = $LastEnrollmentDate;

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
     * @return LearningActivity
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
    public function getAccreditationExpires()
    {
        return $this->AccreditationExpires;
    }

    /**
     * @param bool $AccreditationExpires
     *
     * @return LearningActivity
     */
    public function withAccreditationExpires($AccreditationExpires)
    {
        $new = clone $this;
        $new->AccreditationExpires = $AccreditationExpires;

        return $new;
    }

    /**
     * @return int
     */
    public function getAllowedReenrollmentsNumber()
    {
        return $this->AllowedReenrollmentsNumber;
    }

    /**
     * @param int $AllowedReenrollmentsNumber
     *
     * @return LearningActivity
     */
    public function withAllowedReenrollmentsNumber($AllowedReenrollmentsNumber)
    {
        $new = clone $this;
        $new->AllowedReenrollmentsNumber = $AllowedReenrollmentsNumber;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccreditationExpiresBasedOnEnrollmentDate()
    {
        return $this->AccreditationExpiresBasedOnEnrollmentDate;
    }

    /**
     * @param bool $AccreditationExpiresBasedOnEnrollmentDate
     *
     * @return LearningActivity
     */
    public function withAccreditationExpiresBasedOnEnrollmentDate($AccreditationExpiresBasedOnEnrollmentDate)
    {
        $new = clone $this;
        $new->AccreditationExpiresBasedOnEnrollmentDate = $AccreditationExpiresBasedOnEnrollmentDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccreditationExpiresUnits()
    {
        return $this->AccreditationExpiresUnits;
    }

    /**
     * @param int $AccreditationExpiresUnits
     *
     * @return LearningActivity
     */
    public function withAccreditationExpiresUnits($AccreditationExpiresUnits)
    {
        $new = clone $this;
        $new->AccreditationExpiresUnits = $AccreditationExpiresUnits;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccreditationExpiresInterval()
    {
        return $this->AccreditationExpiresInterval;
    }

    /**
     * @param string $AccreditationExpiresInterval
     *
     * @return LearningActivity
     */
    public function withAccreditationExpiresInterval($AccreditationExpiresInterval)
    {
        $new = clone $this;
        $new->AccreditationExpiresInterval = $AccreditationExpiresInterval;

        return $new;
    }

    /**
     * @return int
     */
    public function getReenrollmentAllowedBeforeExpiringUnits()
    {
        return $this->ReenrollmentAllowedBeforeExpiringUnits;
    }

    /**
     * @param int $ReenrollmentAllowedBeforeExpiringUnits
     *
     * @return LearningActivity
     */
    public function withReenrollmentAllowedBeforeExpiringUnits($ReenrollmentAllowedBeforeExpiringUnits)
    {
        $new = clone $this;
        $new->ReenrollmentAllowedBeforeExpiringUnits = $ReenrollmentAllowedBeforeExpiringUnits;

        return $new;
    }

    /**
     * @return string
     */
    public function getReenrollmentAllowedBeforeExpiringInterval()
    {
        return $this->ReenrollmentAllowedBeforeExpiringInterval;
    }

    /**
     * @param string $ReenrollmentAllowedBeforeExpiringInterval
     *
     * @return LearningActivity
     */
    public function withReenrollmentAllowedBeforeExpiringInterval($ReenrollmentAllowedBeforeExpiringInterval)
    {
        $new = clone $this;
        $new->ReenrollmentAllowedBeforeExpiringInterval = $ReenrollmentAllowedBeforeExpiringInterval;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCustomField
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCustomField $CustomFields
     *
     * @return LearningActivity
     */
    public function withCustomFields($CustomFields)
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }

    /**
     * @return string
     */
    public function getDetailsLink()
    {
        return $this->DetailsLink;
    }

    /**
     * @param string $DetailsLink
     *
     * @return LearningActivity
     */
    public function withDetailsLink($DetailsLink)
    {
        $new = clone $this;
        $new->DetailsLink = $DetailsLink;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedTimestamp()
    {
        return $this->LastModifiedTimestamp;
    }

    /**
     * @param \DateTimeInterface $LastModifiedTimestamp
     *
     * @return LearningActivity
     */
    public function withLastModifiedTimestamp($LastModifiedTimestamp)
    {
        $new = clone $this;
        $new->LastModifiedTimestamp = $LastModifiedTimestamp;

        return $new;
    }
}
