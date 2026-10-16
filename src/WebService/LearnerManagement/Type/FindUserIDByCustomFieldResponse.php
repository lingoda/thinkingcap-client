<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByCustomFieldResponse implements ResultInterface
{
    private ?ServiceResultOfString $FindUserIDByCustomFieldResult = null;

    public function getFindUserIDByCustomFieldResult(): ?ServiceResultOfString
    {
        return $this->FindUserIDByCustomFieldResult;
    }

    public function withFindUserIDByCustomFieldResult(?ServiceResultOfString $FindUserIDByCustomFieldResult): static
    {
        $new = clone $this;
        $new->FindUserIDByCustomFieldResult = $FindUserIDByCustomFieldResult;

        return $new;
    }

    public function ensureFindUserIDByCustomFieldResult(): ServiceResultOfString
    {
        return $this->FindUserIDByCustomFieldResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'FindUserIDByCustomFieldResult');
    }
}
