<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetCourseInfoResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $SetCourseInfoResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getSetCourseInfoResult()
    {
        return $this->SetCourseInfoResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $SetCourseInfoResult
     *
     * @return SetCourseInfoResponse
     */
    public function withSetCourseInfoResult($SetCourseInfoResult)
    {
        $new = clone $this;
        $new->SetCourseInfoResult = $SetCourseInfoResult;

        return $new;
    }
}
