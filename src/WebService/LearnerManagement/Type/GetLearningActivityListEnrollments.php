<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityListEnrollments implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userCustomMetadata;

    /**
     * @var string
     */
    private $customFieldIDs;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userCustomMetadata
     * @var string $customFieldIDs
     */
    public function __construct($apiKey, $userCustomMetadata, $customFieldIDs)
    {
        $this->apiKey = $apiKey;
        $this->userCustomMetadata = $userCustomMetadata;
        $this->customFieldIDs = $customFieldIDs;
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
     * @return GetLearningActivityListEnrollments
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
    public function getUserCustomMetadata()
    {
        return $this->userCustomMetadata;
    }

    /**
     * @param string $userCustomMetadata
     *
     * @return GetLearningActivityListEnrollments
     */
    public function withUserCustomMetadata($userCustomMetadata)
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldIDs()
    {
        return $this->customFieldIDs;
    }

    /**
     * @param string $customFieldIDs
     *
     * @return GetLearningActivityListEnrollments
     */
    public function withCustomFieldIDs($customFieldIDs)
    {
        $new = clone $this;
        $new->customFieldIDs = $customFieldIDs;

        return $new;
    }
}
