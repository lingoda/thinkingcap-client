<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceResultOfServiceUser
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser
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
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser $Result
     *
     * @return ServiceResultOfServiceUser
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
     * @return ServiceResultOfServiceUser
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
     * @return ServiceResultOfServiceUser
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
