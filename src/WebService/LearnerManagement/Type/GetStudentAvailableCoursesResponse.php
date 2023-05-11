<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentAvailableCoursesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetStudentAvailableCoursesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetStudentAvailableCoursesResult()
    {
        return $this->GetStudentAvailableCoursesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetStudentAvailableCoursesResult
     *
     * @return GetStudentAvailableCoursesResponse
     */
    public function withGetStudentAvailableCoursesResult($GetStudentAvailableCoursesResult)
    {
        $new = clone $this;
        $new->GetStudentAvailableCoursesResult = $GetStudentAvailableCoursesResult;

        return $new;
    }
}
