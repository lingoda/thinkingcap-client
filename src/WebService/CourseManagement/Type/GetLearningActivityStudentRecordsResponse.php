<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityStudentRecordsResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivityRecord $GetLearningActivityStudentRecordsResult;

    public function getGetLearningActivityStudentRecordsResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetLearningActivityStudentRecordsResult;
    }

    public function withGetLearningActivityStudentRecordsResult(ServiceResultOfListOfLearningActivityRecord $GetLearningActivityStudentRecordsResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityStudentRecordsResult = $GetLearningActivityStudentRecordsResult;

        return $new;
    }
}
