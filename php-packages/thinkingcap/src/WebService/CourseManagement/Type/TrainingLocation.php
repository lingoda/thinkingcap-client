<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class TrainingLocation
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $ProgramID;

    /**
     * @var string
     */
    private $Country;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $PostalCode;

    /**
     * @var string
     */
    private $State;

    /**
     * @var string
     */
    private $Address;

    /**
     * @var string
     */
    private $Room;

    /**
     * @var string
     */
    private $FieldsXml;

    /**
     * @var string
     */
    private $SeatingType;

    /**
     * @var string
     */
    private $MeetingID;

    /**
     * @var string
     */
    private $MeetingDetails;

    /**
     * @var string
     */
    private $RecordingID;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone
     */
    private $TimeZone;

    /**
     * @var bool
     */
    private $UseDST;

    /**
     * @var int
     */
    private $MaxLocSize;

    /**
     * @var bool
     */
    private $DoNotInherit;

    /**
     * @var bool
     */
    private $IsOneTime;

    /**
     * @var string
     */
    private $GoTo_Webcast;

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
     * @return TrainingLocation
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
    public function getProgramID()
    {
        return $this->ProgramID;
    }

    /**
     * @param string $ProgramID
     *
     * @return TrainingLocation
     */
    public function withProgramID($ProgramID)
    {
        $new = clone $this;
        $new->ProgramID = $ProgramID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     *
     * @return TrainingLocation
     */
    public function withCountry($Country)
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     *
     * @return TrainingLocation
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     *
     * @return TrainingLocation
     */
    public function withPostalCode($PostalCode)
    {
        $new = clone $this;
        $new->PostalCode = $PostalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     *
     * @return TrainingLocation
     */
    public function withState($State)
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     *
     * @return TrainingLocation
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return string
     */
    public function getRoom()
    {
        return $this->Room;
    }

    /**
     * @param string $Room
     *
     * @return TrainingLocation
     */
    public function withRoom($Room)
    {
        $new = clone $this;
        $new->Room = $Room;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldsXml()
    {
        return $this->FieldsXml;
    }

    /**
     * @param string $FieldsXml
     *
     * @return TrainingLocation
     */
    public function withFieldsXml($FieldsXml)
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeatingType()
    {
        return $this->SeatingType;
    }

    /**
     * @param string $SeatingType
     *
     * @return TrainingLocation
     */
    public function withSeatingType($SeatingType)
    {
        $new = clone $this;
        $new->SeatingType = $SeatingType;

        return $new;
    }

    /**
     * @return string
     */
    public function getMeetingID()
    {
        return $this->MeetingID;
    }

    /**
     * @param string $MeetingID
     *
     * @return TrainingLocation
     */
    public function withMeetingID($MeetingID)
    {
        $new = clone $this;
        $new->MeetingID = $MeetingID;

        return $new;
    }

    /**
     * @return string
     */
    public function getMeetingDetails()
    {
        return $this->MeetingDetails;
    }

    /**
     * @param string $MeetingDetails
     *
     * @return TrainingLocation
     */
    public function withMeetingDetails($MeetingDetails)
    {
        $new = clone $this;
        $new->MeetingDetails = $MeetingDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecordingID()
    {
        return $this->RecordingID;
    }

    /**
     * @param string $RecordingID
     *
     * @return TrainingLocation
     */
    public function withRecordingID($RecordingID)
    {
        $new = clone $this;
        $new->RecordingID = $RecordingID;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone $TimeZone
     *
     * @return TrainingLocation
     */
    public function withTimeZone($TimeZone)
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseDST()
    {
        return $this->UseDST;
    }

    /**
     * @param bool $UseDST
     *
     * @return TrainingLocation
     */
    public function withUseDST($UseDST)
    {
        $new = clone $this;
        $new->UseDST = $UseDST;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxLocSize()
    {
        return $this->MaxLocSize;
    }

    /**
     * @param int $MaxLocSize
     *
     * @return TrainingLocation
     */
    public function withMaxLocSize($MaxLocSize)
    {
        $new = clone $this;
        $new->MaxLocSize = $MaxLocSize;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDoNotInherit()
    {
        return $this->DoNotInherit;
    }

    /**
     * @param bool $DoNotInherit
     *
     * @return TrainingLocation
     */
    public function withDoNotInherit($DoNotInherit)
    {
        $new = clone $this;
        $new->DoNotInherit = $DoNotInherit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsOneTime()
    {
        return $this->IsOneTime;
    }

    /**
     * @param bool $IsOneTime
     *
     * @return TrainingLocation
     */
    public function withIsOneTime($IsOneTime)
    {
        $new = clone $this;
        $new->IsOneTime = $IsOneTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getGoTo_Webcast()
    {
        return $this->GoTo_Webcast;
    }

    /**
     * @param string $GoTo_Webcast
     *
     * @return TrainingLocation
     */
    public function withGoTo_Webcast($GoTo_Webcast)
    {
        $new = clone $this;
        $new->GoTo_Webcast = $GoTo_Webcast;

        return $new;
    }
}
