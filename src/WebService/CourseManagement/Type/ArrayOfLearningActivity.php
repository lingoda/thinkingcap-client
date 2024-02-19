<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivity
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity>
     */
    private ?array $LearningActivity;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity>
     */
    public function getLearningActivity(): ?array
    {
        return $this->LearningActivity;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivity> $LearningActivity
     */
    public function withLearningActivity(?array $LearningActivity): static
    {
        $new = clone $this;
        $new->LearningActivity = $LearningActivity;

        return $new;
    }
}
