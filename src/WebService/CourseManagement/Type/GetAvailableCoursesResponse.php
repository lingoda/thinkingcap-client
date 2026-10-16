<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAvailableCoursesResponse implements ResultInterface
{
    private ?string $GetAvailableCoursesResult = null;

    public function getGetAvailableCoursesResult(): ?string
    {
        return $this->GetAvailableCoursesResult;
    }

    public function withGetAvailableCoursesResult(?string $GetAvailableCoursesResult): static
    {
        $new = clone $this;
        $new->GetAvailableCoursesResult = $GetAvailableCoursesResult;

        return $new;
    }

    public function ensureGetAvailableCoursesResult(): string
    {
        return $this->GetAvailableCoursesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetAvailableCoursesResult');
    }
}
