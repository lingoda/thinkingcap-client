<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddCourseSessionResponse implements ResultInterface
{
    private ?ServiceResultOfString $AddCourseSessionResult = null;

    public function getAddCourseSessionResult(): ?ServiceResultOfString
    {
        return $this->AddCourseSessionResult;
    }

    public function withAddCourseSessionResult(?ServiceResultOfString $AddCourseSessionResult): static
    {
        $new = clone $this;
        $new->AddCourseSessionResult = $AddCourseSessionResult;

        return $new;
    }

    public function ensureAddCourseSessionResult(): ServiceResultOfString
    {
        return $this->AddCourseSessionResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'AddCourseSessionResult');
    }
}
