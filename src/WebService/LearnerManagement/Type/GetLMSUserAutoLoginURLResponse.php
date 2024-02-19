<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLMSUserAutoLoginURLResponse implements ResultInterface
{
    private ServiceResultOfString $GetLMSUserAutoLoginURLResult;

    
    public function getGetLMSUserAutoLoginURLResult(): ServiceResultOfString
    {
        return $this->GetLMSUserAutoLoginURLResult;
    }

    
    public function withGetLMSUserAutoLoginURLResult(ServiceResultOfString $GetLMSUserAutoLoginURLResult): static
    {
        $new = clone $this;
        $new->GetLMSUserAutoLoginURLResult = $GetLMSUserAutoLoginURLResult;

        return $new;
    }
}
