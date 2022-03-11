<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfFeedbackQuestion
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion
     */
    private $FeedbackQuestion;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion
     */
    public function getFeedbackQuestion()
    {
        return $this->FeedbackQuestion;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion $FeedbackQuestion
     *
     * @return ArrayOfFeedbackQuestion
     */
    public function withFeedbackQuestion($FeedbackQuestion)
    {
        $new = clone $this;
        $new->FeedbackQuestion = $FeedbackQuestion;

        return $new;
    }
}
