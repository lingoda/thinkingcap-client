<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseTALoad
{
    /**
     * @var string
     */
    private $TaID;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var int
     */
    private $TaStudentCount;

    /**
     * @return string
     */
    public function getTaID()
    {
        return $this->TaID;
    }

    /**
     * @param string $TaID
     *
     * @return CourseTALoad
     */
    public function withTaID($TaID)
    {
        $new = clone $this;
        $new->TaID = $TaID;

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
     * @return CourseTALoad
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return int
     */
    public function getTaStudentCount()
    {
        return $this->TaStudentCount;
    }

    /**
     * @param int $TaStudentCount
     *
     * @return CourseTALoad
     */
    public function withTaStudentCount($TaStudentCount)
    {
        $new = clone $this;
        $new->TaStudentCount = $TaStudentCount;

        return $new;
    }
}
