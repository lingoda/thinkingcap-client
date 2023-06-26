<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class LearningActivityCohort
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \DateTimeInterface
     */
    private $StartDate;

    /**
     * @var \DateTimeInterface
     */
    private $DueDate;

    /**
     * @var int
     */
    private $MaxEnrollments;

    /**
     * @var bool
     */
    private $AllowSelfEnroll;

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
     * @return LearningActivityCohort
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return LearningActivityCohort
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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return LearningActivityCohort
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return LearningActivityCohort
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     *
     * @return LearningActivityCohort
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param \DateTimeInterface $DueDate
     *
     * @return LearningActivityCohort
     */
    public function withDueDate($DueDate)
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxEnrollments()
    {
        return $this->MaxEnrollments;
    }

    /**
     * @param int $MaxEnrollments
     *
     * @return LearningActivityCohort
     */
    public function withMaxEnrollments($MaxEnrollments)
    {
        $new = clone $this;
        $new->MaxEnrollments = $MaxEnrollments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowSelfEnroll()
    {
        return $this->AllowSelfEnroll;
    }

    /**
     * @param bool $AllowSelfEnroll
     *
     * @return LearningActivityCohort
     */
    public function withAllowSelfEnroll($AllowSelfEnroll)
    {
        $new = clone $this;
        $new->AllowSelfEnroll = $AllowSelfEnroll;

        return $new;
    }
}
