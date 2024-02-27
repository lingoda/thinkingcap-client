<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindCourseResponse implements ResultInterface
{
    private ServiceResultOfCourse $FindCourseResult;

    public function getFindCourseResult(): ServiceResultOfCourse
    {
        return $this->FindCourseResult;
    }

    public function withFindCourseResult(ServiceResultOfCourse $FindCourseResult): static
    {
        $new = clone $this;
        $new->FindCourseResult = $FindCourseResult;

        return $new;
    }
}
