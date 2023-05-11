<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLearningActivityRecordsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    private $GetStudentLearningActivityRecordsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord
     */
    public function getGetStudentLearningActivityRecordsResult()
    {
        return $this->GetStudentLearningActivityRecordsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfListOfLearningActivityRecord $GetStudentLearningActivityRecordsResult
     *
     * @return GetStudentLearningActivityRecordsResponse
     */
    public function withGetStudentLearningActivityRecordsResult($GetStudentLearningActivityRecordsResult)
    {
        $new = clone $this;
        $new->GetStudentLearningActivityRecordsResult = $GetStudentLearningActivityRecordsResult;

        return $new;
    }
}
