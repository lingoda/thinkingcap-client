<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class RegistrationRequestDenialEmailXmlNode
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AnyXML
     */
    private $any;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AnyXML
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AnyXML $any
     *
     * @return RegistrationRequestDenialEmailXmlNode
     */
    public function withAny($any)
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}
