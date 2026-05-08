<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseProctoringSettings
{
    private ?string $CourseID = null;

    private bool $ProctoringEnabled;

    private int $ProctoringMinInterval;

    private int $ProctoringMaxInterval;

    private int $ProctoringMaxScreenshots;

    private bool $ProctoringScreenshotAtStart;

    private bool $ProctoringBlockOnConsentDecline;

    private bool $SendProctoringImageFlaggedNotification;

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

    public function getProctoringEnabled(): bool
    {
        return $this->ProctoringEnabled;
    }

    public function withProctoringEnabled(bool $ProctoringEnabled): static
    {
        $new = clone $this;
        $new->ProctoringEnabled = $ProctoringEnabled;

        return $new;
    }

    public function getProctoringMinInterval(): int
    {
        return $this->ProctoringMinInterval;
    }

    public function withProctoringMinInterval(int $ProctoringMinInterval): static
    {
        $new = clone $this;
        $new->ProctoringMinInterval = $ProctoringMinInterval;

        return $new;
    }

    public function getProctoringMaxInterval(): int
    {
        return $this->ProctoringMaxInterval;
    }

    public function withProctoringMaxInterval(int $ProctoringMaxInterval): static
    {
        $new = clone $this;
        $new->ProctoringMaxInterval = $ProctoringMaxInterval;

        return $new;
    }

    public function getProctoringMaxScreenshots(): int
    {
        return $this->ProctoringMaxScreenshots;
    }

    public function withProctoringMaxScreenshots(int $ProctoringMaxScreenshots): static
    {
        $new = clone $this;
        $new->ProctoringMaxScreenshots = $ProctoringMaxScreenshots;

        return $new;
    }

    public function getProctoringScreenshotAtStart(): bool
    {
        return $this->ProctoringScreenshotAtStart;
    }

    public function withProctoringScreenshotAtStart(bool $ProctoringScreenshotAtStart): static
    {
        $new = clone $this;
        $new->ProctoringScreenshotAtStart = $ProctoringScreenshotAtStart;

        return $new;
    }

    public function getProctoringBlockOnConsentDecline(): bool
    {
        return $this->ProctoringBlockOnConsentDecline;
    }

    public function withProctoringBlockOnConsentDecline(bool $ProctoringBlockOnConsentDecline): static
    {
        $new = clone $this;
        $new->ProctoringBlockOnConsentDecline = $ProctoringBlockOnConsentDecline;

        return $new;
    }

    public function getSendProctoringImageFlaggedNotification(): bool
    {
        return $this->SendProctoringImageFlaggedNotification;
    }

    public function withSendProctoringImageFlaggedNotification(bool $SendProctoringImageFlaggedNotification): static
    {
        $new = clone $this;
        $new->SendProctoringImageFlaggedNotification = $SendProctoringImageFlaggedNotification;

        return $new;
    }
}
