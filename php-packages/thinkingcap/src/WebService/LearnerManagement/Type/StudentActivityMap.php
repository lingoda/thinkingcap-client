<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class StudentActivityMap
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Xml
     */
    private $Xml;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Xml
     */
    public function getXml()
    {
        return $this->Xml;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\Xml $Xml
     *
     * @return StudentActivityMap
     */
    public function withXml($Xml)
    {
        $new = clone $this;
        $new->Xml = $Xml;

        return $new;
    }
}
