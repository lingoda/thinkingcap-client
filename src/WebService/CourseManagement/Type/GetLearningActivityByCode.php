<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityByCode implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningActivityCode;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $learningActivityCode
     */
    public function __construct($apiKey, $learningActivityCode)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityCode = $learningActivityCode;
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
     * @return GetLearningActivityByCode
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
    public function getLearningActivityCode()
    {
        return $this->learningActivityCode;
    }

    /**
     * @param string $learningActivityCode
     *
     * @return GetLearningActivityByCode
     */
    public function withLearningActivityCode($learningActivityCode)
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }
}
