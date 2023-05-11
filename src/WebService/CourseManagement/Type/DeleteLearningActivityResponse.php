<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteLearningActivityResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $DeleteLearningActivityResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getDeleteLearningActivityResult()
    {
        return $this->DeleteLearningActivityResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $DeleteLearningActivityResult
     *
     * @return DeleteLearningActivityResponse
     */
    public function withDeleteLearningActivityResult($DeleteLearningActivityResult)
    {
        $new = clone $this;
        $new->DeleteLearningActivityResult = $DeleteLearningActivityResult;

        return $new;
    }
}
