<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTrainingLocationResponse implements ResultInterface
{
    private ?ServiceResultOfTrainingLocation $GetTrainingLocationResult = null;

    public function getGetTrainingLocationResult(): ?ServiceResultOfTrainingLocation
    {
        return $this->GetTrainingLocationResult;
    }

    public function withGetTrainingLocationResult(?ServiceResultOfTrainingLocation $GetTrainingLocationResult): static
    {
        $new = clone $this;
        $new->GetTrainingLocationResult = $GetTrainingLocationResult;

        return $new;
    }

    public function ensureGetTrainingLocationResult(): ServiceResultOfTrainingLocation
    {
        return $this->GetTrainingLocationResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetTrainingLocationResult');
    }
}
