<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetRecordDetails implements RequestInterface
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
     * Constructor
     *
     * @var string $apiKey
     * @var string $studentRecordID
     */
    public function __construct($apiKey, $studentRecordID)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
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
     * @return GetRecordDetails
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
     * @return GetRecordDetails
     */
    public function withStudentRecordID($studentRecordID)
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }
}
