<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUserActiveResponse implements ResultInterface
{
    private ServiceResultOfString $SetUserActiveResult;

    
    public function getSetUserActiveResult(): ServiceResultOfString
    {
        return $this->SetUserActiveResult;
    }

    
    public function withSetUserActiveResult(ServiceResultOfString $SetUserActiveResult): static
    {
        $new = clone $this;
        $new->SetUserActiveResult = $SetUserActiveResult;

        return $new;
    }
}
