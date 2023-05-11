<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceUser
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser
     */
    private $ServiceUser;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser
     */
    public function getServiceUser()
    {
        return $this->ServiceUser;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser $ServiceUser
     *
     * @return ArrayOfServiceUser
     */
    public function withServiceUser($ServiceUser)
    {
        $new = clone $this;
        $new->ServiceUser = $ServiceUser;

        return $new;
    }
}
