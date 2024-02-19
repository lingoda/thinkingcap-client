<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetActiveDirectorySynchSettingsResponse implements ResultInterface
{
    private ServiceResultOfString $GetActiveDirectorySynchSettingsResult;

    
    public function getGetActiveDirectorySynchSettingsResult(): ServiceResultOfString
    {
        return $this->GetActiveDirectorySynchSettingsResult;
    }

    
    public function withGetActiveDirectorySynchSettingsResult(ServiceResultOfString $GetActiveDirectorySynchSettingsResult): static
    {
        $new = clone $this;
        $new->GetActiveDirectorySynchSettingsResult = $GetActiveDirectorySynchSettingsResult;

        return $new;
    }
}
