<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseStudentsListResponse implements ResultInterface
{
    private ServiceResultOfListOfStudentRecord $GetCourseStudentsListResult;

    public function getGetCourseStudentsListResult(): ServiceResultOfListOfStudentRecord
    {
        return $this->GetCourseStudentsListResult;
    }

    public function withGetCourseStudentsListResult(ServiceResultOfListOfStudentRecord $GetCourseStudentsListResult): static
    {
        $new = clone $this;
        $new->GetCourseStudentsListResult = $GetCourseStudentsListResult;

        return $new;
    }
}
