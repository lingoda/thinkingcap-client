<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddTrainingLocationWithTimeZoneResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $AddTrainingLocationWithTimeZoneResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getAddTrainingLocationWithTimeZoneResult()
    {
        return $this->AddTrainingLocationWithTimeZoneResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $AddTrainingLocationWithTimeZoneResult
     *
     * @return AddTrainingLocationWithTimeZoneResponse
     */
    public function withAddTrainingLocationWithTimeZoneResult($AddTrainingLocationWithTimeZoneResult)
    {
        $new = clone $this;
        $new->AddTrainingLocationWithTimeZoneResult = $AddTrainingLocationWithTimeZoneResult;

        return $new;
    }
}
