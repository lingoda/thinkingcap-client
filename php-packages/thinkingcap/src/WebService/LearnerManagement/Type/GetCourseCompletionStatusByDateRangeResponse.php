<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseCompletionStatusByDateRangeResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetCourseCompletionStatusByDateRangeResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetCourseCompletionStatusByDateRangeResult()
    {
        return $this->GetCourseCompletionStatusByDateRangeResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetCourseCompletionStatusByDateRangeResult
     *
     * @return GetCourseCompletionStatusByDateRangeResponse
     */
    public function withGetCourseCompletionStatusByDateRangeResult($GetCourseCompletionStatusByDateRangeResult)
    {
        $new = clone $this;
        $new->GetCourseCompletionStatusByDateRangeResult = $GetCourseCompletionStatusByDateRangeResult;

        return $new;
    }
}
