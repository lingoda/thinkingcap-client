<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSCORMDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetSCORMDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetSCORMDetailsResult()
    {
        return $this->GetSCORMDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetSCORMDetailsResult
     *
     * @return GetSCORMDetailsResponse
     */
    public function withGetSCORMDetailsResult($GetSCORMDetailsResult)
    {
        $new = clone $this;
        $new->GetSCORMDetailsResult = $GetSCORMDetailsResult;

        return $new;
    }
}
