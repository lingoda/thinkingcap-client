<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLearningActivityResponse implements ResultInterface
{
    private ?ServiceResultOfString $UpdateLearningActivityResult = null;

    public function getUpdateLearningActivityResult(): ?ServiceResultOfString
    {
        return $this->UpdateLearningActivityResult;
    }

    public function withUpdateLearningActivityResult(?ServiceResultOfString $UpdateLearningActivityResult): static
    {
        $new = clone $this;
        $new->UpdateLearningActivityResult = $UpdateLearningActivityResult;

        return $new;
    }

    public function ensureUpdateLearningActivityResult(): ServiceResultOfString
    {
        return $this->UpdateLearningActivityResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'UpdateLearningActivityResult');
    }
}
