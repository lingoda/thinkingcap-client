<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityCohort
{
    /**
     * @var null | array<int<0,max>, LearningActivityCohort>
     */
    private ?array $LearningActivityCohort = null;

    /**
     * @return null | array<int<0,max>, LearningActivityCohort>
     */
    public function getLearningActivityCohort(): ?array
    {
        return $this->LearningActivityCohort;
    }

    /**
     * @param null | array<int<0,max>, LearningActivityCohort> $LearningActivityCohort
     */
    public function withLearningActivityCohort(?array $LearningActivityCohort): static
    {
        $new = clone $this;
        $new->LearningActivityCohort = $LearningActivityCohort;

        return $new;
    }
}
