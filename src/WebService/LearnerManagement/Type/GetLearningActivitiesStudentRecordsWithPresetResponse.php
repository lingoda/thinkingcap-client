<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivitiesStudentRecordsWithPresetResponse implements ResultInterface
{
    private ServiceResultOfListOfLearningActivityRecord $GetLearningActivitiesStudentRecordsWithPresetResult;

    public function getGetLearningActivitiesStudentRecordsWithPresetResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetLearningActivitiesStudentRecordsWithPresetResult;
    }

    public function withGetLearningActivitiesStudentRecordsWithPresetResult(ServiceResultOfListOfLearningActivityRecord $GetLearningActivitiesStudentRecordsWithPresetResult): static
    {
        $new = clone $this;
        $new->GetLearningActivitiesStudentRecordsWithPresetResult = $GetLearningActivitiesStudentRecordsWithPresetResult;

        return $new;
    }
}
