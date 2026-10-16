<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByUserNameResponse implements ResultInterface
{
    private ?ServiceResultOfString $FindUserIDByUserNameResult = null;

    public function getFindUserIDByUserNameResult(): ?ServiceResultOfString
    {
        return $this->FindUserIDByUserNameResult;
    }

    public function withFindUserIDByUserNameResult(?ServiceResultOfString $FindUserIDByUserNameResult): static
    {
        $new = clone $this;
        $new->FindUserIDByUserNameResult = $FindUserIDByUserNameResult;

        return $new;
    }

    public function ensureFindUserIDByUserNameResult(): ServiceResultOfString
    {
        return $this->FindUserIDByUserNameResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'FindUserIDByUserNameResult');
    }
}
