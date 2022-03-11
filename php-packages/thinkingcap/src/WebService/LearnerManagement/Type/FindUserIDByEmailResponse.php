<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByEmailResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $FindUserIDByEmailResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getFindUserIDByEmailResult()
    {
        return $this->FindUserIDByEmailResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $FindUserIDByEmailResult
     *
     * @return FindUserIDByEmailResponse
     */
    public function withFindUserIDByEmailResult($FindUserIDByEmailResult)
    {
        $new = clone $this;
        $new->FindUserIDByEmailResult = $FindUserIDByEmailResult;

        return $new;
    }
}
