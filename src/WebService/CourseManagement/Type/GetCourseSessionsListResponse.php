<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseSessionsListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSession
     */
    private $GetCourseSessionsListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSession
     */
    public function getGetCourseSessionsListResult()
    {
        return $this->GetCourseSessionsListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfCourseSession $GetCourseSessionsListResult
     *
     * @return GetCourseSessionsListResponse
     */
    public function withGetCourseSessionsListResult($GetCourseSessionsListResult)
    {
        $new = clone $this;
        $new->GetCourseSessionsListResult = $GetCourseSessionsListResult;

        return $new;
    }
}
