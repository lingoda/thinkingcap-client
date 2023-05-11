<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateCourseSeriesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $CreateCourseSeriesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getCreateCourseSeriesResult()
    {
        return $this->CreateCourseSeriesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $CreateCourseSeriesResult
     *
     * @return CreateCourseSeriesResponse
     */
    public function withCreateCourseSeriesResult($CreateCourseSeriesResult)
    {
        $new = clone $this;
        $new->CreateCourseSeriesResult = $CreateCourseSeriesResult;

        return $new;
    }
}
