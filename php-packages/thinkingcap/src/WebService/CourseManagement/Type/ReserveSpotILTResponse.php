<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReserveSpotILTResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $ReserveSpotILTResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getReserveSpotILTResult()
    {
        return $this->ReserveSpotILTResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $ReserveSpotILTResult
     *
     * @return ReserveSpotILTResponse
     */
    public function withReserveSpotILTResult($ReserveSpotILTResult)
    {
        $new = clone $this;
        $new->ReserveSpotILTResult = $ReserveSpotILTResult;

        return $new;
    }
}
