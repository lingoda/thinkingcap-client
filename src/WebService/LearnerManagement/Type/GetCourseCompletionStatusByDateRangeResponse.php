<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseCompletionStatusByDateRangeResponse implements ResultInterface
{
    private ServiceResultOfString $GetCourseCompletionStatusByDateRangeResult;

    
    public function getGetCourseCompletionStatusByDateRangeResult(): ServiceResultOfString
    {
        return $this->GetCourseCompletionStatusByDateRangeResult;
    }

    
    public function withGetCourseCompletionStatusByDateRangeResult(ServiceResultOfString $GetCourseCompletionStatusByDateRangeResult): static
    {
        $new = clone $this;
        $new->GetCourseCompletionStatusByDateRangeResult = $GetCourseCompletionStatusByDateRangeResult;

        return $new;
    }
}
