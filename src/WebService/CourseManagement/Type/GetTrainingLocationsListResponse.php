<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTrainingLocationsListResponse implements ResultInterface
{
    private ServiceResultOfListOfTrainingLocation $GetTrainingLocationsListResult;

    
    public function getGetTrainingLocationsListResult(): ServiceResultOfListOfTrainingLocation
    {
        return $this->GetTrainingLocationsListResult;
    }

    
    public function withGetTrainingLocationsListResult(ServiceResultOfListOfTrainingLocation $GetTrainingLocationsListResult): static
    {
        $new = clone $this;
        $new->GetTrainingLocationsListResult = $GetTrainingLocationsListResult;

        return $new;
    }
}
