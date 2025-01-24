<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ArrayOfMailFolder
{
    /**
     * @var null | array<int<0,max>, MailFolder>
     */
    private ?array $MailFolder = null;

    /**
     * @return null | array<int<0,max>, MailFolder>
     */
    public function getMailFolder(): ?array
    {
        return $this->MailFolder;
    }

    /**
     * @param null | array<int<0,max>, MailFolder> $MailFolder
     */
    public function withMailFolder(?array $MailFolder): static
    {
        $new = clone $this;
        $new->MailFolder = $MailFolder;

        return $new;
    }
}
