<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityDetailsResponse implements ResultInterface
{
    private ServiceResultOfXmlDocument $getLearningActivityDetailsResult;

    
    public function getGetLearningActivityDetailsResult(): ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityDetailsResult;
    }

    
    public function withGetLearningActivityDetailsResult(ServiceResultOfXmlDocument $getLearningActivityDetailsResult): static
    {
        $new = clone $this;
        $new->getLearningActivityDetailsResult = $getLearningActivityDetailsResult;

        return $new;
    }
}
