<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TestPostResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $TestPostResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getTestPostResult()
    {
        return $this->TestPostResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $TestPostResult
     *
     * @return TestPostResponse
     */
    public function withTestPostResult($TestPostResult)
    {
        $new = clone $this;
        $new->TestPostResult = $TestPostResult;

        return $new;
    }
}
