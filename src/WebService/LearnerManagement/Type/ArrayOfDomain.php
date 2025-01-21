<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomain
{
    /**
     * @var null | array<int<0,max>, Domain>
     */
    private ?array $Domain = null;

    /**
     * @return null | array<int<0,max>, Domain>
     */
    public function getDomain(): ?array
    {
        return $this->Domain;
    }

    /**
     * @param null | array<int<0,max>, Domain> $Domain
     */
    public function withDomain(?array $Domain): static
    {
        $new = clone $this;
        $new->Domain = $Domain;

        return $new;
    }
}
