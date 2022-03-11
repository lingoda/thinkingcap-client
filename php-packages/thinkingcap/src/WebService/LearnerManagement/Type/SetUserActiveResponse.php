<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUserActiveResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $SetUserActiveResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getSetUserActiveResult()
    {
        return $this->SetUserActiveResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $SetUserActiveResult
     *
     * @return SetUserActiveResponse
     */
    public function withSetUserActiveResult($SetUserActiveResult)
    {
        $new = clone $this;
        $new->SetUserActiveResult = $SetUserActiveResult;

        return $new;
    }
}
