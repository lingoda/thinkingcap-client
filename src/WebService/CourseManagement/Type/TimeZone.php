<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class TimeZone
{
    private string $Code;

    
    private string $DSTCode;

    
    private string $Name;

    
    private string $CurrentLocation;

    
    private bool $ApplyDaylightSavings;

    
    private bool $IsDaylightSaving;

    
    private TimeZoneOffset $Offset;

    
    private int $CiscoCode;

    
    public function getCode(): string
    {
        return $this->Code;
    }

    
    public function withCode(string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    
    public function getDSTCode(): string
    {
        return $this->DSTCode;
    }

    
    public function withDSTCode(string $DSTCode): static
    {
        $new = clone $this;
        $new->DSTCode = $DSTCode;

        return $new;
    }

    
    public function getName(): string
    {
        return $this->Name;
    }

    
    public function withName(string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    
    public function getCurrentLocation(): string
    {
        return $this->CurrentLocation;
    }

    
    public function withCurrentLocation(string $CurrentLocation): static
    {
        $new = clone $this;
        $new->CurrentLocation = $CurrentLocation;

        return $new;
    }

    
    public function getApplyDaylightSavings(): bool
    {
        return $this->ApplyDaylightSavings;
    }

    
    public function withApplyDaylightSavings(bool $ApplyDaylightSavings): static
    {
        $new = clone $this;
        $new->ApplyDaylightSavings = $ApplyDaylightSavings;

        return $new;
    }

    
    public function getIsDaylightSaving(): bool
    {
        return $this->IsDaylightSaving;
    }

    
    public function withIsDaylightSaving(bool $IsDaylightSaving): static
    {
        $new = clone $this;
        $new->IsDaylightSaving = $IsDaylightSaving;

        return $new;
    }

    
    public function getOffset(): TimeZoneOffset
    {
        return $this->Offset;
    }

    
    public function withOffset(TimeZoneOffset $Offset): static
    {
        $new = clone $this;
        $new->Offset = $Offset;

        return $new;
    }

    
    public function getCiscoCode(): int
    {
        return $this->CiscoCode;
    }

    
    public function withCiscoCode(int $CiscoCode): static
    {
        $new = clone $this;
        $new->CiscoCode = $CiscoCode;

        return $new;
    }
}
