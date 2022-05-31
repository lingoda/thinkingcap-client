<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetUserActiveByLookupResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $SetUserActiveByLookupResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getSetUserActiveByLookupResult()
    {
        return $this->SetUserActiveByLookupResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $SetUserActiveByLookupResult
     *
     * @return SetUserActiveByLookupResponse
     */
    public function withSetUserActiveByLookupResult($SetUserActiveByLookupResult)
    {
        $new = clone $this;
        $new->SetUserActiveByLookupResult = $SetUserActiveByLookupResult;

        return $new;
    }
}
