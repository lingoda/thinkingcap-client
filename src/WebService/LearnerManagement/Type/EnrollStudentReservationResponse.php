<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentReservationResponse implements ResultInterface
{
    private ServiceResultOfString $EnrollStudentReservationResult;

    public function getEnrollStudentReservationResult(): ServiceResultOfString
    {
        return $this->EnrollStudentReservationResult;
    }

    public function withEnrollStudentReservationResult(ServiceResultOfString $EnrollStudentReservationResult): static
    {
        $new = clone $this;
        $new->EnrollStudentReservationResult = $EnrollStudentReservationResult;

        return $new;
    }
}
