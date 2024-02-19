<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MergeStudentTranscriptsResponse implements ResultInterface
{
    private ServiceResultOfString $MergeStudentTranscriptsResult;

    
    public function getMergeStudentTranscriptsResult(): ServiceResultOfString
    {
        return $this->MergeStudentTranscriptsResult;
    }

    
    public function withMergeStudentTranscriptsResult(ServiceResultOfString $MergeStudentTranscriptsResult): static
    {
        $new = clone $this;
        $new->MergeStudentTranscriptsResult = $MergeStudentTranscriptsResult;

        return $new;
    }
}
