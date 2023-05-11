<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseVersion
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion
     */
    private $CourseVersion;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion
     */
    public function getCourseVersion()
    {
        return $this->CourseVersion;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion $CourseVersion
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
