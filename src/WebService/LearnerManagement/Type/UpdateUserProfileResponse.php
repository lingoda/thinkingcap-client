<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateUserProfileResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $UpdateUserProfileResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getUpdateUserProfileResult()
    {
        return $this->UpdateUserProfileResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $UpdateUserProfileResult
     *
     * @return UpdateUserProfileResponse
     */
    public function withUpdateUserProfileResult($UpdateUserProfileResult)
    {
        $new = clone $this;
        $new->UpdateUserProfileResult = $UpdateUserProfileResult;

        return $new;
    }
}
