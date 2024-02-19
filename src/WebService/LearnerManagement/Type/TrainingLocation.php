<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class TrainingLocation
{
    private string $ID;

    
    private string $ProgramID;

    
    private string $Country;

    
    private string $City;

    
    private string $PostalCode;

    
    private string $State;

    
    private string $Address;

    
    private string $Room;

    
    private string $FieldsXml;

    
    private string $SeatingType;

    
    private string $MeetingID;

    
    private string $MeetingDetails;

    
    private string $RecordingID;

    
    private TimeZone $TimeZone;

    
    private bool $UseDST;

    
    private int $MaxLocSize;

    
    private bool $DoNotInherit;

    
    private bool $IsOneTime;

    
    private string $GoTo_Webcast;

    
    public function getID(): string
    {
        return $this->ID;
    }

    
    public function withID(string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getProgramID(): string
    {
        return $this->ProgramID;
    }

    
    public function withProgramID(string $ProgramID): static
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    
    public function getCountry(): string
    {
        return $this->Country;
    }

    
    public function withCountry(string $Country): static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    
    public function getCity(): string
    {
        return $this->City;
    }

    
    public function withCity(string $City): static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    
    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    
    public function withPostalCode(string $PostalCode): static
    {
        $new = clone $this;
        $new->PostalCode = $PostalCode;

        return $new;
    }

    
    public function getState(): string
    {
        return $this->State;
    }

    
    public function withState(string $State): static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    
    public function getAddress(): string
    {
        return $this->Address;
    }

    
    public function withAddress(string $Address): static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    
    public function getRoom(): string
    {
        return $this->Room;
    }

    
    public function withRoom(string $Room): static
    {
        $new = clone $this;
        $new->Room = $Room;

        return $new;
    }

    
    public function getFieldsXml(): string
    {
        return $this->FieldsXml;
    }

    
    public function withFieldsXml(string $FieldsXml): static
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }

    
    public function getSeatingType(): string
    {
        return $this->SeatingType;
    }

    
    public function withSeatingType(string $SeatingType): static
    {
        $new = clone $this;
        $new->SeatingType = $SeatingType;

        return $new;
    }

    
    public function getMeetingID(): string
    {
        return $this->MeetingID;
    }

    
    public function withMeetingID(string $MeetingID): static
    {
        $new = clone $this;
        $new->MeetingID = $MeetingID;

        return $new;
    }

    
    public function getMeetingDetails(): string
    {
        return $this->MeetingDetails;
    }

    
    public function withMeetingDetails(string $MeetingDetails): static
    {
        $new = clone $this;
        $new->MeetingDetails = $MeetingDetails;

        return $new;
    }

    
    public function getRecordingID(): string
    {
        return $this->RecordingID;
    }

    
    public function withRecordingID(string $RecordingID): static
    {
        $new = clone $this;
        $new->RecordingID = $RecordingID;

        return $new;
    }

    
    public function getTimeZone(): TimeZone
    {
        return $this->TimeZone;
    }

    
    public function withTimeZone(TimeZone $TimeZone): static
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    
    public function getUseDST(): bool
    {
        return $this->UseDST;
    }

    
    public function withUseDST(bool $UseDST): static
    {
        $new = clone $this;
        $new->UseDST = $UseDST;

        return $new;
    }

    
    public function getMaxLocSize(): int
    {
        return $this->MaxLocSize;
    }

    
    public function withMaxLocSize(int $MaxLocSize): static
    {
        $new = clone $this;
        $new->MaxLocSize = $MaxLocSize;

        return $new;
    }

    
    public function getDoNotInherit(): bool
    {
        return $this->DoNotInherit;
    }

    
    public function withDoNotInherit(bool $DoNotInherit): static
    {
        $new = clone $this;
        $new->DoNotInherit = $DoNotInherit;

        return $new;
    }

    
    public function getIsOneTime(): bool
    {
        return $this->IsOneTime;
    }

    
    public function withIsOneTime(bool $IsOneTime): static
    {
        $new = clone $this;
        $new->IsOneTime = $IsOneTime;

        return $new;
    }

    
    public function getGoToWebcast(): string
    {
        return $this->GoTo_Webcast;
    }

    
    public function withGoToWebcast(string $GoTo_Webcast): static
    {
        $new = clone $this;
        $new->GoTo_Webcast = $GoTo_Webcast;

        return $new;
    }
}
