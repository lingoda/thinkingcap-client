<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceSupervisor
{
    private SupervisorType $SupervisorType;

    
    public function getSupervisorType(): SupervisorType
    {
        return $this->SupervisorType;
    }

    
    public function withSupervisorType(SupervisorType $SupervisorType): static
    {
        $new = clone $this;
        $new->SupervisorType = $SupervisorType;

        return $new;
    }
}
