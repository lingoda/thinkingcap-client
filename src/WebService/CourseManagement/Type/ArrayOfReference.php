<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfReference
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Reference
     */
    private $Reference;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Reference
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Reference $Reference
     *
     * @return ArrayOfReference
     */
    public function withReference($Reference)
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}
