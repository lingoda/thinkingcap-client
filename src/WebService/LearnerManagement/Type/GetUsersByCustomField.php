<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersByCustomField implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $customFieldID;

    /**
     * @var string
     */
    private $customFieldValue;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $customFieldID
     * @var string $customFieldValue
     */
    public function __construct($apiKey, $customFieldID, $customFieldValue)
    {
        $this->apiKey = $apiKey;
        $this->customFieldID = $customFieldID;
        $this->customFieldValue = $customFieldValue;
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
     * @return GetUsersByCustomField
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
    public function getCustomFieldID()
    {
        return $this->customFieldID;
    }

    /**
     * @param string $customFieldID
     *
     * @return GetUsersByCustomField
     */
    public function withCustomFieldID($customFieldID)
    {
        $new = clone $this;
        $new->customFieldID = $customFieldID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldValue()
    {
        return $this->customFieldValue;
    }

    /**
     * @param string $customFieldValue
     *
     * @return GetUsersByCustomField
     */
    public function withCustomFieldValue($customFieldValue)
    {
        $new = clone $this;
        $new->customFieldValue = $customFieldValue;

        return $new;
    }
}