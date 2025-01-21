<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class SessionConnectedUser
{
    private ?string $SessionID = null;

    private ?string $ConnectionID = null;

    private ?string $ConnectionName = null;

    private ?string $UserID = null;

    private ?string $FirstName = null;

    private ?string $LastName = null;

    private ?string $Email = null;

    private ?string $UserType = null;

    public function getSessionID(): ?string
    {
        return $this->SessionID;
    }

    public function withSessionID(?string $SessionID): static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    public function getConnectionID(): ?string
    {
        return $this->ConnectionID;
    }

    public function withConnectionID(?string $ConnectionID): static
    {
        $new = clone $this;
        $new->ConnectionID = $ConnectionID;

        return $new;
    }

    public function getConnectionName(): ?string
    {
        return $this->ConnectionName;
    }

    public function withConnectionName(?string $ConnectionName): static
    {
        $new = clone $this;
        $new->ConnectionName = $ConnectionName;

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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function withEmail(?string $Email): static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    public function getUserType(): ?string
    {
        return $this->UserType;
    }

    public function withUserType(?string $UserType): static
    {
        $new = clone $this;
        $new->UserType = $UserType;

        return $new;
    }
}
