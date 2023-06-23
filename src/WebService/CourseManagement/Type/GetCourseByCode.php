<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseByCode implements RequestInterface
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
     * @var string
     */
    private $language;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $courseCode
     * @param string $language
     */
    public function __construct($apiKey, $courseCode, $language)
    {
        $this->apiKey = $apiKey;
        $this->courseCode = $courseCode;
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
     * @return GetCourseByCode
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
     * @return GetCourseByCode
     */
    public function withCourseCode($courseCode)
    {
        $new = clone $this;
        $new->courseCode = $courseCode;

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
     * @return GetCourseByCode
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
