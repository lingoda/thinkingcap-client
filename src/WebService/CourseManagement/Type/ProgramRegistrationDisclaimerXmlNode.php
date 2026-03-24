<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ProgramRegistrationDisclaimerXmlNode
{
    private string $any;

    public function getAny(): string
    {
        return $this->any;
    }

    public function withAny(string $any): static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}
