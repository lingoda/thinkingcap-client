<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReserveSpotILTResponse implements ResultInterface
{
    private ServiceResultOfString $ReserveSpotILTResult;

    public function getReserveSpotILTResult(): ServiceResultOfString
    {
        return $this->ReserveSpotILTResult;
    }

    public function withReserveSpotILTResult(ServiceResultOfString $ReserveSpotILTResult): static
    {
        $new = clone $this;
        $new->ReserveSpotILTResult = $ReserveSpotILTResult;

        return $new;
    }
}
