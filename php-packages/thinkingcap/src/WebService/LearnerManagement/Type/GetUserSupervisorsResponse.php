<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserSupervisorsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceSupervisor
     */
    private $GetUserSupervisorsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceSupervisor
     */
    public function getGetUserSupervisorsResult()
    {
        return $this->GetUserSupervisorsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceSupervisor $GetUserSupervisorsResult
     *
     * @return GetUserSupervisorsResponse
     */
    public function withGetUserSupervisorsResult($GetUserSupervisorsResult)
    {
        $new = clone $this;
        $new->GetUserSupervisorsResult = $GetUserSupervisorsResult;

        return $new;
    }
}
