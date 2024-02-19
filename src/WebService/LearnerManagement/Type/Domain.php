<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Domain
{
    private string $DomainID;

    
    private string $DomainName;

    
    private string $DomainCode;

    
    private string $ParentDomainID;

    
    private bool $MembershipPending;

    
    public function getDomainID(): string
    {
        return $this->DomainID;
    }

    
    public function withDomainID(string $DomainID): static
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

        return $new;
    }

    
    public function getDomainName(): string
    {
        return $this->DomainName;
    }

    
    public function withDomainName(string $DomainName): static
    {
        $new = clone $this;
        $new->DomainName = $DomainName;

        return $new;
    }

    
    public function getDomainCode(): string
    {
        return $this->DomainCode;
    }

    
    public function withDomainCode(string $DomainCode): static
    {
        $new = clone $this;
        $new->DomainCode = $DomainCode;

        return $new;
    }

    
    public function getParentDomainID(): string
    {
        return $this->ParentDomainID;
    }

    
    public function withParentDomainID(string $ParentDomainID): static
    {
        $new = clone $this;
        $new->ParentDomainID = $ParentDomainID;

        return $new;
    }

    
    public function getMembershipPending(): bool
    {
        return $this->MembershipPending;
    }

    
    public function withMembershipPending(bool $MembershipPending): static
    {
        $new = clone $this;
        $new->MembershipPending = $MembershipPending;

        return $new;
    }
}
