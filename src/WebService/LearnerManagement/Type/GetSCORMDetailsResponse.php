<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSCORMDetailsResponse implements ResultInterface
{
    private ?ServiceResultOfString $GetSCORMDetailsResult = null;

    public function getGetSCORMDetailsResult(): ?ServiceResultOfString
    {
        return $this->GetSCORMDetailsResult;
    }

    public function withGetSCORMDetailsResult(?ServiceResultOfString $GetSCORMDetailsResult): static
    {
        $new = clone $this;
        $new->GetSCORMDetailsResult = $GetSCORMDetailsResult;

        return $new;
    }

    public function ensureGetSCORMDetailsResult(): ServiceResultOfString
    {
        return $this->GetSCORMDetailsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetSCORMDetailsResult');
    }
}
