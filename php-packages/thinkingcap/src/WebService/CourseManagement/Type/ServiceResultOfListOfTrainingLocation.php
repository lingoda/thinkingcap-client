<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ServiceResultOfListOfTrainingLocation
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTrainingLocation
     */
    private $Result;

    /**
     * @var bool
     */
    private $Success;

    /**
     * @var string
     */
    private $Message;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTrainingLocation
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfTrainingLocation $Result
     *
     * @return ServiceResultOfListOfTrainingLocation
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     *
     * @return ServiceResultOfListOfTrainingLocation
     */
    public function withSuccess($Success)
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     *
     * @return ServiceResultOfListOfTrainingLocation
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
