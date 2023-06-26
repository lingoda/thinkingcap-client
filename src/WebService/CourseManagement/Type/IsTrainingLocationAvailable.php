<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsTrainingLocationAvailable implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $locationID;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeIntervalsList
     */
    private $timeIntervalsList;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $locationID
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeIntervalsList $timeIntervalsList
     */
    public function __construct($apiKey, $locationID, $timeIntervalsList)
    {
        $this->apiKey = $apiKey;
        $this->locationID = $locationID;
        $this->timeIntervalsList = $timeIntervalsList;
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
     * @return IsTrainingLocationAvailable
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
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * @param string $locationID
     *
     * @return IsTrainingLocationAvailable
     */
    public function withLocationID($locationID)
    {
        $new = clone $this;
        $new->locationID = $locationID;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeIntervalsList
     */
    public function getTimeIntervalsList()
    {
        return $this->timeIntervalsList;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeIntervalsList $timeIntervalsList
     *
     * @return IsTrainingLocationAvailable
     */
    public function withTimeIntervalsList($timeIntervalsList)
    {
        $new = clone $this;
        $new->timeIntervalsList = $timeIntervalsList;

        return $new;
    }
}
