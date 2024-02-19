<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceSupervisor
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor>
     */
    private ?array $ServiceSupervisor;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor>
     */
    public function getServiceSupervisor(): ?array
    {
        return $this->ServiceSupervisor;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceSupervisor> $ServiceSupervisor
     */
    public function withServiceSupervisor(?array $ServiceSupervisor): static
    {
        $new = clone $this;
        $new->ServiceSupervisor = $ServiceSupervisor;

        return $new;
    }
}
