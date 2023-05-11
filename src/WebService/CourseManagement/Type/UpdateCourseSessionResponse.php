<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateCourseSessionResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $UpdateCourseSessionResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getUpdateCourseSessionResult()
    {
        return $this->UpdateCourseSessionResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $UpdateCourseSessionResult
     *
     * @return UpdateCourseSessionResponse
     */
    public function withUpdateCourseSessionResult($UpdateCourseSessionResult)
    {
        $new = clone $this;
        $new->UpdateCourseSessionResult = $UpdateCourseSessionResult;

        return $new;
    }
}
