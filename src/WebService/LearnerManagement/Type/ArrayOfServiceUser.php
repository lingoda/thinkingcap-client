<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceUser
{
    /**
     * @var null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser>
     */
    private ?array $ServiceUser;

    /**
     * @return null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser>
     */
    public function getServiceUser(): ?array
    {
        return $this->ServiceUser;
    }

    /**
     * @param null | array<int<0,max>, \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceUser> $ServiceUser
     */
    public function withServiceUser(?array $ServiceUser): static
    {
        $new = clone $this;
        $new->ServiceUser = $ServiceUser;

        return $new;
    }
}
