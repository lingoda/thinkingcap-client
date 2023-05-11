<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddUserToDomain implements RequestInterface
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
     * @var string
     */
    private $domainID;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var string $domainID
     */
    public function __construct($apiKey, $userID, $domainID)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->domainID = $domainID;
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
     * @return AddUserToDomain
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
     * @return AddUserToDomain
     */
    public function withUserID($userID)
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @param string $domainID
     *
     * @return AddUserToDomain
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }
}
