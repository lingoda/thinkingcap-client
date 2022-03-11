<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class RegistrationConfirmationTextXmlNode
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AnyXML
     */
    private $any;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AnyXML
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AnyXML $any
     *
     * @return RegistrationConfirmationTextXmlNode
     */
    public function withAny($any)
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}
