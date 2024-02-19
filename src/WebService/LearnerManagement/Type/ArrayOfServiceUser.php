<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceUser
{
    private ServiceUser $ServiceUser;

    
    public function getServiceUser(): ServiceUser
    {
        return $this->ServiceUser;
    }

    
    public function withServiceUser(ServiceUser $ServiceUser): static
    {
        $new = clone $this;
        $new->ServiceUser = $ServiceUser;

        return $new;
    }
}
