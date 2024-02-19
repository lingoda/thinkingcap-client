<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityListEnrollmentsTruncatedResponse implements ResultInterface
{
    private ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsTruncatedResult;

    
    public function getGetLearningActivityListEnrollmentsTruncatedResult(): ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityListEnrollmentsTruncatedResult;
    }

    
    public function withGetLearningActivityListEnrollmentsTruncatedResult(ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsTruncatedResult): static
    {
        $new = clone $this;
        $new->getLearningActivityListEnrollmentsTruncatedResult = $getLearningActivityListEnrollmentsTruncatedResult;

        return $new;
    }
}
