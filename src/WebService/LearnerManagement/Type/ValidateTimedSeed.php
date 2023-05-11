<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ValidateTimedSeed implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $seed;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $seed
     */
    public function __construct($apiKey, $seed)
    {
        $this->apiKey = $apiKey;
        $this->seed = $seed;
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
     * @return ValidateTimedSeed
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
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * @param string $seed
     *
     * @return ValidateTimedSeed
     */
    public function withSeed($seed)
    {
        $new = clone $this;
        $new->seed = $seed;

        return $new;
    }
}
