<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterUserResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $RegisterUserResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getRegisterUserResult()
    {
        return $this->RegisterUserResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $RegisterUserResult
     *
     * @return RegisterUserResponse
     */
    public function withRegisterUserResult($RegisterUserResult)
    {
        $new = clone $this;
        $new->RegisterUserResult = $RegisterUserResult;

        return $new;
    }
}
