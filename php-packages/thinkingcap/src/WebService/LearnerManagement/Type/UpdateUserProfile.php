<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserProfile implements RequestInterface
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
    private $biography;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $photo;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $userID
     * @var string $biography
     * @var string $contentType
     * @var string $photo
     */
    public function __construct($apiKey, $userID, $biography, $contentType, $photo)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->biography = $biography;
        $this->contentType = $contentType;
        $this->photo = $photo;
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
     * @return UpdateUserProfile
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
     * @return UpdateUserProfile
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
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param string $biography
     *
     * @return UpdateUserProfile
     */
    public function withBiography($biography)
    {
        $new = clone $this;
        $new->biography = $biography;

        return $new;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @return UpdateUserProfile
     */
    public function withContentType($contentType)
    {
        $new = clone $this;
        $new->contentType = $contentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     *
     * @return UpdateUserProfile
     */
    public function withPhoto($photo)
    {
        $new = clone $this;
        $new->photo = $photo;

        return $new;
    }
}
