<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MarkStudentSessionResponse implements ResultInterface
{
    private ServiceResultOfString $MarkStudentSessionResult;

    public function getMarkStudentSessionResult(): ServiceResultOfString
    {
        return $this->MarkStudentSessionResult;
    }

    public function withMarkStudentSessionResult(ServiceResultOfString $MarkStudentSessionResult): static
    {
        $new = clone $this;
        $new->MarkStudentSessionResult = $MarkStudentSessionResult;

        return $new;
    }
}
