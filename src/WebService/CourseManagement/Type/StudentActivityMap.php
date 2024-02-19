<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class StudentActivityMap extends StudentRecord
{
    private ?Xml $Xml;

    
    public function getXml(): ?Xml
    {
        return $this->Xml;
    }

    
    public function withXml(?Xml $Xml): static
    {
        $new = clone $this;
        $new->Xml = $Xml;

        return $new;
    }
}
