<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class Reference
{
    private ?string $ID;

    
    private ?string $CourseID;

    
    private ?string $Type;

    
    private ?string $ISBN;

    
    private ?string $URL;

    
    private ?string $VideoID;

    
    private ?string $VideoDescription;

    
    private ?string $Title;

    
    private ?string $Author;

    
    private ?string $Comments;

    
    private ?string $Extension;

    
    private ?string $ContentType;

    
    private int $ContentLength;

    
    private ?string $DocumentType;

    /**
     * @var null | mixed
     */
    private mixed $DocumentFile;

    
    private DateTimeInterface $UploadDate;

    
    private bool $HideFromLearners;

    
    private ?string $ParentID;

    
    private ?string $ObjectType;

    
    private ?string $OriginalFileName;

    
    private ?string $FieldsXml;

    
    public function getID(): ?string
    {
        return $this->ID;
    }

    
    public function withID(?string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getCourseID(): ?string
    {
        return $this->CourseID;
    }

    
    public function withCourseID(?string $CourseID): static
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    
    public function getType(): ?string
    {
        return $this->Type;
    }

    
    public function withType(?string $Type): static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    
    public function getISBN(): ?string
    {
        return $this->ISBN;
    }

    
    public function withISBN(?string $ISBN): static
    {
        $new = clone $this;
        $new->ISBN = $ISBN;

        return $new;
    }

    
    public function getURL(): ?string
    {
        return $this->URL;
    }

    
    public function withURL(?string $URL): static
    {
        $new = clone $this;
        $new->URL = $URL;

        return $new;
    }

    
    public function getVideoID(): ?string
    {
        return $this->VideoID;
    }

    
    public function withVideoID(?string $VideoID): static
    {
        $new = clone $this;
        $new->VideoID = $VideoID;

        return $new;
    }

    
    public function getVideoDescription(): ?string
    {
        return $this->VideoDescription;
    }

    
    public function withVideoDescription(?string $VideoDescription): static
    {
        $new = clone $this;
        $new->VideoDescription = $VideoDescription;

        return $new;
    }

    
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    
    public function withTitle(?string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getAuthor(): ?string
    {
        return $this->Author;
    }

    
    public function withAuthor(?string $Author): static
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }

    
    public function getComments(): ?string
    {
        return $this->Comments;
    }

    
    public function withComments(?string $Comments): static
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    
    public function getExtension(): ?string
    {
        return $this->Extension;
    }

    
    public function withExtension(?string $Extension): static
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    
    public function getContentType(): ?string
    {
        return $this->ContentType;
    }

    
    public function withContentType(?string $ContentType): static
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    
    public function getContentLength(): int
    {
        return $this->ContentLength;
    }

    
    public function withContentLength(int $ContentLength): static
    {
        $new = clone $this;
        $new->ContentLength = $ContentLength;

        return $new;
    }

    
    public function getDocumentType(): ?string
    {
        return $this->DocumentType;
    }

    
    public function withDocumentType(?string $DocumentType): static
    {
        $new = clone $this;
        $new->DocumentType = $DocumentType;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getDocumentFile(): mixed
    {
        return $this->DocumentFile;
    }

    /**
     * @param null | mixed $DocumentFile
     */
    public function withDocumentFile(mixed $DocumentFile): static
    {
        $new = clone $this;
        $new->DocumentFile = $DocumentFile;

        return $new;
    }

    
    public function getUploadDate(): DateTimeInterface
    {
        return $this->UploadDate;
    }

    
    public function withUploadDate(DateTimeInterface $UploadDate): static
    {
        $new = clone $this;
        $new->UploadDate = $UploadDate;

        return $new;
    }

    
    public function getHideFromLearners(): bool
    {
        return $this->HideFromLearners;
    }

    
    public function withHideFromLearners(bool $HideFromLearners): static
    {
        $new = clone $this;
        $new->HideFromLearners = $HideFromLearners;

        return $new;
    }

    
    public function getParentID(): ?string
    {
        return $this->ParentID;
    }

    
    public function withParentID(?string $ParentID): static
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    
    public function getObjectType(): ?string
    {
        return $this->ObjectType;
    }

    
    public function withObjectType(?string $ObjectType): static
    {
        $new = clone $this;
        $new->ObjectType = $ObjectType;

        return $new;
    }

    
    public function getOriginalFileName(): ?string
    {
        return $this->OriginalFileName;
    }

    
    public function withOriginalFileName(?string $OriginalFileName): static
    {
        $new = clone $this;
        $new->OriginalFileName = $OriginalFileName;

        return $new;
    }

    
    public function getFieldsXml(): ?string
    {
        return $this->FieldsXml;
    }

    
    public function withFieldsXml(?string $FieldsXml): static
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }
}
