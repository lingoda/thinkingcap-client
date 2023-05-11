<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindUserIDByCustomFieldResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $FindUserIDByCustomFieldResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getFindUserIDByCustomFieldResult()
    {
        return $this->FindUserIDByCustomFieldResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $FindUserIDByCustomFieldResult
     *
     * @return FindUserIDByCustomFieldResponse
     */
    public function withFindUserIDByCustomFieldResult($FindUserIDByCustomFieldResult)
    {
        $new = clone $this;
        $new->FindUserIDByCustomFieldResult = $FindUserIDByCustomFieldResult;

        return $new;
    }
}
