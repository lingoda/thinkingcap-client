<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetFeedbackCompletedResponse implements ResultInterface
{
    private ServiceResultOfString $SetFeedbackCompletedResult;

    
    public function getSetFeedbackCompletedResult(): ServiceResultOfString
    {
        return $this->SetFeedbackCompletedResult;
    }

    
    public function withSetFeedbackCompletedResult(ServiceResultOfString $SetFeedbackCompletedResult): static
    {
        $new = clone $this;
        $new->SetFeedbackCompletedResult = $SetFeedbackCompletedResult;

        return $new;
    }
}
