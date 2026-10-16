<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityCustomFieldValuesResponse implements ResultInterface
{
    private ?ServiceResultOfCustomField $GetLearningActivityCustomFieldValuesResult = null;

    public function getGetLearningActivityCustomFieldValuesResult(): ?ServiceResultOfCustomField
    {
        return $this->GetLearningActivityCustomFieldValuesResult;
    }

    public function withGetLearningActivityCustomFieldValuesResult(?ServiceResultOfCustomField $GetLearningActivityCustomFieldValuesResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityCustomFieldValuesResult = $GetLearningActivityCustomFieldValuesResult;

        return $new;
    }

    public function ensureGetLearningActivityCustomFieldValuesResult(): ServiceResultOfCustomField
    {
        return $this->GetLearningActivityCustomFieldValuesResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetLearningActivityCustomFieldValuesResult');
    }
}
