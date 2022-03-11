<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindCourseResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse
     */
    private $FindCourseResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse
     */
    public function getFindCourseResult()
    {
        return $this->FindCourseResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse $FindCourseResult
     *
     * @return FindCourseResponse
     */
    public function withFindCourseResult($FindCourseResult)
    {
        $new = clone $this;
        $new->FindCourseResult = $FindCourseResult;

        return $new;
    }
}
