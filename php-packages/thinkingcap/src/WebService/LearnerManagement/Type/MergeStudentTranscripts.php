<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MergeStudentTranscripts implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentToRemainID;

    /**
     * @var string
     */
    private $studentToGoID;

    /**
     * @var bool
     */
    private $markMergedAccountsPending;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var bool
     */
    public function __construct($apiKey, $studentToRemainID, $studentToGoID, $markMergedAccountsPending)
    {
        $this->apiKey = $apiKey;
        $this->studentToRemainID = $studentToRemainID;
        $this->studentToGoID = $studentToGoID;
        $this->markMergedAccountsPending = $markMergedAccountsPending;
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
     * @return MergeStudentTranscripts
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
    public function getStudentToRemainID()
    {
        return $this->studentToRemainID;
    }

    /**
     * @param string $studentToRemainID
     *
     * @return MergeStudentTranscripts
     */
    public function withStudentToRemainID($studentToRemainID)
    {
        $new = clone $this;
        $new->studentToRemainID = $studentToRemainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentToGoID()
    {
        return $this->studentToGoID;
    }

    /**
     * @param string $studentToGoID
     *
     * @return MergeStudentTranscripts
     */
    public function withStudentToGoID($studentToGoID)
    {
        $new = clone $this;
        $new->studentToGoID = $studentToGoID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMarkMergedAccountsPending()
    {
        return $this->markMergedAccountsPending;
    }

    /**
     * @param bool $markMergedAccountsPending
     *
     * @return MergeStudentTranscripts
     */
    public function withMarkMergedAccountsPending($markMergedAccountsPending)
    {
        $new = clone $this;
        $new->markMergedAccountsPending = $markMergedAccountsPending;

        return $new;
    }
}
