<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetILTCourseCurrentSessionResponse implements ResultInterface
{
    private ServiceResultOfCourseSession $GetILTCourseCurrentSessionResult;

    
    public function getGetILTCourseCurrentSessionResult(): ServiceResultOfCourseSession
    {
        return $this->GetILTCourseCurrentSessionResult;
    }

    
    public function withGetILTCourseCurrentSessionResult(ServiceResultOfCourseSession $GetILTCourseCurrentSessionResult): static
    {
        $new = clone $this;
        $new->GetILTCourseCurrentSessionResult = $GetILTCourseCurrentSessionResult;

        return $new;
    }
}
