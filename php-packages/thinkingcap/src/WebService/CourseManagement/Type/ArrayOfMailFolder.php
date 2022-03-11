<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfMailFolder
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\MailFolder
     */
    private $MailFolder;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\MailFolder
     */
    public function getMailFolder()
    {
        return $this->MailFolder;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\MailFolder $MailFolder
     *
     * @return ArrayOfMailFolder
     */
    public function withMailFolder($MailFolder)
    {
        $new = clone $this;
        $new->MailFolder = $MailFolder;

        return $new;
    }
}
