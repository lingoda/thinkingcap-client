<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceResultOfStudentRecord
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord
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
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentRecord $Result
     *
     * @return ServiceResultOfStudentRecord
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
     * @return ServiceResultOfStudentRecord
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
     * @return ServiceResultOfStudentRecord
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
