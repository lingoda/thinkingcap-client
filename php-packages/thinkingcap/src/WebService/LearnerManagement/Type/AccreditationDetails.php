<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class AccreditationDetails
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
     * @var float
     */
    private $CreditValue;

    /**
     * @var int
     */
    private $CertificateScore;

    /**
     * @var bool
     */
    private $DoNotGrandCertificateUnlessCreditIssued;

    /**
     * @var float
     */
    private $CertificateMinTime;

    /**
     * @var string
     */
    private $CertificateType;

    /**
     * @var bool
     */
    private $CanPrintCertificate;

    /**
     * @var bool
     */
    private $GrantCertificate;

    /**
     * @var bool
     */
    private $CreditOnlyOnPass;

    /**
     * @var bool
     */
    private $CertificateExpires;

    /**
     * @var bool
     */
    private $CertificateExpireBasedOnEnrollmentDate;

    /**
     * @var bool
     */
    private $CertificateExpireBasedOnCompletionDate;

    /**
     * @var bool
     */
    private $CertificateExpireBasedOnFixedDate;

    /**
     * @var bool
     */
    private $CertificateExpireBasedOnMetadataField;

    /**
     * @var bool
     */
    private $LimitReenroll;

    /**
     * @var int
     */
    private $MaxReenrollment;

    /**
     * @var int
     */
    private $ExpireUnit;

    /**
     * @var string
     */
    private $ExpireInterval;

    /**
     * @var int
     */
    private $NotifyUnit;

    /**
     * @var string
     */
    private $NotifyInterval;

    /**
     * @var \DateTimeInterface
     */
    private $ExpireDate;

    /**
     * @var string
     */
    private $ExpireMetadataFieldID;

    /**
     * @var bool
     */
    private $CreditsAcrossVariousCategories;

    /**
     * @var bool
     */
    private $GrantOpenBadge;

    /**
     * @var string
     */
    private $OpenBadgeType;

    /**
     * @var bool
     */
    private $GrantOpenBadgeCompletionPriorDueDate;

    /**
     * @var int
     */
    private $GrantOpenBadgeCompletionDayAfterEnroll;

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
     * @return AccreditationDetails
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
     * @return AccreditationDetails
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

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
     * @return AccreditationDetails
     */
    public function withCreditValue($CreditValue)
    {
        $new = clone $this;
        $new->CreditValue = $CreditValue;

        return $new;
    }

    /**
     * @return int
     */
    public function getCertificateScore()
    {
        return $this->CertificateScore;
    }

    /**
     * @param int $CertificateScore
     *
     * @return AccreditationDetails
     */
    public function withCertificateScore($CertificateScore)
    {
        $new = clone $this;
        $new->CertificateScore = $CertificateScore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotGrandCertificateUnlessCreditIssued()
    {
        return $this->DoNotGrandCertificateUnlessCreditIssued;
    }

    /**
     * @param bool $DoNotGrandCertificateUnlessCreditIssued
     *
     * @return AccreditationDetails
     */
    public function withDoNotGrandCertificateUnlessCreditIssued($DoNotGrandCertificateUnlessCreditIssued)
    {
        $new = clone $this;
        $new->DoNotGrandCertificateUnlessCreditIssued = $DoNotGrandCertificateUnlessCreditIssued;

        return $new;
    }

    /**
     * @return float
     */
    public function getCertificateMinTime()
    {
        return $this->CertificateMinTime;
    }

    /**
     * @param float $CertificateMinTime
     *
     * @return AccreditationDetails
     */
    public function withCertificateMinTime($CertificateMinTime)
    {
        $new = clone $this;
        $new->CertificateMinTime = $CertificateMinTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getCertificateType()
    {
        return $this->CertificateType;
    }

    /**
     * @param string $CertificateType
     *
     * @return AccreditationDetails
     */
    public function withCertificateType($CertificateType)
    {
        $new = clone $this;
        $new->CertificateType = $CertificateType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintCertificate()
    {
        return $this->CanPrintCertificate;
    }

    /**
     * @param bool $CanPrintCertificate
     *
     * @return AccreditationDetails
     */
    public function withCanPrintCertificate($CanPrintCertificate)
    {
        $new = clone $this;
        $new->CanPrintCertificate = $CanPrintCertificate;

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
     * @return AccreditationDetails
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
    public function getCreditOnlyOnPass()
    {
        return $this->CreditOnlyOnPass;
    }

    /**
     * @param bool $CreditOnlyOnPass
     *
     * @return AccreditationDetails
     */
    public function withCreditOnlyOnPass($CreditOnlyOnPass)
    {
        $new = clone $this;
        $new->CreditOnlyOnPass = $CreditOnlyOnPass;

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
     * @return AccreditationDetails
     */
    public function withCertificateExpires($CertificateExpires)
    {
        $new = clone $this;
        $new->CertificateExpires = $CertificateExpires;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCertificateExpireBasedOnEnrollmentDate()
    {
        return $this->CertificateExpireBasedOnEnrollmentDate;
    }

    /**
     * @param bool $CertificateExpireBasedOnEnrollmentDate
     *
     * @return AccreditationDetails
     */
    public function withCertificateExpireBasedOnEnrollmentDate($CertificateExpireBasedOnEnrollmentDate)
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnEnrollmentDate = $CertificateExpireBasedOnEnrollmentDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCertificateExpireBasedOnCompletionDate()
    {
        return $this->CertificateExpireBasedOnCompletionDate;
    }

    /**
     * @param bool $CertificateExpireBasedOnCompletionDate
     *
     * @return AccreditationDetails
     */
    public function withCertificateExpireBasedOnCompletionDate($CertificateExpireBasedOnCompletionDate)
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnCompletionDate = $CertificateExpireBasedOnCompletionDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCertificateExpireBasedOnFixedDate()
    {
        return $this->CertificateExpireBasedOnFixedDate;
    }

    /**
     * @param bool $CertificateExpireBasedOnFixedDate
     *
     * @return AccreditationDetails
     */
    public function withCertificateExpireBasedOnFixedDate($CertificateExpireBasedOnFixedDate)
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnFixedDate = $CertificateExpireBasedOnFixedDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCertificateExpireBasedOnMetadataField()
    {
        return $this->CertificateExpireBasedOnMetadataField;
    }

    /**
     * @param bool $CertificateExpireBasedOnMetadataField
     *
     * @return AccreditationDetails
     */
    public function withCertificateExpireBasedOnMetadataField($CertificateExpireBasedOnMetadataField)
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnMetadataField = $CertificateExpireBasedOnMetadataField;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLimitReenroll()
    {
        return $this->LimitReenroll;
    }

    /**
     * @param bool $LimitReenroll
     *
     * @return AccreditationDetails
     */
    public function withLimitReenroll($LimitReenroll)
    {
        $new = clone $this;
        $new->LimitReenroll = $LimitReenroll;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxReenrollment()
    {
        return $this->MaxReenrollment;
    }

    /**
     * @param int $MaxReenrollment
     *
     * @return AccreditationDetails
     */
    public function withMaxReenrollment($MaxReenrollment)
    {
        $new = clone $this;
        $new->MaxReenrollment = $MaxReenrollment;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpireUnit()
    {
        return $this->ExpireUnit;
    }

    /**
     * @param int $ExpireUnit
     *
     * @return AccreditationDetails
     */
    public function withExpireUnit($ExpireUnit)
    {
        $new = clone $this;
        $new->ExpireUnit = $ExpireUnit;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpireInterval()
    {
        return $this->ExpireInterval;
    }

    /**
     * @param string $ExpireInterval
     *
     * @return AccreditationDetails
     */
    public function withExpireInterval($ExpireInterval)
    {
        $new = clone $this;
        $new->ExpireInterval = $ExpireInterval;

        return $new;
    }

    /**
     * @return int
     */
    public function getNotifyUnit()
    {
        return $this->NotifyUnit;
    }

    /**
     * @param int $NotifyUnit
     *
     * @return AccreditationDetails
     */
    public function withNotifyUnit($NotifyUnit)
    {
        $new = clone $this;
        $new->NotifyUnit = $NotifyUnit;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotifyInterval()
    {
        return $this->NotifyInterval;
    }

    /**
     * @param string $NotifyInterval
     *
     * @return AccreditationDetails
     */
    public function withNotifyInterval($NotifyInterval)
    {
        $new = clone $this;
        $new->NotifyInterval = $NotifyInterval;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }

    /**
     * @param \DateTimeInterface $ExpireDate
     *
     * @return AccreditationDetails
     */
    public function withExpireDate($ExpireDate)
    {
        $new = clone $this;
        $new->ExpireDate = $ExpireDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpireMetadataFieldID()
    {
        return $this->ExpireMetadataFieldID;
    }

    /**
     * @param string $ExpireMetadataFieldID
     *
     * @return AccreditationDetails
     */
    public function withExpireMetadataFieldID($ExpireMetadataFieldID)
    {
        $new = clone $this;
        $new->ExpireMetadataFieldID = $ExpireMetadataFieldID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreditsAcrossVariousCategories()
    {
        return $this->CreditsAcrossVariousCategories;
    }

    /**
     * @param bool $CreditsAcrossVariousCategories
     *
     * @return AccreditationDetails
     */
    public function withCreditsAcrossVariousCategories($CreditsAcrossVariousCategories)
    {
        $new = clone $this;
        $new->CreditsAcrossVariousCategories = $CreditsAcrossVariousCategories;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGrantOpenBadge()
    {
        return $this->GrantOpenBadge;
    }

    /**
     * @param bool $GrantOpenBadge
     *
     * @return AccreditationDetails
     */
    public function withGrantOpenBadge($GrantOpenBadge)
    {
        $new = clone $this;
        $new->GrantOpenBadge = $GrantOpenBadge;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenBadgeType()
    {
        return $this->OpenBadgeType;
    }

    /**
     * @param string $OpenBadgeType
     *
     * @return AccreditationDetails
     */
    public function withOpenBadgeType($OpenBadgeType)
    {
        $new = clone $this;
        $new->OpenBadgeType = $OpenBadgeType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGrantOpenBadgeCompletionPriorDueDate()
    {
        return $this->GrantOpenBadgeCompletionPriorDueDate;
    }

    /**
     * @param bool $GrantOpenBadgeCompletionPriorDueDate
     *
     * @return AccreditationDetails
     */
    public function withGrantOpenBadgeCompletionPriorDueDate($GrantOpenBadgeCompletionPriorDueDate)
    {
        $new = clone $this;
        $new->GrantOpenBadgeCompletionPriorDueDate = $GrantOpenBadgeCompletionPriorDueDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getGrantOpenBadgeCompletionDayAfterEnroll()
    {
        return $this->GrantOpenBadgeCompletionDayAfterEnroll;
    }

    /**
     * @param int $GrantOpenBadgeCompletionDayAfterEnroll
     *
     * @return AccreditationDetails
     */
    public function withGrantOpenBadgeCompletionDayAfterEnroll($GrantOpenBadgeCompletionDayAfterEnroll)
    {
        $new = clone $this;
        $new->GrantOpenBadgeCompletionDayAfterEnroll = $GrantOpenBadgeCompletionDayAfterEnroll;

        return $new;
    }
}
