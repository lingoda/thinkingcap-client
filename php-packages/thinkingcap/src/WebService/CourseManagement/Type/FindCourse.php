<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindCourse implements RequestInterface
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
     * Constructor
     *
     * @var string $apiKey
     * @var string $courseID
     */
    public function __construct($apiKey, $courseID)
    {
        $this->apiKey = $apiKey;
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
     * @return FindCourse
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
     * @return FindCourse
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }
}
