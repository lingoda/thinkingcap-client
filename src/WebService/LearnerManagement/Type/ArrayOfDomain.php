<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ArrayOfDomain
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Domain
     */
    private $Domain;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Domain
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Domain $Domain
     *
     * @return ArrayOfDomain
     */
    public function withDomain($Domain)
    {
        $new = clone $this;
        $new->Domain = $Domain;

        return $new;
    }
}
