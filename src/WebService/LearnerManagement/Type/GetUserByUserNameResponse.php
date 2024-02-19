<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserByUserNameResponse implements ResultInterface
{
    private ServiceResultOfUser $GetUserByUserNameResult;

    
    public function getGetUserByUserNameResult(): ServiceResultOfUser
    {
        return $this->GetUserByUserNameResult;
    }

    
    public function withGetUserByUserNameResult(ServiceResultOfUser $GetUserByUserNameResult): static
    {
        $new = clone $this;
        $new->GetUserByUserNameResult = $GetUserByUserNameResult;

        return $new;
    }
}
