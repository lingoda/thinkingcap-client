<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseModeratorsListResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfUser
     */
    private $GetCourseModeratorsListResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfUser
     */
    public function getGetCourseModeratorsListResult()
    {
        return $this->GetCourseModeratorsListResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfUser $GetCourseModeratorsListResult
     *
     * @return GetCourseModeratorsListResponse
     */
    public function withGetCourseModeratorsListResult($GetCourseModeratorsListResult)
    {
        $new = clone $this;
        $new->GetCourseModeratorsListResult = $GetCourseModeratorsListResult;

        return $new;
    }
}
