<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByIDResponse implements ResultInterface
{
    private ?ServiceResultOfCourseSeries $GetLearningActivityEquivalencyByIDResult = null;

    public function getGetLearningActivityEquivalencyByIDResult(): ?ServiceResultOfCourseSeries
    {
        return $this->GetLearningActivityEquivalencyByIDResult;
    }

    public function withGetLearningActivityEquivalencyByIDResult(?ServiceResultOfCourseSeries $GetLearningActivityEquivalencyByIDResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByIDResult = $GetLearningActivityEquivalencyByIDResult;

        return $new;
    }

    public function ensureGetLearningActivityEquivalencyByIDResult(): ServiceResultOfCourseSeries
    {
        return $this->GetLearningActivityEquivalencyByIDResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetLearningActivityEquivalencyByIDResult');
    }
}
