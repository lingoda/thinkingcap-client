<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseModeratorsList implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $programID;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $type
     * @param string $programID
     */
    public function __construct($apiKey, $type, $programID)
    {
        $this->apiKey = $apiKey;
        $this->type = $type;
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
     * @return GetCourseModeratorsList
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return GetCourseModeratorsList
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

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
     * @return GetCourseModeratorsList
     */
    public function withProgramID($programID)
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }
}
