<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CustomField
{
    /**
     * @var string
     */
    private $FieldID;

    /**
     * @var string
     */
    private $FieldName;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString1
     */
    private $FieldValues;

    /**
     * @return string
     */
    public function getFieldID()
    {
        return $this->FieldID;
    }

    /**
     * @param string $FieldID
     *
     * @return CustomField
     */
    public function withFieldID($FieldID)
    {
        $new = clone $this;
        $new->FieldID = $FieldID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     *
     * @return CustomField
     */
    public function withFieldName($FieldName)
    {
        $new = clone $this;
        $new->FieldName = $FieldName;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString1
     */
    public function getFieldValues()
    {
        return $this->FieldValues;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString1 $FieldValues
     *
     * @return CustomField
     */
    public function withFieldValues($FieldValues)
    {
        $new = clone $this;
        $new->FieldValues = $FieldValues;

        return $new;
    }
}
