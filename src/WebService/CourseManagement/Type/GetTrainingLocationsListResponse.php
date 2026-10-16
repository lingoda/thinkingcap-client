<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTrainingLocationsListResponse implements ResultInterface
{
    private ?ServiceResultOfListOfTrainingLocation $GetTrainingLocationsListResult = null;

    public function getGetTrainingLocationsListResult(): ?ServiceResultOfListOfTrainingLocation
    {
        return $this->GetTrainingLocationsListResult;
    }

    public function withGetTrainingLocationsListResult(?ServiceResultOfListOfTrainingLocation $GetTrainingLocationsListResult): static
    {
        $new = clone $this;
        $new->GetTrainingLocationsListResult = $GetTrainingLocationsListResult;

        return $new;
    }

    public function ensureGetTrainingLocationsListResult(): ServiceResultOfListOfTrainingLocation
    {
        return $this->GetTrainingLocationsListResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetTrainingLocationsListResult');
    }
}
