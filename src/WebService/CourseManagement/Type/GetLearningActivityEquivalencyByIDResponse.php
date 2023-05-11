<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByIDResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSeries
     */
    private $GetLearningActivityEquivalencyByIDResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSeries
     */
    public function getGetLearningActivityEquivalencyByIDResult()
    {
        return $this->GetLearningActivityEquivalencyByIDResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSeries $GetLearningActivityEquivalencyByIDResult
     *
     * @return GetLearningActivityEquivalencyByIDResponse
     */
    public function withGetLearningActivityEquivalencyByIDResult($GetLearningActivityEquivalencyByIDResult)
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByIDResult = $GetLearningActivityEquivalencyByIDResult;

        return $new;
    }
}
