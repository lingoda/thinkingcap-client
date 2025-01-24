<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfServiceUser
{
    /**
     * @var null | array<int<0,max>, ServiceUser>
     */
    private ?array $ServiceUser = null;

    /**
     * @return null | array<int<0,max>, ServiceUser>
     */
    public function getServiceUser(): ?array
    {
        return $this->ServiceUser;
    }

    /**
     * @param null | array<int<0,max>, ServiceUser> $ServiceUser
     */
    public function withServiceUser(?array $ServiceUser): static
    {
        $new = clone $this;
        $new->ServiceUser = $ServiceUser;

        return $new;
    }
}
