<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfActivityNotification
{
    private ActivityNotification $ActivityNotification;

    
    public function getActivityNotification(): ActivityNotification
    {
        return $this->ActivityNotification;
    }

    
    public function withActivityNotification(ActivityNotification $ActivityNotification): static
    {
        $new = clone $this;
        $new->ActivityNotification = $ActivityNotification;

        return $new;
    }
}
