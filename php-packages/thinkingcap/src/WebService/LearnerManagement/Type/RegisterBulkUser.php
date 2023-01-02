<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterBulkUser implements RequestInterface
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
    private $userFirstName;

    /**
     * @var string
     */
    private $userLastName;

    /**
     * @var string
     */
    private $userTitle;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var string
     */
    private $userScreenName;

    /**
     * @var string
     */
    private $userLanguage;

    /**
     * @var string
     */
    private $userCustomMetadata;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $syncDomainID;

    /**
     * @var bool
     */
    private $protectFromManualChange;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var string $userFirstName
     * @var string $userLastName
     * @var string $userTitle
     * @var string $userEmail
     * @var string $userPassword
     * @var string $userScreenName
     * @var string $userLanguage
     * @var string $userCustomMetadata
     * @var string $source
     * @var string $syncDomainID
     * @var bool $protectFromManualChange
     */
    public function __construct($apiKey, $userID, $userFirstName, $userLastName, $userTitle, $userEmail, $userPassword, $userScreenName, $userLanguage, $userCustomMetadata, $source, $syncDomainID, $protectFromManualChange)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->userFirstName = $userFirstName;
        $this->userLastName = $userLastName;
        $this->userTitle = $userTitle;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userScreenName = $userScreenName;
        $this->userLanguage = $userLanguage;
        $this->userCustomMetadata = $userCustomMetadata;
        $this->source = $source;
        $this->syncDomainID = $syncDomainID;
        $this->protectFromManualChange = $protectFromManualChange;
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
     * @return RegisterBulkUser
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
     * @return RegisterBulkUser
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
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @param string $userFirstName
     *
     * @return RegisterBulkUser
     */
    public function withUserFirstName($userFirstName)
    {
        $new = clone $this;
        $new->userFirstName = $userFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param string $userLastName
     *
     * @return RegisterBulkUser
     */
    public function withUserLastName($userLastName)
    {
        $new = clone $this;
        $new->userLastName = $userLastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * @param string $userTitle
     *
     * @return RegisterBulkUser
     */
    public function withUserTitle($userTitle)
    {
        $new = clone $this;
        $new->userTitle = $userTitle;

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
     * @return RegisterBulkUser
     */
    public function withUserEmail($userEmail)
    {
        $new = clone $this;
        $new->userEmail = $userEmail;

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
     * @return RegisterBulkUser
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
    public function getUserScreenName()
    {
        return $this->userScreenName;
    }

    /**
     * @param string $userScreenName
     *
     * @return RegisterBulkUser
     */
    public function withUserScreenName($userScreenName)
    {
        $new = clone $this;
        $new->userScreenName = $userScreenName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * @param string $userLanguage
     *
     * @return RegisterBulkUser
     */
    public function withUserLanguage($userLanguage)
    {
        $new = clone $this;
        $new->userLanguage = $userLanguage;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserCustomMetadata()
    {
        return $this->userCustomMetadata;
    }

    /**
     * @param string $userCustomMetadata
     *
     * @return RegisterBulkUser
     */
    public function withUserCustomMetadata($userCustomMetadata)
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return RegisterBulkUser
     */
    public function withSource($source)
    {
        $new = clone $this;
        $new->source = $source;

        return $new;
    }

    /**
     * @return string
     */
    public function getSyncDomainID()
    {
        return $this->syncDomainID;
    }

    /**
     * @param string $syncDomainID
     *
     * @return RegisterBulkUser
     */
    public function withSyncDomainID($syncDomainID)
    {
        $new = clone $this;
        $new->syncDomainID = $syncDomainID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProtectFromManualChange()
    {
        return $this->protectFromManualChange;
    }

    /**
     * @param bool $protectFromManualChange
     *
     * @return RegisterBulkUser
     */
    public function withProtectFromManualChange($protectFromManualChange)
    {
        $new = clone $this;
        $new->protectFromManualChange = $protectFromManualChange;

        return $new;
    }
}
