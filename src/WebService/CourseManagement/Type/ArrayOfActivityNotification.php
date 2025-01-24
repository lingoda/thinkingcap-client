<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfActivityNotification
{
    /**
     * @var null | array<int<0,max>, ActivityNotification>
     */
    private ?array $ActivityNotification = null;

    /**
     * @return null | array<int<0,max>, ActivityNotification>
     */
    public function getActivityNotification(): ?array
    {
        return $this->ActivityNotification;
    }

    /**
     * @param null | array<int<0,max>, ActivityNotification> $ActivityNotification
     */
    public function withActivityNotification(?array $ActivityNotification): static
    {
        $new = clone $this;
        $new->ActivityNotification = $ActivityNotification;

        return $new;
    }
}
