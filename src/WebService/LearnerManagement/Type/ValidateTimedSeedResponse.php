<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidateTimedSeedResponse implements ResultInterface
{
    private ServiceResultOfBoolean $ValidateTimedSeedResult;

    public function getValidateTimedSeedResult(): ServiceResultOfBoolean
    {
        return $this->ValidateTimedSeedResult;
    }

    public function withValidateTimedSeedResult(ServiceResultOfBoolean $ValidateTimedSeedResult): static
    {
        $new = clone $this;
        $new->ValidateTimedSeedResult = $ValidateTimedSeedResult;

        return $new;
    }
}
