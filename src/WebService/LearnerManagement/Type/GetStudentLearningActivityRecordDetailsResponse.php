<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLearningActivityRecordDetailsResponse implements ResultInterface
{
    private ServiceResultOfLearningActivityRecord $GetStudentLearningActivityRecordDetailsResult;

    
    public function getGetStudentLearningActivityRecordDetailsResult(): ServiceResultOfLearningActivityRecord
    {
        return $this->GetStudentLearningActivityRecordDetailsResult;
    }

    
    public function withGetStudentLearningActivityRecordDetailsResult(ServiceResultOfLearningActivityRecord $GetStudentLearningActivityRecordDetailsResult): static
    {
        $new = clone $this;
        $new->GetStudentLearningActivityRecordDetailsResult = $GetStudentLearningActivityRecordDetailsResult;

        return $new;
    }
}
