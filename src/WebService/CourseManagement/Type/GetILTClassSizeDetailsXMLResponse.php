<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetILTClassSizeDetailsXMLResponse implements ResultInterface
{
    private ServiceResultOfXmlDocument $GetILTClassSizeDetailsXMLResult;

    
    public function getGetILTClassSizeDetailsXMLResult(): ServiceResultOfXmlDocument
    {
        return $this->GetILTClassSizeDetailsXMLResult;
    }

    
    public function withGetILTClassSizeDetailsXMLResult(ServiceResultOfXmlDocument $GetILTClassSizeDetailsXMLResult): static
    {
        $new = clone $this;
        $new->GetILTClassSizeDetailsXMLResult = $GetILTClassSizeDetailsXMLResult;

        return $new;
    }
}
