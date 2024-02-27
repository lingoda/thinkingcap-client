<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityByIDResponse implements ResultInterface
{
    private ServiceResultOfLearningActivity $GetLearningActivityByIDResult;

    public function getGetLearningActivityByIDResult(): ServiceResultOfLearningActivity
    {
        return $this->GetLearningActivityByIDResult;
    }

    public function withGetLearningActivityByIDResult(ServiceResultOfLearningActivity $GetLearningActivityByIDResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityByIDResult = $GetLearningActivityByIDResult;

        return $new;
    }
}
