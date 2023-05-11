<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseStudentsListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfStudentRecord
     */
    private $GetCourseStudentsListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfStudentRecord
     */
    public function getGetCourseStudentsListResult()
    {
        return $this->GetCourseStudentsListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfStudentRecord $GetCourseStudentsListResult
     *
     * @return GetCourseStudentsListResponse
     */
    public function withGetCourseStudentsListResult($GetCourseStudentsListResult)
    {
        $new = clone $this;
        $new->GetCourseStudentsListResult = $GetCourseStudentsListResult;

        return $new;
    }
}
