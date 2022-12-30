<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUserActiveByLookup implements RequestInterface
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
     * @var bool
     */
    private $active;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $lookupValue
     * @var bool $active
     */
    public function __construct($apiKey, $lookupValue, $active)
    {
        $this->apiKey = $apiKey;
        $this->lookupValue = $lookupValue;
        $this->active = $active;
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
     * @return SetUserActiveByLookup
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
     * @return SetUserActiveByLookup
     */
    public function withLookupValue($lookupValue)
    {
        $new = clone $this;
        $new->lookupValue = $lookupValue;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return SetUserActiveByLookup
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}
