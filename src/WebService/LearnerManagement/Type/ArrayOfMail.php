<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMail
{
    /**
     * @var null | array<int<0,max>, Mail>
     */
    private ?array $Mail = null;

    /**
     * @return null | array<int<0,max>, Mail>
     */
    public function getMail(): ?array
    {
        return $this->Mail;
    }

    /**
     * @param null | array<int<0,max>, Mail> $Mail
     */
    public function withMail(?array $Mail): static
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}
