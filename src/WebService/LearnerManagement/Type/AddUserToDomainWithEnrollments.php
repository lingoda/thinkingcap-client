<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddUserToDomainWithEnrollments implements RequestInterface
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
     * @var bool
     */
    private $doAutoEnrollment;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $userID
     * @param string $domainID
     * @param bool $doAutoEnrollment
     */
    public function __construct($apiKey, $userID, $domainID, $doAutoEnrollment)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->domainID = $domainID;
        $this->doAutoEnrollment = $doAutoEnrollment;
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
     * @return AddUserToDomainWithEnrollments
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
     * @return AddUserToDomainWithEnrollments
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
     * @return AddUserToDomainWithEnrollments
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoAutoEnrollment()
    {
        return $this->doAutoEnrollment;
    }

    /**
     * @param bool $doAutoEnrollment
     *
     * @return AddUserToDomainWithEnrollments
     */
    public function withDoAutoEnrollment($doAutoEnrollment)
    {
        $new = clone $this;
        $new->doAutoEnrollment = $doAutoEnrollment;

        return $new;
    }
}
