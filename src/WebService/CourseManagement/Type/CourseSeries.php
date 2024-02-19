<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseSeries
{
    private string $SeriesID;

    
    private string $SeriesCode;

    
    private string $SeriesTitle;

    
    private string $SeriesDescription;

    
    private string $SeriesKeyword;

    
    private string $SeriesProgram;

    
    private bool $AllowGlobalOnly;

    
    private bool $WaitlistOnlyInOneMember;

    
    private bool $DoNotInherit;

    
    private string $SeriesFieldsXml;

    
    private ArrayOfAnyType $CertificateRules;

    
    private ArrayOfAnyType $EquivalencyLearningObjectsArray;

    
    private ArrayOfAnyType $EquivalencyActivityArray;

    
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

    
    public function getSeriesCode(): string
    {
        return $this->SeriesCode;
    }

    
    public function withSeriesCode(string $SeriesCode): static
    {
        $new = clone $this;
        $new->SeriesCode = $SeriesCode;

        return $new;
    }

    
    public function getSeriesTitle(): string
    {
        return $this->SeriesTitle;
    }

    
    public function withSeriesTitle(string $SeriesTitle): static
    {
        $new = clone $this;
        $new->SeriesTitle = $SeriesTitle;

        return $new;
    }

    
    public function getSeriesDescription(): string
    {
        return $this->SeriesDescription;
    }

    
    public function withSeriesDescription(string $SeriesDescription): static
    {
        $new = clone $this;
        $new->SeriesDescription = $SeriesDescription;

        return $new;
    }

    
    public function getSeriesKeyword(): string
    {
        return $this->SeriesKeyword;
    }

    
    public function withSeriesKeyword(string $SeriesKeyword): static
    {
        $new = clone $this;
        $new->SeriesKeyword = $SeriesKeyword;

        return $new;
    }

    
    public function getSeriesProgram(): string
    {
        return $this->SeriesProgram;
    }

    
    public function withSeriesProgram(string $SeriesProgram): static
    {
        $new = clone $this;
        $new->SeriesProgram = $SeriesProgram;

        return $new;
    }

    
    public function getAllowGlobalOnly(): bool
    {
        return $this->AllowGlobalOnly;
    }

    
    public function withAllowGlobalOnly(bool $AllowGlobalOnly): static
    {
        $new = clone $this;
        $new->AllowGlobalOnly = $AllowGlobalOnly;

        return $new;
    }

    
    public function getWaitlistOnlyInOneMember(): bool
    {
        return $this->WaitlistOnlyInOneMember;
    }

    
    public function withWaitlistOnlyInOneMember(bool $WaitlistOnlyInOneMember): static
    {
        $new = clone $this;
        $new->WaitlistOnlyInOneMember = $WaitlistOnlyInOneMember;

        return $new;
    }

    
    public function getDoNotInherit(): bool
    {
        return $this->DoNotInherit;
    }

    
    public function withDoNotInherit(bool $DoNotInherit): static
    {
        $new = clone $this;
        $new->DoNotInherit = $DoNotInherit;

        return $new;
    }

    
    public function getSeriesFieldsXml(): string
    {
        return $this->SeriesFieldsXml;
    }

    
    public function withSeriesFieldsXml(string $SeriesFieldsXml): static
    {
        $new = clone $this;
        $new->SeriesFieldsXml = $SeriesFieldsXml;

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

    
    public function getEquivalencyLearningObjectsArray(): ArrayOfAnyType
    {
        return $this->EquivalencyLearningObjectsArray;
    }

    
    public function withEquivalencyLearningObjectsArray(ArrayOfAnyType $EquivalencyLearningObjectsArray): static
    {
        $new = clone $this;
        $new->EquivalencyLearningObjectsArray = $EquivalencyLearningObjectsArray;

        return $new;
    }

    
    public function getEquivalencyActivityArray(): ArrayOfAnyType
    {
        return $this->EquivalencyActivityArray;
    }

    
    public function withEquivalencyActivityArray(ArrayOfAnyType $EquivalencyActivityArray): static
    {
        $new = clone $this;
        $new->EquivalencyActivityArray = $EquivalencyActivityArray;

        return $new;
    }
}
