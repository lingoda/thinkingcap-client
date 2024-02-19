<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class FeedbackQuestion
{
    private string $ID;

    
    private string $SectionID;

    
    private string $Text;

    
    private string $TextEN;

    
    private int $Display;

    
    private ArrayOfAnyType $ChoiceList;

    
    private ArrayOfAnyType $SubquestionList;

    
    private string $ParentID;

    
    private string $ParentChoiceID;

    
    private string $Type;

    
    private bool $ApplyToCourses;

    
    private bool $ApplyToLP;

    
    private bool $ApplyToAssessments;

    
    private bool $ApplyToIL;

    
    private bool $ApplyToPortfolio;

    
    private bool $ApplyToDemonstration;

    
    private bool $ApplyToComprehension;

    
    private bool $ApplyToExternalActivity;

    
    private bool $ApplyToLPGroups;

    
    private bool $IsRequired;

    
    private bool $DisplaySlidingScale;

    
    private string $DomainSurveyID;

    
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

    
    public function getSectionID(): string
    {
        return $this->SectionID;
    }

    
    public function withSectionID(string $SectionID): static
    {
        $new = clone $this;
        $new->SectionID = $SectionID;

        return $new;
    }

    
    public function getText(): string
    {
        return $this->Text;
    }

    
    public function withText(string $Text): static
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }

    
    public function getTextEN(): string
    {
        return $this->TextEN;
    }

    
    public function withTextEN(string $TextEN): static
    {
        $new = clone $this;
        $new->TextEN = $TextEN;

        return $new;
    }

    
    public function getDisplay(): int
    {
        return $this->Display;
    }

    
    public function withDisplay(int $Display): static
    {
        $new = clone $this;
        $new->Display = $Display;

        return $new;
    }

    
    public function getChoiceList(): ArrayOfAnyType
    {
        return $this->ChoiceList;
    }

    
    public function withChoiceList(ArrayOfAnyType $ChoiceList): static
    {
        $new = clone $this;
        $new->ChoiceList = $ChoiceList;

        return $new;
    }

    
    public function getSubquestionList(): ArrayOfAnyType
    {
        return $this->SubquestionList;
    }

    
    public function withSubquestionList(ArrayOfAnyType $SubquestionList): static
    {
        $new = clone $this;
        $new->SubquestionList = $SubquestionList;

        return $new;
    }

    
    public function getParentID(): string
    {
        return $this->ParentID;
    }

    
    public function withParentID(string $ParentID): static
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    
    public function getParentChoiceID(): string
    {
        return $this->ParentChoiceID;
    }

    
    public function withParentChoiceID(string $ParentChoiceID): static
    {
        $new = clone $this;
        $new->ParentChoiceID = $ParentChoiceID;

        return $new;
    }

    
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

    
    public function getApplyToCourses(): bool
    {
        return $this->ApplyToCourses;
    }

    
    public function withApplyToCourses(bool $ApplyToCourses): static
    {
        $new = clone $this;
        $new->ApplyToCourses = $ApplyToCourses;

        return $new;
    }

    
    public function getApplyToLP(): bool
    {
        return $this->ApplyToLP;
    }

    
    public function withApplyToLP(bool $ApplyToLP): static
    {
        $new = clone $this;
        $new->ApplyToLP = $ApplyToLP;

        return $new;
    }

    
    public function getApplyToAssessments(): bool
    {
        return $this->ApplyToAssessments;
    }

    
    public function withApplyToAssessments(bool $ApplyToAssessments): static
    {
        $new = clone $this;
        $new->ApplyToAssessments = $ApplyToAssessments;

        return $new;
    }

    
    public function getApplyToIL(): bool
    {
        return $this->ApplyToIL;
    }

    
    public function withApplyToIL(bool $ApplyToIL): static
    {
        $new = clone $this;
        $new->ApplyToIL = $ApplyToIL;

        return $new;
    }

    
    public function getApplyToPortfolio(): bool
    {
        return $this->ApplyToPortfolio;
    }

    
    public function withApplyToPortfolio(bool $ApplyToPortfolio): static
    {
        $new = clone $this;
        $new->ApplyToPortfolio = $ApplyToPortfolio;

        return $new;
    }

    
    public function getApplyToDemonstration(): bool
    {
        return $this->ApplyToDemonstration;
    }

    
    public function withApplyToDemonstration(bool $ApplyToDemonstration): static
    {
        $new = clone $this;
        $new->ApplyToDemonstration = $ApplyToDemonstration;

        return $new;
    }

    
    public function getApplyToComprehension(): bool
    {
        return $this->ApplyToComprehension;
    }

    
    public function withApplyToComprehension(bool $ApplyToComprehension): static
    {
        $new = clone $this;
        $new->ApplyToComprehension = $ApplyToComprehension;

        return $new;
    }

    
    public function getApplyToExternalActivity(): bool
    {
        return $this->ApplyToExternalActivity;
    }

    
    public function withApplyToExternalActivity(bool $ApplyToExternalActivity): static
    {
        $new = clone $this;
        $new->ApplyToExternalActivity = $ApplyToExternalActivity;

        return $new;
    }

    
    public function getApplyToLPGroups(): bool
    {
        return $this->ApplyToLPGroups;
    }

    
    public function withApplyToLPGroups(bool $ApplyToLPGroups): static
    {
        $new = clone $this;
        $new->ApplyToLPGroups = $ApplyToLPGroups;

        return $new;
    }

    
    public function getIsRequired(): bool
    {
        return $this->IsRequired;
    }

    
    public function withIsRequired(bool $IsRequired): static
    {
        $new = clone $this;
        $new->IsRequired = $IsRequired;

        return $new;
    }

    
    public function getDisplaySlidingScale(): bool
    {
        return $this->DisplaySlidingScale;
    }

    
    public function withDisplaySlidingScale(bool $DisplaySlidingScale): static
    {
        $new = clone $this;
        $new->DisplaySlidingScale = $DisplaySlidingScale;

        return $new;
    }

    
    public function getDomainSurveyID(): string
    {
        return $this->DomainSurveyID;
    }

    
    public function withDomainSurveyID(string $DomainSurveyID): static
    {
        $new = clone $this;
        $new->DomainSurveyID = $DomainSurveyID;

        return $new;
    }
}
