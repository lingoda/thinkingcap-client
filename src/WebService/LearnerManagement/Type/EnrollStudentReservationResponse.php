<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentReservationResponse implements ResultInterface
{
    private ?ServiceResultOfString $EnrollStudentReservationResult = null;

    public function getEnrollStudentReservationResult(): ?ServiceResultOfString
    {
        return $this->EnrollStudentReservationResult;
    }

    public function withEnrollStudentReservationResult(?ServiceResultOfString $EnrollStudentReservationResult): static
    {
        $new = clone $this;
        $new->EnrollStudentReservationResult = $EnrollStudentReservationResult;

        return $new;
    }

    public function ensureEnrollStudentReservationResult(): ServiceResultOfString
    {
        return $this->EnrollStudentReservationResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'EnrollStudentReservationResult');
    }
}
