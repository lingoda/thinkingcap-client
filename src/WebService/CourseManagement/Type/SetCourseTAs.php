<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCourseTAs implements RequestInterface
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
    private $taList;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $courseID
     * @param string $taList
     */
    public function __construct($apiKey, $courseID, $taList)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->taList = $taList;
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
     * @return SetCourseTAs
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
     * @return SetCourseTAs
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
    public function getTaList()
    {
        return $this->taList;
    }

    /**
     * @param string $taList
     *
     * @return SetCourseTAs
     */
    public function withTaList($taList)
    {
        $new = clone $this;
        $new->taList = $taList;

        return $new;
    }
}
