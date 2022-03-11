<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCourseMarkedBy implements RequestInterface
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
     * @var bool
     */
    private $moderator;

    /**
     * @var bool
     */
    private $ta;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var bool
     * @var bool
     */
    public function __construct($apiKey, $courseID, $moderator, $ta)
    {
        $this->apiKey = $apiKey;
        $this->courseID = $courseID;
        $this->moderator = $moderator;
        $this->ta = $ta;
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
     * @return SetCourseMarkedBy
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
     * @return SetCourseMarkedBy
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getModerator()
    {
        return $this->moderator;
    }

    /**
     * @param bool $moderator
     *
     * @return SetCourseMarkedBy
     */
    public function withModerator($moderator)
    {
        $new = clone $this;
        $new->moderator = $moderator;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTa()
    {
        return $this->ta;
    }

    /**
     * @param bool $ta
     *
     * @return SetCourseMarkedBy
     */
    public function withTa($ta)
    {
        $new = clone $this;
        $new->ta = $ta;

        return $new;
    }
}
