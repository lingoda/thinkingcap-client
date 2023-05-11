<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteUserResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $DeleteUserResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getDeleteUserResult()
    {
        return $this->DeleteUserResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $DeleteUserResult
     *
     * @return DeleteUserResponse
     */
    public function withDeleteUserResult($DeleteUserResult)
    {
        $new = clone $this;
        $new->DeleteUserResult = $DeleteUserResult;

        return $new;
    }
}
