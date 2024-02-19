<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseSessionsListResponse implements ResultInterface
{
    private ServiceResultOfListOfCourseSession $GetCourseSessionsListResult;

    
    public function getGetCourseSessionsListResult(): ServiceResultOfListOfCourseSession
    {
        return $this->GetCourseSessionsListResult;
    }

    
    public function withGetCourseSessionsListResult(ServiceResultOfListOfCourseSession $GetCourseSessionsListResult): static
    {
        $new = clone $this;
        $new->GetCourseSessionsListResult = $GetCourseSessionsListResult;

        return $new;
    }
}
