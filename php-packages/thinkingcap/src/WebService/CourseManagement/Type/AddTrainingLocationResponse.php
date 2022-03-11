<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class AddTrainingLocationResponse
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    private $AddTrainingLocationResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString
     */
    public function getAddTrainingLocationResult()
    {
        return $this->AddTrainingLocationResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ServiceResultOfString $AddTrainingLocationResult
     *
     * @return AddTrainingLocationResponse
     */
    public function withAddTrainingLocationResult($AddTrainingLocationResult)
    {
        $new = clone $this;
        $new->AddTrainingLocationResult = $AddTrainingLocationResult;

        return $new;
    }
}
