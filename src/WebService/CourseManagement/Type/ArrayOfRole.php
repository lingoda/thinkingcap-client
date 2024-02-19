<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfRole
{
    private Role $Role;

    
    public function getRole(): Role
    {
        return $this->Role;
    }

    
    public function withRole(Role $Role): static
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }
}
