<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLearningActivityResponse implements ResultInterface
{
    private ServiceResultOfString $UpdateLearningActivityResult;

    public function getUpdateLearningActivityResult(): ServiceResultOfString
    {
        return $this->UpdateLearningActivityResult;
    }

    public function withUpdateLearningActivityResult(ServiceResultOfString $UpdateLearningActivityResult): static
    {
        $new = clone $this;
        $new->UpdateLearningActivityResult = $UpdateLearningActivityResult;

        return $new;
    }
}
