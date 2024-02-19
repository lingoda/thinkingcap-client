<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivityCohort
{
    private LearningActivityCohort $LearningActivityCohort;

    
    public function getLearningActivityCohort(): LearningActivityCohort
    {
        return $this->LearningActivityCohort;
    }

    
    public function withLearningActivityCohort(LearningActivityCohort $LearningActivityCohort): static
    {
        $new = clone $this;
        $new->LearningActivityCohort = $LearningActivityCohort;

        return $new;
    }
}
