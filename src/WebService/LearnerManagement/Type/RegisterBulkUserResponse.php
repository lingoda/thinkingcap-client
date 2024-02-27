<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterBulkUserResponse implements ResultInterface
{
    private ServiceResultOfString $RegisterBulkUserResult;

    public function getRegisterBulkUserResult(): ServiceResultOfString
    {
        return $this->RegisterBulkUserResult;
    }

    public function withRegisterBulkUserResult(ServiceResultOfString $RegisterBulkUserResult): static
    {
        $new = clone $this;
        $new->RegisterBulkUserResult = $RegisterBulkUserResult;

        return $new;
    }
}
