<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLMSUserAutoLoginURLByUsernameResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetLMSUserAutoLoginURLByUsernameResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetLMSUserAutoLoginURLByUsernameResult()
    {
        return $this->GetLMSUserAutoLoginURLByUsernameResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetLMSUserAutoLoginURLByUsernameResult
     *
     * @return GetLMSUserAutoLoginURLByUsernameResponse
     */
    public function withGetLMSUserAutoLoginURLByUsernameResult($GetLMSUserAutoLoginURLByUsernameResult)
    {
        $new = clone $this;
        $new->GetLMSUserAutoLoginURLByUsernameResult = $GetLMSUserAutoLoginURLByUsernameResult;

        return $new;
    }
}
