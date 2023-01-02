<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceSupervisor
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SupervisorType
     */
    private $SupervisorType;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SupervisorType
     */
    public function getSupervisorType()
    {
        return $this->SupervisorType;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SupervisorType $SupervisorType
     *
     * @return ServiceSupervisor
     */
    public function withSupervisorType($SupervisorType)
    {
        $new = clone $this;
        $new->SupervisorType = $SupervisorType;

        return $new;
    }
}
