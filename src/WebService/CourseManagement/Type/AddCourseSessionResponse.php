<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddCourseSessionResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $AddCourseSessionResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getAddCourseSessionResult()
    {
        return $this->AddCourseSessionResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $AddCourseSessionResult
     *
     * @return AddCourseSessionResponse
     */
    public function withAddCourseSessionResult($AddCourseSessionResult)
    {
        $new = clone $this;
        $new->AddCourseSessionResult = $AddCourseSessionResult;

        return $new;
    }
}
