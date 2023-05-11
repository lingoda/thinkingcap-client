<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfCustomField
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomField
     */
    private $CustomField;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomField
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomField $CustomField
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
