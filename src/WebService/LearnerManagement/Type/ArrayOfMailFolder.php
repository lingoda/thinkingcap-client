<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfMailFolder
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder>
     */
    private ?array $MailFolder;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder>
     */
    public function getMailFolder(): ?array
    {
        return $this->MailFolder;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MailFolder> $MailFolder
     */
    public function withMailFolder(?array $MailFolder): static
    {
        $new = clone $this;
        $new->MailFolder = $MailFolder;

        return $new;
    }
}
