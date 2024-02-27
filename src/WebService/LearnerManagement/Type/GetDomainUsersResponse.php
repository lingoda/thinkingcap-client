<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainUsersResponse implements ResultInterface
{
    private ServiceResultOfListOfServiceUser $GetDomainUsersResult;

    public function getGetDomainUsersResult(): ServiceResultOfListOfServiceUser
    {
        return $this->GetDomainUsersResult;
    }

    public function withGetDomainUsersResult(ServiceResultOfListOfServiceUser $GetDomainUsersResult): static
    {
        $new = clone $this;
        $new->GetDomainUsersResult = $GetDomainUsersResult;

        return $new;
    }
}
