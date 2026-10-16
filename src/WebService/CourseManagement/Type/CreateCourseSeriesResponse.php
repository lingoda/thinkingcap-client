<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateCourseSeriesResponse implements ResultInterface
{
    private ?ServiceResultOfString $CreateCourseSeriesResult = null;

    public function getCreateCourseSeriesResult(): ?ServiceResultOfString
    {
        return $this->CreateCourseSeriesResult;
    }

    public function withCreateCourseSeriesResult(?ServiceResultOfString $CreateCourseSeriesResult): static
    {
        $new = clone $this;
        $new->CreateCourseSeriesResult = $CreateCourseSeriesResult;

        return $new;
    }

    public function ensureCreateCourseSeriesResult(): ServiceResultOfString
    {
        return $this->CreateCourseSeriesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'CreateCourseSeriesResult');
    }
}
