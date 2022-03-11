<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByUserNameResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUser
     */
    private $GetUserByUserNameResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUser
     */
    public function getGetUserByUserNameResult()
    {
        return $this->GetUserByUserNameResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUser $GetUserByUserNameResult
     *
     * @return GetUserByUserNameResponse
     */
    public function withGetUserByUserNameResult($GetUserByUserNameResult)
    {
        $new = clone $this;
        $new->GetUserByUserNameResult = $GetUserByUserNameResult;

        return $new;
    }
}
