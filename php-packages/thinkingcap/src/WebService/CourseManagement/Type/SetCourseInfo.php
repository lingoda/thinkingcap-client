<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCourseInfo implements RequestInterface
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
    private $coursexml;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $courseID, $coursexml)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->coursexml = $coursexml;
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
     * @return SetCourseInfo
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
     * @return SetCourseInfo
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
    public function getCoursexml()
    {
        return $this->coursexml;
    }

    /**
     * @param string $coursexml
     *
     * @return SetCourseInfo
     */
    public function withCoursexml($coursexml)
    {
        $new = clone $this;
        $new->coursexml = $coursexml;

        return $new;
    }
}
