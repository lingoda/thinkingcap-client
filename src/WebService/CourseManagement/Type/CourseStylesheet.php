<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class CourseStylesheet
{
    private string $CourseID;

    
    private string $StylesheetID;

    
    private string $Title;

    
    private string $ServerUrl;

    
    private DateTimeInterface $ImportDate;

    
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

    
    public function getStylesheetID(): string
    {
        return $this->StylesheetID;
    }

    
    public function withStylesheetID(string $StylesheetID): static
    {
        $new = clone $this;
        $new->StylesheetID = $StylesheetID;

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

    
    public function getServerUrl(): string
    {
        return $this->ServerUrl;
    }

    
    public function withServerUrl(string $ServerUrl): static
    {
        $new = clone $this;
        $new->ServerUrl = $ServerUrl;

        return $new;
    }

    
    public function getImportDate(): DateTimeInterface
    {
        return $this->ImportDate;
    }

    
    public function withImportDate(DateTimeInterface $ImportDate): static
    {
        $new = clone $this;
        $new->ImportDate = $ImportDate;

        return $new;
    }
}
