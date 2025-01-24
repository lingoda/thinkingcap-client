<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class ActivityNotification
{
    private ?string $NotificationID = null;

    private ?string $NotificationType = null;

    private ?string $NotificationText = null;

    private ?string $NotificationSubject = null;

    private ?string $ActivityID = null;

    private ?Activity $ActivityInfo = null;

    private int $DaysToComplete;

    private bool $OverrideGlobal;

    private ?string $Repeat = null;

    private ?string $LastSent = null;

    private ?string $Lang = null;

    private ?string $SMSText = null;

    public function getNotificationID(): ?string
    {
        return $this->NotificationID;
    }

    public function withNotificationID(?string $NotificationID): static
    {
        $new = clone $this;
        $new->NotificationID = $NotificationID;

        return $new;
    }

    public function getNotificationType(): ?string
    {
        return $this->NotificationType;
    }

    public function withNotificationType(?string $NotificationType): static
    {
        $new = clone $this;
        $new->NotificationType = $NotificationType;

        return $new;
    }

    public function getNotificationText(): ?string
    {
        return $this->NotificationText;
    }

    public function withNotificationText(?string $NotificationText): static
    {
        $new = clone $this;
        $new->NotificationText = $NotificationText;

        return $new;
    }

    public function getNotificationSubject(): ?string
    {
        return $this->NotificationSubject;
    }

    public function withNotificationSubject(?string $NotificationSubject): static
    {
        $new = clone $this;
        $new->NotificationSubject = $NotificationSubject;

        return $new;
    }

    public function getActivityID(): ?string
    {
        return $this->ActivityID;
    }

    public function withActivityID(?string $ActivityID): static
    {
        $new = clone $this;
        $new->ActivityID = $ActivityID;

        return $new;
    }

    public function getActivityInfo(): ?Activity
    {
        return $this->ActivityInfo;
    }

    public function withActivityInfo(?Activity $ActivityInfo): static
    {
        $new = clone $this;
        $new->ActivityInfo = $ActivityInfo;

        return $new;
    }

    public function getDaysToComplete(): int
    {
        return $this->DaysToComplete;
    }

    public function withDaysToComplete(int $DaysToComplete): static
    {
        $new = clone $this;
        $new->DaysToComplete = $DaysToComplete;

        return $new;
    }

    public function getOverrideGlobal(): bool
    {
        return $this->OverrideGlobal;
    }

    public function withOverrideGlobal(bool $OverrideGlobal): static
    {
        $new = clone $this;
        $new->OverrideGlobal = $OverrideGlobal;

        return $new;
    }

    public function getRepeat(): ?string
    {
        return $this->Repeat;
    }

    public function withRepeat(?string $Repeat): static
    {
        $new = clone $this;
        $new->Repeat = $Repeat;

        return $new;
    }

    public function getLastSent(): ?string
    {
        return $this->LastSent;
    }

    public function withLastSent(?string $LastSent): static
    {
        $new = clone $this;
        $new->LastSent = $LastSent;

        return $new;
    }

    public function getLang(): ?string
    {
        return $this->Lang;
    }

    public function withLang(?string $Lang): static
    {
        $new = clone $this;
        $new->Lang = $Lang;

        return $new;
    }

    public function getSMSText(): ?string
    {
        return $this->SMSText;
    }

    public function withSMSText(?string $SMSText): static
    {
        $new = clone $this;
        $new->SMSText = $SMSText;

        return $new;
    }
}
