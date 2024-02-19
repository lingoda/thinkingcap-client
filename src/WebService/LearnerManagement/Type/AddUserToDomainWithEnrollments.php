<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddUserToDomainWithEnrollments implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userID;

    
    private ?string $domainID;

    
    private bool $doAutoEnrollment;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $userID, ?string $domainID, bool $doAutoEnrollment)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->domainID = $domainID;
        $this->doAutoEnrollment = $doAutoEnrollment;
    }

    
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getUserID(): ?string
    {
        return $this->userID;
    }

    
    public function withUserID(?string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    
    public function getDomainID(): ?string
    {
        return $this->domainID;
    }

    
    public function withDomainID(?string $domainID): static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    
    public function getDoAutoEnrollment(): bool
    {
        return $this->doAutoEnrollment;
    }

    
    public function withDoAutoEnrollment(bool $doAutoEnrollment): static
    {
        $new = clone $this;
        $new->doAutoEnrollment = $doAutoEnrollment;

        return $new;
    }
}
