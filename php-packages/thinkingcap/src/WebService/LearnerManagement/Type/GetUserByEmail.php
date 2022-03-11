<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserByEmail implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * Constructor
     *
     * @var string
     * @var string
     */
    public function __construct($apiKey, $userEmail)
    {
        $this->apiKey = $apiKey;
        $this->userEmail = $userEmail;
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
     * @return GetUserByEmail
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
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     *
     * @return GetUserByEmail
     */
    public function withUserEmail($userEmail)
    {
        $new = clone $this;
        $new->userEmail = $userEmail;

        return $new;
    }
}
