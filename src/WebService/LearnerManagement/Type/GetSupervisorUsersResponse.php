<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSupervisorUsersResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser
     */
    private $GetSupervisorUsersResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser
     */
    public function getGetSupervisorUsersResult()
    {
        return $this->GetSupervisorUsersResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser $GetSupervisorUsersResult
     *
     * @return GetSupervisorUsersResponse
     */
    public function withGetSupervisorUsersResult($GetSupervisorUsersResult)
    {
        $new = clone $this;
        $new->GetSupervisorUsersResult = $GetSupervisorUsersResult;

        return $new;
    }
}
