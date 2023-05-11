<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    private $getLearningActivityDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    public function getGetLearningActivityDetailsResult()
    {
        return $this->getLearningActivityDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument $getLearningActivityDetailsResult
     *
     * @return GetLearningActivityDetailsResponse
     */
    public function withGetLearningActivityDetailsResult($getLearningActivityDetailsResult)
    {
        $new = clone $this;
        $new->getLearningActivityDetailsResult = $getLearningActivityDetailsResult;

        return $new;
    }
}
