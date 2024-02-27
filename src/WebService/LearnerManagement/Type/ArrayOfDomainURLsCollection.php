<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomainURLsCollection
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection>
     */
    private ?array $DomainURLsCollection;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection>
     */
    public function getDomainURLsCollection(): ?array
    {
        return $this->DomainURLsCollection;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection> $DomainURLsCollection
     */
    public function withDomainURLsCollection(?array $DomainURLsCollection): static
    {
        $new = clone $this;
        $new->DomainURLsCollection = $DomainURLsCollection;

        return $new;
    }
}
