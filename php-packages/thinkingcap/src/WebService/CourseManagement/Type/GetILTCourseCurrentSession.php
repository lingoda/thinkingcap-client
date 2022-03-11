<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetILTCourseCurrentSession implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $courseID;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $courseID, $timestamp)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->timestamp = $timestamp;
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
     * @return GetILTCourseCurrentSession
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
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @param string $courseID
     *
     * @return GetILTCourseCurrentSession
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     *
     * @return GetILTCourseCurrentSession
     */
    public function withTimestamp($timestamp)
    {
        $new = clone $this;
        $new->timestamp = $timestamp;

        return $new;
    }
}
