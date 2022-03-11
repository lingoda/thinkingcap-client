<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeLearningActivityActiveStatus implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningObjectID;

    /**
     * @var bool
     */
    private $active;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var bool
     */
    public function __construct($apiKey, $learningObjectID, $active)
    {
        $this->apiKey = $apiKey;
        $this->learningObjectID = $learningObjectID;
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withApiKey($apiKey)
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningObjectID()
    {
        return $this->learningObjectID;
    }

    /**
     * @param string $learningObjectID
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withLearningObjectID($learningObjectID)
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}
