<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Reference
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $ISBN;

    /**
     * @var string
     */
    private $URL;

    /**
     * @var string
     */
    private $VideoID;

    /**
     * @var string
     */
    private $VideoDescription;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Author;

    /**
     * @var string
     */
    private $Comments;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var int
     */
    private $ContentLength;

    /**
     * @var string
     */
    private $DocumentType;

    /**
     * @var string
     */
    private $DocumentFile;

    /**
     * @var \DateTimeInterface
     */
    private $UploadDate;

    /**
     * @var bool
     */
    private $HideFromLearners;

    /**
     * @var string
     */
    private $ParentID;

    /**
     * @var string
     */
    private $ObjectType;

    /**
     * @var string
     */
    private $OriginalFileName;

    /**
     * @var string
     */
    private $FieldsXml;

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
     * @return Reference
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
    public function getCourseID()
    {
        return $this->CourseID;
    }

    /**
     * @param string $CourseID
     *
     * @return Reference
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
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return Reference
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param string $ISBN
     *
     * @return Reference
     */
    public function withISBN($ISBN)
    {
        $new = clone $this;
        $new->ISBN = $ISBN;

        return $new;
    }

    /**
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     *
     * @return Reference
     */
    public function withURL($URL)
    {
        $new = clone $this;
        $new->URL = $URL;

        return $new;
    }

    /**
     * @return string
     */
    public function getVideoID()
    {
        return $this->VideoID;
    }

    /**
     * @param string $VideoID
     *
     * @return Reference
     */
    public function withVideoID($VideoID)
    {
        $new = clone $this;
        $new->VideoID = $VideoID;

        return $new;
    }

    /**
     * @return string
     */
    public function getVideoDescription()
    {
        return $this->VideoDescription;
    }

    /**
     * @param string $VideoDescription
     *
     * @return Reference
     */
    public function withVideoDescription($VideoDescription)
    {
        $new = clone $this;
        $new->VideoDescription = $VideoDescription;

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
     * @return Reference
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
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param string $Author
     *
     * @return Reference
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     *
     * @return Reference
     */
    public function withComments($Comments)
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     *
     * @return Reference
     */
    public function withExtension($Extension)
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }

    /**
     * @param string $ContentType
     *
     * @return Reference
     */
    public function withContentType($ContentType)
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    /**
     * @return int
     */
    public function getContentLength()
    {
        return $this->ContentLength;
    }

    /**
     * @param int $ContentLength
     *
     * @return Reference
     */
    public function withContentLength($ContentLength)
    {
        $new = clone $this;
        $new->ContentLength = $ContentLength;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @param string $DocumentType
     *
     * @return Reference
     */
    public function withDocumentType($DocumentType)
    {
        $new = clone $this;
        $new->DocumentType = $DocumentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentFile()
    {
        return $this->DocumentFile;
    }

    /**
     * @param string $DocumentFile
     *
     * @return Reference
     */
    public function withDocumentFile($DocumentFile)
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUploadDate()
    {
        return $this->UploadDate;
    }

    /**
     * @param \DateTimeInterface $UploadDate
     *
     * @return Reference
     */
    public function withUploadDate($UploadDate)
    {
        $new = clone $this;
        $new->UploadDate = $UploadDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideFromLearners()
    {
        return $this->HideFromLearners;
    }

    /**
     * @param bool $HideFromLearners
     *
     * @return Reference
     */
    public function withHideFromLearners($HideFromLearners)
    {
        $new = clone $this;
        $new->HideFromLearners = $HideFromLearners;

        return $new;
    }

    /**
     * @return string
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param string $ParentID
     *
     * @return Reference
     */
    public function withParentID($ParentID)
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }

    /**
     * @param string $ObjectType
     *
     * @return Reference
     */
    public function withObjectType($ObjectType)
    {
        $new = clone $this;
        $new->ObjectType = $ObjectType;

        return $new;
    }

    /**
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->OriginalFileName;
    }

    /**
     * @param string $OriginalFileName
     *
     * @return Reference
     */
    public function withOriginalFileName($OriginalFileName)
    {
        $new = clone $this;
        $new->OriginalFileName = $OriginalFileName;

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
     * @return Reference
     */
    public function withFieldsXml($FieldsXml)
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }
}
