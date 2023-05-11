<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserByEmail implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userEmail;

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
     * @var string $userEmail
     * @var bool $includeMetadata
     * @var bool $includeDomains
     */
    public function __construct($apiKey, $userEmail, $includeMetadata, $includeDomains)
    {
        $this->apiKey = $apiKey;
        $this->userEmail = $userEmail;
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
     * @return GetUserByEmail
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
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     *
     * @return GetUserByEmail
     */
    public function withUserEmail($userEmail)
    {
        $new = clone $this;
        $new->userEmail = $userEmail;

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
     * @return GetUserByEmail
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
     * @return GetUserByEmail
     */
    public function withIncludeDomains($includeDomains)
    {
        $new = clone $this;
        $new->includeDomains = $includeDomains;

        return $new;
    }
}
