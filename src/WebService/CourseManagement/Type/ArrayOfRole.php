<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfRole
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role
     */
    private $Role;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role $Role
     *
     * @return ArrayOfRole
     */
    public function withRole($Role)
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }
}
