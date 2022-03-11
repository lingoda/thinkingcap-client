<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSCORMDetails implements RequestInterface
{
    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var string
     */
    private $courseID;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     */
    public function __construct($userLogin, $userPassword, $courseID)
    {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->courseID = $courseID;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param string $userLogin
     *
     * @return GetSCORMDetails
     */
    public function withUserLogin($userLogin)
    {
        $new = clone $this;
        $new->userLogin = $userLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     *
     * @return GetSCORMDetails
     */
    public function withUserPassword($userPassword)
    {
        $new = clone $this;
        $new->userPassword = $userPassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @param string $courseID
     *
     * @return GetSCORMDetails
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }
}
