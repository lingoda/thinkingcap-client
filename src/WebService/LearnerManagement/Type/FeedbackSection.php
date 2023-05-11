<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class FeedbackSection
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var int
     */
    private $Display;

    /**
     * @var bool
     */
    private $IsGlobal;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfFeedbackQuestion
     */
    private $Questions;

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
     * @return FeedbackSection
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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return FeedbackSection
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return FeedbackSection
     */
    public function withDisplay($Display)
    {
        $new = clone $this;
        $new->Display = $Display;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsGlobal()
    {
        return $this->IsGlobal;
    }

    /**
     * @param bool $IsGlobal
     *
     * @return FeedbackSection
     */
    public function withIsGlobal($IsGlobal)
    {
        $new = clone $this;
        $new->IsGlobal = $IsGlobal;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfFeedbackQuestion
     */
    public function getQuestions()
    {
        return $this->Questions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfFeedbackQuestion $Questions
     *
     * @return FeedbackSection
     */
    public function withQuestions($Questions)
    {
        $new = clone $this;
        $new->Questions = $Questions;

        return $new;
    }
}
