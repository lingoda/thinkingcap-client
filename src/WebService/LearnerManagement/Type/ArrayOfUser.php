<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfUser
{
    private User $User;

    
    public function getUser(): User
    {
        return $this->User;
    }

    
    public function withUser(User $User): static
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }
}
