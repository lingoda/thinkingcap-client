<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MarkStudentSessionResponse implements ResultInterface
{
    private ?ServiceResultOfString $MarkStudentSessionResult = null;

    public function getMarkStudentSessionResult(): ?ServiceResultOfString
    {
        return $this->MarkStudentSessionResult;
    }

    public function withMarkStudentSessionResult(?ServiceResultOfString $MarkStudentSessionResult): static
    {
        $new = clone $this;
        $new->MarkStudentSessionResult = $MarkStudentSessionResult;

        return $new;
    }

    public function ensureMarkStudentSessionResult(): ServiceResultOfString
    {
        return $this->MarkStudentSessionResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'MarkStudentSessionResult');
    }
}
