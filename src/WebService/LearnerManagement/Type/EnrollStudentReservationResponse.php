<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentReservationResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $EnrollStudentReservationResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getEnrollStudentReservationResult()
    {
        return $this->EnrollStudentReservationResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $EnrollStudentReservationResult
     *
     * @return EnrollStudentReservationResponse
     */
    public function withEnrollStudentReservationResult($EnrollStudentReservationResult)
    {
        $new = clone $this;
        $new->EnrollStudentReservationResult = $EnrollStudentReservationResult;

        return $new;
    }
}
