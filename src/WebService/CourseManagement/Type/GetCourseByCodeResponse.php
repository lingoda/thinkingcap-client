<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseByCodeResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse
     */
    private $GetCourseByCodeResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse
     */
    public function getGetCourseByCodeResult()
    {
        return $this->GetCourseByCodeResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourse $GetCourseByCodeResult
     *
     * @return GetCourseByCodeResponse
     */
    public function withGetCourseByCodeResult($GetCourseByCodeResult)
    {
        $new = clone $this;
        $new->GetCourseByCodeResult = $GetCourseByCodeResult;

        return $new;
    }
}
