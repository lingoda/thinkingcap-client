<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfLearningActivity
{
    private LearningActivity $LearningActivity;

    
    public function getLearningActivity(): LearningActivity
    {
        return $this->LearningActivity;
    }

    
    public function withLearningActivity(LearningActivity $LearningActivity): static
    {
        $new = clone $this;
        $new->LearningActivity = $LearningActivity;

        return $new;
    }
}
