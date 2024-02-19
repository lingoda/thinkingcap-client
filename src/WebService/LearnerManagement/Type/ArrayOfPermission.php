<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfPermission
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Permission>
     */
    private ?array $Permission;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Permission>
     */
    public function getPermission(): ?array
    {
        return $this->Permission;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Permission> $Permission
     */
    public function withPermission(?array $Permission): static
    {
        $new = clone $this;
        $new->Permission = $Permission;

        return $new;
    }
}
