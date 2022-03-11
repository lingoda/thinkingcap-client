<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLearningActivityRecordDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfLearningActivityRecord
     */
    private $GetStudentLearningActivityRecordDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfLearningActivityRecord
     */
    public function getGetStudentLearningActivityRecordDetailsResult()
    {
        return $this->GetStudentLearningActivityRecordDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfLearningActivityRecord $GetStudentLearningActivityRecordDetailsResult
     *
     * @return GetStudentLearningActivityRecordDetailsResponse
     */
    public function withGetStudentLearningActivityRecordDetailsResult($GetStudentLearningActivityRecordDetailsResult)
    {
        $new = clone $this;
        $new->GetStudentLearningActivityRecordDetailsResult = $GetStudentLearningActivityRecordDetailsResult;

        return $new;
    }
}
