<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EnrollStudentWithDetails implements RequestInterface
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
    private $learningObjectID;

    /**
     * @var string
     */
    private $enrollmentDomainID;

    /**
     * @var string
     */
    private $details;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $studentID
     * @var string $learningObjectID
     * @var string $enrollmentDomainID
     * @var string $details
     */
    public function __construct($apiKey, $studentID, $learningObjectID, $enrollmentDomainID, $details)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
        $this->enrollmentDomainID = $enrollmentDomainID;
        $this->details = $details;
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
     * @return EnrollStudentWithDetails
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
     * @return EnrollStudentWithDetails
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
    public function getLearningObjectID()
    {
        return $this->learningObjectID;
    }

    /**
     * @param string $learningObjectID
     *
     * @return EnrollStudentWithDetails
     */
    public function withLearningObjectID($learningObjectID)
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }

    /**
     * @return string
     */
    public function getEnrollmentDomainID()
    {
        return $this->enrollmentDomainID;
    }

    /**
     * @param string $enrollmentDomainID
     *
     * @return EnrollStudentWithDetails
     */
    public function withEnrollmentDomainID($enrollmentDomainID)
    {
        $new = clone $this;
        $new->enrollmentDomainID = $enrollmentDomainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     *
     * @return EnrollStudentWithDetails
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }
}
