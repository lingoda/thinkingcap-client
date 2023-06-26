<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersByScreenName implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $screenName;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $screenName
     */
    public function __construct($apiKey, $screenName)
    {
        $this->apiKey = $apiKey;
        $this->screenName = $screenName;
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
     * @return GetUsersByScreenName
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
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * @param string $screenName
     *
     * @return GetUsersByScreenName
     */
    public function withScreenName($screenName)
    {
        $new = clone $this;
        $new->screenName = $screenName;

        return $new;
    }
}
