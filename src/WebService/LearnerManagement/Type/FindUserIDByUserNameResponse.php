<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByUserNameResponse implements ResultInterface
{
    private ServiceResultOfString $FindUserIDByUserNameResult;

    public function getFindUserIDByUserNameResult(): ServiceResultOfString
    {
        return $this->FindUserIDByUserNameResult;
    }

    public function withFindUserIDByUserNameResult(ServiceResultOfString $FindUserIDByUserNameResult): static
    {
        $new = clone $this;
        $new->FindUserIDByUserNameResult = $FindUserIDByUserNameResult;

        return $new;
    }
}
