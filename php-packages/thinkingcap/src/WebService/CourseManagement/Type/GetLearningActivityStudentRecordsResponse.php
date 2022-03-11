<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityStudentRecordsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    private $GetLearningActivityStudentRecordsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    public function getGetLearningActivityStudentRecordsResult()
    {
        return $this->GetLearningActivityStudentRecordsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfListOfLearningActivityRecord $GetLearningActivityStudentRecordsResult
     *
     * @return GetLearningActivityStudentRecordsResponse
     */
    public function withGetLearningActivityStudentRecordsResult($GetLearningActivityStudentRecordsResult)
    {
        $new = clone $this;
        $new->GetLearningActivityStudentRecordsResult = $GetLearningActivityStudentRecordsResult;

        return $new;
    }
}
