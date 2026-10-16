<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentTranscriptResponse implements ResultInterface
{
    private ?ServiceResultOfStudentRecordList $GetStudentTranscriptResult = null;

    public function getGetStudentTranscriptResult(): ?ServiceResultOfStudentRecordList
    {
        return $this->GetStudentTranscriptResult;
    }

    public function withGetStudentTranscriptResult(?ServiceResultOfStudentRecordList $GetStudentTranscriptResult): static
    {
        $new = clone $this;
        $new->GetStudentTranscriptResult = $GetStudentTranscriptResult;

        return $new;
    }

    public function ensureGetStudentTranscriptResult(): ServiceResultOfStudentRecordList
    {
        return $this->GetStudentTranscriptResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetStudentTranscriptResult');
    }
}
