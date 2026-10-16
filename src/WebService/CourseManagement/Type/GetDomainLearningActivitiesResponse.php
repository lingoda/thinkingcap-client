<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainLearningActivitiesResponse implements ResultInterface
{
    private ?ServiceResultOfListOfLearningActivity $GetDomainLearningActivitiesResult = null;

    public function getGetDomainLearningActivitiesResult(): ?ServiceResultOfListOfLearningActivity
    {
        return $this->GetDomainLearningActivitiesResult;
    }

    public function withGetDomainLearningActivitiesResult(?ServiceResultOfListOfLearningActivity $GetDomainLearningActivitiesResult): static
    {
        $new = clone $this;
        $new->GetDomainLearningActivitiesResult = $GetDomainLearningActivitiesResult;

        return $new;
    }

    public function ensureGetDomainLearningActivitiesResult(): ServiceResultOfListOfLearningActivity
    {
        return $this->GetDomainLearningActivitiesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetDomainLearningActivitiesResult');
    }
}
