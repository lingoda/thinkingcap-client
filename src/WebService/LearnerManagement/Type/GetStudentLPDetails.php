<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentLPDetails implements RequestInterface
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
    private $learningPathID;

    /**
     * @var string
     */
    private $language;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $learningPathID
     * @param string $language
     */
    public function __construct($apiKey, $studentID, $learningPathID, $language)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningPathID = $learningPathID;
        $this->language = $language;
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
     * @return GetStudentLPDetails
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
     * @return GetStudentLPDetails
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
    public function getLearningPathID()
    {
        return $this->learningPathID;
    }

    /**
     * @param string $learningPathID
     *
     * @return GetStudentLPDetails
     */
    public function withLearningPathID($learningPathID)
    {
        $new = clone $this;
        $new->learningPathID = $learningPathID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return GetStudentLPDetails
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
