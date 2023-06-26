<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityEquivalencyByCode implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $equivalencyCode;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $equivalencyCode
     */
    public function __construct($apiKey, $equivalencyCode)
    {
        $this->apiKey = $apiKey;
        $this->equivalencyCode = $equivalencyCode;
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
     * @return GetLearningActivityEquivalencyByCode
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
    public function getEquivalencyCode()
    {
        return $this->equivalencyCode;
    }

    /**
     * @param string $equivalencyCode
     *
     * @return GetLearningActivityEquivalencyByCode
     */
    public function withEquivalencyCode($equivalencyCode)
    {
        $new = clone $this;
        $new->equivalencyCode = $equivalencyCode;

        return $new;
    }
}
