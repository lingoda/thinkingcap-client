<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityByCodeResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity
     */
    private $GetLearningActivityByCodeResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity
     */
    public function getGetLearningActivityByCodeResult()
    {
        return $this->GetLearningActivityByCodeResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity $GetLearningActivityByCodeResult
     *
     * @return GetLearningActivityByCodeResponse
     */
    public function withGetLearningActivityByCodeResult($GetLearningActivityByCodeResult)
    {
        $new = clone $this;
        $new->GetLearningActivityByCodeResult = $GetLearningActivityByCodeResult;

        return $new;
    }
}
