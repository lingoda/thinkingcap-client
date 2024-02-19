<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateCourseSeriesResponse implements ResultInterface
{
    private ServiceResultOfString $CreateCourseSeriesResult;

    
    public function getCreateCourseSeriesResult(): ServiceResultOfString
    {
        return $this->CreateCourseSeriesResult;
    }

    
    public function withCreateCourseSeriesResult(ServiceResultOfString $CreateCourseSeriesResult): static
    {
        $new = clone $this;
        $new->CreateCourseSeriesResult = $CreateCourseSeriesResult;

        return $new;
    }
}
