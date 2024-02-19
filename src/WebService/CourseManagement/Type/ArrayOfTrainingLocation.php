<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTrainingLocation
{
    private TrainingLocation $TrainingLocation;

    
    public function getTrainingLocation(): TrainingLocation
    {
        return $this->TrainingLocation;
    }

    
    public function withTrainingLocation(TrainingLocation $TrainingLocation): static
    {
        $new = clone $this;
        $new->TrainingLocation = $TrainingLocation;

        return $new;
    }
}
