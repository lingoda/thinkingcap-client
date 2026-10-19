<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersByScreenNameResponse implements ResultInterface
{
    private ?ServiceResultOfUserList $GetUsersByScreenNameResult = null;

    public function getGetUsersByScreenNameResult(): ?ServiceResultOfUserList
    {
        return $this->GetUsersByScreenNameResult;
    }

    public function withGetUsersByScreenNameResult(?ServiceResultOfUserList $GetUsersByScreenNameResult): static
    {
        $new = clone $this;
        $new->GetUsersByScreenNameResult = $GetUsersByScreenNameResult;

        return $new;
    }

    public function ensureGetUsersByScreenNameResult(): ServiceResultOfUserList
    {
        return $this->GetUsersByScreenNameResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetUsersByScreenNameResult');
    }
}
