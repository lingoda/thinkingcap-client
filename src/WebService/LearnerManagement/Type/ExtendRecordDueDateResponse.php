<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExtendRecordDueDateResponse implements ResultInterface
{
    private ServiceResultOfString $ExtendRecordDueDateResult;

    public function getExtendRecordDueDateResult(): ServiceResultOfString
    {
        return $this->ExtendRecordDueDateResult;
    }

    public function withExtendRecordDueDateResult(ServiceResultOfString $ExtendRecordDueDateResult): static
    {
        $new = clone $this;
        $new->ExtendRecordDueDateResult = $ExtendRecordDueDateResult;

        return $new;
    }
}
