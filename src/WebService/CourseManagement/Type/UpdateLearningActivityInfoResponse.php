<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLearningActivityInfoResponse implements ResultInterface
{
    private ?ServiceResultOfString $UpdateLearningActivityInfoResult = null;

    public function getUpdateLearningActivityInfoResult(): ?ServiceResultOfString
    {
        return $this->UpdateLearningActivityInfoResult;
    }

    public function withUpdateLearningActivityInfoResult(?ServiceResultOfString $UpdateLearningActivityInfoResult): static
    {
        $new = clone $this;
        $new->UpdateLearningActivityInfoResult = $UpdateLearningActivityInfoResult;

        return $new;
    }

    public function ensureUpdateLearningActivityInfoResult(): ServiceResultOfString
    {
        return $this->UpdateLearningActivityInfoResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'UpdateLearningActivityInfoResult');
    }
}
