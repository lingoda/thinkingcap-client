<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityByCodeResponse implements ResultInterface
{
    private ServiceResultOfLearningActivity $GetLearningActivityByCodeResult;

    
    public function getGetLearningActivityByCodeResult(): ServiceResultOfLearningActivity
    {
        return $this->GetLearningActivityByCodeResult;
    }

    
    public function withGetLearningActivityByCodeResult(ServiceResultOfLearningActivity $GetLearningActivityByCodeResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityByCodeResult = $GetLearningActivityByCodeResult;

        return $new;
    }
}
