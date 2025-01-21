<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class RegistrationConfirmationTextXmlNode
{
    private mixed $any;

    public function getAny(): mixed
    {
        return $this->any;
    }

    public function withAny(mixed $any): static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}
