<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EnrollStudent implements RequestInterface
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
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $studentID, $learningObjectID, $enrollmentDomainID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
        $this->enrollmentDomainID = $enrollmentDomainID;
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
     * @return EnrollStudent
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
     * @return EnrollStudent
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
     * @return EnrollStudent
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
     * @return EnrollStudent
     */
    public function withEnrollmentDomainID($enrollmentDomainID)
    {
        $new = clone $this;
        $new->enrollmentDomainID = $enrollmentDomainID;

        return $new;
    }
}
