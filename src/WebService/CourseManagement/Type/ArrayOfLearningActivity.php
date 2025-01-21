<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivity
{
    /**
     * @var null | array<int<0,max>, LearningActivity>
     */
    private ?array $LearningActivity = null;

    /**
     * @return null | array<int<0,max>, LearningActivity>
     */
    public function getLearningActivity(): ?array
    {
        return $this->LearningActivity;
    }

    /**
     * @param null | array<int<0,max>, LearningActivity> $LearningActivity
     */
    public function withLearningActivity(?array $LearningActivity): static
    {
        $new = clone $this;
        $new->LearningActivity = $LearningActivity;

        return $new;
    }
}
