<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByUserName implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userName;

    /**
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $userName)
    {
        $this->apiKey = $apiKey;
        $this->userName = $userName;
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
     * @return FindUserIDByUserName
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
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return FindUserIDByUserName
     */
    public function withUserName($userName)
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }
}
