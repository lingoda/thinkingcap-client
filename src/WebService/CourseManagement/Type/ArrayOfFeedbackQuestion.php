<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfFeedbackQuestion
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackQuestion
     */
    private $FeedbackQuestion;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackQuestion
     */
    public function getFeedbackQuestion()
    {
        return $this->FeedbackQuestion;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FeedbackQuestion $FeedbackQuestion
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
