<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddUserToDomainWithEnrollmentsResponse implements ResultInterface
{
    private ?ServiceResultOfString $AddUserToDomainWithEnrollmentsResult = null;

    public function getAddUserToDomainWithEnrollmentsResult(): ?ServiceResultOfString
    {
        return $this->AddUserToDomainWithEnrollmentsResult;
    }

    public function withAddUserToDomainWithEnrollmentsResult(?ServiceResultOfString $AddUserToDomainWithEnrollmentsResult): static
    {
        $new = clone $this;
        $new->AddUserToDomainWithEnrollmentsResult = $AddUserToDomainWithEnrollmentsResult;

        return $new;
    }

    public function ensureAddUserToDomainWithEnrollmentsResult(): ServiceResultOfString
    {
        return $this->AddUserToDomainWithEnrollmentsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'AddUserToDomainWithEnrollmentsResult');
    }
}
