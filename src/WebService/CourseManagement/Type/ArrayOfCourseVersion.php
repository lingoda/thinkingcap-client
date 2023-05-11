<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseVersion
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseVersion
     */
    private $CourseVersion;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseVersion
     */
    public function getCourseVersion()
    {
        return $this->CourseVersion;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseVersion $CourseVersion
     *
     * @return ArrayOfCourseVersion
     */
    public function withCourseVersion($CourseVersion)
    {
        $new = clone $this;
        $new->CourseVersion = $CourseVersion;

        return $new;
    }
}
