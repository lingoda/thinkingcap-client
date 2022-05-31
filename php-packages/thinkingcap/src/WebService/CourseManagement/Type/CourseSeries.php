<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseSeries
{
    /**
     * @var string
     */
    private $SeriesID;

    /**
     * @var string
     */
    private $SeriesCode;

    /**
     * @var string
     */
    private $SeriesTitle;

    /**
     * @var string
     */
    private $SeriesDescription;

    /**
     * @var string
     */
    private $SeriesKeyword;

    /**
     * @var string
     */
    private $SeriesProgram;

    /**
     * @var bool
     */
    private $AllowGlobalOnly;

    /**
     * @var bool
     */
    private $WaitlistOnlyInOneMember;

    /**
     * @var bool
     */
    private $DoNotInherit;

    /**
     * @var string
     */
    private $SeriesFieldsXml;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $CertificateRules;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $EquivalencyLearningObjectsArray;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    private $EquivalencyActivityArray;

    /**
     * @return string
     */
    public function getSeriesID()
    {
        return $this->SeriesID;
    }

    /**
     * @param string $SeriesID
     *
     * @return CourseSeries
     */
    public function withSeriesID($SeriesID)
    {
        $new = clone $this;
        $new->SeriesID = $SeriesID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }

    /**
     * @param string $SeriesCode
     *
     * @return CourseSeries
     */
    public function withSeriesCode($SeriesCode)
    {
        $new = clone $this;
        $new->SeriesCode = $SeriesCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesTitle()
    {
        return $this->SeriesTitle;
    }

    /**
     * @param string $SeriesTitle
     *
     * @return CourseSeries
     */
    public function withSeriesTitle($SeriesTitle)
    {
        $new = clone $this;
        $new->SeriesTitle = $SeriesTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesDescription()
    {
        return $this->SeriesDescription;
    }

    /**
     * @param string $SeriesDescription
     *
     * @return CourseSeries
     */
    public function withSeriesDescription($SeriesDescription)
    {
        $new = clone $this;
        $new->SeriesDescription = $SeriesDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesKeyword()
    {
        return $this->SeriesKeyword;
    }

    /**
     * @param string $SeriesKeyword
     *
     * @return CourseSeries
     */
    public function withSeriesKeyword($SeriesKeyword)
    {
        $new = clone $this;
        $new->SeriesKeyword = $SeriesKeyword;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesProgram()
    {
        return $this->SeriesProgram;
    }

    /**
     * @param string $SeriesProgram
     *
     * @return CourseSeries
     */
    public function withSeriesProgram($SeriesProgram)
    {
        $new = clone $this;
        $new->SeriesProgram = $SeriesProgram;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowGlobalOnly()
    {
        return $this->AllowGlobalOnly;
    }

    /**
     * @param bool $AllowGlobalOnly
     *
     * @return CourseSeries
     */
    public function withAllowGlobalOnly($AllowGlobalOnly)
    {
        $new = clone $this;
        $new->AllowGlobalOnly = $AllowGlobalOnly;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWaitlistOnlyInOneMember()
    {
        return $this->WaitlistOnlyInOneMember;
    }

    /**
     * @param bool $WaitlistOnlyInOneMember
     *
     * @return CourseSeries
     */
    public function withWaitlistOnlyInOneMember($WaitlistOnlyInOneMember)
    {
        $new = clone $this;
        $new->WaitlistOnlyInOneMember = $WaitlistOnlyInOneMember;

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
     * @return CourseSeries
     */
    public function withDoNotInherit($DoNotInherit)
    {
        $new = clone $this;
        $new->DoNotInherit = $DoNotInherit;

        return $new;
    }

    /**
     * @return string
     */
    public function getSeriesFieldsXml()
    {
        return $this->SeriesFieldsXml;
    }

    /**
     * @param string $SeriesFieldsXml
     *
     * @return CourseSeries
     */
    public function withSeriesFieldsXml($SeriesFieldsXml)
    {
        $new = clone $this;
        $new->SeriesFieldsXml = $SeriesFieldsXml;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getCertificateRules()
    {
        return $this->CertificateRules;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $CertificateRules
     *
     * @return CourseSeries
     */
    public function withCertificateRules($CertificateRules)
    {
        $new = clone $this;
        $new->CertificateRules = $CertificateRules;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getEquivalencyLearningObjectsArray()
    {
        return $this->EquivalencyLearningObjectsArray;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $EquivalencyLearningObjectsArray
     *
     * @return CourseSeries
     */
    public function withEquivalencyLearningObjectsArray($EquivalencyLearningObjectsArray)
    {
        $new = clone $this;
        $new->EquivalencyLearningObjectsArray = $EquivalencyLearningObjectsArray;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType
     */
    public function getEquivalencyActivityArray()
    {
        return $this->EquivalencyActivityArray;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfAnyType $EquivalencyActivityArray
     *
     * @return CourseSeries
     */
    public function withEquivalencyActivityArray($EquivalencyActivityArray)
    {
        $new = clone $this;
        $new->EquivalencyActivityArray = $EquivalencyActivityArray;

        return $new;
    }
}
