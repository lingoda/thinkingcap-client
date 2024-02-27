<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateCourseSessionResponse implements ResultInterface
{
    private ServiceResultOfString $UpdateCourseSessionResult;

    public function getUpdateCourseSessionResult(): ServiceResultOfString
    {
        return $this->UpdateCourseSessionResult;
    }

    public function withUpdateCourseSessionResult(ServiceResultOfString $UpdateCourseSessionResult): static
    {
        $new = clone $this;
        $new->UpdateCourseSessionResult = $UpdateCourseSessionResult;

        return $new;
    }
}
