<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Role
{
    private string $ID;

    
    private string $Code;

    
    private string $Title;

    
    private string $Description;

    
    private bool $IsDefault;

    
    private string $ProgramID;

    
    private ArrayOfPermission $Permissions;

    
    public function getID(): string
    {
        return $this->ID;
    }

    
    public function withID(string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getCode(): string
    {
        return $this->Code;
    }

    
    public function withCode(string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    
    public function getTitle(): string
    {
        return $this->Title;
    }

    
    public function withTitle(string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getDescription(): string
    {
        return $this->Description;
    }

    
    public function withDescription(string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    
    public function getIsDefault(): bool
    {
        return $this->IsDefault;
    }

    
    public function withIsDefault(bool $IsDefault): static
    {
        $new = clone $this;
        $new->IsDefault = $IsDefault;

        return $new;
    }

    
    public function getProgramID(): string
    {
        return $this->ProgramID;
    }

    
    public function withProgramID(string $ProgramID): static
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    
    public function getPermissions(): ArrayOfPermission
    {
        return $this->Permissions;
    }

    
    public function withPermissions(ArrayOfPermission $Permissions): static
    {
        $new = clone $this;
        $new->Permissions = $Permissions;

        return $new;
    }
}
