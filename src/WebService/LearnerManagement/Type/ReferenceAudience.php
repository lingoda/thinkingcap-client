<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class ReferenceAudience
{
    private ?string $ID = null;

    private ?string $ReferenceID = null;

    private ?string $AudienceType = null;

    private ?string $ActivityConnectionTypeID = null;

    private ?string $ActivityConnectionTypeName = null;

    private DateTimeInterface $CreatedDate;

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

    public function getReferenceID(): ?string
    {
        return $this->ReferenceID;
    }

    public function withReferenceID(?string $ReferenceID): static
    {
        $new = clone $this;
        $new->ReferenceID = $ReferenceID;

        return $new;
    }

    public function getAudienceType(): ?string
    {
        return $this->AudienceType;
    }

    public function withAudienceType(?string $AudienceType): static
    {
        $new = clone $this;
        $new->AudienceType = $AudienceType;

        return $new;
    }

    public function getActivityConnectionTypeID(): ?string
    {
        return $this->ActivityConnectionTypeID;
    }

    public function withActivityConnectionTypeID(?string $ActivityConnectionTypeID): static
    {
        $new = clone $this;
        $new->ActivityConnectionTypeID = $ActivityConnectionTypeID;

        return $new;
    }

    public function getActivityConnectionTypeName(): ?string
    {
        return $this->ActivityConnectionTypeName;
    }

    public function withActivityConnectionTypeName(?string $ActivityConnectionTypeName): static
    {
        $new = clone $this;
        $new->ActivityConnectionTypeName = $ActivityConnectionTypeName;

        return $new;
    }

    public function getCreatedDate(): DateTimeInterface
    {
        return $this->CreatedDate;
    }

    public function withCreatedDate(DateTimeInterface $CreatedDate): static
    {
        $new = clone $this;
        $new->CreatedDate = $CreatedDate;

        return $new;
    }
}
