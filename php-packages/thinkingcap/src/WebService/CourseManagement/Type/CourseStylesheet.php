<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseStylesheet
{
    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $StylesheetID;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $ServerUrl;

    /**
     * @var \DateTimeInterface
     */
    private $ImportDate;

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
     * @return CourseStylesheet
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
    public function getStylesheetID()
    {
        return $this->StylesheetID;
    }

    /**
     * @param string $StylesheetID
     *
     * @return CourseStylesheet
     */
    public function withStylesheetID($StylesheetID)
    {
        $new = clone $this;
        $new->StylesheetID = $StylesheetID;

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
     * @return CourseStylesheet
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
    public function getServerUrl()
    {
        return $this->ServerUrl;
    }

    /**
     * @param string $ServerUrl
     *
     * @return CourseStylesheet
     */
    public function withServerUrl($ServerUrl)
    {
        $new = clone $this;
        $new->ServerUrl = $ServerUrl;

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
     * @return CourseStylesheet
     */
    public function withImportDate($ImportDate)
    {
        $new = clone $this;
        $new->ImportDate = $ImportDate;

        return $new;
    }
}
