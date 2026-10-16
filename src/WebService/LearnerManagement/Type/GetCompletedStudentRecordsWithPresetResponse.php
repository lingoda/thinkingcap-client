<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCompletedStudentRecordsWithPresetResponse implements ResultInterface
{
    private ?ServiceResultOfListOfLearningActivityRecord $GetCompletedStudentRecordsWithPresetResult = null;

    public function getGetCompletedStudentRecordsWithPresetResult(): ?ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetCompletedStudentRecordsWithPresetResult;
    }

    public function withGetCompletedStudentRecordsWithPresetResult(?ServiceResultOfListOfLearningActivityRecord $GetCompletedStudentRecordsWithPresetResult): static
    {
        $new = clone $this;
        $new->GetCompletedStudentRecordsWithPresetResult = $GetCompletedStudentRecordsWithPresetResult;

        return $new;
    }

    public function ensureGetCompletedStudentRecordsWithPresetResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetCompletedStudentRecordsWithPresetResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetCompletedStudentRecordsWithPresetResult');
    }
}
