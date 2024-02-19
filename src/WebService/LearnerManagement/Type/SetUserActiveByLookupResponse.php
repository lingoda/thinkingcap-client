<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUserActiveByLookupResponse implements ResultInterface
{
    private ServiceResultOfString $SetUserActiveByLookupResult;

    public function getSetUserActiveByLookupResult(): ServiceResultOfString
    {
        return $this->SetUserActiveByLookupResult;
    }

    public function withSetUserActiveByLookupResult(ServiceResultOfString $SetUserActiveByLookupResult): static
    {
        $new = clone $this;
        $new->SetUserActiveByLookupResult = $SetUserActiveByLookupResult;

        return $new;
    }
}
