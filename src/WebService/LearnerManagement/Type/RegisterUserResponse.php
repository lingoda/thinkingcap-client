<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterUserResponse implements ResultInterface
{
    private ?ServiceResultOfString $RegisterUserResult = null;

    public function getRegisterUserResult(): ?ServiceResultOfString
    {
        return $this->RegisterUserResult;
    }

    public function withRegisterUserResult(?ServiceResultOfString $RegisterUserResult): static
    {
        $new = clone $this;
        $new->RegisterUserResult = $RegisterUserResult;

        return $new;
    }

    public function ensureRegisterUserResult(): ServiceResultOfString
    {
        return $this->RegisterUserResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'RegisterUserResult');
    }
}
