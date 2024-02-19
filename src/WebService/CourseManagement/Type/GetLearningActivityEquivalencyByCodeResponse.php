<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByCodeResponse implements ResultInterface
{
    private ServiceResultOfXmlDocument $GetLearningActivityEquivalencyByCodeResult;

    public function getGetLearningActivityEquivalencyByCodeResult(): ServiceResultOfXmlDocument
    {
        return $this->GetLearningActivityEquivalencyByCodeResult;
    }

    public function withGetLearningActivityEquivalencyByCodeResult(ServiceResultOfXmlDocument $GetLearningActivityEquivalencyByCodeResult): static
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByCodeResult = $GetLearningActivityEquivalencyByCodeResult;

        return $new;
    }
}
