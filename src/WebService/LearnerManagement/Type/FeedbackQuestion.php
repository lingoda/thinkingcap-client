<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class FeedbackQuestion
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $SectionID;

    /**
     * @var string
     */
    private $Text;

    /**
     * @var string
     */
    private $TextEN;

    /**
     * @var int
     */
    private $Display;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    private $ChoiceList;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    private $SubquestionList;

    /**
     * @var string
     */
    private $ParentID;

    /**
     * @var string
     */
    private $ParentChoiceID;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var bool
     */
    private $ApplyToCourses;

    /**
     * @var bool
     */
    private $ApplyToLP;

    /**
     * @var bool
     */
    private $ApplyToAssessments;

    /**
     * @var bool
     */
    private $ApplyToIL;

    /**
     * @var bool
     */
    private $ApplyToPortfolio;

    /**
     * @var bool
     */
    private $ApplyToDemonstration;

    /**
     * @var bool
     */
    private $ApplyToComprehension;

    /**
     * @var bool
     */
    private $ApplyToExternalActivity;

    /**
     * @var bool
     */
    private $ApplyToLPGroups;

    /**
     * @var bool
     */
    private $IsRequired;

    /**
     * @var bool
     */
    private $DisplaySlidingScale;

    /**
     * @var string
     */
    private $DomainSurveyID;

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
     * @return FeedbackQuestion
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
    public function getSectionID()
    {
        return $this->SectionID;
    }

    /**
     * @param string $SectionID
     *
     * @return FeedbackQuestion
     */
    public function withSectionID($SectionID)
    {
        $new = clone $this;
        $new->SectionID = $SectionID;

        return $new;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     *
     * @return FeedbackQuestion
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }

    /**
     * @return string
     */
    public function getTextEN()
    {
        return $this->TextEN;
    }

    /**
     * @param string $TextEN
     *
     * @return FeedbackQuestion
     */
    public function withTextEN($TextEN)
    {
        $new = clone $this;
        $new->TextEN = $TextEN;

        return $new;
    }

    /**
     * @return int
     */
    public function getDisplay()
    {
        return $this->Display;
    }

    /**
     * @param int $Display
     *
     * @return FeedbackQuestion
     */
    public function withDisplay($Display)
    {
        $new = clone $this;
        $new->Display = $Display;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    public function getChoiceList()
    {
        return $this->ChoiceList;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType $ChoiceList
     *
     * @return FeedbackQuestion
     */
    public function withChoiceList($ChoiceList)
    {
        $new = clone $this;
        $new->ChoiceList = $ChoiceList;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType
     */
    public function getSubquestionList()
    {
        return $this->SubquestionList;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfAnyType $SubquestionList
     *
     * @return FeedbackQuestion
     */
    public function withSubquestionList($SubquestionList)
    {
        $new = clone $this;
        $new->SubquestionList = $SubquestionList;

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
     * @return FeedbackQuestion
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
    public function getParentChoiceID()
    {
        return $this->ParentChoiceID;
    }

    /**
     * @param string $ParentChoiceID
     *
     * @return FeedbackQuestion
     */
    public function withParentChoiceID($ParentChoiceID)
    {
        $new = clone $this;
        $new->ParentChoiceID = $ParentChoiceID;

        return $new;
    }

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
     * @return FeedbackQuestion
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToCourses()
    {
        return $this->ApplyToCourses;
    }

    /**
     * @param bool $ApplyToCourses
     *
     * @return FeedbackQuestion
     */
    public function withApplyToCourses($ApplyToCourses)
    {
        $new = clone $this;
        $new->ApplyToCourses = $ApplyToCourses;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToLP()
    {
        return $this->ApplyToLP;
    }

    /**
     * @param bool $ApplyToLP
     *
     * @return FeedbackQuestion
     */
    public function withApplyToLP($ApplyToLP)
    {
        $new = clone $this;
        $new->ApplyToLP = $ApplyToLP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToAssessments()
    {
        return $this->ApplyToAssessments;
    }

    /**
     * @param bool $ApplyToAssessments
     *
     * @return FeedbackQuestion
     */
    public function withApplyToAssessments($ApplyToAssessments)
    {
        $new = clone $this;
        $new->ApplyToAssessments = $ApplyToAssessments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToIL()
    {
        return $this->ApplyToIL;
    }

    /**
     * @param bool $ApplyToIL
     *
     * @return FeedbackQuestion
     */
    public function withApplyToIL($ApplyToIL)
    {
        $new = clone $this;
        $new->ApplyToIL = $ApplyToIL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToPortfolio()
    {
        return $this->ApplyToPortfolio;
    }

    /**
     * @param bool $ApplyToPortfolio
     *
     * @return FeedbackQuestion
     */
    public function withApplyToPortfolio($ApplyToPortfolio)
    {
        $new = clone $this;
        $new->ApplyToPortfolio = $ApplyToPortfolio;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToDemonstration()
    {
        return $this->ApplyToDemonstration;
    }

    /**
     * @param bool $ApplyToDemonstration
     *
     * @return FeedbackQuestion
     */
    public function withApplyToDemonstration($ApplyToDemonstration)
    {
        $new = clone $this;
        $new->ApplyToDemonstration = $ApplyToDemonstration;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToComprehension()
    {
        return $this->ApplyToComprehension;
    }

    /**
     * @param bool $ApplyToComprehension
     *
     * @return FeedbackQuestion
     */
    public function withApplyToComprehension($ApplyToComprehension)
    {
        $new = clone $this;
        $new->ApplyToComprehension = $ApplyToComprehension;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToExternalActivity()
    {
        return $this->ApplyToExternalActivity;
    }

    /**
     * @param bool $ApplyToExternalActivity
     *
     * @return FeedbackQuestion
     */
    public function withApplyToExternalActivity($ApplyToExternalActivity)
    {
        $new = clone $this;
        $new->ApplyToExternalActivity = $ApplyToExternalActivity;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyToLPGroups()
    {
        return $this->ApplyToLPGroups;
    }

    /**
     * @param bool $ApplyToLPGroups
     *
     * @return FeedbackQuestion
     */
    public function withApplyToLPGroups($ApplyToLPGroups)
    {
        $new = clone $this;
        $new->ApplyToLPGroups = $ApplyToLPGroups;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }

    /**
     * @param bool $IsRequired
     *
     * @return FeedbackQuestion
     */
    public function withIsRequired($IsRequired)
    {
        $new = clone $this;
        $new->IsRequired = $IsRequired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisplaySlidingScale()
    {
        return $this->DisplaySlidingScale;
    }

    /**
     * @param bool $DisplaySlidingScale
     *
     * @return FeedbackQuestion
     */
    public function withDisplaySlidingScale($DisplaySlidingScale)
    {
        $new = clone $this;
        $new->DisplaySlidingScale = $DisplaySlidingScale;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomainSurveyID()
    {
        return $this->DomainSurveyID;
    }

    /**
     * @param string $DomainSurveyID
     *
     * @return FeedbackQuestion
     */
    public function withDomainSurveyID($DomainSurveyID)
    {
        $new = clone $this;
        $new->DomainSurveyID = $DomainSurveyID;

        return $new;
    }
}
