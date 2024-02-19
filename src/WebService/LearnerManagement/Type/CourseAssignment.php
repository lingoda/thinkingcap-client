<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseAssignment
{
    private string $ID;

    
    private string $Name;

    
    private string $Instructions;

    
    private string $CourseID;

    
    private bool $Mastery;

    
    private int $MaxAttempts;

    
    private bool $AllowTextSubmission;

    
    private bool $AllowFilesSubmission;

    
    private bool $AllowAudioRecordingSubmission;

    
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

    
    public function getInstructions(): string
    {
        return $this->Instructions;
    }

    
    public function withInstructions(string $Instructions): static
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }

    
    public function getCourseID(): string
    {
        return $this->CourseID;
    }

    
    public function withCourseID(string $CourseID): static
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

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
}
