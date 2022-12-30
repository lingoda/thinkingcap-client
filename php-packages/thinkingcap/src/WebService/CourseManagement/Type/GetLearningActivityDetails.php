<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityDetails implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $activityID;

    /**
     * @var string
     */
    private $customFieldIDs;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $activityID
     * @var string $customFieldIDs
     */
    public function __construct($apiKey, $activityID, $customFieldIDs)
    {
        $this->apiKey = $apiKey;
        $this->activityID = $activityID;
        $this->customFieldIDs = $customFieldIDs;
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
     * @return GetLearningActivityDetails
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
    public function getActivityID()
    {
        return $this->activityID;
    }

    /**
     * @param string $activityID
     *
     * @return GetLearningActivityDetails
     */
    public function withActivityID($activityID)
    {
        $new = clone $this;
        $new->activityID = $activityID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldIDs()
    {
        return $this->customFieldIDs;
    }

    /**
     * @param string $customFieldIDs
     *
     * @return GetLearningActivityDetails
     */
    public function withCustomFieldIDs($customFieldIDs)
    {
        $new = clone $this;
        $new->customFieldIDs = $customFieldIDs;

        return $new;
    }
}
