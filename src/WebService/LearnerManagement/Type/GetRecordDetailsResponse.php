<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRecordDetailsResponse implements ResultInterface
{
    private ServiceResultOfStudentRecord $GetRecordDetailsResult;

    public function getGetRecordDetailsResult(): ServiceResultOfStudentRecord
    {
        return $this->GetRecordDetailsResult;
    }

    public function withGetRecordDetailsResult(ServiceResultOfStudentRecord $GetRecordDetailsResult): static
    {
        $new = clone $this;
        $new->GetRecordDetailsResult = $GetRecordDetailsResult;

        return $new;
    }
}
