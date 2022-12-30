<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSupervisorUsers implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $supervisorID;

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
     * @var string $apiKey
     * @var string $supervisorID
     * @var bool $includeInactive
     * @var bool $includeMetadata
     * @var int $offset
     * @var int $take
     */
    public function __construct($apiKey, $supervisorID, $includeInactive, $includeMetadata, $offset, $take)
    {
        $this->apiKey = $apiKey;
        $this->supervisorID = $supervisorID;
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
     * @return GetSupervisorUsers
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
    public function getSupervisorID()
    {
        return $this->supervisorID;
    }

    /**
     * @param string $supervisorID
     *
     * @return GetSupervisorUsers
     */
    public function withSupervisorID($supervisorID)
    {
        $new = clone $this;
        $new->supervisorID = $supervisorID;

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
     * @return GetSupervisorUsers
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
     * @return GetSupervisorUsers
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
     * @return GetSupervisorUsers
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
     * @return GetSupervisorUsers
     */
    public function withTake($take)
    {
        $new = clone $this;
        $new->take = $take;

        return $new;
    }
}
