<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateTimedSeed implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var int
     */
    private $expireSeconds;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param int $expireSeconds
     */
    public function __construct($apiKey, $expireSeconds)
    {
        $this->apiKey = $apiKey;
        $this->expireSeconds = $expireSeconds;
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
     * @return GenerateTimedSeed
     */
    public function withApiKey($apiKey)
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpireSeconds()
    {
        return $this->expireSeconds;
    }

    /**
     * @param int $expireSeconds
     *
     * @return GenerateTimedSeed
     */
    public function withExpireSeconds($expireSeconds)
    {
        $new = clone $this;
        $new->expireSeconds = $expireSeconds;

        return $new;
    }
}
