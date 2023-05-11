<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSession
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession
     */
    private $CourseSession;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession
     */
    public function getCourseSession()
    {
        return $this->CourseSession;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession $CourseSession
     *
     * @return ArrayOfCourseSession
     */
    public function withCourseSession($CourseSession)
    {
        $new = clone $this;
        $new->CourseSession = $CourseSession;

        return $new;
    }
}
