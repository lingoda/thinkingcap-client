<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityListEnrollmentsTruncatedResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument
     */
    private $getLearningActivityListEnrollmentsTruncatedResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument
     */
    public function getGetLearningActivityListEnrollmentsTruncatedResult()
    {
        return $this->getLearningActivityListEnrollmentsTruncatedResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsTruncatedResult
     *
     * @return GetLearningActivityListEnrollmentsTruncatedResponse
     */
    public function withGetLearningActivityListEnrollmentsTruncatedResult($getLearningActivityListEnrollmentsTruncatedResult)
    {
        $new = clone $this;
        $new->getLearningActivityListEnrollmentsTruncatedResult = $getLearningActivityListEnrollmentsTruncatedResult;

        return $new;
    }
}
