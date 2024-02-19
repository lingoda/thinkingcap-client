<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class StudentActivityMap
{
    private Xml $Xml;

    
    public function getXml(): Xml
    {
        return $this->Xml;
    }

    
    public function withXml(Xml $Xml): static
    {
        $new = clone $this;
        $new->Xml = $Xml;

        return $new;
    }
}
