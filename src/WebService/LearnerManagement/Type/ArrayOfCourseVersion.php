<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseVersion
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion>
     */
    private ?array $CourseVersion;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion>
     */
    public function getCourseVersion(): ?array
    {
        return $this->CourseVersion;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CourseVersion> $CourseVersion
     */
    public function withCourseVersion(?array $CourseVersion): static
    {
        $new = clone $this;
        $new->CourseVersion = $CourseVersion;

        return $new;
    }
}
