<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfContact
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact
     */
    private $Contact;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Contact $Contact
     *
     * @return ArrayOfContact
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }
}
