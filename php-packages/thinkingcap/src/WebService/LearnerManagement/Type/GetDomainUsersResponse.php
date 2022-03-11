<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainUsersResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser
     */
    private $GetDomainUsersResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser
     */
    public function getGetDomainUsersResult()
    {
        return $this->GetDomainUsersResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfServiceUser $GetDomainUsersResult
     *
     * @return GetDomainUsersResponse
     */
    public function withGetDomainUsersResult($GetDomainUsersResult)
    {
        $new = clone $this;
        $new->GetDomainUsersResult = $GetDomainUsersResult;

        return $new;
    }
}
