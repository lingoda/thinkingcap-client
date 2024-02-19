<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserMetadataValues implements RequestInterface
{
    private string $apiKey;

    
    private string $userID;

    
    private string $fieldsValuesXml;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $userID, string $fieldsValuesXml)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->fieldsValuesXml = $fieldsValuesXml;
    }

    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getUserID(): string
    {
        return $this->userID;
    }

    
    public function withUserID(string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    
    public function getFieldsValuesXml(): string
    {
        return $this->fieldsValuesXml;
    }

    
    public function withFieldsValuesXml(string $fieldsValuesXml): static
    {
        $new = clone $this;
        $new->fieldsValuesXml = $fieldsValuesXml;

        return $new;
    }
}
