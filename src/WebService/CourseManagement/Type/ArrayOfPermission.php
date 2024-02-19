<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfPermission
{
    private Permission $Permission;

    
    public function getPermission(): Permission
    {
        return $this->Permission;
    }

    
    public function withPermission(Permission $Permission): static
    {
        $new = clone $this;
        $new->Permission = $Permission;

        return $new;
    }
}
