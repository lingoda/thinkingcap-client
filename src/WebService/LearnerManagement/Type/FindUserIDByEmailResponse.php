<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByEmailResponse implements ResultInterface
{
    private ?ServiceResultOfString $FindUserIDByEmailResult = null;

    public function getFindUserIDByEmailResult(): ?ServiceResultOfString
    {
        return $this->FindUserIDByEmailResult;
    }

    public function withFindUserIDByEmailResult(?ServiceResultOfString $FindUserIDByEmailResult): static
    {
        $new = clone $this;
        $new->FindUserIDByEmailResult = $FindUserIDByEmailResult;

        return $new;
    }

    public function ensureFindUserIDByEmailResult(): ServiceResultOfString
    {
        return $this->FindUserIDByEmailResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'FindUserIDByEmailResult');
    }
}
