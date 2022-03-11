<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfMail
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail
     */
    private $Mail;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Mail $Mail
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
