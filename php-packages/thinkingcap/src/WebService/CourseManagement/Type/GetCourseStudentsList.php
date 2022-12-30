<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseStudentsList implements RequestInterface
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
    private $programID;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $courseID
     * @var string $programID
     */
    public function __construct($apiKey, $courseID, $programID)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->programID = $programID;
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
     * @return GetCourseStudentsList
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
     * @return GetCourseStudentsList
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
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * @param string $programID
     *
     * @return GetCourseStudentsList
     */
    public function withProgramID($programID)
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }
}
