<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserSupervisors implements RequestInterface
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
    private $includeMetadata;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var bool $includeMetadata
     */
    public function __construct($apiKey, $userID, $includeMetadata)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->includeMetadata = $includeMetadata;
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
     * @return GetUserSupervisors
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
     * @return GetUserSupervisors
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
    public function getIncludeMetadata()
    {
        return $this->includeMetadata;
    }

    /**
     * @param bool $includeMetadata
     *
     * @return GetUserSupervisors
     */
    public function withIncludeMetadata($includeMetadata)
    {
        $new = clone $this;
        $new->includeMetadata = $includeMetadata;

        return $new;
    }
}
