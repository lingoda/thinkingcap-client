<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserResponse implements ResultInterface
{
    private ?ServiceResultOfString $UpdateUserResult = null;

    public function getUpdateUserResult(): ?ServiceResultOfString
    {
        return $this->UpdateUserResult;
    }

    public function withUpdateUserResult(?ServiceResultOfString $UpdateUserResult): static
    {
        $new = clone $this;
        $new->UpdateUserResult = $UpdateUserResult;

        return $new;
    }

    public function ensureUpdateUserResult(): ServiceResultOfString
    {
        return $this->UpdateUserResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'UpdateUserResult');
    }
}
