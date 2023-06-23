<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByEmail implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentEmail;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentEmail
     */
    public function __construct($apiKey, $studentEmail)
    {
        $this->apiKey = $apiKey;
        $this->studentEmail = $studentEmail;
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
     * @return FindUserIDByEmail
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
    public function getStudentEmail()
    {
        return $this->studentEmail;
    }

    /**
     * @param string $studentEmail
     *
     * @return FindUserIDByEmail
     */
    public function withStudentEmail($studentEmail)
    {
        $new = clone $this;
        $new->studentEmail = $studentEmail;

        return $new;
    }
}
