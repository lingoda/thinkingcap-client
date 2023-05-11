<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAvailableCoursesResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $GetAvailableCoursesResult;

    /**
     * @return string
     */
    public function getGetAvailableCoursesResult()
    {
        return $this->GetAvailableCoursesResult;
    }

    /**
     * @param string $GetAvailableCoursesResult
     *
     * @return GetAvailableCoursesResponse
     */
    public function withGetAvailableCoursesResult($GetAvailableCoursesResult)
    {
        $new = clone $this;
        $new->GetAvailableCoursesResult = $GetAvailableCoursesResult;

        return $new;
    }
}
