<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CustomField
{
    private string $FieldID;

    
    private string $FieldName;

    
    private ArrayOfString1 $FieldValues;

    
    public function getFieldID(): string
    {
        return $this->FieldID;
    }

    
    public function withFieldID(string $FieldID): static
    {
        $new = clone $this;
        $new->FieldID = $FieldID;

        return $new;
    }

    
    public function getFieldName(): string
    {
        return $this->FieldName;
    }

    
    public function withFieldName(string $FieldName): static
    {
        $new = clone $this;
        $new->FieldName = $FieldName;

        return $new;
    }

    
    public function getFieldValues(): ArrayOfString1
    {
        return $this->FieldValues;
    }

    
    public function withFieldValues(ArrayOfString1 $FieldValues): static
    {
        $new = clone $this;
        $new->FieldValues = $FieldValues;

        return $new;
    }
}
