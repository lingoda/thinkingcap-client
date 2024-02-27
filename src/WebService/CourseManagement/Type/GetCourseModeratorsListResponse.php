<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourseModeratorsListResponse implements ResultInterface
{
    private ServiceResultOfListOfUser $GetCourseModeratorsListResult;

    public function getGetCourseModeratorsListResult(): ServiceResultOfListOfUser
    {
        return $this->GetCourseModeratorsListResult;
    }

    public function withGetCourseModeratorsListResult(ServiceResultOfListOfUser $GetCourseModeratorsListResult): static
    {
        $new = clone $this;
        $new->GetCourseModeratorsListResult = $GetCourseModeratorsListResult;

        return $new;
    }
}
