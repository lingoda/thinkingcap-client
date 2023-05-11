<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidateTimedSeedResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfBoolean
     */
    private $ValidateTimedSeedResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfBoolean
     */
    public function getValidateTimedSeedResult()
    {
        return $this->ValidateTimedSeedResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfBoolean $ValidateTimedSeedResult
     *
     * @return ValidateTimedSeedResponse
     */
    public function withValidateTimedSeedResult($ValidateTimedSeedResult)
    {
        $new = clone $this;
        $new->ValidateTimedSeedResult = $ValidateTimedSeedResult;

        return $new;
    }
}
