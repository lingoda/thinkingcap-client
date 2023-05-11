<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomainURLsCollection
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection
     */
    private $DomainURLsCollection;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection
     */
    public function getDomainURLsCollection()
    {
        return $this->DomainURLsCollection;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DomainURLsCollection $DomainURLsCollection
     *
     * @return ArrayOfDomainURLsCollection
     */
    public function withDomainURLsCollection($DomainURLsCollection)
    {
        $new = clone $this;
        $new->DomainURLsCollection = $DomainURLsCollection;

        return $new;
    }
}
