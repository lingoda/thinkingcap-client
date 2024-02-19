<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSupervisorUsersResponse implements ResultInterface
{
    private ServiceResultOfListOfServiceUser $GetSupervisorUsersResult;

    
    public function getGetSupervisorUsersResult(): ServiceResultOfListOfServiceUser
    {
        return $this->GetSupervisorUsersResult;
    }

    
    public function withGetSupervisorUsersResult(ServiceResultOfListOfServiceUser $GetSupervisorUsersResult): static
    {
        $new = clone $this;
        $new->GetSupervisorUsersResult = $GetSupervisorUsersResult;

        return $new;
    }
}
