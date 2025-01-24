<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfContact
{
    /**
     * @var null | array<int<0,max>, Contact>
     */
    private ?array $Contact = null;

    /**
     * @return null | array<int<0,max>, Contact>
     */
    public function getContact(): ?array
    {
        return $this->Contact;
    }

    /**
     * @param null | array<int<0,max>, Contact> $Contact
     */
    public function withContact(?array $Contact): static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }
}
