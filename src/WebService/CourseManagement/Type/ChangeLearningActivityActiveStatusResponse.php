<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ChangeLearningActivityActiveStatusResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $ChangeLearningActivityActiveStatusResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getChangeLearningActivityActiveStatusResult()
    {
        return $this->ChangeLearningActivityActiveStatusResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $ChangeLearningActivityActiveStatusResult
     *
     * @return ChangeLearningActivityActiveStatusResponse
     */
    public function withChangeLearningActivityActiveStatusResult($ChangeLearningActivityActiveStatusResult)
    {
        $new = clone $this;
        $new->ChangeLearningActivityActiveStatusResult = $ChangeLearningActivityActiveStatusResult;

        return $new;
    }
}
