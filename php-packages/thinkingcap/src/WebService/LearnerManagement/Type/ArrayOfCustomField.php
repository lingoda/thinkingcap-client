<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfCustomField
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField
     */
    private $CustomField;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\CustomField $CustomField
     *
     * @return ArrayOfCustomField
     */
    public function withCustomField($CustomField)
    {
        $new = clone $this;
        $new->CustomField = $CustomField;

        return $new;
    }
}
