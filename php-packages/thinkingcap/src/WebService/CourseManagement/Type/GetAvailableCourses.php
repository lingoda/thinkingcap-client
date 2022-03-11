<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAvailableCourses implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $courseType;

    /**
     * @var string
     */
    private $onlySelfEnrollmentCourse;

    /**
     * @var string
     */
    private $programID;

    /**
     * @var string
     */
    private $language;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $courseType, $onlySelfEnrollmentCourse, $programID, $language)
    {
        $this->apiKey = $apiKey;
        $this->courseType = $courseType;
        $this->onlySelfEnrollmentCourse = $onlySelfEnrollmentCourse;
        $this->programID = $programID;
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
     * @return GetAvailableCourses
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
    public function getCourseType()
    {
        return $this->courseType;
    }

    /**
     * @param string $courseType
     *
     * @return GetAvailableCourses
     */
    public function withCourseType($courseType)
    {
        $new = clone $this;
        $new->courseType = $courseType;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnlySelfEnrollmentCourse()
    {
        return $this->onlySelfEnrollmentCourse;
    }

    /**
     * @param string $onlySelfEnrollmentCourse
     *
     * @return GetAvailableCourses
     */
    public function withOnlySelfEnrollmentCourse($onlySelfEnrollmentCourse)
    {
        $new = clone $this;
        $new->onlySelfEnrollmentCourse = $onlySelfEnrollmentCourse;

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
     * @return GetAvailableCourses
     */
    public function withProgramID($programID)
    {
        $new = clone $this;
        $new->programID = $programID;

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
     * @return GetAvailableCourses
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
