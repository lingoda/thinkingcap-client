<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByEmailResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser
     */
    private $GetUserByEmailResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser
     */
    public function getGetUserByEmailResult()
    {
        return $this->GetUserByEmailResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser $GetUserByEmailResult
     *
     * @return GetUserByEmailResponse
     */
    public function withGetUserByEmailResult($GetUserByEmailResult)
    {
        $new = clone $this;
        $new->GetUserByEmailResult = $GetUserByEmailResult;

        return $new;
    }
}
