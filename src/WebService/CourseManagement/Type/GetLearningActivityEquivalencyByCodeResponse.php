<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByCodeResponse implements ResultInterface
{
    private ?ServiceResultOfXmlDocument $GetLearningActivityEquivalencyByCodeResult = null;

    public function getGetLearningActivityEquivalencyByCodeResult(): ?ServiceResultOfXmlDocument
    {
        return $this->GetLearningActivityEquivalencyByCodeResult;
    }

    public function withGetLearningActivityEquivalencyByCodeResult(?ServiceResultOfXmlDocument $GetLearningActivityEquivalencyByCodeResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByCodeResult = $GetLearningActivityEquivalencyByCodeResult;

        return $new;
    }

    public function ensureGetLearningActivityEquivalencyByCodeResult(): ServiceResultOfXmlDocument
    {
        return $this->GetLearningActivityEquivalencyByCodeResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'GetLearningActivityEquivalencyByCodeResult');
    }
}
