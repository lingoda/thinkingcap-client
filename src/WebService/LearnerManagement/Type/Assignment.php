<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use DateTimeInterface;

class Assignment
{
    private ?string $ID;

    
    private ?string $Name;

    
    private ?string $Instructions;

    
    private ?string $CourseID;

    
    private ?string $CourseTitle;

    
    private ?string $StudentID;

    
    private ?string $StudentDisplayID;

    
    private ?string $StudentName;

    
    private bool $AllowTextSubmission;

    
    private bool $AllowFilesSubmission;

    
    private bool $AllowAudioRecordingSubmission;

    
    private bool $Mastery;

    
    private bool $Completed;

    
    private DateTimeInterface $SubmitDate;

    
    private int $Score;

    
    private int $MaxAttempts;

    
    private ?string $Comments;

    
    private ?string $FacultyID;

    
    private ?string $ContentType;

    
    private ?string $AudioRecordingContentType;

    
    private ?string $AdditionalFileContentType;

    
    private ?string $ReviewercontentType;

    
    private ?string $ReviewerfileName;

    
    private ?string $Extension;

    
    private ?string $AdditionalFileExtension;

    
    private ?string $AdditionalFileExtension1;

    
    private ?string $AdditionalFileExtension2;

    
    private ?string $AdditionalFileExtension3;

    
    private ?string $AdditionalFileExtension4;

    
    private ?string $Rubric;

    
    private ?string $StudentNotes;

    
    private ?string $StudentTextData;

    
    private ?string $Status;

    
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

    
    public function getName(): ?string
    {
        return $this->Name;
    }

    
    public function withName(?string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    
    public function getInstructions(): ?string
    {
        return $this->Instructions;
    }

    
    public function withInstructions(?string $Instructions): static
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

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

    
    public function getCourseTitle(): ?string
    {
        return $this->CourseTitle;
    }

    
    public function withCourseTitle(?string $CourseTitle): static
    {
        $new = clone $this;
        $new->CourseTitle = $CourseTitle;

        return $new;
    }

    
    public function getStudentID(): ?string
    {
        return $this->StudentID;
    }

    
    public function withStudentID(?string $StudentID): static
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    
    public function getStudentDisplayID(): ?string
    {
        return $this->StudentDisplayID;
    }

    
    public function withStudentDisplayID(?string $StudentDisplayID): static
    {
        $new = clone $this;
        $new->StudentDisplayID = $StudentDisplayID;

        return $new;
    }

    
    public function getStudentName(): ?string
    {
        return $this->StudentName;
    }

    
    public function withStudentName(?string $StudentName): static
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    
    public function getAllowTextSubmission(): bool
    {
        return $this->AllowTextSubmission;
    }

    
    public function withAllowTextSubmission(bool $AllowTextSubmission): static
    {
        $new = clone $this;
        $new->AllowTextSubmission = $AllowTextSubmission;

        return $new;
    }

    
    public function getAllowFilesSubmission(): bool
    {
        return $this->AllowFilesSubmission;
    }

    
    public function withAllowFilesSubmission(bool $AllowFilesSubmission): static
    {
        $new = clone $this;
        $new->AllowFilesSubmission = $AllowFilesSubmission;

        return $new;
    }

    
    public function getAllowAudioRecordingSubmission(): bool
    {
        return $this->AllowAudioRecordingSubmission;
    }

    
    public function withAllowAudioRecordingSubmission(bool $AllowAudioRecordingSubmission): static
    {
        $new = clone $this;
        $new->AllowAudioRecordingSubmission = $AllowAudioRecordingSubmission;

        return $new;
    }

    
    public function getMastery(): bool
    {
        return $this->Mastery;
    }

    
    public function withMastery(bool $Mastery): static
    {
        $new = clone $this;
        $new->Mastery = $Mastery;

        return $new;
    }

    
    public function getCompleted(): bool
    {
        return $this->Completed;
    }

    
    public function withCompleted(bool $Completed): static
    {
        $new = clone $this;
        $new->Completed = $Completed;

        return $new;
    }

    
    public function getSubmitDate(): DateTimeInterface
    {
        return $this->SubmitDate;
    }

    
    public function withSubmitDate(DateTimeInterface $SubmitDate): static
    {
        $new = clone $this;
        $new->SubmitDate = $SubmitDate;

        return $new;
    }

    
    public function getScore(): int
    {
        return $this->Score;
    }

    
    public function withScore(int $Score): static
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    
    public function getMaxAttempts(): int
    {
        return $this->MaxAttempts;
    }

    
    public function withMaxAttempts(int $MaxAttempts): static
    {
        $new = clone $this;
        $new->MaxAttempts = $MaxAttempts;

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

    
    public function getFacultyID(): ?string
    {
        return $this->FacultyID;
    }

    
    public function withFacultyID(?string $FacultyID): static
    {
        $new = clone $this;
        $new->FacultyID = $FacultyID;

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

    
    public function getAudioRecordingContentType(): ?string
    {
        return $this->AudioRecordingContentType;
    }

    
    public function withAudioRecordingContentType(?string $AudioRecordingContentType): static
    {
        $new = clone $this;
        $new->AudioRecordingContentType = $AudioRecordingContentType;

        return $new;
    }

    
    public function getAdditionalFileContentType(): ?string
    {
        return $this->AdditionalFileContentType;
    }

    
    public function withAdditionalFileContentType(?string $AdditionalFileContentType): static
    {
        $new = clone $this;
        $new->AdditionalFileContentType = $AdditionalFileContentType;

        return $new;
    }

    
    public function getReviewercontentType(): ?string
    {
        return $this->ReviewercontentType;
    }

    
    public function withReviewercontentType(?string $ReviewercontentType): static
    {
        $new = clone $this;
        $new->ReviewercontentType = $ReviewercontentType;

        return $new;
    }

    
    public function getReviewerfileName(): ?string
    {
        return $this->ReviewerfileName;
    }

    
    public function withReviewerfileName(?string $ReviewerfileName): static
    {
        $new = clone $this;
        $new->ReviewerfileName = $ReviewerfileName;

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

    
    public function getAdditionalFileExtension(): ?string
    {
        return $this->AdditionalFileExtension;
    }

    
    public function withAdditionalFileExtension(?string $AdditionalFileExtension): static
    {
        $new = clone $this;
        $new->AdditionalFileExtension = $AdditionalFileExtension;

        return $new;
    }

    
    public function getAdditionalFileExtension1(): ?string
    {
        return $this->AdditionalFileExtension1;
    }

    
    public function withAdditionalFileExtension1(?string $AdditionalFileExtension1): static
    {
        $new = clone $this;
        $new->AdditionalFileExtension1 = $AdditionalFileExtension1;

        return $new;
    }

    
    public function getAdditionalFileExtension2(): ?string
    {
        return $this->AdditionalFileExtension2;
    }

    
    public function withAdditionalFileExtension2(?string $AdditionalFileExtension2): static
    {
        $new = clone $this;
        $new->AdditionalFileExtension2 = $AdditionalFileExtension2;

        return $new;
    }

    
    public function getAdditionalFileExtension3(): ?string
    {
        return $this->AdditionalFileExtension3;
    }

    
    public function withAdditionalFileExtension3(?string $AdditionalFileExtension3): static
    {
        $new = clone $this;
        $new->AdditionalFileExtension3 = $AdditionalFileExtension3;

        return $new;
    }

    
    public function getAdditionalFileExtension4(): ?string
    {
        return $this->AdditionalFileExtension4;
    }

    
    public function withAdditionalFileExtension4(?string $AdditionalFileExtension4): static
    {
        $new = clone $this;
        $new->AdditionalFileExtension4 = $AdditionalFileExtension4;

        return $new;
    }

    
    public function getRubric(): ?string
    {
        return $this->Rubric;
    }

    
    public function withRubric(?string $Rubric): static
    {
        $new = clone $this;
        $new->Rubric = $Rubric;

        return $new;
    }

    
    public function getStudentNotes(): ?string
    {
        return $this->StudentNotes;
    }

    
    public function withStudentNotes(?string $StudentNotes): static
    {
        $new = clone $this;
        $new->StudentNotes = $StudentNotes;

        return $new;
    }

    
    public function getStudentTextData(): ?string
    {
        return $this->StudentTextData;
    }

    
    public function withStudentTextData(?string $StudentTextData): static
    {
        $new = clone $this;
        $new->StudentTextData = $StudentTextData;

        return $new;
    }

    
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    
    public function withStatus(?string $Status): static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }
}
