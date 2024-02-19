<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfUser
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\User>
     */
    private ?array $User;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\User>
     */
    public function getUser(): ?array
    {
        return $this->User;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\User> $User
     */
    public function withUser(?array $User): static
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }
}
