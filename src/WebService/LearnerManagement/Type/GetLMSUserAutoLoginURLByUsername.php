<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLMSUserAutoLoginURLByUsername implements RequestInterface
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
     * @var string
     */
    private $domainID;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userName
     * @var string $domainID
     * @var string $returnUrl
     */
    public function __construct($apiKey, $userName, $domainID, $returnUrl)
    {
        $this->apiKey = $apiKey;
        $this->userName = $userName;
        $this->domainID = $domainID;
        $this->returnUrl = $returnUrl;
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
     * @return GetLMSUserAutoLoginURLByUsername
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
     * @return GetLMSUserAutoLoginURLByUsername
     */
    public function withUserName($userName)
    {
        $new = clone $this;
        $new->userName = $userName;

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
     * @return GetLMSUserAutoLoginURLByUsername
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return GetLMSUserAutoLoginURLByUsername
     */
    public function withReturnUrl($returnUrl)
    {
        $new = clone $this;
        $new->returnUrl = $returnUrl;

        return $new;
    }
}
