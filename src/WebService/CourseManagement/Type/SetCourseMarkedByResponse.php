<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetCourseMarkedByResponse implements ResultInterface
{
    private ServiceResultOfString $SetCourseMarkedByResult;

    public function getSetCourseMarkedByResult(): ServiceResultOfString
    {
        return $this->SetCourseMarkedByResult;
    }

    public function withSetCourseMarkedByResult(ServiceResultOfString $SetCourseMarkedByResult): static
    {
        $new = clone $this;
        $new->SetCourseMarkedByResult = $SetCourseMarkedByResult;

        return $new;
    }
}
