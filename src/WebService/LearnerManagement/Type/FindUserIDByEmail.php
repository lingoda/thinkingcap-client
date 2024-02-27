<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUserIDByEmail implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $studentEmail;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentEmail)
    {
        $this->apiKey = $apiKey;
        $this->studentEmail = $studentEmail;
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

    
    public function getStudentEmail(): ?string
    {
        return $this->studentEmail;
    }

    
    public function withStudentEmail(?string $studentEmail): static
    {
        $new = clone $this;
        $new->studentEmail = $studentEmail;

        return $new;
    }
}
