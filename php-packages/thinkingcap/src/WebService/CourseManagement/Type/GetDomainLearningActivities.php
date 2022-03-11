<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDomainLearningActivities implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $onlyDomainID;

    /**
     * @var string
     */
    private $learningActivityTypeFilter;

    /**
     * @var bool
     */
    private $includeInactive;

    /**
     * @var bool
     */
    private $includeMetadata;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $take;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var bool
     * @var bool
     * @var int
     * @var int
     */
    public function __construct($apiKey, $onlyDomainID, $learningActivityTypeFilter, $includeInactive, $includeMetadata, $offset, $take)
    {
        $this->apiKey = $apiKey;
        $this->onlyDomainID = $onlyDomainID;
        $this->learningActivityTypeFilter = $learningActivityTypeFilter;
        $this->includeInactive = $includeInactive;
        $this->includeMetadata = $includeMetadata;
        $this->offset = $offset;
        $this->take = $take;
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
     * @return GetDomainLearningActivities
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
    public function getOnlyDomainID()
    {
        return $this->onlyDomainID;
    }

    /**
     * @param string $onlyDomainID
     *
     * @return GetDomainLearningActivities
     */
    public function withOnlyDomainID($onlyDomainID)
    {
        $new = clone $this;
        $new->onlyDomainID = $onlyDomainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityTypeFilter()
    {
        return $this->learningActivityTypeFilter;
    }

    /**
     * @param string $learningActivityTypeFilter
     *
     * @return GetDomainLearningActivities
     */
    public function withLearningActivityTypeFilter($learningActivityTypeFilter)
    {
        $new = clone $this;
        $new->learningActivityTypeFilter = $learningActivityTypeFilter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeInactive()
    {
        return $this->includeInactive;
    }

    /**
     * @param bool $includeInactive
     *
     * @return GetDomainLearningActivities
     */
    public function withIncludeInactive($includeInactive)
    {
        $new = clone $this;
        $new->includeInactive = $includeInactive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeMetadata()
    {
        return $this->includeMetadata;
    }

    /**
     * @param bool $includeMetadata
     *
     * @return GetDomainLearningActivities
     */
    public function withIncludeMetadata($includeMetadata)
    {
        $new = clone $this;
        $new->includeMetadata = $includeMetadata;

        return $new;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return GetDomainLearningActivities
     */
    public function withOffset($offset)
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    /**
     * @return int
     */
    public function getTake()
    {
        return $this->take;
    }

    /**
     * @param int $take
     *
     * @return GetDomainLearningActivities
     */
    public function withTake($take)
    {
        $new = clone $this;
        $new->take = $take;

        return $new;
    }
}
