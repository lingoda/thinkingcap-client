<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseTALoad
{
    private string $TaID;

    
    private string $CourseID;

    
    private int $TaStudentCount;

    
    public function getTaID(): string
    {
        return $this->TaID;
    }

    
    public function withTaID(string $TaID): static
    {
        $new = clone $this;
        $new->TaID = $TaID;

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

    
    public function getTaStudentCount(): int
    {
        return $this->TaStudentCount;
    }

    
    public function withTaStudentCount(int $TaStudentCount): static
    {
        $new = clone $this;
        $new->TaStudentCount = $TaStudentCount;

        return $new;
    }
}
