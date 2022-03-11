<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityListEnrollmentsTruncated implements RequestInterface
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
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $userCustomMetadata)
    {
        $this->apiKey = $apiKey;
        $this->userCustomMetadata = $userCustomMetadata;
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
     * @return GetLearningActivityListEnrollmentsTruncated
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
     * @return GetLearningActivityListEnrollmentsTruncated
     */
    public function withUserCustomMetadata($userCustomMetadata)
    {
        $new = clone $this;
        $new->userCustomMetadata = $userCustomMetadata;

        return $new;
    }
}
