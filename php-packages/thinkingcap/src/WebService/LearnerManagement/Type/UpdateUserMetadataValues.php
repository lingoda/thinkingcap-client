<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserMetadataValues implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userID;

    /**
     * @var string
     */
    private $fieldsValuesXml;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     */
    public function __construct($apiKey, $userID, $fieldsValuesXml)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->fieldsValuesXml = $fieldsValuesXml;
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
     * @return UpdateUserMetadataValues
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
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param string $userID
     *
     * @return UpdateUserMetadataValues
     */
    public function withUserID($userID)
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldsValuesXml()
    {
        return $this->fieldsValuesXml;
    }

    /**
     * @param string $fieldsValuesXml
     *
     * @return UpdateUserMetadataValues
     */
    public function withFieldsValuesXml($fieldsValuesXml)
    {
        $new = clone $this;
        $new->fieldsValuesXml = $fieldsValuesXml;

        return $new;
    }
}
