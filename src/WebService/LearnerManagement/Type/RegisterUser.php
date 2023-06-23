<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterUser implements RequestInterface
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
     * Constructor
     *
     * @param string $apiKey
     * @param string $userID
     * @param string $userFirstName
     * @param string $userLastName
     * @param string $userTitle
     * @param string $userEmail
     * @param string $userPassword
     * @param string $userScreenName
     * @param string $userLanguage
     * @param string $userCustomMetadata
     */
    public function __construct($apiKey, $userID, $userFirstName, $userLastName, $userTitle, $userEmail, $userPassword, $userScreenName, $userLanguage, $userCustomMetadata)
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
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
     * @return RegisterUser
     */
    public function withUserCustomMetadata($userCustomMetadata)
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }
}
