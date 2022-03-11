<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseVersion
{
    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $CourseTitle;

    /**
     * @var int
     */
    private $VersionNumber;

    /**
     * @var float
     */
    private $LearningTime;

    /**
     * @var bool
     */
    private $IsAssessment;

    /**
     * @var bool
     */
    private $HasAssessment;

    /**
     * @var bool
     */
    private $HasAssignment;

    /**
     * @var float
     */
    private $CertificateMinTime;

    /**
     * @var \DateTimeInterface
     */
    private $ImportDate;

    /**
     * @var string
     */
    private $ScormVersion;

    /**
     * @var string
     */
    private $Reason;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var bool
     */
    private $HasMinorVersions;

    /**
     * @var string
     */
    private $UpdatedBy;

    /**
     * @var string
     */
    private $SummaryXml;

    /**
     * @var string
     */
    private $ExternalLocation;

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->CourseID;
    }

    /**
     * @param string $CourseID
     *
     * @return CourseVersion
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->CourseTitle;
    }

    /**
     * @param string $CourseTitle
     *
     * @return CourseVersion
     */
    public function withCourseTitle($CourseTitle)
    {
        $new = clone $this;
        $new->CourseTitle = $CourseTitle;

        return $new;
    }

    /**
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * @param int $VersionNumber
     *
     * @return CourseVersion
     */
    public function withVersionNumber($VersionNumber)
    {
        $new = clone $this;
        $new->VersionNumber = $VersionNumber;

        return $new;
    }

    /**
     * @return float
     */
    public function getLearningTime()
    {
        return $this->LearningTime;
    }

    /**
     * @param float $LearningTime
     *
     * @return CourseVersion
     */
    public function withLearningTime($LearningTime)
    {
        $new = clone $this;
        $new->LearningTime = $LearningTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAssessment()
    {
        return $this->IsAssessment;
    }

    /**
     * @param bool $IsAssessment
     *
     * @return CourseVersion
     */
    public function withIsAssessment($IsAssessment)
    {
        $new = clone $this;
        $new->IsAssessment = $IsAssessment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAssessment()
    {
        return $this->HasAssessment;
    }

    /**
     * @param bool $HasAssessment
     *
     * @return CourseVersion
     */
    public function withHasAssessment($HasAssessment)
    {
        $new = clone $this;
        $new->HasAssessment = $HasAssessment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAssignment()
    {
        return $this->HasAssignment;
    }

    /**
     * @param bool $HasAssignment
     *
     * @return CourseVersion
     */
    public function withHasAssignment($HasAssignment)
    {
        $new = clone $this;
        $new->HasAssignment = $HasAssignment;

        return $new;
    }

    /**
     * @return float
     */
    public function getCertificateMinTime()
    {
        return $this->CertificateMinTime;
    }

    /**
     * @param float $CertificateMinTime
     *
     * @return CourseVersion
     */
    public function withCertificateMinTime($CertificateMinTime)
    {
        $new = clone $this;
        $new->CertificateMinTime = $CertificateMinTime;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getImportDate()
    {
        return $this->ImportDate;
    }

    /**
     * @param \DateTimeInterface $ImportDate
     *
     * @return CourseVersion
     */
    public function withImportDate($ImportDate)
    {
        $new = clone $this;
        $new->ImportDate = $ImportDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getScormVersion()
    {
        return $this->ScormVersion;
    }

    /**
     * @param string $ScormVersion
     *
     * @return CourseVersion
     */
    public function withScormVersion($ScormVersion)
    {
        $new = clone $this;
        $new->ScormVersion = $ScormVersion;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     *
     * @return CourseVersion
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return CourseVersion
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasMinorVersions()
    {
        return $this->HasMinorVersions;
    }

    /**
     * @param bool $HasMinorVersions
     *
     * @return CourseVersion
     */
    public function withHasMinorVersions($HasMinorVersions)
    {
        $new = clone $this;
        $new->HasMinorVersions = $HasMinorVersions;

        return $new;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     *
     * @return CourseVersion
     */
    public function withUpdatedBy($UpdatedBy)
    {
        $new = clone $this;
        $new->UpdatedBy = $UpdatedBy;

        return $new;
    }

    /**
     * @return string
     */
    public function getSummaryXml()
    {
        return $this->SummaryXml;
    }

    /**
     * @param string $SummaryXml
     *
     * @return CourseVersion
     */
    public function withSummaryXml($SummaryXml)
    {
        $new = clone $this;
        $new->SummaryXml = $SummaryXml;

        return $new;
    }

    /**
     * @return string
     */
    public function getExternalLocation()
    {
        return $this->ExternalLocation;
    }

    /**
     * @param string $ExternalLocation
     *
     * @return CourseVersion
     */
    public function withExternalLocation($ExternalLocation)
    {
        $new = clone $this;
        $new->ExternalLocation = $ExternalLocation;

        return $new;
    }
}
