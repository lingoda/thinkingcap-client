<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceSupervisor
{
    /**
     * @var null | array<int<0,max>, ServiceSupervisor>
     */
    private ?array $ServiceSupervisor = null;

    /**
     * @return null | array<int<0,max>, ServiceSupervisor>
     */
    public function getServiceSupervisor(): ?array
    {
        return $this->ServiceSupervisor;
    }

    /**
     * @param null | array<int<0,max>, ServiceSupervisor> $ServiceSupervisor
     */
    public function withServiceSupervisor(?array $ServiceSupervisor): static
    {
        $new = clone $this;
        $new->ServiceSupervisor = $ServiceSupervisor;

        return $new;
    }
}
