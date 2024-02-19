<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomainURLsCollection
{
    private DomainURLsCollection $DomainURLsCollection;

    
    public function getDomainURLsCollection(): DomainURLsCollection
    {
        return $this->DomainURLsCollection;
    }

    
    public function withDomainURLsCollection(DomainURLsCollection $DomainURLsCollection): static
    {
        $new = clone $this;
        $new->DomainURLsCollection = $DomainURLsCollection;

        return $new;
    }
}
