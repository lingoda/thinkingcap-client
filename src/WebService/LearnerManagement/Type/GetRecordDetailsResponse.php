<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRecordDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecord
     */
    private $GetRecordDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecord
     */
    public function getGetRecordDetailsResult()
    {
        return $this->GetRecordDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfStudentRecord $GetRecordDetailsResult
     *
     * @return GetRecordDetailsResponse
     */
    public function withGetRecordDetailsResult($GetRecordDetailsResult)
    {
        $new = clone $this;
        $new->GetRecordDetailsResult = $GetRecordDetailsResult;

        return $new;
    }
}
