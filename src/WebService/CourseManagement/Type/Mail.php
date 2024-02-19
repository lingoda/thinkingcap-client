<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class Mail
{
    private string $MailID;

    
    private string $UserID;

    
    private string $FromID;

    
    private string $FromMail;

    
    private string $FromName;

    
    private string $FromScreenName;

    
    private string $UserName;

    
    private string $ToEmail;

    
    private string $CC;

    
    private string $BCC;

    
    private string $Subject;

    
    private string $Body;

    
    private string $Folder;

    
    private DateTimeInterface $MailDate;

    
    private int $NumReplies;

    
    private bool $IsRead;

    
    public function getMailID(): string
    {
        return $this->MailID;
    }

    
    public function withMailID(string $MailID): static
    {
        $new = clone $this;
        $new->MailID = $MailID;

        return $new;
    }

    
    public function getUserID(): string
    {
        return $this->UserID;
    }

    
    public function withUserID(string $UserID): static
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    
    public function getFromID(): string
    {
        return $this->FromID;
    }

    
    public function withFromID(string $FromID): static
    {
        $new = clone $this;
        $new->FromID = $FromID;

        return $new;
    }

    
    public function getFromMail(): string
    {
        return $this->FromMail;
    }

    
    public function withFromMail(string $FromMail): static
    {
        $new = clone $this;
        $new->FromMail = $FromMail;

        return $new;
    }

    
    public function getFromName(): string
    {
        return $this->FromName;
    }

    
    public function withFromName(string $FromName): static
    {
        $new = clone $this;
        $new->FromName = $FromName;

        return $new;
    }

    
    public function getFromScreenName(): string
    {
        return $this->FromScreenName;
    }

    
    public function withFromScreenName(string $FromScreenName): static
    {
        $new = clone $this;
        $new->FromScreenName = $FromScreenName;

        return $new;
    }

    
    public function getUserName(): string
    {
        return $this->UserName;
    }

    
    public function withUserName(string $UserName): static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    
    public function getToEmail(): string
    {
        return $this->ToEmail;
    }

    
    public function withToEmail(string $ToEmail): static
    {
        $new = clone $this;
        $new->ToEmail = $ToEmail;

        return $new;
    }

    
    public function getCC(): string
    {
        return $this->CC;
    }

    
    public function withCC(string $CC): static
    {
        $new = clone $this;
        $new->CC = $CC;

        return $new;
    }

    
    public function getBCC(): string
    {
        return $this->BCC;
    }

    
    public function withBCC(string $BCC): static
    {
        $new = clone $this;
        $new->BCC = $BCC;

        return $new;
    }

    
    public function getSubject(): string
    {
        return $this->Subject;
    }

    
    public function withSubject(string $Subject): static
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    
    public function getBody(): string
    {
        return $this->Body;
    }

    
    public function withBody(string $Body): static
    {
        $new = clone $this;
        $new->Body = $Body;

        return $new;
    }

    
    public function getFolder(): string
    {
        return $this->Folder;
    }

    
    public function withFolder(string $Folder): static
    {
        $new = clone $this;
        $new->Folder = $Folder;

        return $new;
    }

    
    public function getMailDate(): DateTimeInterface
    {
        return $this->MailDate;
    }

    
    public function withMailDate(DateTimeInterface $MailDate): static
    {
        $new = clone $this;
        $new->MailDate = $MailDate;

        return $new;
    }

    
    public function getNumReplies(): int
    {
        return $this->NumReplies;
    }

    
    public function withNumReplies(int $NumReplies): static
    {
        $new = clone $this;
        $new->NumReplies = $NumReplies;

        return $new;
    }

    
    public function getIsRead(): bool
    {
        return $this->IsRead;
    }

    
    public function withIsRead(bool $IsRead): static
    {
        $new = clone $this;
        $new->IsRead = $IsRead;

        return $new;
    }
}
