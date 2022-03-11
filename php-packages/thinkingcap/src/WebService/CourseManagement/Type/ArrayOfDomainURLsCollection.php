<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfDomainURLsCollection
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DomainURLsCollection
     */
    private $DomainURLsCollection;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DomainURLsCollection
     */
    public function getDomainURLsCollection()
    {
        return $this->DomainURLsCollection;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DomainURLsCollection $DomainURLsCollection
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
