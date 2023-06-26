<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EnrollStudentReservation implements RequestInterface
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
    private $reserVationID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $learningObjectID
     * @param string $enrollmentDomainID
     * @param string $reserVationID
     */
    public function __construct($apiKey, $studentID, $learningObjectID, $enrollmentDomainID, $reserVationID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
        $this->enrollmentDomainID = $enrollmentDomainID;
        $this->reserVationID = $reserVationID;
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
     * @return EnrollStudentReservation
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
     * @return EnrollStudentReservation
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
     * @return EnrollStudentReservation
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
     * @return EnrollStudentReservation
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
    public function getReserVationID()
    {
        return $this->reserVationID;
    }

    /**
     * @param string $reserVationID
     *
     * @return EnrollStudentReservation
     */
    public function withReserVationID($reserVationID)
    {
        $new = clone $this;
        $new->reserVationID = $reserVationID;

        return $new;
    }
}
