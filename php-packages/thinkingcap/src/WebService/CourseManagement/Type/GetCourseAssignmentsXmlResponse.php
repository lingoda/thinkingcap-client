<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseAssignmentsXmlResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $GetCourseAssignmentsXmlResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getGetCourseAssignmentsXmlResult()
    {
        return $this->GetCourseAssignmentsXmlResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $GetCourseAssignmentsXmlResult
     *
     * @return GetCourseAssignmentsXmlResponse
     */
    public function withGetCourseAssignmentsXmlResult($GetCourseAssignmentsXmlResult)
    {
        $new = clone $this;
        $new->GetCourseAssignmentsXmlResult = $GetCourseAssignmentsXmlResult;

        return $new;
    }
}
