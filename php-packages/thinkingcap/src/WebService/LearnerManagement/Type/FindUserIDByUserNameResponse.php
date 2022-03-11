<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByUserNameResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $FindUserIDByUserNameResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getFindUserIDByUserNameResult()
    {
        return $this->FindUserIDByUserNameResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $FindUserIDByUserNameResult
     *
     * @return FindUserIDByUserNameResponse
     */
    public function withFindUserIDByUserNameResult($FindUserIDByUserNameResult)
    {
        $new = clone $this;
        $new->FindUserIDByUserNameResult = $FindUserIDByUserNameResult;

        return $new;
    }
}
