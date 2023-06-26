<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateStudentSupervisors implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $studentID;

    /**
     * @var string
     */
    private $supervisorsList;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $studentID
     * @param string $supervisorsList
     */
    public function __construct($apiKey, $studentID, $supervisorsList)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->supervisorsList = $supervisorsList;
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
     * @return UpdateStudentSupervisors
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
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * @param string $studentID
     *
     * @return UpdateStudentSupervisors
     */
    public function withStudentID($studentID)
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSupervisorsList()
    {
        return $this->supervisorsList;
    }

    /**
     * @param string $supervisorsList
     *
     * @return UpdateStudentSupervisors
     */
    public function withSupervisorsList($supervisorsList)
    {
        $new = clone $this;
        $new->supervisorsList = $supervisorsList;

        return $new;
    }
}
