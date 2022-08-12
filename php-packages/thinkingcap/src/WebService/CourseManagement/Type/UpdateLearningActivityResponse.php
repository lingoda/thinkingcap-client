<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLearningActivityResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $UpdateLearningActivityResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getUpdateLearningActivityResult()
    {
        return $this->UpdateLearningActivityResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $UpdateLearningActivityResult
     *
     * @return UpdateLearningActivityResponse
     */
    public function withUpdateLearningActivityResult($UpdateLearningActivityResult)
    {
        $new = clone $this;
        $new->UpdateLearningActivityResult = $UpdateLearningActivityResult;

        return $new;
    }
}
