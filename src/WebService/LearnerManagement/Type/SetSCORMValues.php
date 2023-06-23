<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetSCORMValues implements RequestInterface
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
     * @var string
     */
    private $scormObjectJson;

    /**
     * Constructor
     *
     * @param string $userLogin
     * @param string $userPassword
     * @param string $courseID
     * @param string $scormObjectJson
     */
    public function __construct($userLogin, $userPassword, $courseID, $scormObjectJson)
    {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->courseID = $courseID;
        $this->scormObjectJson = $scormObjectJson;
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
     * @return SetSCORMValues
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
     * @return SetSCORMValues
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
     * @return SetSCORMValues
     */
    public function withCourseID($courseID)
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getScormObjectJson()
    {
        return $this->scormObjectJson;
    }

    /**
     * @param string $scormObjectJson
     *
     * @return SetSCORMValues
     */
    public function withScormObjectJson($scormObjectJson)
    {
        $new = clone $this;
        $new->scormObjectJson = $scormObjectJson;

        return $new;
    }
}
