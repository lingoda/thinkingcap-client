<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterUserResponse implements ResultInterface
{
    private ServiceResultOfString $RegisterUserResult;

    public function getRegisterUserResult(): ServiceResultOfString
    {
        return $this->RegisterUserResult;
    }

    public function withRegisterUserResult(ServiceResultOfString $RegisterUserResult): static
    {
        $new = clone $this;
        $new->RegisterUserResult = $RegisterUserResult;

        return $new;
    }
}
