<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetILTClassSizeDetailsXMLResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    private $GetILTClassSizeDetailsXMLResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument
     */
    public function getGetILTClassSizeDetailsXMLResult()
    {
        return $this->GetILTClassSizeDetailsXMLResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfXmlDocument $GetILTClassSizeDetailsXMLResult
     *
     * @return GetILTClassSizeDetailsXMLResponse
     */
    public function withGetILTClassSizeDetailsXMLResult($GetILTClassSizeDetailsXMLResult)
    {
        $new = clone $this;
        $new->GetILTClassSizeDetailsXMLResult = $GetILTClassSizeDetailsXMLResult;

        return $new;
    }
}
