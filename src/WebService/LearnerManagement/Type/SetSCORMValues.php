<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetSCORMValues implements RequestInterface
{
    private ?string $userLogin;

    
    private ?string $userPassword;

    
    private ?string $courseID;

    
    private ?string $scormObjectJson;

    /**
     * Constructor
     *
     */
    public function __construct(?string $userLogin, ?string $userPassword, ?string $courseID, ?string $scormObjectJson)
    {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->courseID = $courseID;
        $this->scormObjectJson = $scormObjectJson;
    }

    
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }

    
    public function withUserLogin(?string $userLogin): static
    {
        $new = clone $this;
        $new->userLogin = $userLogin;

        return $new;
    }

    
    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    
    public function withUserPassword(?string $userPassword): static
    {
        $new = clone $this;
        $new->userPassword = $userPassword;

        return $new;
    }

    
    public function getCourseID(): ?string
    {
        return $this->courseID;
    }

    
    public function withCourseID(?string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    
    public function getScormObjectJson(): ?string
    {
        return $this->scormObjectJson;
    }

    
    public function withScormObjectJson(?string $scormObjectJson): static
    {
        $new = clone $this;
        $new->scormObjectJson = $scormObjectJson;

        return $new;
    }
}
