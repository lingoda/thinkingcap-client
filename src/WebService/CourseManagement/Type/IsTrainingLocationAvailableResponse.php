<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class IsTrainingLocationAvailableResponse implements ResultInterface
{
    private ?ServiceResultOfBoolean $IsTrainingLocationAvailableResult = null;

    public function getIsTrainingLocationAvailableResult(): ?ServiceResultOfBoolean
    {
        return $this->IsTrainingLocationAvailableResult;
    }

    public function withIsTrainingLocationAvailableResult(?ServiceResultOfBoolean $IsTrainingLocationAvailableResult): static
    {
        $new = clone $this;
        $new->IsTrainingLocationAvailableResult = $IsTrainingLocationAvailableResult;

        return $new;
    }

    public function ensureIsTrainingLocationAvailableResult(): ServiceResultOfBoolean
    {
        return $this->IsTrainingLocationAvailableResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'IsTrainingLocationAvailableResult');
    }
}
