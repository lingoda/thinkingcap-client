<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityListEnrollmentsResponse implements ResultInterface
{
    private ?ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsResult = null;

    public function getGetLearningActivityListEnrollmentsResult(): ?ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityListEnrollmentsResult;
    }

    public function withGetLearningActivityListEnrollmentsResult(?ServiceResultOfXmlDocument $getLearningActivityListEnrollmentsResult): static
    {
        $new = clone $this;
        $new->getLearningActivityListEnrollmentsResult = $getLearningActivityListEnrollmentsResult;

        return $new;
    }

    public function ensureGetLearningActivityListEnrollmentsResult(): ServiceResultOfXmlDocument
    {
        return $this->getLearningActivityListEnrollmentsResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'getLearningActivityListEnrollmentsResult');
    }
}
