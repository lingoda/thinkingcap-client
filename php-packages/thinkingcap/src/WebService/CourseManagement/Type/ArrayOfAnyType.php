<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfAnyType
{
    /**
     * @var mixed
     */
    private $anyType;

    /**
     * @return mixed
     */
    public function getAnyType()
    {
        return $this->anyType;
    }

    /**
     * @param mixed $anyType
     *
     * @return ArrayOfAnyType
     */
    public function withAnyType($anyType)
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}
