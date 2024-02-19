<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMailFolder
{
    private MailFolder $MailFolder;

    
    public function getMailFolder(): MailFolder
    {
        return $this->MailFolder;
    }

    
    public function withMailFolder(MailFolder $MailFolder): static
    {
        $new = clone $this;
        $new->MailFolder = $MailFolder;

        return $new;
    }
}
