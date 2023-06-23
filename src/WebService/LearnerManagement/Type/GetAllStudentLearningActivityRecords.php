<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAllStudentLearningActivityRecords implements RequestInterface
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
    private $learningObjectTypeFilter;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $learningObjectTypeFilter
     */
    public function __construct($apiKey, $studentID, $learningObjectTypeFilter)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->learningObjectTypeFilter = $learningObjectTypeFilter;
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
     * @return GetAllStudentLearningActivityRecords
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
     * @return GetAllStudentLearningActivityRecords
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
    public function getLearningObjectTypeFilter()
    {
        return $this->learningObjectTypeFilter;
    }

    /**
     * @param string $learningObjectTypeFilter
     *
     * @return GetAllStudentLearningActivityRecords
     */
    public function withLearningObjectTypeFilter($learningObjectTypeFilter)
    {
        $new = clone $this;
        $new->learningObjectTypeFilter = $learningObjectTypeFilter;

        return $new;
    }
}
