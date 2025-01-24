<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfPermission
{
    /**
     * @var null | array<int<0,max>, Permission>
     */
    private ?array $Permission = null;

    /**
     * @return null | array<int<0,max>, Permission>
     */
    public function getPermission(): ?array
    {
        return $this->Permission;
    }

    /**
     * @param null | array<int<0,max>, Permission> $Permission
     */
    public function withPermission(?array $Permission): static
    {
        $new = clone $this;
        $new->Permission = $Permission;

        return $new;
    }
}
