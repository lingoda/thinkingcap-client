<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLPDetailsResponse implements ResultInterface
{
    private ?ServiceResultOfString $GetStudentLPDetailsResult = null;

    public function getGetStudentLPDetailsResult(): ?ServiceResultOfString
    {
        return $this->GetStudentLPDetailsResult;
    }

    public function withGetStudentLPDetailsResult(?ServiceResultOfString $GetStudentLPDetailsResult): static
    {
        $new = clone $this;
        $new->GetStudentLPDetailsResult = $GetStudentLPDetailsResult;

        return $new;
    }

    public function ensureGetStudentLPDetailsResult(): ServiceResultOfString
    {
        return $this->GetStudentLPDetailsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetStudentLPDetailsResult');
    }
}
