<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfActivityNotification
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification>
     */
    private ?array $ActivityNotification;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification>
     */
    public function getActivityNotification(): ?array
    {
        return $this->ActivityNotification;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification> $ActivityNotification
     */
    public function withActivityNotification(?array $ActivityNotification): static
    {
        $new = clone $this;
        $new->ActivityNotification = $ActivityNotification;

        return $new;
    }
}
