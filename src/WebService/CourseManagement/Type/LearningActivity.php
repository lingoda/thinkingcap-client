<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class LearningActivity
{
    private string $Type;

    
    private string $ID;

    
    private string $Code;

    
    private string $Title;

    
    private string $Description;

    
    private string $Instructions;

    
    private string $Language;

    
    private bool $IsOnline;

    
    private bool $IsAssessment;

    
    private string $OwnerDomainID;

    
    private string $OwnerDomainName;

    
    private string $EquivalencyID;

    
    private string $EquivalencyName;

    
    private bool $IsActive;

    
    private string $Tags;

    
    private string $LogoUrl;

    
    private bool $HasForum;

    
    private bool $HasFeedback;

    
    private bool $HasAssignments;

    
    private bool $HasSample;

    
    private float $LearningTime;

    
    private bool $GrantCertificate;

    
    private float $CreditValue;

    
    private bool $GrantBadge;

    
    private DateTimeInterface $StartDate;

    
    private DateTimeInterface $FirstEnrollmentDate;

    
    private DateTimeInterface $LastEnrollmentDate;

    
    private string $DueDate;

    
    private bool $AccreditationExpires;

    
    private int $AllowedReenrollmentsNumber;

    
    private bool $AccreditationExpiresBasedOnEnrollmentDate;

    
    private int $AccreditationExpiresUnits;

    
    private string $AccreditationExpiresInterval;

    
    private int $ReenrollmentAllowedBeforeExpiringUnits;

    
    private string $ReenrollmentAllowedBeforeExpiringInterval;

    
    private ArrayOfCustomField $CustomFields;

    
    private ArrayOfCourseSession $Sessions;

    
    private ArrayOfLearningActivityCohort $Cohorts;

    
    private string $DetailsLink;

    
    private DateTimeInterface $LastModifiedTimestamp;

    
    public function getType(): string
    {
        return $this->Type;
    }

    
    public function withType(string $Type): static
    {
        $new = clone $this;
        $new->Type = $Type;

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

    
    public function getOwnerDomainID(): string
    {
        return $this->OwnerDomainID;
    }

    
    public function withOwnerDomainID(string $OwnerDomainID): static
    {
        $new = clone $this;
        $new->OwnerDomainID = $OwnerDomainID;

        return $new;
    }

    
    public function getOwnerDomainName(): string
    {
        return $this->OwnerDomainName;
    }

    
    public function withOwnerDomainName(string $OwnerDomainName): static
    {
        $new = clone $this;
        $new->OwnerDomainName = $OwnerDomainName;

        return $new;
    }

    
    public function getEquivalencyID(): string
    {
        return $this->EquivalencyID;
    }

    
    public function withEquivalencyID(string $EquivalencyID): static
    {
        $new = clone $this;
        $new->EquivalencyID = $EquivalencyID;

        return $new;
    }

    
    public function getEquivalencyName(): string
    {
        return $this->EquivalencyName;
    }

    
    public function withEquivalencyName(string $EquivalencyName): static
    {
        $new = clone $this;
        $new->EquivalencyName = $EquivalencyName;

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

    
    public function getTags(): string
    {
        return $this->Tags;
    }

    
    public function withTags(string $Tags): static
    {
        $new = clone $this;
        $new->Tags = $Tags;

        return $new;
    }

    
    public function getLogoUrl(): string
    {
        return $this->LogoUrl;
    }

    
    public function withLogoUrl(string $LogoUrl): static
    {
        $new = clone $this;
        $new->LogoUrl = $LogoUrl;

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

    
    public function getGrantBadge(): bool
    {
        return $this->GrantBadge;
    }

    
    public function withGrantBadge(bool $GrantBadge): static
    {
        $new = clone $this;
        $new->GrantBadge = $GrantBadge;

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

    
    public function getAccreditationExpires(): bool
    {
        return $this->AccreditationExpires;
    }

    
    public function withAccreditationExpires(bool $AccreditationExpires): static
    {
        $new = clone $this;
        $new->AccreditationExpires = $AccreditationExpires;

        return $new;
    }

    
    public function getAllowedReenrollmentsNumber(): int
    {
        return $this->AllowedReenrollmentsNumber;
    }

    
    public function withAllowedReenrollmentsNumber(int $AllowedReenrollmentsNumber): static
    {
        $new = clone $this;
        $new->AllowedReenrollmentsNumber = $AllowedReenrollmentsNumber;

        return $new;
    }

    
    public function getAccreditationExpiresBasedOnEnrollmentDate(): bool
    {
        return $this->AccreditationExpiresBasedOnEnrollmentDate;
    }

    
    public function withAccreditationExpiresBasedOnEnrollmentDate(bool $AccreditationExpiresBasedOnEnrollmentDate): static
    {
        $new = clone $this;
        $new->AccreditationExpiresBasedOnEnrollmentDate = $AccreditationExpiresBasedOnEnrollmentDate;

        return $new;
    }

    
    public function getAccreditationExpiresUnits(): int
    {
        return $this->AccreditationExpiresUnits;
    }

    
    public function withAccreditationExpiresUnits(int $AccreditationExpiresUnits): static
    {
        $new = clone $this;
        $new->AccreditationExpiresUnits = $AccreditationExpiresUnits;

        return $new;
    }

    
    public function getAccreditationExpiresInterval(): string
    {
        return $this->AccreditationExpiresInterval;
    }

    
    public function withAccreditationExpiresInterval(string $AccreditationExpiresInterval): static
    {
        $new = clone $this;
        $new->AccreditationExpiresInterval = $AccreditationExpiresInterval;

        return $new;
    }

    
    public function getReenrollmentAllowedBeforeExpiringUnits(): int
    {
        return $this->ReenrollmentAllowedBeforeExpiringUnits;
    }

    
    public function withReenrollmentAllowedBeforeExpiringUnits(int $ReenrollmentAllowedBeforeExpiringUnits): static
    {
        $new = clone $this;
        $new->ReenrollmentAllowedBeforeExpiringUnits = $ReenrollmentAllowedBeforeExpiringUnits;

        return $new;
    }

    
    public function getReenrollmentAllowedBeforeExpiringInterval(): string
    {
        return $this->ReenrollmentAllowedBeforeExpiringInterval;
    }

    
    public function withReenrollmentAllowedBeforeExpiringInterval(string $ReenrollmentAllowedBeforeExpiringInterval): static
    {
        $new = clone $this;
        $new->ReenrollmentAllowedBeforeExpiringInterval = $ReenrollmentAllowedBeforeExpiringInterval;

        return $new;
    }

    
    public function getCustomFields(): ArrayOfCustomField
    {
        return $this->CustomFields;
    }

    
    public function withCustomFields(ArrayOfCustomField $CustomFields): static
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }

    
    public function getSessions(): ArrayOfCourseSession
    {
        return $this->Sessions;
    }

    
    public function withSessions(ArrayOfCourseSession $Sessions): static
    {
        $new = clone $this;
        $new->Sessions = $Sessions;

        return $new;
    }

    
    public function getCohorts(): ArrayOfLearningActivityCohort
    {
        return $this->Cohorts;
    }

    
    public function withCohorts(ArrayOfLearningActivityCohort $Cohorts): static
    {
        $new = clone $this;
        $new->Cohorts = $Cohorts;

        return $new;
    }

    
    public function getDetailsLink(): string
    {
        return $this->DetailsLink;
    }

    
    public function withDetailsLink(string $DetailsLink): static
    {
        $new = clone $this;
        $new->DetailsLink = $DetailsLink;

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
}
