<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTrainingLocationsListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfTrainingLocation
     */
    private $GetTrainingLocationsListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfTrainingLocation
     */
    public function getGetTrainingLocationsListResult()
    {
        return $this->GetTrainingLocationsListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfTrainingLocation $GetTrainingLocationsListResult
     *
     * @return GetTrainingLocationsListResponse
     */
    public function withGetTrainingLocationsListResult($GetTrainingLocationsListResult)
    {
        $new = clone $this;
        $new->GetTrainingLocationsListResult = $GetTrainingLocationsListResult;

        return $new;
    }
}
