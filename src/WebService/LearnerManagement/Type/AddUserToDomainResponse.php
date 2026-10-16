<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddUserToDomainResponse implements ResultInterface
{
    private ?ServiceResultOfString $AddUserToDomainResult = null;

    public function getAddUserToDomainResult(): ?ServiceResultOfString
    {
        return $this->AddUserToDomainResult;
    }

    public function withAddUserToDomainResult(?ServiceResultOfString $AddUserToDomainResult): static
    {
        $new = clone $this;
        $new->AddUserToDomainResult = $AddUserToDomainResult;

        return $new;
    }

    public function ensureAddUserToDomainResult(): ServiceResultOfString
    {
        return $this->AddUserToDomainResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'AddUserToDomainResult');
    }
}
