<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateECommerceCourseToken implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $courseCode;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $courseCode
     */
    public function __construct($apiKey, $courseCode)
    {
        $this->apiKey = $apiKey;
        $this->courseCode = $courseCode;
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
     * @return GenerateECommerceCourseToken
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
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * @param string $courseCode
     *
     * @return GenerateECommerceCourseToken
     */
    public function withCourseCode($courseCode)
    {
        $new = clone $this;
        $new->courseCode = $courseCode;

        return $new;
    }
}
