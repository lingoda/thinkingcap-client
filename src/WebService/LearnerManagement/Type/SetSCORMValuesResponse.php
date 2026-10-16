<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetSCORMValuesResponse implements ResultInterface
{
    private ?ServiceResultOfString $SetSCORMValuesResult = null;

    public function getSetSCORMValuesResult(): ?ServiceResultOfString
    {
        return $this->SetSCORMValuesResult;
    }

    public function withSetSCORMValuesResult(?ServiceResultOfString $SetSCORMValuesResult): static
    {
        $new = clone $this;
        $new->SetSCORMValuesResult = $SetSCORMValuesResult;

        return $new;
    }

    public function ensureSetSCORMValuesResult(): ServiceResultOfString
    {
        return $this->SetSCORMValuesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'SetSCORMValuesResult');
    }
}
