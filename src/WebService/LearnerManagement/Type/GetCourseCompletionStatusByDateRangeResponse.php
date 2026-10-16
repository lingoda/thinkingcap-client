<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseCompletionStatusByDateRangeResponse implements ResultInterface
{
    private ?ServiceResultOfString $GetCourseCompletionStatusByDateRangeResult = null;

    public function getGetCourseCompletionStatusByDateRangeResult(): ?ServiceResultOfString
    {
        return $this->GetCourseCompletionStatusByDateRangeResult;
    }

    public function withGetCourseCompletionStatusByDateRangeResult(?ServiceResultOfString $GetCourseCompletionStatusByDateRangeResult): static
    {
        $new = clone $this;
        $new->GetCourseCompletionStatusByDateRangeResult = $GetCourseCompletionStatusByDateRangeResult;

        return $new;
    }

    public function ensureGetCourseCompletionStatusByDateRangeResult(): ServiceResultOfString
    {
        return $this->GetCourseCompletionStatusByDateRangeResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetCourseCompletionStatusByDateRangeResult');
    }
}
