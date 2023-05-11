<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfString
{
    /**
     * @var string
     */
    private $string;

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string $string
     *
     * @return ArrayOfString
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
