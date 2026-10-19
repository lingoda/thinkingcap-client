<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSupervisorUsersResponse implements ResultInterface
{
    private ?ServiceResultOfListOfServiceUser $GetSupervisorUsersResult = null;

    public function getGetSupervisorUsersResult(): ?ServiceResultOfListOfServiceUser
    {
        return $this->GetSupervisorUsersResult;
    }

    public function withGetSupervisorUsersResult(?ServiceResultOfListOfServiceUser $GetSupervisorUsersResult): static
    {
        $new = clone $this;
        $new->GetSupervisorUsersResult = $GetSupervisorUsersResult;

        return $new;
    }

    public function ensureGetSupervisorUsersResult(): ServiceResultOfListOfServiceUser
    {
        return $this->GetSupervisorUsersResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetSupervisorUsersResult');
    }
}
