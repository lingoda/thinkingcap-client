<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidateTimedSeedResponse implements ResultInterface
{
    private ?ServiceResultOfBoolean $ValidateTimedSeedResult = null;

    public function getValidateTimedSeedResult(): ?ServiceResultOfBoolean
    {
        return $this->ValidateTimedSeedResult;
    }

    public function withValidateTimedSeedResult(?ServiceResultOfBoolean $ValidateTimedSeedResult): static
    {
        $new = clone $this;
        $new->ValidateTimedSeedResult = $ValidateTimedSeedResult;

        return $new;
    }

    public function ensureValidateTimedSeedResult(): ServiceResultOfBoolean
    {
        return $this->ValidateTimedSeedResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'ValidateTimedSeedResult');
    }
}
