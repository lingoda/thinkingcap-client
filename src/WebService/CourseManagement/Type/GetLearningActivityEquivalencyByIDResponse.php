<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByIDResponse implements ResultInterface
{
    private ServiceResultOfCourseSeries $GetLearningActivityEquivalencyByIDResult;

    public function getGetLearningActivityEquivalencyByIDResult(): ServiceResultOfCourseSeries
    {
        return $this->GetLearningActivityEquivalencyByIDResult;
    }

    public function withGetLearningActivityEquivalencyByIDResult(ServiceResultOfCourseSeries $GetLearningActivityEquivalencyByIDResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByIDResult = $GetLearningActivityEquivalencyByIDResult;

        return $new;
    }
}
