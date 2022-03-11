<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteLearningActivity implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningActivityID;

    /**
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $learningActivityID)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
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
     * @return DeleteLearningActivity
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
    public function getLearningActivityID()
    {
        return $this->learningActivityID;
    }

    /**
     * @param string $learningActivityID
     *
     * @return DeleteLearningActivity
     */
    public function withLearningActivityID($learningActivityID)
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }
}
