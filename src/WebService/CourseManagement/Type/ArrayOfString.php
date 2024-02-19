<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfString
{
    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $string;

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getString(): ?array
    {
        return $this->string;
    }

    /**
     * @param null | array<int<0,max>, string> $string
     */
    public function withString(?array $string): static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
