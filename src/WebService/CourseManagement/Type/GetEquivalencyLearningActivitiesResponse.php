<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEquivalencyLearningActivitiesResponse implements ResultInterface
{
    private ?ServiceResultOfListOfLearningActivity $GetEquivalencyLearningActivitiesResult = null;

    public function getGetEquivalencyLearningActivitiesResult(): ?ServiceResultOfListOfLearningActivity
    {
        return $this->GetEquivalencyLearningActivitiesResult;
    }

    public function withGetEquivalencyLearningActivitiesResult(?ServiceResultOfListOfLearningActivity $GetEquivalencyLearningActivitiesResult): static
    {
        $new = clone $this;
        $new->GetEquivalencyLearningActivitiesResult = $GetEquivalencyLearningActivitiesResult;

        return $new;
    }

    public function ensureGetEquivalencyLearningActivitiesResult(): ServiceResultOfListOfLearningActivity
    {
        return $this->GetEquivalencyLearningActivitiesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetEquivalencyLearningActivitiesResult');
    }
}
