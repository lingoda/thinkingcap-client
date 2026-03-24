<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityStudentRecordsFilteredResponse implements ResultInterface
{
    private ?ServiceResultOfListOfLearningActivityRecord $GetLearningActivityStudentRecordsFilteredResult;

    public function getGetLearningActivityStudentRecordsFilteredResult(): ?ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetLearningActivityStudentRecordsFilteredResult;
    }

    public function withGetLearningActivityStudentRecordsFilteredResult(?ServiceResultOfListOfLearningActivityRecord $GetLearningActivityStudentRecordsFilteredResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityStudentRecordsFilteredResult = $GetLearningActivityStudentRecordsFilteredResult;

        return $new;
    }
}
