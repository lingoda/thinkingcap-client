<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteUserByLookupResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $DeleteUserByLookupResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getDeleteUserByLookupResult()
    {
        return $this->DeleteUserByLookupResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $DeleteUserByLookupResult
     *
     * @return DeleteUserByLookupResponse
     */
    public function withDeleteUserByLookupResult($DeleteUserByLookupResult)
    {
        $new = clone $this;
        $new->DeleteUserByLookupResult = $DeleteUserByLookupResult;

        return $new;
    }
}
