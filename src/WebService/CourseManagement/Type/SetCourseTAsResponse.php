<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetCourseTAsResponse implements ResultInterface
{
    private ServiceResultOfString $SetCourseTAsResult;

    public function getSetCourseTAsResult(): ServiceResultOfString
    {
        return $this->SetCourseTAsResult;
    }

    public function withSetCourseTAsResult(ServiceResultOfString $SetCourseTAsResult): static
    {
        $new = clone $this;
        $new->SetCourseTAsResult = $SetCourseTAsResult;

        return $new;
    }
}
