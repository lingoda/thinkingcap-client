<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ChangeLearningActivityActiveStatusResponse implements ResultInterface
{
    private ServiceResultOfString $ChangeLearningActivityActiveStatusResult;

    public function getChangeLearningActivityActiveStatusResult(): ServiceResultOfString
    {
        return $this->ChangeLearningActivityActiveStatusResult;
    }

    public function withChangeLearningActivityActiveStatusResult(ServiceResultOfString $ChangeLearningActivityActiveStatusResult): static
    {
        $new = clone $this;
        $new->ChangeLearningActivityActiveStatusResult = $ChangeLearningActivityActiveStatusResult;

        return $new;
    }
}
