<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MarkStudentSessionResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $MarkStudentSessionResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getMarkStudentSessionResult()
    {
        return $this->MarkStudentSessionResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $MarkStudentSessionResult
     *
     * @return MarkStudentSessionResponse
     */
    public function withMarkStudentSessionResult($MarkStudentSessionResult)
    {
        $new = clone $this;
        $new->MarkStudentSessionResult = $MarkStudentSessionResult;

        return $new;
    }
}
