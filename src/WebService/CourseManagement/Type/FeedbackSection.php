<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class FeedbackSection
{
    private string $ID;

    
    private string $Title;

    
    private int $Display;

    
    private bool $IsGlobal;

    
    private ArrayOfFeedbackQuestion $Questions;

    
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

    
    public function getTitle(): string
    {
        return $this->Title;
    }

    
    public function withTitle(string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getDisplay(): int
    {
        return $this->Display;
    }

    
    public function withDisplay(int $Display): static
    {
        $new = clone $this;
        $new->Display = $Display;

        return $new;
    }

    
    public function getIsGlobal(): bool
    {
        return $this->IsGlobal;
    }

    
    public function withIsGlobal(bool $IsGlobal): static
    {
        $new = clone $this;
        $new->IsGlobal = $IsGlobal;

        return $new;
    }

    
    public function getQuestions(): ArrayOfFeedbackQuestion
    {
        return $this->Questions;
    }

    
    public function withQuestions(ArrayOfFeedbackQuestion $Questions): static
    {
        $new = clone $this;
        $new->Questions = $Questions;

        return $new;
    }
}
