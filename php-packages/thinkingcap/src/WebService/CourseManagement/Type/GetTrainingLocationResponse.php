<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTrainingLocationResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfTrainingLocation
     */
    private $GetTrainingLocationResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfTrainingLocation
     */
    public function getGetTrainingLocationResult()
    {
        return $this->GetTrainingLocationResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfTrainingLocation $GetTrainingLocationResult
     *
     * @return GetTrainingLocationResponse
     */
    public function withGetTrainingLocationResult($GetTrainingLocationResult)
    {
        $new = clone $this;
        $new->GetTrainingLocationResult = $GetTrainingLocationResult;

        return $new;
    }
}
