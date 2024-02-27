<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityCohort
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort>
     */
    private ?array $LearningActivityCohort;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort>
     */
    public function getLearningActivityCohort(): ?array
    {
        return $this->LearningActivityCohort;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\LearningActivityCohort> $LearningActivityCohort
     */
    public function withLearningActivityCohort(?array $LearningActivityCohort): static
    {
        $new = clone $this;
        $new->LearningActivityCohort = $LearningActivityCohort;

        return $new;
    }
}
