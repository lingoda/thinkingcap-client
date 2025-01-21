<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfFeedbackQuestion
{
    /**
     * @var null | array<int<0,max>, FeedbackQuestion>
     */
    private ?array $FeedbackQuestion = null;

    /**
     * @return null | array<int<0,max>, FeedbackQuestion>
     */
    public function getFeedbackQuestion(): ?array
    {
        return $this->FeedbackQuestion;
    }

    /**
     * @param null | array<int<0,max>, FeedbackQuestion> $FeedbackQuestion
     */
    public function withFeedbackQuestion(?array $FeedbackQuestion): static
    {
        $new = clone $this;
        $new->FeedbackQuestion = $FeedbackQuestion;

        return $new;
    }
}
