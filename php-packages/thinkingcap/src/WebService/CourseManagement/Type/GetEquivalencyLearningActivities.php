<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEquivalencyLearningActivities implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $equivalencyID;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $equivalencyID
     */
    public function __construct($apiKey, $equivalencyID)
    {
        $this->apiKey = $apiKey;
        $this->equivalencyID = $equivalencyID;
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
     * @return GetEquivalencyLearningActivities
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
    public function getEquivalencyID()
    {
        return $this->equivalencyID;
    }

    /**
     * @param string $equivalencyID
     *
     * @return GetEquivalencyLearningActivities
     */
    public function withEquivalencyID($equivalencyID)
    {
        $new = clone $this;
        $new->equivalencyID = $equivalencyID;

        return $new;
    }
}
