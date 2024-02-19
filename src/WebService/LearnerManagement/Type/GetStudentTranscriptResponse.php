<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentTranscriptResponse implements ResultInterface
{
    private ServiceResultOfStudentRecordList $GetStudentTranscriptResult;

    
    public function getGetStudentTranscriptResult(): ServiceResultOfStudentRecordList
    {
        return $this->GetStudentTranscriptResult;
    }

    
    public function withGetStudentTranscriptResult(ServiceResultOfStudentRecordList $GetStudentTranscriptResult): static
    {
        $new = clone $this;
        $new->GetStudentTranscriptResult = $GetStudentTranscriptResult;

        return $new;
    }
}
