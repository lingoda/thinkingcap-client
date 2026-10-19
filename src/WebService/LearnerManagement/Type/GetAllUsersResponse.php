<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllUsersResponse implements ResultInterface
{
    private ?ServiceResultOfUserList $GetAllUsersResult = null;

    public function getGetAllUsersResult(): ?ServiceResultOfUserList
    {
        return $this->GetAllUsersResult;
    }

    public function withGetAllUsersResult(?ServiceResultOfUserList $GetAllUsersResult): static
    {
        $new = clone $this;
        $new->GetAllUsersResult = $GetAllUsersResult;

        return $new;
    }

    public function ensureGetAllUsersResult(): ServiceResultOfUserList
    {
        return $this->GetAllUsersResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetAllUsersResult');
    }
}
