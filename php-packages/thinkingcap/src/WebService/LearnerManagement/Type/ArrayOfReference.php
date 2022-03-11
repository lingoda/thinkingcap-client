<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfReference
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference
     */
    private $Reference;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Reference $Reference
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
