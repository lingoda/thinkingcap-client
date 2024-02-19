<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfContact
{
    private Contact $Contact;

    
    public function getContact(): Contact
    {
        return $this->Contact;
    }

    
    public function withContact(Contact $Contact): static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }
}
