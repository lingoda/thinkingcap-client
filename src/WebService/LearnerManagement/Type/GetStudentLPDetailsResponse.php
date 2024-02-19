<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLPDetailsResponse implements ResultInterface
{
    private ServiceResultOfString $GetStudentLPDetailsResult;

    public function getGetStudentLPDetailsResult(): ServiceResultOfString
    {
        return $this->GetStudentLPDetailsResult;
    }

    public function withGetStudentLPDetailsResult(ServiceResultOfString $GetStudentLPDetailsResult): static
    {
        $new = clone $this;
        $new->GetStudentLPDetailsResult = $GetStudentLPDetailsResult;

        return $new;
    }
}
