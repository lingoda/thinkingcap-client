<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateTimedSeedResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GenerateTimedSeedResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGenerateTimedSeedResult()
    {
        return $this->GenerateTimedSeedResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GenerateTimedSeedResult
     *
     * @return GenerateTimedSeedResponse
     */
    public function withGenerateTimedSeedResult($GenerateTimedSeedResult)
    {
        $new = clone $this;
        $new->GenerateTimedSeedResult = $GenerateTimedSeedResult;

        return $new;
    }
}
