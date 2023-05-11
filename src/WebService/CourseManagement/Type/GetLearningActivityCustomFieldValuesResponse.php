<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityCustomFieldValuesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCustomField
     */
    private $GetLearningActivityCustomFieldValuesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCustomField
     */
    public function getGetLearningActivityCustomFieldValuesResult()
    {
        return $this->GetLearningActivityCustomFieldValuesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfCustomField $GetLearningActivityCustomFieldValuesResult
     *
     * @return GetLearningActivityCustomFieldValuesResponse
     */
    public function withGetLearningActivityCustomFieldValuesResult($GetLearningActivityCustomFieldValuesResult)
    {
        $new = clone $this;
        $new->GetLearningActivityCustomFieldValuesResult = $GetLearningActivityCustomFieldValuesResult;

        return $new;
    }
}
