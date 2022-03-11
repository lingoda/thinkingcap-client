<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersByCustomFieldResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    private $GetUsersByCustomFieldResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    public function getGetUsersByCustomFieldResult()
    {
        return $this->GetUsersByCustomFieldResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList $GetUsersByCustomFieldResult
     *
     * @return GetUsersByCustomFieldResponse
     */
    public function withGetUsersByCustomFieldResult($GetUsersByCustomFieldResult)
    {
        $new = clone $this;
        $new->GetUsersByCustomFieldResult = $GetUsersByCustomFieldResult;

        return $new;
    }
}
