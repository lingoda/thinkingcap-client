<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTrainingLocationsList implements RequestInterface
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
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $programID)
    {
        $this->apiKey = $apiKey;
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
     * @return GetTrainingLocationsList
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
     * @return GetTrainingLocationsList
     */
    public function withProgramID($programID)
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }
}
