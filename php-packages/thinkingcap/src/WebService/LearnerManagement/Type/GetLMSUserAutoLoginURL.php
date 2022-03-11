<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLMSUserAutoLoginURL implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userPassword;

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
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $userLogin, $userPassword, $domainID, $returnUrl)
    {
        $this->apiKey = $apiKey;
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
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
     * @return GetLMSUserAutoLoginURL
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
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param string $userLogin
     *
     * @return GetLMSUserAutoLoginURL
     */
    public function withUserLogin($userLogin)
    {
        $new = clone $this;
        $new->userLogin = $userLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     *
     * @return GetLMSUserAutoLoginURL
     */
    public function withUserPassword($userPassword)
    {
        $new = clone $this;
        $new->userPassword = $userPassword;

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
     * @return GetLMSUserAutoLoginURL
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
     * @return GetLMSUserAutoLoginURL
     */
    public function withReturnUrl($returnUrl)
    {
        $new = clone $this;
        $new->returnUrl = $returnUrl;

        return $new;
    }
}
