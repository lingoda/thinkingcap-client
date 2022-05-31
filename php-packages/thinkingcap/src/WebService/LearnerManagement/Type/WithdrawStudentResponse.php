<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WithdrawStudentResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $WithdrawStudentResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getWithdrawStudentResult()
    {
        return $this->WithdrawStudentResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $WithdrawStudentResult
     *
     * @return WithdrawStudentResponse
     */
    public function withWithdrawStudentResult($WithdrawStudentResult)
    {
        $new = clone $this;
        $new->WithdrawStudentResult = $WithdrawStudentResult;

        return $new;
    }
}
