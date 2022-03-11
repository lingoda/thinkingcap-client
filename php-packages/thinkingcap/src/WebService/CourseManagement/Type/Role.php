<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Role
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var bool
     */
    private $IsDefault;

    /**
     * @var string
     */
    private $ProgramID;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission
     */
    private $Permissions;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     *
     * @return Role
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return Role
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return Role
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     *
     * @return Role
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * @param bool $IsDefault
     *
     * @return Role
     */
    public function withIsDefault($IsDefault)
    {
        $new = clone $this;
        $new->IsDefault = $IsDefault;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgramID()
    {
        return $this->ProgramID;
    }

    /**
     * @param string $ProgramID
     *
     * @return Role
     */
    public function withProgramID($ProgramID)
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission $Permissions
     *
     * @return Role
     */
    public function withPermissions($Permissions)
    {
        $new = clone $this;
        $new->Permissions = $Permissions;

        return $new;
    }
}
