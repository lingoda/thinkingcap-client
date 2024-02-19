<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStudentAvailableCourses implements RequestInterface
{
    private string $apiKey;

    
    private string $studentID;

    
    private string $onlyDomainID;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $studentID, string $onlyDomainID)
    {
        $this->apiKey = $apiKey;
        $this->studentID = $studentID;
        $this->onlyDomainID = $onlyDomainID;
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

    
    public function getOnlyDomainID(): string
    {
        return $this->onlyDomainID;
    }

    
    public function withOnlyDomainID(string $onlyDomainID): static
    {
        $new = clone $this;
        $new->onlyDomainID = $onlyDomainID;

        return $new;
    }
}
