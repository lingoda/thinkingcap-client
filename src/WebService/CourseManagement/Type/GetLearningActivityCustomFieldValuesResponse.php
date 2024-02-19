<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityCustomFieldValuesResponse implements ResultInterface
{
    private ServiceResultOfCustomField $GetLearningActivityCustomFieldValuesResult;

    
    public function getGetLearningActivityCustomFieldValuesResult(): ServiceResultOfCustomField
    {
        return $this->GetLearningActivityCustomFieldValuesResult;
    }

    
    public function withGetLearningActivityCustomFieldValuesResult(ServiceResultOfCustomField $GetLearningActivityCustomFieldValuesResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityCustomFieldValuesResult = $GetLearningActivityCustomFieldValuesResult;

        return $new;
    }
}
