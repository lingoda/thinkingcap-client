<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeedbackCompleted implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentRecordID;

    /**
     * @var string
     */
    private $learningPathID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentRecordID
     * @param string $learningPathID
     */
    public function __construct($apiKey, $studentRecordID, $learningPathID)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
        $this->learningPathID = $learningPathID;
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
     * @return SetFeedbackCompleted
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
    public function getStudentRecordID()
    {
        return $this->studentRecordID;
    }

    /**
     * @param string $studentRecordID
     *
     * @return SetFeedbackCompleted
     */
    public function withStudentRecordID($studentRecordID)
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningPathID()
    {
        return $this->learningPathID;
    }

    /**
     * @param string $learningPathID
     *
     * @return SetFeedbackCompleted
     */
    public function withLearningPathID($learningPathID)
    {
        $new = clone $this;
        $new->learningPathID = $learningPathID;

        return $new;
    }
}
