<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllStudentLearningActivityRecordsResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivityRecord $GetAllStudentLearningActivityRecordsResult;

    
    public function getGetAllStudentLearningActivityRecordsResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetAllStudentLearningActivityRecordsResult;
    }

    
    public function withGetAllStudentLearningActivityRecordsResult(ServiceResultOfListOfLearningActivityRecord $GetAllStudentLearningActivityRecordsResult): static
    {
        $new = clone $this;
        $new->GetAllStudentLearningActivityRecordsResult = $GetAllStudentLearningActivityRecordsResult;

        return $new;
    }
}
