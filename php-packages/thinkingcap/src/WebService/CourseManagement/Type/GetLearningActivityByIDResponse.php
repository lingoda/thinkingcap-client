<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityByIDResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity
     */
    private $GetLearningActivityByIDResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity
     */
    public function getGetLearningActivityByIDResult()
    {
        return $this->GetLearningActivityByIDResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfLearningActivity $GetLearningActivityByIDResult
     *
     * @return GetLearningActivityByIDResponse
     */
    public function withGetLearningActivityByIDResult($GetLearningActivityByIDResult)
    {
        $new = clone $this;
        $new->GetLearningActivityByIDResult = $GetLearningActivityByIDResult;

        return $new;
    }
}
