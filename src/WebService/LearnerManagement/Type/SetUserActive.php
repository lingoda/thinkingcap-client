<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUserActive implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userID;

    /**
     * @var bool
     */
    private $active;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var bool $active
     */
    public function __construct($apiKey, $userID, $active)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
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
     * @return SetUserActive
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
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param string $userID
     *
     * @return SetUserActive
     */
    public function withUserID($userID)
    {
        $new = clone $this;
        $new->userID = $userID;

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
     * @return SetUserActive
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}
