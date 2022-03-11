<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMailFolder
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder
     */
    private $MailFolder;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder
     */
    public function getMailFolder()
    {
        return $this->MailFolder;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder $MailFolder
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
