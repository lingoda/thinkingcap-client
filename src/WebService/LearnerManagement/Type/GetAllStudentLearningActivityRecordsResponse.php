<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllStudentLearningActivityRecordsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    private $GetAllStudentLearningActivityRecordsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    public function getGetAllStudentLearningActivityRecordsResult()
    {
        return $this->GetAllStudentLearningActivityRecordsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord $GetAllStudentLearningActivityRecordsResult
     *
     * @return GetAllStudentLearningActivityRecordsResponse
     */
    public function withGetAllStudentLearningActivityRecordsResult($GetAllStudentLearningActivityRecordsResult)
    {
        $new = clone $this;
        $new->GetAllStudentLearningActivityRecordsResult = $GetAllStudentLearningActivityRecordsResult;

        return $new;
    }
}
