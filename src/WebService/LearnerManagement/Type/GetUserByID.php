<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserByID implements RequestInterface
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
     * @var bool
     */
    private $includeDomains;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var bool $includeMetadata
     * @var bool $includeDomains
     */
    public function __construct($apiKey, $userID, $includeMetadata, $includeDomains)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->includeMetadata = $includeMetadata;
        $this->includeDomains = $includeDomains;
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
     * @return GetUserByID
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
     * @return GetUserByID
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
     * @return GetUserByID
     */
    public function withIncludeMetadata($includeMetadata)
    {
        $new = clone $this;
        $new->includeMetadata = $includeMetadata;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeDomains()
    {
        return $this->includeDomains;
    }

    /**
     * @param bool $includeDomains
     *
     * @return GetUserByID
     */
    public function withIncludeDomains($includeDomains)
    {
        $new = clone $this;
        $new->includeDomains = $includeDomains;

        return $new;
    }
}
