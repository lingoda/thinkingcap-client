<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Contact
{
    /**
     * @var string
     */
    private $UserID;

    /**
     * @var string
     */
    private $ContactID;

    /**
     * @var string
     */
    private $ContactName;

    /**
     * @var string
     */
    private $ContactScreenName;

    /**
     * @var string
     */
    private $ContactEmail;

    /**
     * @return string
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param string $UserID
     *
     * @return Contact
     */
    public function withUserID($UserID)
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * @param string $ContactID
     *
     * @return Contact
     */
    public function withContactID($ContactID)
    {
        $new = clone $this;
        $new->ContactID = $ContactID;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param string $ContactName
     *
     * @return Contact
     */
    public function withContactName($ContactName)
    {
        $new = clone $this;
        $new->ContactName = $ContactName;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactScreenName()
    {
        return $this->ContactScreenName;
    }

    /**
     * @param string $ContactScreenName
     *
     * @return Contact
     */
    public function withContactScreenName($ContactScreenName)
    {
        $new = clone $this;
        $new->ContactScreenName = $ContactScreenName;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->ContactEmail;
    }

    /**
     * @param string $ContactEmail
     *
     * @return Contact
     */
    public function withContactEmail($ContactEmail)
    {
        $new = clone $this;
        $new->ContactEmail = $ContactEmail;

        return $new;
    }
}
