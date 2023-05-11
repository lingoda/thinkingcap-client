<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $EnrollStudentResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getEnrollStudentResult()
    {
        return $this->EnrollStudentResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $EnrollStudentResult
     *
     * @return EnrollStudentResponse
     */
    public function withEnrollStudentResult($EnrollStudentResult)
    {
        $new = clone $this;
        $new->EnrollStudentResult = $EnrollStudentResult;

        return $new;
    }
}
