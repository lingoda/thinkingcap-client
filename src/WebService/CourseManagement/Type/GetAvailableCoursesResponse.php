<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAvailableCoursesResponse implements ResultInterface
{
    private string $GetAvailableCoursesResult;

    
    public function getGetAvailableCoursesResult(): string
    {
        return $this->GetAvailableCoursesResult;
    }

    
    public function withGetAvailableCoursesResult(string $GetAvailableCoursesResult): static
    {
        $new = clone $this;
        $new->GetAvailableCoursesResult = $GetAvailableCoursesResult;

        return $new;
    }
}
