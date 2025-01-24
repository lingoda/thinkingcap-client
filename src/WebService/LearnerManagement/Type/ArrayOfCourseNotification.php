<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCourseNotification
{
    /**
     * @var null | array<int<0,max>, CourseNotification>
     */
    private ?array $CourseNotification = null;

    /**
     * @return null | array<int<0,max>, CourseNotification>
     */
    public function getCourseNotification(): ?array
    {
        return $this->CourseNotification;
    }

    /**
     * @param null | array<int<0,max>, CourseNotification> $CourseNotification
     */
    public function withCourseNotification(?array $CourseNotification): static
    {
        $new = clone $this;
        $new->CourseNotification = $CourseNotification;

        return $new;
    }
}
