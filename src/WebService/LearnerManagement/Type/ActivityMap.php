<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ActivityMap
{
    /**
     * @var string
     */
    private $objectivesJson;

    /**
     * @var string
     */
    private $ObjectivesJson;

    /**
     * @return string
     */
    public function getObjectivesJson()
    {
        return $this->ObjectivesJson;
    }

    /**
     * @param string $ObjectivesJson
     *
     * @return ActivityMap
     */
    public function withObjectivesJson($ObjectivesJson)
    {
        $new = clone $this;
        $new->ObjectivesJson = $ObjectivesJson;

        return $new;
    }
}
