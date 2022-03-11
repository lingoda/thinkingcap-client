<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersByScreenNameResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    private $GetUsersByScreenNameResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    public function getGetUsersByScreenNameResult()
    {
        return $this->GetUsersByScreenNameResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList $GetUsersByScreenNameResult
     *
     * @return GetUsersByScreenNameResponse
     */
    public function withGetUsersByScreenNameResult($GetUsersByScreenNameResult)
    {
        $new = clone $this;
        $new->GetUsersByScreenNameResult = $GetUsersByScreenNameResult;

        return $new;
    }
}
