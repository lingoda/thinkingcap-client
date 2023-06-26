<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityCustomFieldValues implements RequestInterface
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
     * @var string
     */
    private $customFieldID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $learningActivityID
     * @param string $customFieldID
     */
    public function __construct($apiKey, $learningActivityID, $customFieldID)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
        $this->customFieldID = $customFieldID;
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
     * @return GetLearningActivityCustomFieldValues
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
     * @return GetLearningActivityCustomFieldValues
     */
    public function withLearningActivityID($learningActivityID)
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldID()
    {
        return $this->customFieldID;
    }

    /**
     * @param string $customFieldID
     *
     * @return GetLearningActivityCustomFieldValues
     */
    public function withCustomFieldID($customFieldID)
    {
        $new = clone $this;
        $new->customFieldID = $customFieldID;

        return $new;
    }
}
