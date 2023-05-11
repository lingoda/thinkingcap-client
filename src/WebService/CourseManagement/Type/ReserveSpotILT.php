<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReserveSpotILT implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningActivityCode;

    /**
     * @var string
     */
    private $learningActivityID;

    /**
     * @var int
     */
    private $numberOfSeats;

    /**
     * @var int
     */
    private $duration;

    /**
     * @var bool
     */
    private $checkWaitList;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $learningActivityCode
     * @var string $learningActivityID
     * @var int $numberOfSeats
     * @var int $duration
     * @var bool $checkWaitList
     */
    public function __construct($apiKey, $learningActivityCode, $learningActivityID, $numberOfSeats, $duration, $checkWaitList)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityCode = $learningActivityCode;
        $this->learningActivityID = $learningActivityID;
        $this->numberOfSeats = $numberOfSeats;
        $this->duration = $duration;
        $this->checkWaitList = $checkWaitList;
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
     * @return ReserveSpotILT
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
    public function getLearningActivityCode()
    {
        return $this->learningActivityCode;
    }

    /**
     * @param string $learningActivityCode
     *
     * @return ReserveSpotILT
     */
    public function withLearningActivityCode($learningActivityCode)
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityID()
    {
        return $this->learningActivityID;
    }

    /**
     * @param string $learningActivityID
     *
     * @return ReserveSpotILT
     */
    public function withLearningActivityID($learningActivityID)
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }

    /**
     * @param int $numberOfSeats
     *
     * @return ReserveSpotILT
     */
    public function withNumberOfSeats($numberOfSeats)
    {
        $new = clone $this;
        $new->numberOfSeats = $numberOfSeats;

        return $new;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return ReserveSpotILT
     */
    public function withDuration($duration)
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCheckWaitList()
    {
        return $this->checkWaitList;
    }

    /**
     * @param bool $checkWaitList
     *
     * @return ReserveSpotILT
     */
    public function withCheckWaitList($checkWaitList)
    {
        $new = clone $this;
        $new->checkWaitList = $checkWaitList;

        return $new;
    }
}
