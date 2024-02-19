<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByEmailResponse implements ResultInterface
{
    private ServiceResultOfServiceUser $GetUserByEmailResult;

    public function getGetUserByEmailResult(): ServiceResultOfServiceUser
    {
        return $this->GetUserByEmailResult;
    }

    public function withGetUserByEmailResult(ServiceResultOfServiceUser $GetUserByEmailResult): static
    {
        $new = clone $this;
        $new->GetUserByEmailResult = $GetUserByEmailResult;

        return $new;
    }
}
