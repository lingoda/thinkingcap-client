<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $UpdateUserResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getUpdateUserResult()
    {
        return $this->UpdateUserResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $UpdateUserResult
     *
     * @return UpdateUserResponse
     */
    public function withUpdateUserResult($UpdateUserResult)
    {
        $new = clone $this;
        $new->UpdateUserResult = $UpdateUserResult;

        return $new;
    }
}
