<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentAvailableCourses implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentID;

    /**
     * @var string
     */
    private $onlyDomainID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $onlyDomainID
     */
    public function __construct($apiKey, $studentID, $onlyDomainID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->onlyDomainID = $onlyDomainID;
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
     * @return GetStudentAvailableCourses
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
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * @param string $studentID
     *
     * @return GetStudentAvailableCourses
     */
    public function withStudentID($studentID)
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnlyDomainID()
    {
        return $this->onlyDomainID;
    }

    /**
     * @param string $onlyDomainID
     *
     * @return GetStudentAvailableCourses
     */
    public function withOnlyDomainID($onlyDomainID)
    {
        $new = clone $this;
        $new->onlyDomainID = $onlyDomainID;

        return $new;
    }
}
