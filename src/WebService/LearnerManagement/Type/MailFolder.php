<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class MailFolder
{
    private ?string $Description;

    
    private ?string $ID;

    
    private ?string $UserID;

    
    private ?string $Name;

    
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    
    public function withDescription(?string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    
    public function getID(): ?string
    {
        return $this->ID;
    }

    
    public function withID(?string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
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

    
    public function getName(): ?string
    {
        return $this->Name;
    }

    
    public function withName(?string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }
}
