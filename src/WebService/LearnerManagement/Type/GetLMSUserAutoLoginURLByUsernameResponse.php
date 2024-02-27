<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLMSUserAutoLoginURLByUsernameResponse implements ResultInterface
{
    private ServiceResultOfString $GetLMSUserAutoLoginURLByUsernameResult;

    public function getGetLMSUserAutoLoginURLByUsernameResult(): ServiceResultOfString
    {
        return $this->GetLMSUserAutoLoginURLByUsernameResult;
    }

    public function withGetLMSUserAutoLoginURLByUsernameResult(ServiceResultOfString $GetLMSUserAutoLoginURLByUsernameResult): static
    {
        $new = clone $this;
        $new->GetLMSUserAutoLoginURLByUsernameResult = $GetLMSUserAutoLoginURLByUsernameResult;

        return $new;
    }
}
