<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainUsersResponse implements ResultInterface
{
    private ?ServiceResultOfListOfServiceUser $GetDomainUsersResult = null;

    public function getGetDomainUsersResult(): ?ServiceResultOfListOfServiceUser
    {
        return $this->GetDomainUsersResult;
    }

    public function withGetDomainUsersResult(?ServiceResultOfListOfServiceUser $GetDomainUsersResult): static
    {
        $new = clone $this;
        $new->GetDomainUsersResult = $GetDomainUsersResult;

        return $new;
    }

    public function ensureGetDomainUsersResult(): ServiceResultOfListOfServiceUser
    {
        return $this->GetDomainUsersResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetDomainUsersResult');
    }
}
