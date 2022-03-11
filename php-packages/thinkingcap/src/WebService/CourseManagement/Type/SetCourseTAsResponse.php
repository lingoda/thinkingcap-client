<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetCourseTAsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $SetCourseTAsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getSetCourseTAsResult()
    {
        return $this->SetCourseTAsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $SetCourseTAsResult
     *
     * @return SetCourseTAsResponse
     */
    public function withSetCourseTAsResult($SetCourseTAsResult)
    {
        $new = clone $this;
        $new->SetCourseTAsResult = $SetCourseTAsResult;

        return $new;
    }
}
