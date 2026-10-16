<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUserActiveByLookupResponse implements ResultInterface
{
    private ?ServiceResultOfString $SetUserActiveByLookupResult = null;

    public function getSetUserActiveByLookupResult(): ?ServiceResultOfString
    {
        return $this->SetUserActiveByLookupResult;
    }

    public function withSetUserActiveByLookupResult(?ServiceResultOfString $SetUserActiveByLookupResult): static
    {
        $new = clone $this;
        $new->SetUserActiveByLookupResult = $SetUserActiveByLookupResult;

        return $new;
    }

    public function ensureSetUserActiveByLookupResult(): ServiceResultOfString
    {
        return $this->SetUserActiveByLookupResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'SetUserActiveByLookupResult');
    }
}
