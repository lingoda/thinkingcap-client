<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCompletedStudentRecordsWithPresetResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivityRecord $GetCompletedStudentRecordsWithPresetResult;

    public function getGetCompletedStudentRecordsWithPresetResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetCompletedStudentRecordsWithPresetResult;
    }

    public function withGetCompletedStudentRecordsWithPresetResult(ServiceResultOfListOfLearningActivityRecord $GetCompletedStudentRecordsWithPresetResult): static
    {
        $new = clone $this;
        $new->GetCompletedStudentRecordsWithPresetResult = $GetCompletedStudentRecordsWithPresetResult;

        return $new;
    }
}
