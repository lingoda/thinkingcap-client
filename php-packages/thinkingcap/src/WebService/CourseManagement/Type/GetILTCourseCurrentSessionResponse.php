<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetILTCourseCurrentSessionResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSession
     */
    private $GetILTCourseCurrentSessionResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSession
     */
    public function getGetILTCourseCurrentSessionResult()
    {
        return $this->GetILTCourseCurrentSessionResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCourseSession $GetILTCourseCurrentSessionResult
     *
     * @return GetILTCourseCurrentSessionResponse
     */
    public function withGetILTCourseCurrentSessionResult($GetILTCourseCurrentSessionResult)
    {
        $new = clone $this;
        $new->GetILTCourseCurrentSessionResult = $GetILTCourseCurrentSessionResult;

        return $new;
    }
}
