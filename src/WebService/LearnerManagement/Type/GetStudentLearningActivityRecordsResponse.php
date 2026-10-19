<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLearningActivityRecordsResponse implements ResultInterface
{
    private ?ServiceResultOfListOfLearningActivityRecord $GetStudentLearningActivityRecordsResult = null;

    public function getGetStudentLearningActivityRecordsResult(): ?ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetStudentLearningActivityRecordsResult;
    }

    public function withGetStudentLearningActivityRecordsResult(?ServiceResultOfListOfLearningActivityRecord $GetStudentLearningActivityRecordsResult): static
    {
        $new = clone $this;
        $new->GetStudentLearningActivityRecordsResult = $GetStudentLearningActivityRecordsResult;

        return $new;
    }

    public function ensureGetStudentLearningActivityRecordsResult(): ServiceResultOfListOfLearningActivityRecord
    {
        return $this->GetStudentLearningActivityRecordsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetStudentLearningActivityRecordsResult');
    }
}
