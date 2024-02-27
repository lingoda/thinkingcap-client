<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseSession
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession>
     */
    private ?array $CourseSession = null;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession>
     */
    public function getCourseSession(): ?array
    {
        return $this->CourseSession;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseSession> $CourseSession
     */
    public function withCourseSession(?array $CourseSession): static
    {
        $new = clone $this;
        $new->CourseSession = $CourseSession;

        return $new;
    }
}
