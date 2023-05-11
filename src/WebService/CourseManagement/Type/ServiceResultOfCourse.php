<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ServiceResultOfCourse
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
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
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course $Result
     *
     * @return ServiceResultOfCourse
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
     * @return ServiceResultOfCourse
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
     * @return ServiceResultOfCourse
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
