<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateECommerceCourseTokenResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $GenerateECommerceCourseTokenResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getGenerateECommerceCourseTokenResult()
    {
        return $this->GenerateECommerceCourseTokenResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $GenerateECommerceCourseTokenResult
     *
     * @return GenerateECommerceCourseTokenResponse
     */
    public function withGenerateECommerceCourseTokenResult($GenerateECommerceCourseTokenResult)
    {
        $new = clone $this;
        $new->GenerateECommerceCourseTokenResult = $GenerateECommerceCourseTokenResult;

        return $new;
    }
}
