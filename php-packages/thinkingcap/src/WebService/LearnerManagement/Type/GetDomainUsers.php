<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDomainUsers implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $domainID;

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
     * @var bool
     * @var bool
     * @var int
     * @var int
     */
    public function __construct($apiKey, $domainID, $includeInactive, $includeMetadata, $offset, $take)
    {
        $this->apiKey = $apiKey;
        $this->domainID = $domainID;
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
     * @return GetDomainUsers
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
    public function getDomainID()
    {
        return $this->domainID;
    }

    /**
     * @param string $domainID
     *
     * @return GetDomainUsers
     */
    public function withDomainID($domainID)
    {
        $new = clone $this;
        $new->domainID = $domainID;

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
     * @return GetDomainUsers
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
     * @return GetDomainUsers
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
     * @return GetDomainUsers
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
     * @return GetDomainUsers
     */
    public function withTake($take)
    {
        $new = clone $this;
        $new->take = $take;

        return $new;
    }
}
