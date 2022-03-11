<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class TimeZone
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $DSTCode;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $CurrentLocation;

    /**
     * @var bool
     */
    private $ApplyDaylightSavings;

    /**
     * @var bool
     */
    private $IsDaylightSaving;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TimeZoneOffset
     */
    private $Offset;

    /**
     * @var int
     */
    private $CiscoCode;

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
     * @return TimeZone
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
    public function getDSTCode()
    {
        return $this->DSTCode;
    }

    /**
     * @param string $DSTCode
     *
     * @return TimeZone
     */
    public function withDSTCode($DSTCode)
    {
        $new = clone $this;
        $new->DSTCode = $DSTCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return TimeZone
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrentLocation()
    {
        return $this->CurrentLocation;
    }

    /**
     * @param string $CurrentLocation
     *
     * @return TimeZone
     */
    public function withCurrentLocation($CurrentLocation)
    {
        $new = clone $this;
        $new->CurrentLocation = $CurrentLocation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyDaylightSavings()
    {
        return $this->ApplyDaylightSavings;
    }

    /**
     * @param bool $ApplyDaylightSavings
     *
     * @return TimeZone
     */
    public function withApplyDaylightSavings($ApplyDaylightSavings)
    {
        $new = clone $this;
        $new->ApplyDaylightSavings = $ApplyDaylightSavings;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDaylightSaving()
    {
        return $this->IsDaylightSaving;
    }

    /**
     * @param bool $IsDaylightSaving
     *
     * @return TimeZone
     */
    public function withIsDaylightSaving($IsDaylightSaving)
    {
        $new = clone $this;
        $new->IsDaylightSaving = $IsDaylightSaving;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TimeZoneOffset
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TimeZoneOffset $Offset
     *
     * @return TimeZone
     */
    public function withOffset($Offset)
    {
        $new = clone $this;
        $new->Offset = $Offset;

        return $new;
    }

    /**
     * @return int
     */
    public function getCiscoCode()
    {
        return $this->CiscoCode;
    }

    /**
     * @param int $CiscoCode
     *
     * @return TimeZone
     */
    public function withCiscoCode($CiscoCode)
    {
        $new = clone $this;
        $new->CiscoCode = $CiscoCode;

        return $new;
    }
}
