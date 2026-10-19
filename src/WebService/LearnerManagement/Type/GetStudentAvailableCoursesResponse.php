<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentAvailableCoursesResponse implements ResultInterface
{
    private ?ServiceResultOfString $GetStudentAvailableCoursesResult = null;

    public function getGetStudentAvailableCoursesResult(): ?ServiceResultOfString
    {
        return $this->GetStudentAvailableCoursesResult;
    }

    public function withGetStudentAvailableCoursesResult(?ServiceResultOfString $GetStudentAvailableCoursesResult): static
    {
        $new = clone $this;
        $new->GetStudentAvailableCoursesResult = $GetStudentAvailableCoursesResult;

        return $new;
    }

    public function ensureGetStudentAvailableCoursesResult(): ServiceResultOfString
    {
        return $this->GetStudentAvailableCoursesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetStudentAvailableCoursesResult');
    }
}
