<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAllUsers implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * Constructor
     *
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
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
     * @return GetAllUsers
     */
    public function withApiKey($apiKey)
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }
}
