<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseNotification
{
    /**
     * @var string
     */
    private $NotificationID;

    /**
     * @var string
     */
    private $NotificationType;

    /**
     * @var string
     */
    private $NotificationText;

    /**
     * @var string
     */
    private $NotificationSubject;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    private $CourseInfo;

    /**
     * @var int
     */
    private $DaysToComplete;

    /**
     * @var bool
     */
    private $OverrideGlobal;

    /**
     * @var string
     */
    private $Repeat;

    /**
     * @var string
     */
    private $LastSent;

    /**
     * @var string
     */
    private $Lang;

    /**
     * @var string
     */
    private $SMSText;

    /**
     * @return string
     */
    public function getNotificationID()
    {
        return $this->NotificationID;
    }

    /**
     * @param string $NotificationID
     *
     * @return CourseNotification
     */
    public function withNotificationID($NotificationID)
    {
        $new = clone $this;
        $new->NotificationID = $NotificationID;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }

    /**
     * @param string $NotificationType
     *
     * @return CourseNotification
     */
    public function withNotificationType($NotificationType)
    {
        $new = clone $this;
        $new->NotificationType = $NotificationType;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationText()
    {
        return $this->NotificationText;
    }

    /**
     * @param string $NotificationText
     *
     * @return CourseNotification
     */
    public function withNotificationText($NotificationText)
    {
        $new = clone $this;
        $new->NotificationText = $NotificationText;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationSubject()
    {
        return $this->NotificationSubject;
    }

    /**
     * @param string $NotificationSubject
     *
     * @return CourseNotification
     */
    public function withNotificationSubject($NotificationSubject)
    {
        $new = clone $this;
        $new->NotificationSubject = $NotificationSubject;

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
     * @return CourseNotification
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    public function getCourseInfo()
    {
        return $this->CourseInfo;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course $CourseInfo
     *
     * @return CourseNotification
     */
    public function withCourseInfo($CourseInfo)
    {
        $new = clone $this;
        $new->CourseInfo = $CourseInfo;

        return $new;
    }

    /**
     * @return int
     */
    public function getDaysToComplete()
    {
        return $this->DaysToComplete;
    }

    /**
     * @param int $DaysToComplete
     *
     * @return CourseNotification
     */
    public function withDaysToComplete($DaysToComplete)
    {
        $new = clone $this;
        $new->DaysToComplete = $DaysToComplete;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverrideGlobal()
    {
        return $this->OverrideGlobal;
    }

    /**
     * @param bool $OverrideGlobal
     *
     * @return CourseNotification
     */
    public function withOverrideGlobal($OverrideGlobal)
    {
        $new = clone $this;
        $new->OverrideGlobal = $OverrideGlobal;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepeat()
    {
        return $this->Repeat;
    }

    /**
     * @param string $Repeat
     *
     * @return CourseNotification
     */
    public function withRepeat($Repeat)
    {
        $new = clone $this;
        $new->Repeat = $Repeat;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastSent()
    {
        return $this->LastSent;
    }

    /**
     * @param string $LastSent
     *
     * @return CourseNotification
     */
    public function withLastSent($LastSent)
    {
        $new = clone $this;
        $new->LastSent = $LastSent;

        return $new;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->Lang;
    }

    /**
     * @param string $Lang
     *
     * @return CourseNotification
     */
    public function withLang($Lang)
    {
        $new = clone $this;
        $new->Lang = $Lang;

        return $new;
    }

    /**
     * @return string
     */
    public function getSMSText()
    {
        return $this->SMSText;
    }

    /**
     * @param string $SMSText
     *
     * @return CourseNotification
     */
    public function withSMSText($SMSText)
    {
        $new = clone $this;
        $new->SMSText = $SMSText;

        return $new;
    }
}
