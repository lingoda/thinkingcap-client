<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseSeriesListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSeries
     */
    private $GetCourseSeriesListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSeries
     */
    public function getGetCourseSeriesListResult()
    {
        return $this->GetCourseSeriesListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSeries $GetCourseSeriesListResult
     *
     * @return GetCourseSeriesListResponse
     */
    public function withGetCourseSeriesListResult($GetCourseSeriesListResult)
    {
        $new = clone $this;
        $new->GetCourseSeriesListResult = $GetCourseSeriesListResult;

        return $new;
    }
}
