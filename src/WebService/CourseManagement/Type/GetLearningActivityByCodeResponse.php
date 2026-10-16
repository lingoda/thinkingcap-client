<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityByCodeResponse implements ResultInterface
{
    private ?ServiceResultOfLearningActivity $GetLearningActivityByCodeResult = null;

    public function getGetLearningActivityByCodeResult(): ?ServiceResultOfLearningActivity
    {
        return $this->GetLearningActivityByCodeResult;
    }

    public function withGetLearningActivityByCodeResult(?ServiceResultOfLearningActivity $GetLearningActivityByCodeResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityByCodeResult = $GetLearningActivityByCodeResult;

        return $new;
    }

    public function ensureGetLearningActivityByCodeResult(): ServiceResultOfLearningActivity
    {
        return $this->GetLearningActivityByCodeResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetLearningActivityByCodeResult');
    }
}
