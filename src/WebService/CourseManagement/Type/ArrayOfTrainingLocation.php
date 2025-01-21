<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTrainingLocation
{
    /**
     * @var null | array<int<0,max>, TrainingLocation>
     */
    private ?array $TrainingLocation = null;

    /**
     * @return null | array<int<0,max>, TrainingLocation>
     */
    public function getTrainingLocation(): ?array
    {
        return $this->TrainingLocation;
    }

    /**
     * @param null | array<int<0,max>, TrainingLocation> $TrainingLocation
     */
    public function withTrainingLocation(?array $TrainingLocation): static
    {
        $new = clone $this;
        $new->TrainingLocation = $TrainingLocation;

        return $new;
    }
}
