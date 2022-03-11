<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTrainingLocation implements RequestInterface
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
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $locationID)
    {
        $this->apiKey = $apiKey;
        $this->locationID = $locationID;
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
     * @return GetTrainingLocation
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
     * @return GetTrainingLocation
     */
    public function withLocationID($locationID)
    {
        $new = clone $this;
        $new->locationID = $locationID;

        return $new;
    }
}
