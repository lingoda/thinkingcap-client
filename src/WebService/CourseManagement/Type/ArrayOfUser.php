<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfUser
{
    /**
     * @var null | array<int<0,max>, User>
     */
    private ?array $User = null;

    /**
     * @return null | array<int<0,max>, User>
     */
    public function getUser(): ?array
    {
        return $this->User;
    }

    /**
     * @param null | array<int<0,max>, User> $User
     */
    public function withUser(?array $User): static
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }
}
