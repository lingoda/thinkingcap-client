<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TestPostResponse implements ResultInterface
{
    private ServiceResultOfString $TestPostResult;

    
    public function getTestPostResult(): ServiceResultOfString
    {
        return $this->TestPostResult;
    }

    
    public function withTestPostResult(ServiceResultOfString $TestPostResult): static
    {
        $new = clone $this;
        $new->TestPostResult = $TestPostResult;

        return $new;
    }
}
