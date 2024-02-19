<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCourseNotification
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification>
     */
    private ?array $CourseNotification;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification>
     */
    public function getCourseNotification(): ?array
    {
        return $this->CourseNotification;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CourseNotification> $CourseNotification
     */
    public function withCourseNotification(?array $CourseNotification): static
    {
        $new = clone $this;
        $new->CourseNotification = $CourseNotification;

        return $new;
    }
}
