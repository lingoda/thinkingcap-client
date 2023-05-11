<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLearningActivityEquivalencyByCodeResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    private $GetLearningActivityEquivalencyByCodeResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    public function getGetLearningActivityEquivalencyByCodeResult()
    {
        return $this->GetLearningActivityEquivalencyByCodeResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument $GetLearningActivityEquivalencyByCodeResult
     *
     * @return GetLearningActivityEquivalencyByCodeResponse
     */
    public function withGetLearningActivityEquivalencyByCodeResult($GetLearningActivityEquivalencyByCodeResult)
    {
        $new = clone $this;
        $new->GetLearningActivityEquivalencyByCodeResult = $GetLearningActivityEquivalencyByCodeResult;

        return $new;
    }
}
