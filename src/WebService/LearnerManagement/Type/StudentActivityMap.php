<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class StudentActivityMap extends StudentRecord
{
    private ?StudentActivityMapXml $Xml = null;

    public function getXml(): ?StudentActivityMapXml
    {
        return $this->Xml;
    }

    public function withXml(?StudentActivityMapXml $Xml): static
    {
        $new = clone $this;
        $new->Xml = $Xml;

        return $new;
    }
}
