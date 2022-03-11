<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityListEnrollmentsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument
     */
    private $getLearningActivityListEnrollmentsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument
     */
    public function getGetLearningActivityListEnrollmentsResult()
    {
        return $this->getLearningActivityListEnrollmentsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsResult
     *
     * @return GetLearningActivityListEnrollmentsResponse
     */
    public function withGetLearningActivityListEnrollmentsResult($getLearningActivityListEnrollmentsResult)
    {
        $new = clone $this;
        $new->getLearningActivityListEnrollmentsResult = $getLearningActivityListEnrollmentsResult;

        return $new;
    }
}
