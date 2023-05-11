<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfPermission
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Permission
     */
    private $Permission;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Permission
     */
    public function getPermission()
    {
        return $this->Permission;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Permission $Permission
     *
     * @return ArrayOfPermission
     */
    public function withPermission($Permission)
    {
        $new = clone $this;
        $new->Permission = $Permission;

        return $new;
    }
}
