<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ActivityMap
{
    private string $objectivesJson;

    
    private string $ObjectivesJson;

    
    public function getObjectivesJson(): string
    {
        return $this->ObjectivesJson;
    }

    
    public function withObjectivesJson(string $ObjectivesJson): static
    {
        $new = clone $this;
        $new->ObjectivesJson = $ObjectivesJson;

        return $new;
    }
}
