<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByCustomFieldResponse implements ResultInterface
{
    private ServiceResultOfString $FindUserIDByCustomFieldResult;

    public function getFindUserIDByCustomFieldResult(): ServiceResultOfString
    {
        return $this->FindUserIDByCustomFieldResult;
    }

    public function withFindUserIDByCustomFieldResult(ServiceResultOfString $FindUserIDByCustomFieldResult): static
    {
        $new = clone $this;
        $new->FindUserIDByCustomFieldResult = $FindUserIDByCustomFieldResult;

        return $new;
    }
}
