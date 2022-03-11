<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MergeStudentTranscriptsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $MergeStudentTranscriptsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getMergeStudentTranscriptsResult()
    {
        return $this->MergeStudentTranscriptsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $MergeStudentTranscriptsResult
     *
     * @return MergeStudentTranscriptsResponse
     */
    public function withMergeStudentTranscriptsResult($MergeStudentTranscriptsResult)
    {
        $new = clone $this;
        $new->MergeStudentTranscriptsResult = $MergeStudentTranscriptsResult;

        return $new;
    }
}
