<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentTranscriptResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecordList
     */
    private $GetStudentTranscriptResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecordList
     */
    public function getGetStudentTranscriptResult()
    {
        return $this->GetStudentTranscriptResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecordList $GetStudentTranscriptResult
     *
     * @return GetStudentTranscriptResponse
     */
    public function withGetStudentTranscriptResult($GetStudentTranscriptResult)
    {
        $new = clone $this;
        $new->GetStudentTranscriptResult = $GetStudentTranscriptResult;

        return $new;
    }
}
