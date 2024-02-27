<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Permission
{
    private ?string $ID;

    
    private ?string $Title;

    
    private ?string $Code;

    
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

    
    public function getCode(): ?string
    {
        return $this->Code;
    }

    
    public function withCode(?string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }
}
