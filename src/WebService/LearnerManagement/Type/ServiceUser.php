<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class ServiceUser
{
    protected string $UserID;

    
    protected ?string $FirstName;

    
    protected ?string $LastName;

    protected string $Email;

    
    protected ?string $OutsideEmail;

    
    protected bool $Active;

    
    protected ?string $HomeDomainID;

    
    protected ?string $HomeDomainName;

    
    protected DateTimeInterface $CreationDate;

    
    protected DateTimeInterface $LastModifiedDate;

    
    protected DateTimeInterface $LastLoginDate;

    
    protected ?string $ProfilePhotoUrl;

    
    protected ?ArrayOfCustomField $CustomFields;

    
    protected ?ArrayOfDomain $Domains;

    
    private ?string $Title = null;

    
    private ?string $ScreenName = null;

    
    private ?string $Language = null;

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

    
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    
    public function withFirstName(?string $FirstName): static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    
    public function withLastName(?string $LastName): static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function withEmail(string $Email): static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    
    public function getOutsideEmail(): ?string
    {
        return $this->OutsideEmail;
    }

    
    public function withOutsideEmail(?string $OutsideEmail): static
    {
        $new = clone $this;
        $new->OutsideEmail = $OutsideEmail;

        return $new;
    }

    
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    
    public function withTitle(?string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getScreenName(): ?string
    {
        return $this->ScreenName;
    }

    
    public function withScreenName(?string $ScreenName): static
    {
        $new = clone $this;
        $new->ScreenName = $ScreenName;

        return $new;
    }

    
    public function getActive(): bool
    {
        return $this->Active;
    }

    
    public function withActive(bool $Active): static
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    
    public function getHomeDomainID(): ?string
    {
        return $this->HomeDomainID;
    }

    
    public function withHomeDomainID(?string $HomeDomainID): static
    {
        $new = clone $this;
        $new->HomeDomainID = $HomeDomainID;

        return $new;
    }

    
    public function getHomeDomainName(): ?string
    {
        return $this->HomeDomainName;
    }

    
    public function withHomeDomainName(?string $HomeDomainName): static
    {
        $new = clone $this;
        $new->HomeDomainName = $HomeDomainName;

        return $new;
    }

    
    public function getCreationDate(): DateTimeInterface
    {
        return $this->CreationDate;
    }

    
    public function withCreationDate(DateTimeInterface $CreationDate): static
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

        return $new;
    }

    
    public function getLastModifiedDate(): DateTimeInterface
    {
        return $this->LastModifiedDate;
    }

    
    public function withLastModifiedDate(DateTimeInterface $LastModifiedDate): static
    {
        $new = clone $this;
        $new->LastModifiedDate = $LastModifiedDate;

        return $new;
    }

    
    public function getLastLoginDate(): DateTimeInterface
    {
        return $this->LastLoginDate;
    }

    
    public function withLastLoginDate(DateTimeInterface $LastLoginDate): static
    {
        $new = clone $this;
        $new->LastLoginDate = $LastLoginDate;

        return $new;
    }

    
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    
    public function withLanguage(?string $Language): static
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    
    public function getProfilePhotoUrl(): ?string
    {
        return $this->ProfilePhotoUrl;
    }

    
    public function withProfilePhotoUrl(?string $ProfilePhotoUrl): static
    {
        $new = clone $this;
        $new->ProfilePhotoUrl = $ProfilePhotoUrl;

        return $new;
    }

    
    public function getCustomFields(): ?ArrayOfCustomField
    {
        return $this->CustomFields;
    }

    
    public function withCustomFields(?ArrayOfCustomField $CustomFields): static
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }

    
    public function getDomains(): ?ArrayOfDomain
    {
        return $this->Domains;
    }

    
    public function withDomains(?ArrayOfDomain $Domains): static
    {
        $new = clone $this;
        $new->Domains = $Domains;

        return $new;
    }
}
