<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddUserToDomainResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $AddUserToDomainResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getAddUserToDomainResult()
    {
        return $this->AddUserToDomainResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $AddUserToDomainResult
     *
     * @return AddUserToDomainResponse
     */
    public function withAddUserToDomainResult($AddUserToDomainResult)
    {
        $new = clone $this;
        $new->AddUserToDomainResult = $AddUserToDomainResult;

        return $new;
    }
}
