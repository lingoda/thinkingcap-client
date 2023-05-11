<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddLearningActivityResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $AddLearningActivityResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getAddLearningActivityResult()
    {
        return $this->AddLearningActivityResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $AddLearningActivityResult
     *
     * @return AddLearningActivityResponse
     */
    public function withAddLearningActivityResult($AddLearningActivityResult)
    {
        $new = clone $this;
        $new->AddLearningActivityResult = $AddLearningActivityResult;

        return $new;
    }
}
