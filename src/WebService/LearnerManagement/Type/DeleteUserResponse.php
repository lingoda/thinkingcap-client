<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteUserResponse implements ResultInterface
{
    private ?ServiceResultOfString $DeleteUserResult = null;

    public function getDeleteUserResult(): ?ServiceResultOfString
    {
        return $this->DeleteUserResult;
    }

    public function withDeleteUserResult(?ServiceResultOfString $DeleteUserResult): static
    {
        $new = clone $this;
        $new->DeleteUserResult = $DeleteUserResult;

        return $new;
    }

    public function ensureDeleteUserResult(): ServiceResultOfString
    {
        return $this->DeleteUserResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'DeleteUserResult');
    }
}
