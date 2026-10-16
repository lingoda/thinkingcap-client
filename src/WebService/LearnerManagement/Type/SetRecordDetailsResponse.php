<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetRecordDetailsResponse implements ResultInterface
{
    private ?ServiceResultOfString $SetRecordDetailsResult = null;

    public function getSetRecordDetailsResult(): ?ServiceResultOfString
    {
        return $this->SetRecordDetailsResult;
    }

    public function withSetRecordDetailsResult(?ServiceResultOfString $SetRecordDetailsResult): static
    {
        $new = clone $this;
        $new->SetRecordDetailsResult = $SetRecordDetailsResult;

        return $new;
    }

    public function ensureSetRecordDetailsResult(): ServiceResultOfString
    {
        return $this->SetRecordDetailsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'SetRecordDetailsResult');
    }
}
