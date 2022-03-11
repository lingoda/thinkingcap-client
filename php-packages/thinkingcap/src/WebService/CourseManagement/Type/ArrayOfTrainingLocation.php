<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfTrainingLocation
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation
     */
    private $TrainingLocation;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation
     */
    public function getTrainingLocation()
    {
        return $this->TrainingLocation;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TrainingLocation $TrainingLocation
     *
     * @return ArrayOfTrainingLocation
     */
    public function withTrainingLocation($TrainingLocation)
    {
        $new = clone $this;
        $new->TrainingLocation = $TrainingLocation;

        return $new;
    }
}
