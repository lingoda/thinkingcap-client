<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLMSUserAutoLoginURLResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetLMSUserAutoLoginURLResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetLMSUserAutoLoginURLResult()
    {
        return $this->GetLMSUserAutoLoginURLResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetLMSUserAutoLoginURLResult
     *
     * @return GetLMSUserAutoLoginURLResponse
     */
    public function withGetLMSUserAutoLoginURLResult($GetLMSUserAutoLoginURLResult)
    {
        $new = clone $this;
        $new->GetLMSUserAutoLoginURLResult = $GetLMSUserAutoLoginURLResult;

        return $new;
    }
}
