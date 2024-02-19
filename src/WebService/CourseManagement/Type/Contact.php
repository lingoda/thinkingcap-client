<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Contact
{
    private ?string $UserID;

    
    private ?string $ContactID;

    
    private ?string $ContactName;

    
    private ?string $ContactScreenName;

    
    private ?string $ContactEmail;

    
    public function getUserID(): ?string
    {
        return $this->UserID;
    }

    
    public function withUserID(?string $UserID): static
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    
    public function getContactID(): ?string
    {
        return $this->ContactID;
    }

    
    public function withContactID(?string $ContactID): static
    {
        $new = clone $this;
        $new->ContactID = $ContactID;

        return $new;
    }

    
    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    
    public function withContactName(?string $ContactName): static
    {
        $new = clone $this;
        $new->ContactName = $ContactName;

        return $new;
    }

    
    public function getContactScreenName(): ?string
    {
        return $this->ContactScreenName;
    }

    
    public function withContactScreenName(?string $ContactScreenName): static
    {
        $new = clone $this;
        $new->ContactScreenName = $ContactScreenName;

        return $new;
    }

    
    public function getContactEmail(): ?string
    {
        return $this->ContactEmail;
    }

    
    public function withContactEmail(?string $ContactEmail): static
    {
        $new = clone $this;
        $new->ContactEmail = $ContactEmail;

        return $new;
    }
}
