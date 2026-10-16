<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseAssignmentsListResponse implements ResultInterface
{
    private ?ServiceResultOfListOfAssignment $GetCourseAssignmentsListResult = null;

    public function getGetCourseAssignmentsListResult(): ?ServiceResultOfListOfAssignment
    {
        return $this->GetCourseAssignmentsListResult;
    }

    public function withGetCourseAssignmentsListResult(?ServiceResultOfListOfAssignment $GetCourseAssignmentsListResult): static
    {
        $new = clone $this;
        $new->GetCourseAssignmentsListResult = $GetCourseAssignmentsListResult;

        return $new;
    }

    public function ensureGetCourseAssignmentsListResult(): ServiceResultOfListOfAssignment
    {
        return $this->GetCourseAssignmentsListResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetCourseAssignmentsListResult');
    }
}
