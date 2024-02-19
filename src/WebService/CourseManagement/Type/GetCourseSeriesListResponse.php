<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseSeriesListResponse implements ResultInterface
{
    private ServiceResultOfListOfCourseSeries $GetCourseSeriesListResult;

    
    public function getGetCourseSeriesListResult(): ServiceResultOfListOfCourseSeries
    {
        return $this->GetCourseSeriesListResult;
    }

    
    public function withGetCourseSeriesListResult(ServiceResultOfListOfCourseSeries $GetCourseSeriesListResult): static
    {
        $new = clone $this;
        $new->GetCourseSeriesListResult = $GetCourseSeriesListResult;

        return $new;
    }
}
