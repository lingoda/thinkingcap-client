<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseByCodeResponse implements ResultInterface
{
    private ServiceResultOfCourse $GetCourseByCodeResult;

    public function getGetCourseByCodeResult(): ServiceResultOfCourse
    {
        return $this->GetCourseByCodeResult;
    }

    public function withGetCourseByCodeResult(ServiceResultOfCourse $GetCourseByCodeResult): static
    {
        $new = clone $this;
        $new->GetCourseByCodeResult = $GetCourseByCodeResult;

        return $new;
    }
}
