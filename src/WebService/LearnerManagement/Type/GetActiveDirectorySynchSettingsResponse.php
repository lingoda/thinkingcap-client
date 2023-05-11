<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetActiveDirectorySynchSettingsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetActiveDirectorySynchSettingsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetActiveDirectorySynchSettingsResult()
    {
        return $this->GetActiveDirectorySynchSettingsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetActiveDirectorySynchSettingsResult
     *
     * @return GetActiveDirectorySynchSettingsResponse
     */
    public function withGetActiveDirectorySynchSettingsResult($GetActiveDirectorySynchSettingsResult)
    {
        $new = clone $this;
        $new->GetActiveDirectorySynchSettingsResult = $GetActiveDirectorySynchSettingsResult;

        return $new;
    }
}
