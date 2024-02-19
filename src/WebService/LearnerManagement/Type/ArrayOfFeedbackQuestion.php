<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfFeedbackQuestion
{
    private FeedbackQuestion $FeedbackQuestion;

    
    public function getFeedbackQuestion(): FeedbackQuestion
    {
        return $this->FeedbackQuestion;
    }

    
    public function withFeedbackQuestion(FeedbackQuestion $FeedbackQuestion): static
    {
        $new = clone $this;
        $new->FeedbackQuestion = $FeedbackQuestion;

        return $new;
    }
}
