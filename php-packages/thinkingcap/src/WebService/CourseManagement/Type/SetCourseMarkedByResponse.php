<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetCourseMarkedByResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $SetCourseMarkedByResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getSetCourseMarkedByResult()
    {
        return $this->SetCourseMarkedByResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $SetCourseMarkedByResult
     *
     * @return SetCourseMarkedByResponse
     */
    public function withSetCourseMarkedByResult($SetCourseMarkedByResult)
    {
        $new = clone $this;
        $new->SetCourseMarkedByResult = $SetCourseMarkedByResult;

        return $new;
    }
}
