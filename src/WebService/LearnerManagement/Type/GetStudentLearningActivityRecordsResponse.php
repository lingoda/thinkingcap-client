<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLearningActivityRecordsResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivityRecord $GetStudentLearningActivityRecordsResult;

    public function getGetStudentLearningActivityRecordsResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetStudentLearningActivityRecordsResult;
    }

    public function withGetStudentLearningActivityRecordsResult(ServiceResultOfListOfLearningActivityRecord $GetStudentLearningActivityRecordsResult): static
    {
        $new = clone $this;
        $new->GetStudentLearningActivityRecordsResult = $GetStudentLearningActivityRecordsResult;

        return $new;
    }
}
