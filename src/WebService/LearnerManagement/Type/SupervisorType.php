<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class SupervisorType
{
    private string $ID;

    
    private string $Name;

    
    private string $Code;

    
    private string $DomainID;

    
    private string $Description;

    
    private bool $EnrollLearners;

    
    private bool $WithdrawLearners;

    
    private bool $ApproveDeclineEnrollment;

    
    private bool $ApproveDeclineWithdrawal;

    
    private bool $MarkAssignments;

    
    private bool $SignOffAttestations;

    
    private bool $ViewSurveyResults;

    
    private bool $ViewAssessmentResults;

    
    private bool $PullAttestationDocuments;

    
    private bool $PullCompletionReports;

    
    private bool $ApproveForumPosts;

    
    private bool $ExtendDueDate;

    
    private bool $ViewCertificates;

    
    private string $AssignmentType;

    
    private string $MatchingLearnersMetadata;

    
    private string $SupervisorMetadata;

    
    private string $SupervisorMetadataoption;

    
    private bool $AutomatedMatchIncludesSupervisors;

    
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

    
    public function getName(): string
    {
        return $this->Name;
    }

    
    public function withName(string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

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

    
    public function getDomainID(): string
    {
        return $this->DomainID;
    }

    
    public function withDomainID(string $DomainID): static
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

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

    
    public function getEnrollLearners(): bool
    {
        return $this->EnrollLearners;
    }

    
    public function withEnrollLearners(bool $EnrollLearners): static
    {
        $new = clone $this;
        $new->EnrollLearners = $EnrollLearners;

        return $new;
    }

    
    public function getWithdrawLearners(): bool
    {
        return $this->WithdrawLearners;
    }

    
    public function withWithdrawLearners(bool $WithdrawLearners): static
    {
        $new = clone $this;
        $new->WithdrawLearners = $WithdrawLearners;

        return $new;
    }

    
    public function getApproveDeclineEnrollment(): bool
    {
        return $this->ApproveDeclineEnrollment;
    }

    
    public function withApproveDeclineEnrollment(bool $ApproveDeclineEnrollment): static
    {
        $new = clone $this;
        $new->ApproveDeclineEnrollment = $ApproveDeclineEnrollment;

        return $new;
    }

    
    public function getApproveDeclineWithdrawal(): bool
    {
        return $this->ApproveDeclineWithdrawal;
    }

    
    public function withApproveDeclineWithdrawal(bool $ApproveDeclineWithdrawal): static
    {
        $new = clone $this;
        $new->ApproveDeclineWithdrawal = $ApproveDeclineWithdrawal;

        return $new;
    }

    
    public function getMarkAssignments(): bool
    {
        return $this->MarkAssignments;
    }

    
    public function withMarkAssignments(bool $MarkAssignments): static
    {
        $new = clone $this;
        $new->MarkAssignments = $MarkAssignments;

        return $new;
    }

    
    public function getSignOffAttestations(): bool
    {
        return $this->SignOffAttestations;
    }

    
    public function withSignOffAttestations(bool $SignOffAttestations): static
    {
        $new = clone $this;
        $new->SignOffAttestations = $SignOffAttestations;

        return $new;
    }

    
    public function getViewSurveyResults(): bool
    {
        return $this->ViewSurveyResults;
    }

    
    public function withViewSurveyResults(bool $ViewSurveyResults): static
    {
        $new = clone $this;
        $new->ViewSurveyResults = $ViewSurveyResults;

        return $new;
    }

    
    public function getViewAssessmentResults(): bool
    {
        return $this->ViewAssessmentResults;
    }

    
    public function withViewAssessmentResults(bool $ViewAssessmentResults): static
    {
        $new = clone $this;
        $new->ViewAssessmentResults = $ViewAssessmentResults;

        return $new;
    }

    
    public function getPullAttestationDocuments(): bool
    {
        return $this->PullAttestationDocuments;
    }

    
    public function withPullAttestationDocuments(bool $PullAttestationDocuments): static
    {
        $new = clone $this;
        $new->PullAttestationDocuments = $PullAttestationDocuments;

        return $new;
    }

    
    public function getPullCompletionReports(): bool
    {
        return $this->PullCompletionReports;
    }

    
    public function withPullCompletionReports(bool $PullCompletionReports): static
    {
        $new = clone $this;
        $new->PullCompletionReports = $PullCompletionReports;

        return $new;
    }

    
    public function getApproveForumPosts(): bool
    {
        return $this->ApproveForumPosts;
    }

    
    public function withApproveForumPosts(bool $ApproveForumPosts): static
    {
        $new = clone $this;
        $new->ApproveForumPosts = $ApproveForumPosts;

        return $new;
    }

    
    public function getExtendDueDate(): bool
    {
        return $this->ExtendDueDate;
    }

    
    public function withExtendDueDate(bool $ExtendDueDate): static
    {
        $new = clone $this;
        $new->ExtendDueDate = $ExtendDueDate;

        return $new;
    }

    
    public function getViewCertificates(): bool
    {
        return $this->ViewCertificates;
    }

    
    public function withViewCertificates(bool $ViewCertificates): static
    {
        $new = clone $this;
        $new->ViewCertificates = $ViewCertificates;

        return $new;
    }

    
    public function getAssignmentType(): string
    {
        return $this->AssignmentType;
    }

    
    public function withAssignmentType(string $AssignmentType): static
    {
        $new = clone $this;
        $new->AssignmentType = $AssignmentType;

        return $new;
    }

    
    public function getMatchingLearnersMetadata(): string
    {
        return $this->MatchingLearnersMetadata;
    }

    
    public function withMatchingLearnersMetadata(string $MatchingLearnersMetadata): static
    {
        $new = clone $this;
        $new->MatchingLearnersMetadata = $MatchingLearnersMetadata;

        return $new;
    }

    
    public function getSupervisorMetadata(): string
    {
        return $this->SupervisorMetadata;
    }

    
    public function withSupervisorMetadata(string $SupervisorMetadata): static
    {
        $new = clone $this;
        $new->SupervisorMetadata = $SupervisorMetadata;

        return $new;
    }

    
    public function getSupervisorMetadataoption(): string
    {
        return $this->SupervisorMetadataoption;
    }

    
    public function withSupervisorMetadataoption(string $SupervisorMetadataoption): static
    {
        $new = clone $this;
        $new->SupervisorMetadataoption = $SupervisorMetadataoption;

        return $new;
    }

    
    public function getAutomatedMatchIncludesSupervisors(): bool
    {
        return $this->AutomatedMatchIncludesSupervisors;
    }

    
    public function withAutomatedMatchIncludesSupervisors(bool $AutomatedMatchIncludesSupervisors): static
    {
        $new = clone $this;
        $new->AutomatedMatchIncludesSupervisors = $AutomatedMatchIncludesSupervisors;

        return $new;
    }
}
