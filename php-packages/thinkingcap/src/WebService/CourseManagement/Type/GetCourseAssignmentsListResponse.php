<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseAssignmentsListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfAssignment
     */
    private $GetCourseAssignmentsListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfAssignment
     */
    public function getGetCourseAssignmentsListResult()
    {
        return $this->GetCourseAssignmentsListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfAssignment $GetCourseAssignmentsListResult
     *
     * @return GetCourseAssignmentsListResponse
     */
    public function withGetCourseAssignmentsListResult($GetCourseAssignmentsListResult)
    {
        $new = clone $this;
        $new->GetCourseAssignmentsListResult = $GetCourseAssignmentsListResult;

        return $new;
    }
}
