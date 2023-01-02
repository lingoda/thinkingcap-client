<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterBulkUserResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $RegisterBulkUserResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getRegisterBulkUserResult()
    {
        return $this->RegisterBulkUserResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $RegisterBulkUserResult
     *
     * @return RegisterBulkUserResponse
     */
    public function withRegisterBulkUserResult($RegisterBulkUserResult)
    {
        $new = clone $this;
        $new->RegisterBulkUserResult = $RegisterBulkUserResult;

        return $new;
    }
}
