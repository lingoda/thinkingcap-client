<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateECommerceCourseTokenResponse implements ResultInterface
{
    private ?ServiceResultOfString $GenerateECommerceCourseTokenResult = null;

    public function getGenerateECommerceCourseTokenResult(): ?ServiceResultOfString
    {
        return $this->GenerateECommerceCourseTokenResult;
    }

    public function withGenerateECommerceCourseTokenResult(?ServiceResultOfString $GenerateECommerceCourseTokenResult): static
    {
        $new = clone $this;
        $new->GenerateECommerceCourseTokenResult = $GenerateECommerceCourseTokenResult;

        return $new;
    }

    public function ensureGenerateECommerceCourseTokenResult(): ServiceResultOfString
    {
        return $this->GenerateECommerceCourseTokenResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GenerateECommerceCourseTokenResult');
    }
}
