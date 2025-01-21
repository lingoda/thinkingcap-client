<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomainURLsCollection
{
    /**
     * @var null | array<int<0,max>, DomainURLsCollection>
     */
    private ?array $DomainURLsCollection = null;

    /**
     * @return null | array<int<0,max>, DomainURLsCollection>
     */
    public function getDomainURLsCollection(): ?array
    {
        return $this->DomainURLsCollection;
    }

    /**
     * @param null | array<int<0,max>, DomainURLsCollection> $DomainURLsCollection
     */
    public function withDomainURLsCollection(?array $DomainURLsCollection): static
    {
        $new = clone $this;
        $new->DomainURLsCollection = $DomainURLsCollection;

        return $new;
    }
}
