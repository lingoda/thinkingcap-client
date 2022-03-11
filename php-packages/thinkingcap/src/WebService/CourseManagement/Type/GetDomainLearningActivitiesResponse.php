<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainLearningActivitiesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity
     */
    private $GetDomainLearningActivitiesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity
     */
    public function getGetDomainLearningActivitiesResult()
    {
        return $this->GetDomainLearningActivitiesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivity $GetDomainLearningActivitiesResult
     *
     * @return GetDomainLearningActivitiesResponse
     */
    public function withGetDomainLearningActivitiesResult($GetDomainLearningActivitiesResult)
    {
        $new = clone $this;
        $new->GetDomainLearningActivitiesResult = $GetDomainLearningActivitiesResult;

        return $new;
    }
}
