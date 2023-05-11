<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEquivalencyLearningActivitiesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity
     */
    private $GetEquivalencyLearningActivitiesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity
     */
    public function getGetEquivalencyLearningActivitiesResult()
    {
        return $this->GetEquivalencyLearningActivitiesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity $GetEquivalencyLearningActivitiesResult
     *
     * @return GetEquivalencyLearningActivitiesResponse
     */
    public function withGetEquivalencyLearningActivitiesResult($GetEquivalencyLearningActivitiesResult)
    {
        $new = clone $this;
        $new->GetEquivalencyLearningActivitiesResult = $GetEquivalencyLearningActivitiesResult;

        return $new;
    }
}
