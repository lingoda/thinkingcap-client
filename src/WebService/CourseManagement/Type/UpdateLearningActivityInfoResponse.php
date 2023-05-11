<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLearningActivityInfoResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $UpdateLearningActivityInfoResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getUpdateLearningActivityInfoResult()
    {
        return $this->UpdateLearningActivityInfoResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $UpdateLearningActivityInfoResult
     *
     * @return UpdateLearningActivityInfoResponse
     */
    public function withUpdateLearningActivityInfoResult($UpdateLearningActivityInfoResult)
    {
        $new = clone $this;
        $new->UpdateLearningActivityInfoResult = $UpdateLearningActivityInfoResult;

        return $new;
    }
}
