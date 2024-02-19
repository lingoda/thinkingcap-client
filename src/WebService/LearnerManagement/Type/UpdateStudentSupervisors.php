<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateStudentSupervisors implements RequestInterface
{
    private string $apiKey;

    
    private string $studentID;

    
    private string $supervisorsList;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentID, string $supervisorsList)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->supervisorsList = $supervisorsList;
    }

    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getStudentID(): string
    {
        return $this->studentID;
    }

    
    public function withStudentID(string $studentID): static
    {
        $new = clone $this;
        $new->studentID = $studentID;

        return $new;
    }

    
    public function getSupervisorsList(): string
    {
        return $this->supervisorsList;
    }

    
    public function withSupervisorsList(string $supervisorsList): static
    {
        $new = clone $this;
        $new->supervisorsList = $supervisorsList;

        return $new;
    }
}
