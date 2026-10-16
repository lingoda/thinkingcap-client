<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityListEnrollmentsTruncatedResponse implements ResultInterface
{
    private ?ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsTruncatedResult = null;

    public function getGetLearningActivityListEnrollmentsTruncatedResult(): ?ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityListEnrollmentsTruncatedResult;
    }

    public function withGetLearningActivityListEnrollmentsTruncatedResult(?ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsTruncatedResult): static
    {
        $new = clone $this;
        $new->getLearningActivityListEnrollmentsTruncatedResult = $getLearningActivityListEnrollmentsTruncatedResult;

        return $new;
    }

    public function ensureGetLearningActivityListEnrollmentsTruncatedResult(): ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityListEnrollmentsTruncatedResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'getLearningActivityListEnrollmentsTruncatedResult');
    }
}
