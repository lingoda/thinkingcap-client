<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceSupervisor
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor
     */
    private $ServiceSupervisor;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor
     */
    public function getServiceSupervisor()
    {
        return $this->ServiceSupervisor;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor $ServiceSupervisor
     *
     * @return ArrayOfServiceSupervisor
     */
    public function withServiceSupervisor($ServiceSupervisor)
    {
        $new = clone $this;
        $new->ServiceSupervisor = $ServiceSupervisor;

        return $new;
    }
}
