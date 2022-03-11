<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetSCORMValuesResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $SetSCORMValuesResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getSetSCORMValuesResult()
    {
        return $this->SetSCORMValuesResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $SetSCORMValuesResult
     *
     * @return SetSCORMValuesResponse
     */
    public function withSetSCORMValuesResult($SetSCORMValuesResult)
    {
        $new = clone $this;
        $new->SetSCORMValuesResult = $SetSCORMValuesResult;

        return $new;
    }
}
