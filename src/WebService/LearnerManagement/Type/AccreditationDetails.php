<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class AccreditationDetails
{
    private ?string $Type;

    
    private ?string $ID;

    
    private float $CreditValue;

    
    private int $CertificateScore;

    
    private bool $DoNotGrandCertificateUnlessCreditIssued;

    
    private float $CertificateMinTime;

    
    private ?string $CertificateType;

    
    private bool $CanPrintCertificate;

    
    private bool $GrantCertificate;

    
    private bool $CreditOnlyOnPass;

    
    private bool $CertificateExpires;

    
    private bool $CertificateExpireBasedOnEnrollmentDate;

    
    private bool $CertificateExpireBasedOnCompletionDate;

    
    private bool $CertificateExpireBasedOnFixedDate;

    
    private bool $CertificateExpireBasedOnMetadataField;

    
    private bool $LimitReenroll;

    
    private int $MaxReenrollment;

    
    private int $ExpireUnit;

    
    private ?string $ExpireInterval;

    
    private int $NotifyUnit;

    
    private ?string $NotifyInterval;

    
    private DateTimeInterface $ExpireDate;

    
    private ?string $ExpireMetadataFieldID;

    
    private bool $CreditsAcrossVariousCategories;

    
    private bool $GrantOpenBadge;

    
    private ?string $OpenBadgeType;

    
    private bool $GrantOpenBadgeCompletionPriorDueDate;

    
    private int $GrantOpenBadgeCompletionDayAfterEnroll;

    
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

    
    public function getCertificateExpireBasedOnEnrollmentDate(): bool
    {
        return $this->CertificateExpireBasedOnEnrollmentDate;
    }

    
    public function withCertificateExpireBasedOnEnrollmentDate(bool $CertificateExpireBasedOnEnrollmentDate): static
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnEnrollmentDate = $CertificateExpireBasedOnEnrollmentDate;

        return $new;
    }

    
    public function getCertificateExpireBasedOnCompletionDate(): bool
    {
        return $this->CertificateExpireBasedOnCompletionDate;
    }

    
    public function withCertificateExpireBasedOnCompletionDate(bool $CertificateExpireBasedOnCompletionDate): static
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnCompletionDate = $CertificateExpireBasedOnCompletionDate;

        return $new;
    }

    
    public function getCertificateExpireBasedOnFixedDate(): bool
    {
        return $this->CertificateExpireBasedOnFixedDate;
    }

    
    public function withCertificateExpireBasedOnFixedDate(bool $CertificateExpireBasedOnFixedDate): static
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnFixedDate = $CertificateExpireBasedOnFixedDate;

        return $new;
    }

    
    public function getCertificateExpireBasedOnMetadataField(): bool
    {
        return $this->CertificateExpireBasedOnMetadataField;
    }

    
    public function withCertificateExpireBasedOnMetadataField(bool $CertificateExpireBasedOnMetadataField): static
    {
        $new = clone $this;
        $new->CertificateExpireBasedOnMetadataField = $CertificateExpireBasedOnMetadataField;

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

    
    public function getExpireDate(): DateTimeInterface
    {
        return $this->ExpireDate;
    }

    
    public function withExpireDate(DateTimeInterface $ExpireDate): static
    {
        $new = clone $this;
        $new->ExpireDate = $ExpireDate;

        return $new;
    }

    
    public function getExpireMetadataFieldID(): ?string
    {
        return $this->ExpireMetadataFieldID;
    }

    
    public function withExpireMetadataFieldID(?string $ExpireMetadataFieldID): static
    {
        $new = clone $this;
        $new->ExpireMetadataFieldID = $ExpireMetadataFieldID;

        return $new;
    }

    
    public function getCreditsAcrossVariousCategories(): bool
    {
        return $this->CreditsAcrossVariousCategories;
    }

    
    public function withCreditsAcrossVariousCategories(bool $CreditsAcrossVariousCategories): static
    {
        $new = clone $this;
        $new->CreditsAcrossVariousCategories = $CreditsAcrossVariousCategories;

        return $new;
    }

    
    public function getGrantOpenBadge(): bool
    {
        return $this->GrantOpenBadge;
    }

    
    public function withGrantOpenBadge(bool $GrantOpenBadge): static
    {
        $new = clone $this;
        $new->GrantOpenBadge = $GrantOpenBadge;

        return $new;
    }

    
    public function getOpenBadgeType(): ?string
    {
        return $this->OpenBadgeType;
    }

    
    public function withOpenBadgeType(?string $OpenBadgeType): static
    {
        $new = clone $this;
        $new->OpenBadgeType = $OpenBadgeType;

        return $new;
    }

    
    public function getGrantOpenBadgeCompletionPriorDueDate(): bool
    {
        return $this->GrantOpenBadgeCompletionPriorDueDate;
    }

    
    public function withGrantOpenBadgeCompletionPriorDueDate(bool $GrantOpenBadgeCompletionPriorDueDate): static
    {
        $new = clone $this;
        $new->GrantOpenBadgeCompletionPriorDueDate = $GrantOpenBadgeCompletionPriorDueDate;

        return $new;
    }

    
    public function getGrantOpenBadgeCompletionDayAfterEnroll(): int
    {
        return $this->GrantOpenBadgeCompletionDayAfterEnroll;
    }

    
    public function withGrantOpenBadgeCompletionDayAfterEnroll(int $GrantOpenBadgeCompletionDayAfterEnroll): static
    {
        $new = clone $this;
        $new->GrantOpenBadgeCompletionDayAfterEnroll = $GrantOpenBadgeCompletionDayAfterEnroll;

        return $new;
    }
}
