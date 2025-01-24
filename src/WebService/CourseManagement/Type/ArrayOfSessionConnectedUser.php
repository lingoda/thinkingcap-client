<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfSessionConnectedUser
{
    /**
     * @var null | array<int<0,max>, SessionConnectedUser>
     */
    private ?array $SessionConnectedUser = null;

    /**
     * @return null | array<int<0,max>, SessionConnectedUser>
     */
    public function getSessionConnectedUser(): ?array
    {
        return $this->SessionConnectedUser;
    }

    /**
     * @param null | array<int<0,max>, SessionConnectedUser> $SessionConnectedUser
     */
    public function withSessionConnectedUser(?array $SessionConnectedUser): static
    {
        $new = clone $this;
        $new->SessionConnectedUser = $SessionConnectedUser;

        return $new;
    }
}
