<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomain
{
    private Domain $Domain;

    
    public function getDomain(): Domain
    {
        return $this->Domain;
    }

    
    public function withDomain(Domain $Domain): static
    {
        $new = clone $this;
        $new->Domain = $Domain;

        return $new;
    }
}
