<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUserByLookup implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $lookupValue;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $lookupValue
     */
    public function __construct($apiKey, $lookupValue)
    {
        $this->apiKey = $apiKey;
        $this->lookupValue = $lookupValue;
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
     * @return DeleteUserByLookup
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
    public function getLookupValue()
    {
        return $this->lookupValue;
    }

    /**
     * @param string $lookupValue
     *
     * @return DeleteUserByLookup
     */
    public function withLookupValue($lookupValue)
    {
        $new = clone $this;
        $new->lookupValue = $lookupValue;

        return $new;
    }
}
