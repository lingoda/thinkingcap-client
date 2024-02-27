<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfFeedbackQuestion
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion>
     */
    private ?array $FeedbackQuestion;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion>
     */
    public function getFeedbackQuestion(): ?array
    {
        return $this->FeedbackQuestion;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FeedbackQuestion> $FeedbackQuestion
     */
    public function withFeedbackQuestion(?array $FeedbackQuestion): static
    {
        $new = clone $this;
        $new->FeedbackQuestion = $FeedbackQuestion;

        return $new;
    }
}
