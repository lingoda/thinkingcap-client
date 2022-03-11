<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByCustomField implements RequestInterface
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
     * @var string
     * @var string
     * @var string
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
     * @return FindUserIDByCustomField
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
     * @return FindUserIDByCustomField
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
     * @return FindUserIDByCustomField
     */
    public function withCustomFieldValue($customFieldValue)
    {
        $new = clone $this;
        $new->customFieldValue = $customFieldValue;

        return $new;
    }
}
