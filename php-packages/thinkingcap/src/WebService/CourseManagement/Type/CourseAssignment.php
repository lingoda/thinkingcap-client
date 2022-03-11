<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseAssignment
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
    private $Instructions;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var bool
     */
    private $Mastery;

    /**
     * @var int
     */
    private $MaxAttempts;

    /**
     * @var bool
     */
    private $AllowTextSubmission;

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
     * @return CourseAssignment
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
     * @return CourseAssignment
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
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     *
     * @return CourseAssignment
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->CourseID;
    }

    /**
     * @param string $CourseID
     *
     * @return CourseAssignment
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMastery()
    {
        return $this->Mastery;
    }

    /**
     * @param bool $Mastery
     *
     * @return CourseAssignment
     */
    public function withMastery($Mastery)
    {
        $new = clone $this;
        $new->Mastery = $Mastery;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAttempts()
    {
        return $this->MaxAttempts;
    }

    /**
     * @param int $MaxAttempts
     *
     * @return CourseAssignment
     */
    public function withMaxAttempts($MaxAttempts)
    {
        $new = clone $this;
        $new->MaxAttempts = $MaxAttempts;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowTextSubmission()
    {
        return $this->AllowTextSubmission;
    }

    /**
     * @param bool $AllowTextSubmission
     *
     * @return CourseAssignment
     */
    public function withAllowTextSubmission($AllowTextSubmission)
    {
        $new = clone $this;
        $new->AllowTextSubmission = $AllowTextSubmission;

        return $new;
    }
}
