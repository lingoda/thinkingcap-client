<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WithdrawStudentResponse implements ResultInterface
{
    private ServiceResultOfString $WithdrawStudentResult;

    public function getWithdrawStudentResult(): ServiceResultOfString
    {
        return $this->WithdrawStudentResult;
    }

    public function withWithdrawStudentResult(ServiceResultOfString $WithdrawStudentResult): static
    {
        $new = clone $this;
        $new->WithdrawStudentResult = $WithdrawStudentResult;

        return $new;
    }
}
