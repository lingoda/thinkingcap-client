<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class SupervisorType
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
    private $DomainID;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var bool
     */
    private $EnrollLearners;

    /**
     * @var bool
     */
    private $WithdrawLearners;

    /**
     * @var bool
     */
    private $ApproveDeclineEnrollment;

    /**
     * @var bool
     */
    private $ApproveDeclineWithdrawal;

    /**
     * @var bool
     */
    private $MarkAssignments;

    /**
     * @var bool
     */
    private $SignOffAttestations;

    /**
     * @var bool
     */
    private $ViewSurveyResults;

    /**
     * @var bool
     */
    private $ViewAssessmentResults;

    /**
     * @var bool
     */
    private $PullAttestationDocuments;

    /**
     * @var bool
     */
    private $PullCompletionReports;

    /**
     * @var bool
     */
    private $ApproveForumPosts;

    /**
     * @var bool
     */
    private $ExtendDueDate;

    /**
     * @var bool
     */
    private $ViewCertificates;

    /**
     * @var string
     */
    private $AssignmentType;

    /**
     * @var string
     */
    private $MatchingLearnersMetadata;

    /**
     * @var string
     */
    private $SupervisorMetadata;

    /**
     * @var string
     */
    private $SupervisorMetadataoption;

    /**
     * @var bool
     */
    private $AutomatedMatchIncludesSupervisors;

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
     * @return SupervisorType
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
     * @return SupervisorType
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
     * @return SupervisorType
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
    public function getDomainID()
    {
        return $this->DomainID;
    }

    /**
     * @param string $DomainID
     *
     * @return SupervisorType
     */
    public function withDomainID($DomainID)
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

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
     * @return SupervisorType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnrollLearners()
    {
        return $this->EnrollLearners;
    }

    /**
     * @param bool $EnrollLearners
     *
     * @return SupervisorType
     */
    public function withEnrollLearners($EnrollLearners)
    {
        $new = clone $this;
        $new->EnrollLearners = $EnrollLearners;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWithdrawLearners()
    {
        return $this->WithdrawLearners;
    }

    /**
     * @param bool $WithdrawLearners
     *
     * @return SupervisorType
     */
    public function withWithdrawLearners($WithdrawLearners)
    {
        $new = clone $this;
        $new->WithdrawLearners = $WithdrawLearners;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApproveDeclineEnrollment()
    {
        return $this->ApproveDeclineEnrollment;
    }

    /**
     * @param bool $ApproveDeclineEnrollment
     *
     * @return SupervisorType
     */
    public function withApproveDeclineEnrollment($ApproveDeclineEnrollment)
    {
        $new = clone $this;
        $new->ApproveDeclineEnrollment = $ApproveDeclineEnrollment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApproveDeclineWithdrawal()
    {
        return $this->ApproveDeclineWithdrawal;
    }

    /**
     * @param bool $ApproveDeclineWithdrawal
     *
     * @return SupervisorType
     */
    public function withApproveDeclineWithdrawal($ApproveDeclineWithdrawal)
    {
        $new = clone $this;
        $new->ApproveDeclineWithdrawal = $ApproveDeclineWithdrawal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMarkAssignments()
    {
        return $this->MarkAssignments;
    }

    /**
     * @param bool $MarkAssignments
     *
     * @return SupervisorType
     */
    public function withMarkAssignments($MarkAssignments)
    {
        $new = clone $this;
        $new->MarkAssignments = $MarkAssignments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSignOffAttestations()
    {
        return $this->SignOffAttestations;
    }

    /**
     * @param bool $SignOffAttestations
     *
     * @return SupervisorType
     */
    public function withSignOffAttestations($SignOffAttestations)
    {
        $new = clone $this;
        $new->SignOffAttestations = $SignOffAttestations;

        return $new;
    }

    /**
     * @return bool
     */
    public function getViewSurveyResults()
    {
        return $this->ViewSurveyResults;
    }

    /**
     * @param bool $ViewSurveyResults
     *
     * @return SupervisorType
     */
    public function withViewSurveyResults($ViewSurveyResults)
    {
        $new = clone $this;
        $new->ViewSurveyResults = $ViewSurveyResults;

        return $new;
    }

    /**
     * @return bool
     */
    public function getViewAssessmentResults()
    {
        return $this->ViewAssessmentResults;
    }

    /**
     * @param bool $ViewAssessmentResults
     *
     * @return SupervisorType
     */
    public function withViewAssessmentResults($ViewAssessmentResults)
    {
        $new = clone $this;
        $new->ViewAssessmentResults = $ViewAssessmentResults;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPullAttestationDocuments()
    {
        return $this->PullAttestationDocuments;
    }

    /**
     * @param bool $PullAttestationDocuments
     *
     * @return SupervisorType
     */
    public function withPullAttestationDocuments($PullAttestationDocuments)
    {
        $new = clone $this;
        $new->PullAttestationDocuments = $PullAttestationDocuments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPullCompletionReports()
    {
        return $this->PullCompletionReports;
    }

    /**
     * @param bool $PullCompletionReports
     *
     * @return SupervisorType
     */
    public function withPullCompletionReports($PullCompletionReports)
    {
        $new = clone $this;
        $new->PullCompletionReports = $PullCompletionReports;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApproveForumPosts()
    {
        return $this->ApproveForumPosts;
    }

    /**
     * @param bool $ApproveForumPosts
     *
     * @return SupervisorType
     */
    public function withApproveForumPosts($ApproveForumPosts)
    {
        $new = clone $this;
        $new->ApproveForumPosts = $ApproveForumPosts;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExtendDueDate()
    {
        return $this->ExtendDueDate;
    }

    /**
     * @param bool $ExtendDueDate
     *
     * @return SupervisorType
     */
    public function withExtendDueDate($ExtendDueDate)
    {
        $new = clone $this;
        $new->ExtendDueDate = $ExtendDueDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getViewCertificates()
    {
        return $this->ViewCertificates;
    }

    /**
     * @param bool $ViewCertificates
     *
     * @return SupervisorType
     */
    public function withViewCertificates($ViewCertificates)
    {
        $new = clone $this;
        $new->ViewCertificates = $ViewCertificates;

        return $new;
    }

    /**
     * @return string
     */
    public function getAssignmentType()
    {
        return $this->AssignmentType;
    }

    /**
     * @param string $AssignmentType
     *
     * @return SupervisorType
     */
    public function withAssignmentType($AssignmentType)
    {
        $new = clone $this;
        $new->AssignmentType = $AssignmentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchingLearnersMetadata()
    {
        return $this->MatchingLearnersMetadata;
    }

    /**
     * @param string $MatchingLearnersMetadata
     *
     * @return SupervisorType
     */
    public function withMatchingLearnersMetadata($MatchingLearnersMetadata)
    {
        $new = clone $this;
        $new->MatchingLearnersMetadata = $MatchingLearnersMetadata;

        return $new;
    }

    /**
     * @return string
     */
    public function getSupervisorMetadata()
    {
        return $this->SupervisorMetadata;
    }

    /**
     * @param string $SupervisorMetadata
     *
     * @return SupervisorType
     */
    public function withSupervisorMetadata($SupervisorMetadata)
    {
        $new = clone $this;
        $new->SupervisorMetadata = $SupervisorMetadata;

        return $new;
    }

    /**
     * @return string
     */
    public function getSupervisorMetadataoption()
    {
        return $this->SupervisorMetadataoption;
    }

    /**
     * @param string $SupervisorMetadataoption
     *
     * @return SupervisorType
     */
    public function withSupervisorMetadataoption($SupervisorMetadataoption)
    {
        $new = clone $this;
        $new->SupervisorMetadataoption = $SupervisorMetadataoption;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutomatedMatchIncludesSupervisors()
    {
        return $this->AutomatedMatchIncludesSupervisors;
    }

    /**
     * @param bool $AutomatedMatchIncludesSupervisors
     *
     * @return SupervisorType
     */
    public function withAutomatedMatchIncludesSupervisors($AutomatedMatchIncludesSupervisors)
    {
        $new = clone $this;
        $new->AutomatedMatchIncludesSupervisors = $AutomatedMatchIncludesSupervisors;

        return $new;
    }
}
