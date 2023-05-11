<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentWithDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $EnrollStudentWithDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getEnrollStudentWithDetailsResult()
    {
        return $this->EnrollStudentWithDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $EnrollStudentWithDetailsResult
     *
     * @return EnrollStudentWithDetailsResponse
     */
    public function withEnrollStudentWithDetailsResult($EnrollStudentWithDetailsResult)
    {
        $new = clone $this;
        $new->EnrollStudentWithDetailsResult = $EnrollStudentWithDetailsResult;

        return $new;
    }
}
