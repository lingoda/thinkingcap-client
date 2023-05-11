<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllUsersResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    private $GetAllUsersResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList
     */
    public function getGetAllUsersResult()
    {
        return $this->GetAllUsersResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfUserList $GetAllUsersResult
     *
     * @return GetAllUsersResponse
     */
    public function withGetAllUsersResult($GetAllUsersResult)
    {
        $new = clone $this;
        $new->GetAllUsersResult = $GetAllUsersResult;

        return $new;
    }
}
