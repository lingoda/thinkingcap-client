<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateCourseSeries implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $programID;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var bool
     */
    private $denyInheritance;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var bool
     */
    public function __construct($apiKey, $programID, $code, $name, $description, $tags, $denyInheritance)
    {
        $this->apiKey = $apiKey;
        $this->programID = $programID;
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
        $this->denyInheritance = $denyInheritance;
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
     * @return CreateCourseSeries
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
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * @param string $programID
     *
     * @return CreateCourseSeries
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return CreateCourseSeries
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CreateCourseSeries
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return CreateCourseSeries
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     *
     * @return CreateCourseSeries
     */
    public function withTags($tags)
    {
        $new = clone $this;
        $new->tags = $tags;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDenyInheritance()
    {
        return $this->denyInheritance;
    }

    /**
     * @param bool $denyInheritance
     *
     * @return CreateCourseSeries
     */
    public function withDenyInheritance($denyInheritance)
    {
        $new = clone $this;
        $new->denyInheritance = $denyInheritance;

        return $new;
    }
}
