<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSCORMDetails implements RequestInterface
{
    private string $userLogin;

    
    private string $userPassword;

    
    private string $courseID;

    /**
     * Constructor
     *
     */
    public function __construct(string $userLogin, string $userPassword, string $courseID)
    {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->courseID = $courseID;
    }

    
    public function getUserLogin(): string
    {
        return $this->userLogin;
    }

    
    public function withUserLogin(string $userLogin): static
    {
        $new = clone $this;
        $new->userLogin = $userLogin;

        return $new;
    }

    
    public function getUserPassword(): string
    {
        return $this->userPassword;
    }

    
    public function withUserPassword(string $userPassword): static
    {
        $new = clone $this;
        $new->userPassword = $userPassword;

        return $new;
    }

    
    public function getCourseID(): string
    {
        return $this->courseID;
    }

    
    public function withCourseID(string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }
}
