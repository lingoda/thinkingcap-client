<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceUser
{
    /**
     * @var string
     */
    private $UserID;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $OutsideEmail;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $ScreenName;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var string
     */
    private $HomeDomainID;

    /**
     * @var string
     */
    private $HomeDomainName;

    /**
     * @var \DateTimeInterface
     */
    private $CreationDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastModifiedDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastLoginDate;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var string
     */
    private $ProfilePhotoUrl;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfCustomField
     */
    private $CustomFields;

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
     * @return ServiceUser
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
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     *
     * @return ServiceUser
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     *
     * @return ServiceUser
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return ServiceUser
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return string
     */
    public function getOutsideEmail()
    {
        return $this->OutsideEmail;
    }

    /**
     * @param string $OutsideEmail
     *
     * @return ServiceUser
     */
    public function withOutsideEmail($OutsideEmail)
    {
        $new = clone $this;
        $new->OutsideEmail = $OutsideEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return ServiceUser
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return string
     */
    public function getScreenName()
    {
        return $this->ScreenName;
    }

    /**
     * @param string $ScreenName
     *
     * @return ServiceUser
     */
    public function withScreenName($ScreenName)
    {
        $new = clone $this;
        $new->ScreenName = $ScreenName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     *
     * @return ServiceUser
     */
    public function withActive($Active)
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    /**
     * @return string
     */
    public function getHomeDomainID()
    {
        return $this->HomeDomainID;
    }

    /**
     * @param string $HomeDomainID
     *
     * @return ServiceUser
     */
    public function withHomeDomainID($HomeDomainID)
    {
        $new = clone $this;
        $new->HomeDomainID = $HomeDomainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getHomeDomainName()
    {
        return $this->HomeDomainName;
    }

    /**
     * @param string $HomeDomainName
     *
     * @return ServiceUser
     */
    public function withHomeDomainName($HomeDomainName)
    {
        $new = clone $this;
        $new->HomeDomainName = $HomeDomainName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTimeInterface $CreationDate
     *
     * @return ServiceUser
     */
    public function withCreationDate($CreationDate)
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $LastModifiedDate
     *
     * @return ServiceUser
     */
    public function withLastModifiedDate($LastModifiedDate)
    {
        $new = clone $this;
        $new->LastModifiedDate = $LastModifiedDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastLoginDate()
    {
        return $this->LastLoginDate;
    }

    /**
     * @param \DateTimeInterface $LastLoginDate
     *
     * @return ServiceUser
     */
    public function withLastLoginDate($LastLoginDate)
    {
        $new = clone $this;
        $new->LastLoginDate = $LastLoginDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     *
     * @return ServiceUser
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return string
     */
    public function getProfilePhotoUrl()
    {
        return $this->ProfilePhotoUrl;
    }

    /**
     * @param string $ProfilePhotoUrl
     *
     * @return ServiceUser
     */
    public function withProfilePhotoUrl($ProfilePhotoUrl)
    {
        $new = clone $this;
        $new->ProfilePhotoUrl = $ProfilePhotoUrl;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfCustomField
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ArrayOfCustomField $CustomFields
     *
     * @return ServiceUser
     */
    public function withCustomFields($CustomFields)
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }
}
