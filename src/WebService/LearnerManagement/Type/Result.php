<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Result
{
    private AnyXML $any;

    
    public function getAny(): AnyXML
    {
        return $this->any;
    }

    
    public function withAny(AnyXML $any): static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}
