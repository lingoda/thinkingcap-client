<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class IsTrainingLocationAvailableResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfBoolean
     */
    private $IsTrainingLocationAvailableResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfBoolean
     */
    public function getIsTrainingLocationAvailableResult()
    {
        return $this->IsTrainingLocationAvailableResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfBoolean $IsTrainingLocationAvailableResult
     *
     * @return IsTrainingLocationAvailableResponse
     */
    public function withIsTrainingLocationAvailableResult($IsTrainingLocationAvailableResult)
    {
        $new = clone $this;
        $new->IsTrainingLocationAvailableResult = $IsTrainingLocationAvailableResult;

        return $new;
    }
}
