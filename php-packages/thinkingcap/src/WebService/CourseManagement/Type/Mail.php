<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Mail
{
    /**
     * @var string
     */
    private $MailID;

    /**
     * @var string
     */
    private $UserID;

    /**
     * @var string
     */
    private $FromID;

    /**
     * @var string
     */
    private $FromMail;

    /**
     * @var string
     */
    private $FromName;

    /**
     * @var string
     */
    private $FromScreenName;

    /**
     * @var string
     */
    private $UserName;

    /**
     * @var string
     */
    private $ToEmail;

    /**
     * @var string
     */
    private $CC;

    /**
     * @var string
     */
    private $BCC;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var string
     */
    private $Body;

    /**
     * @var string
     */
    private $Folder;

    /**
     * @var \DateTimeInterface
     */
    private $MailDate;

    /**
     * @var int
     */
    private $NumReplies;

    /**
     * @var bool
     */
    private $IsRead;

    /**
     * @return string
     */
    public function getMailID()
    {
        return $this->MailID;
    }

    /**
     * @param string $MailID
     *
     * @return Mail
     */
    public function withMailID($MailID)
    {
        $new = clone $this;
        $new->MailID = $MailID;

        return $new;
    }

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
     * @return Mail
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
    public function getFromID()
    {
        return $this->FromID;
    }

    /**
     * @param string $FromID
     *
     * @return Mail
     */
    public function withFromID($FromID)
    {
        $new = clone $this;
        $new->FromID = $FromID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromMail()
    {
        return $this->FromMail;
    }

    /**
     * @param string $FromMail
     *
     * @return Mail
     */
    public function withFromMail($FromMail)
    {
        $new = clone $this;
        $new->FromMail = $FromMail;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->FromName;
    }

    /**
     * @param string $FromName
     *
     * @return Mail
     */
    public function withFromName($FromName)
    {
        $new = clone $this;
        $new->FromName = $FromName;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromScreenName()
    {
        return $this->FromScreenName;
    }

    /**
     * @param string $FromScreenName
     *
     * @return Mail
     */
    public function withFromScreenName($FromScreenName)
    {
        $new = clone $this;
        $new->FromScreenName = $FromScreenName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     *
     * @return Mail
     */
    public function withUserName($UserName)
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return string
     */
    public function getToEmail()
    {
        return $this->ToEmail;
    }

    /**
     * @param string $ToEmail
     *
     * @return Mail
     */
    public function withToEmail($ToEmail)
    {
        $new = clone $this;
        $new->ToEmail = $ToEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getCC()
    {
        return $this->CC;
    }

    /**
     * @param string $CC
     *
     * @return Mail
     */
    public function withCC($CC)
    {
        $new = clone $this;
        $new->CC = $CC;

        return $new;
    }

    /**
     * @return string
     */
    public function getBCC()
    {
        return $this->BCC;
    }

    /**
     * @param string $BCC
     *
     * @return Mail
     */
    public function withBCC($BCC)
    {
        $new = clone $this;
        $new->BCC = $BCC;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     *
     * @return Mail
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * @param string $Body
     *
     * @return Mail
     */
    public function withBody($Body)
    {
        $new = clone $this;
        $new->Body = $Body;

        return $new;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->Folder;
    }

    /**
     * @param string $Folder
     *
     * @return Mail
     */
    public function withFolder($Folder)
    {
        $new = clone $this;
        $new->Folder = $Folder;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMailDate()
    {
        return $this->MailDate;
    }

    /**
     * @param \DateTimeInterface $MailDate
     *
     * @return Mail
     */
    public function withMailDate($MailDate)
    {
        $new = clone $this;
        $new->MailDate = $MailDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumReplies()
    {
        return $this->NumReplies;
    }

    /**
     * @param int $NumReplies
     *
     * @return Mail
     */
    public function withNumReplies($NumReplies)
    {
        $new = clone $this;
        $new->NumReplies = $NumReplies;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }

    /**
     * @param bool $IsRead
     *
     * @return Mail
     */
    public function withIsRead($IsRead)
    {
        $new = clone $this;
        $new->IsRead = $IsRead;

        return $new;
    }
}
