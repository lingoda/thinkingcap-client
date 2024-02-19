<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateTimedSeedResponse implements ResultInterface
{
    private ServiceResultOfString $GenerateTimedSeedResult;

    
    public function getGenerateTimedSeedResult(): ServiceResultOfString
    {
        return $this->GenerateTimedSeedResult;
    }

    
    public function withGenerateTimedSeedResult(ServiceResultOfString $GenerateTimedSeedResult): static
    {
        $new = clone $this;
        $new->GenerateTimedSeedResult = $GenerateTimedSeedResult;

        return $new;
    }
}
