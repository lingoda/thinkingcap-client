<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceSupervisor
{
    private ServiceSupervisor $ServiceSupervisor;

    
    public function getServiceSupervisor(): ServiceSupervisor
    {
        return $this->ServiceSupervisor;
    }

    
    public function withServiceSupervisor(ServiceSupervisor $ServiceSupervisor): static
    {
        $new = clone $this;
        $new->ServiceSupervisor = $ServiceSupervisor;

        return $new;
    }
}
