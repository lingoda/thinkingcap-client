<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class CourseVersion
{
    private ?string $CourseID;

    
    private ?string $CourseTitle;

    
    private int $VersionNumber;

    
    private float $LearningTime;

    
    private bool $IsAssessment;

    
    private bool $HasAssessment;

    
    private bool $HasAssignment;

    
    private float $CertificateMinTime;

    
    private DateTimeInterface $ImportDate;

    
    private ?string $ScormVersion;

    
    private ?string $Reason;

    
    private ?string $Type;

    
    private bool $HasMinorVersions;

    
    private ?string $UpdatedBy;

    
    private ?string $SummaryXml;

    
    private ?string $ExternalLocation;

    
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

    
    public function getVersionNumber(): int
    {
        return $this->VersionNumber;
    }

    
    public function withVersionNumber(int $VersionNumber): static
    {
        $new = clone $this;
        $new->VersionNumber = $VersionNumber;

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

    
    public function getHasAssignment(): bool
    {
        return $this->HasAssignment;
    }

    
    public function withHasAssignment(bool $HasAssignment): static
    {
        $new = clone $this;
        $new->HasAssignment = $HasAssignment;

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

    
    public function getImportDate(): DateTimeInterface
    {
        return $this->ImportDate;
    }

    
    public function withImportDate(DateTimeInterface $ImportDate): static
    {
        $new = clone $this;
        $new->ImportDate = $ImportDate;

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

    
    public function getReason(): ?string
    {
        return $this->Reason;
    }

    
    public function withReason(?string $Reason): static
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    
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

    
    public function getHasMinorVersions(): bool
    {
        return $this->HasMinorVersions;
    }

    
    public function withHasMinorVersions(bool $HasMinorVersions): static
    {
        $new = clone $this;
        $new->HasMinorVersions = $HasMinorVersions;

        return $new;
    }

    
    public function getUpdatedBy(): ?string
    {
        return $this->UpdatedBy;
    }

    
    public function withUpdatedBy(?string $UpdatedBy): static
    {
        $new = clone $this;
        $new->UpdatedBy = $UpdatedBy;

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

    
    public function getExternalLocation(): ?string
    {
        return $this->ExternalLocation;
    }

    
    public function withExternalLocation(?string $ExternalLocation): static
    {
        $new = clone $this;
        $new->ExternalLocation = $ExternalLocation;

        return $new;
    }
}
