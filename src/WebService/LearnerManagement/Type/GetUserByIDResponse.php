<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByIDResponse implements ResultInterface
{
    private ?ServiceResultOfServiceUser $GetUserByIDResult = null;

    public function getGetUserByIDResult(): ?ServiceResultOfServiceUser
    {
        return $this->GetUserByIDResult;
    }

    public function withGetUserByIDResult(?ServiceResultOfServiceUser $GetUserByIDResult): static
    {
        $new = clone $this;
        $new->GetUserByIDResult = $GetUserByIDResult;

        return $new;
    }

    public function ensureGetUserByIDResult(): ServiceResultOfServiceUser
    {
        return $this->GetUserByIDResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetUserByIDResult');
    }
}
