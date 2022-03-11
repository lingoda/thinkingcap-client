<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddUserToDomainWithEnrollmentsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $AddUserToDomainWithEnrollmentsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getAddUserToDomainWithEnrollmentsResult()
    {
        return $this->AddUserToDomainWithEnrollmentsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $AddUserToDomainWithEnrollmentsResult
     *
     * @return AddUserToDomainWithEnrollmentsResponse
     */
    public function withAddUserToDomainWithEnrollmentsResult($AddUserToDomainWithEnrollmentsResult)
    {
        $new = clone $this;
        $new->AddUserToDomainWithEnrollmentsResult = $AddUserToDomainWithEnrollmentsResult;

        return $new;
    }
}
