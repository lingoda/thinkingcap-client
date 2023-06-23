<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetActiveDirectorySynchSettings implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $clientKey;

    /**
     * @var string
     */
    private $domainID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $clientKey
     * @param string $domainID
     */
    public function __construct($apiKey, $clientKey, $domainID)
    {
        $this->apiKey = $apiKey;
        $this->clientKey = $clientKey;
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
     * @return GetActiveDirectorySynchSettings
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
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * @param string $clientKey
     *
     * @return GetActiveDirectorySynchSettings
     */
    public function withClientKey($clientKey)
    {
        $new = clone $this;
        $new->clientKey = $clientKey;

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
     * @return GetActiveDirectorySynchSettings
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }
}
