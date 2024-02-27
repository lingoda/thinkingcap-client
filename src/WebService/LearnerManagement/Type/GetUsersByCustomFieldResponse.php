<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersByCustomFieldResponse implements ResultInterface
{
    private ServiceResultOfUserList $GetUsersByCustomFieldResult;

    public function getGetUsersByCustomFieldResult(): ServiceResultOfUserList
    {
        return $this->GetUsersByCustomFieldResult;
    }

    public function withGetUsersByCustomFieldResult(ServiceResultOfUserList $GetUsersByCustomFieldResult): static
    {
        $new = clone $this;
        $new->GetUsersByCustomFieldResult = $GetUsersByCustomFieldResult;

        return $new;
    }
}
