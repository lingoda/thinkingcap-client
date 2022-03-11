<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfUser
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\User
     */
    private $User;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\User
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\User $User
     *
     * @return ArrayOfUser
     */
    public function withUser($User)
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }
}
