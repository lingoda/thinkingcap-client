<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfContact
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact>
     */
    private ?array $Contact;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact>
     */
    public function getContact(): ?array
    {
        return $this->Contact;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact> $Contact
     */
    public function withContact(?array $Contact): static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }
}
