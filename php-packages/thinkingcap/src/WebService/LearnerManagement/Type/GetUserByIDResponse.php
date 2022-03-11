<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByIDResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser
     */
    private $GetUserByIDResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser
     */
    public function getGetUserByIDResult()
    {
        return $this->GetUserByIDResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser $GetUserByIDResult
     *
     * @return GetUserByIDResponse
     */
    public function withGetUserByIDResult($GetUserByIDResult)
    {
        $new = clone $this;
        $new->GetUserByIDResult = $GetUserByIDResult;

        return $new;
    }
}
