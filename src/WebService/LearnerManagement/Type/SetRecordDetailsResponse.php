<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetRecordDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $SetRecordDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getSetRecordDetailsResult()
    {
        return $this->SetRecordDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $SetRecordDetailsResult
     *
     * @return SetRecordDetailsResponse
     */
    public function withSetRecordDetailsResult($SetRecordDetailsResult)
    {
        $new = clone $this;
        $new->SetRecordDetailsResult = $SetRecordDetailsResult;

        return $new;
    }
}
