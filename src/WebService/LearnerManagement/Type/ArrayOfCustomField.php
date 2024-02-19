<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCustomField
{
    private CustomField $CustomField;

    
    public function getCustomField(): CustomField
    {
        return $this->CustomField;
    }

    
    public function withCustomField(CustomField $CustomField): static
    {
        $new = clone $this;
        $new->CustomField = $CustomField;

        return $new;
    }
}
