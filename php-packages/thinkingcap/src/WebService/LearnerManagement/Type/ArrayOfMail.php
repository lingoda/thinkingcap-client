<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMail
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Mail
     */
    private $Mail;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Mail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Mail $Mail
     *
     * @return ArrayOfMail
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}
