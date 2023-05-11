<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfActivityNotification
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification
     */
    private $ActivityNotification;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification
     */
    public function getActivityNotification()
    {
        return $this->ActivityNotification;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ActivityNotification $ActivityNotification
     *
     * @return ArrayOfActivityNotification
     */
    public function withActivityNotification($ActivityNotification)
    {
        $new = clone $this;
        $new->ActivityNotification = $ActivityNotification;

        return $new;
    }
}
