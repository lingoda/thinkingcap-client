<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCustomField
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField>
     */
    private ?array $CustomField;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField>
     */
    public function getCustomField(): ?array
    {
        return $this->CustomField;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField> $CustomField
     */
    public function withCustomField(?array $CustomField): static
    {
        $new = clone $this;
        $new->CustomField = $CustomField;

        return $new;
    }
}
