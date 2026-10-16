<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserSupervisorsResponse implements ResultInterface
{
    private ?ServiceResultOfListOfServiceSupervisor $GetUserSupervisorsResult = null;

    public function getGetUserSupervisorsResult(): ?ServiceResultOfListOfServiceSupervisor
    {
        return $this->GetUserSupervisorsResult;
    }

    public function withGetUserSupervisorsResult(?ServiceResultOfListOfServiceSupervisor $GetUserSupervisorsResult): static
    {
        $new = clone $this;
        $new->GetUserSupervisorsResult = $GetUserSupervisorsResult;

        return $new;
    }

    public function ensureGetUserSupervisorsResult(): ServiceResultOfListOfServiceSupervisor
    {
        return $this->GetUserSupervisorsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetUserSupervisorsResult');
    }
}
