<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseAssignmentsXmlResponse implements ResultInterface
{
    private ServiceResultOfString $GetCourseAssignmentsXmlResult;

    public function getGetCourseAssignmentsXmlResult(): ServiceResultOfString
    {
        return $this->GetCourseAssignmentsXmlResult;
    }

    public function withGetCourseAssignmentsXmlResult(ServiceResultOfString $GetCourseAssignmentsXmlResult): static
    {
        $new = clone $this;
        $new->GetCourseAssignmentsXmlResult = $GetCourseAssignmentsXmlResult;

        return $new;
    }
}
