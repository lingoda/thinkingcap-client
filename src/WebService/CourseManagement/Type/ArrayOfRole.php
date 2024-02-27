<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfRole
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role>
     */
    private ?array $Role;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role>
     */
    public function getRole(): ?array
    {
        return $this->Role;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Role> $Role
     */
    public function withRole(?array $Role): static
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }
}
