<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetFeedbackCompletedResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $SetFeedbackCompletedResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getSetFeedbackCompletedResult()
    {
        return $this->SetFeedbackCompletedResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $SetFeedbackCompletedResult
     *
     * @return SetFeedbackCompletedResponse
     */
    public function withSetFeedbackCompletedResult($SetFeedbackCompletedResult)
    {
        $new = clone $this;
        $new->SetFeedbackCompletedResult = $SetFeedbackCompletedResult;

        return $new;
    }
}
