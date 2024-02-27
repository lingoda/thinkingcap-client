<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEquivalencyLearningActivitiesResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivity $GetEquivalencyLearningActivitiesResult;

    public function getGetEquivalencyLearningActivitiesResult(): ServiceResultOfListOfLearningActivity
    {
        return $this->GetEquivalencyLearningActivitiesResult;
    }

    public function withGetEquivalencyLearningActivitiesResult(ServiceResultOfListOfLearningActivity $GetEquivalencyLearningActivitiesResult): static
    {
        $new = clone $this;
        $new->GetEquivalencyLearningActivitiesResult = $GetEquivalencyLearningActivitiesResult;

        return $new;
    }
}
