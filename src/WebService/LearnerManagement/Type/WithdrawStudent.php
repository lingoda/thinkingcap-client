<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class WithdrawStudent implements RequestInterface
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
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $learningObjectID
     */
    public function __construct($apiKey, $studentID, $learningObjectID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectID = $learningObjectID;
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
     * @return WithdrawStudent
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
     * @return WithdrawStudent
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
     * @return WithdrawStudent
     */
    public function withLearningObjectID($learningObjectID)
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }
}
