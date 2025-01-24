<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfRole
{
    /**
     * @var null | array<int<0,max>, Role>
     */
    private ?array $Role = null;

    /**
     * @return null | array<int<0,max>, Role>
     */
    public function getRole(): ?array
    {
        return $this->Role;
    }

    /**
     * @param null | array<int<0,max>, Role> $Role
     */
    public function withRole(?array $Role): static
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }
}
