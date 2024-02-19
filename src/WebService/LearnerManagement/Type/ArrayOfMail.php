<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMail
{
    private Mail $Mail;

    
    public function getMail(): Mail
    {
        return $this->Mail;
    }

    
    public function withMail(Mail $Mail): static
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}
