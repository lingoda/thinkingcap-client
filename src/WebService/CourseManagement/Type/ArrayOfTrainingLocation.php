<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTrainingLocation
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation>
     */
    private ?array $TrainingLocation;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation>
     */
    public function getTrainingLocation(): ?array
    {
        return $this->TrainingLocation;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation> $TrainingLocation
     */
    public function withTrainingLocation(?array $TrainingLocation): static
    {
        $new = clone $this;
        $new->TrainingLocation = $TrainingLocation;

        return $new;
    }
}
