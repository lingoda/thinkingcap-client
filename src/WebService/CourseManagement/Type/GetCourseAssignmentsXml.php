<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseAssignmentsXml implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $courseID;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $user
     * @var string $courseID
     */
    public function __construct($apiKey, $user, $courseID)
    {
        $this->apiKey = $apiKey;
        $this->user = $user;
        $this->courseID = $courseID;
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
     * @return GetCourseAssignmentsXml
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return GetCourseAssignmentsXml
     */
    public function withUser($user)
    {
        $new = clone $this;
        $new->user = $user;

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
     * @return GetCourseAssignmentsXml
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }
}
