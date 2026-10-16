<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseByCodeResponse implements ResultInterface
{
    private ?ServiceResultOfCourse $GetCourseByCodeResult = null;

    public function getGetCourseByCodeResult(): ?ServiceResultOfCourse
    {
        return $this->GetCourseByCodeResult;
    }

    public function withGetCourseByCodeResult(?ServiceResultOfCourse $GetCourseByCodeResult): static
    {
        $new = clone $this;
        $new->GetCourseByCodeResult = $GetCourseByCodeResult;

        return $new;
    }

    public function ensureGetCourseByCodeResult(): ServiceResultOfCourse
    {
        return $this->GetCourseByCodeResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetCourseByCodeResult');
    }
}
