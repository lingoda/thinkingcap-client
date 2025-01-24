<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCustomField
{
    /**
     * @var null | array<int<0,max>, CustomField>
     */
    private ?array $CustomField = null;

    /**
     * @return null | array<int<0,max>, CustomField>
     */
    public function getCustomField(): ?array
    {
        return $this->CustomField;
    }

    /**
     * @param null | array<int<0,max>, CustomField> $CustomField
     */
    public function withCustomField(?array $CustomField): static
    {
        $new = clone $this;
        $new->CustomField = $CustomField;

        return $new;
    }
}
