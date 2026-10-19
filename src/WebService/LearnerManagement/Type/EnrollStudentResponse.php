<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentResponse implements ResultInterface
{
    private ?ServiceResultOfString $EnrollStudentResult = null;

    public function getEnrollStudentResult(): ?ServiceResultOfString
    {
        return $this->EnrollStudentResult;
    }

    public function withEnrollStudentResult(?ServiceResultOfString $EnrollStudentResult): static
    {
        $new = clone $this;
        $new->EnrollStudentResult = $EnrollStudentResult;

        return $new;
    }

    public function ensureEnrollStudentResult(): ServiceResultOfString
    {
        return $this->EnrollStudentResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'EnrollStudentResult');
    }
}
