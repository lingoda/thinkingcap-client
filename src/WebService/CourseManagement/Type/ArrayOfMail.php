<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfMail
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail>
     */
    private ?array $Mail;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail>
     */
    public function getMail(): ?array
    {
        return $this->Mail;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail> $Mail
     */
    public function withMail(?array $Mail): static
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}
