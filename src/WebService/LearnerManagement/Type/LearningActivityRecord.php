<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class LearningActivityRecord
{
    /**
     * @var string
     */
    private $StudentID;

    /**
     * @var string
     */
    private $StudentName;

    /**
     * @var string
     */
    private $StudentEmail;

    /**
     * @var string
     */
    private $LearningActivityID;

    /**
     * @var string
     */
    private $LearningActivityTitle;

    /**
     * @var string
     */
    private $LearningActivityCode;

    /**
     * @var int
     */
    private $EnrollmentNumber;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $Success;

    /**
     * @var int
     */
    private $Score;

    /**
     * @var \DateTimeInterface
     */
    private $DateEnrolled;

    /**
     * @var \DateTimeInterface
     */
    private $DateStarted;

    /**
     * @var \DateTimeInterface
     */
    private $DateCompleted;

    /**
     * @var \DateTimeInterface
     */
    private $AccreditationExpiring;

    /**
     * @var \DateTimeInterface
     */
    private $DueDate;

    /**
     * @return string
     */
    public function getStudentID()
    {
        return $this->StudentID;
    }

    /**
     * @param string $StudentID
     *
     * @return LearningActivityRecord
     */
    public function withStudentID($StudentID)
    {
        $new = clone $this;
        $new->StudentID = $StudentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentName()
    {
        return $this->StudentName;
    }

    /**
     * @param string $StudentName
     *
     * @return LearningActivityRecord
     */
    public function withStudentName($StudentName)
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentEmail()
    {
        return $this->StudentEmail;
    }

    /**
     * @param string $StudentEmail
     *
     * @return LearningActivityRecord
     */
    public function withStudentEmail($StudentEmail)
    {
        $new = clone $this;
        $new->StudentEmail = $StudentEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityID()
    {
        return $this->LearningActivityID;
    }

    /**
     * @param string $LearningActivityID
     *
     * @return LearningActivityRecord
     */
    public function withLearningActivityID($LearningActivityID)
    {
        $new = clone $this;
        $new->LearningActivityID = $LearningActivityID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityTitle()
    {
        return $this->LearningActivityTitle;
    }

    /**
     * @param string $LearningActivityTitle
     *
     * @return LearningActivityRecord
     */
    public function withLearningActivityTitle($LearningActivityTitle)
    {
        $new = clone $this;
        $new->LearningActivityTitle = $LearningActivityTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityCode()
    {
        return $this->LearningActivityCode;
    }

    /**
     * @param string $LearningActivityCode
     *
     * @return LearningActivityRecord
     */
    public function withLearningActivityCode($LearningActivityCode)
    {
        $new = clone $this;
        $new->LearningActivityCode = $LearningActivityCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getEnrollmentNumber()
    {
        return $this->EnrollmentNumber;
    }

    /**
     * @param int $EnrollmentNumber
     *
     * @return LearningActivityRecord
     */
    public function withEnrollmentNumber($EnrollmentNumber)
    {
        $new = clone $this;
        $new->EnrollmentNumber = $EnrollmentNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     *
     * @return LearningActivityRecord
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param string $Success
     *
     * @return LearningActivityRecord
     */
    public function withSuccess($Success)
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->Score;
    }

    /**
     * @param int $Score
     *
     * @return LearningActivityRecord
     */
    public function withScore($Score)
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEnrolled()
    {
        return $this->DateEnrolled;
    }

    /**
     * @param \DateTimeInterface $DateEnrolled
     *
     * @return LearningActivityRecord
     */
    public function withDateEnrolled($DateEnrolled)
    {
        $new = clone $this;
        $new->DateEnrolled = $DateEnrolled;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateStarted()
    {
        return $this->DateStarted;
    }

    /**
     * @param \DateTimeInterface $DateStarted
     *
     * @return LearningActivityRecord
     */
    public function withDateStarted($DateStarted)
    {
        $new = clone $this;
        $new->DateStarted = $DateStarted;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateCompleted()
    {
        return $this->DateCompleted;
    }

    /**
     * @param \DateTimeInterface $DateCompleted
     *
     * @return LearningActivityRecord
     */
    public function withDateCompleted($DateCompleted)
    {
        $new = clone $this;
        $new->DateCompleted = $DateCompleted;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccreditationExpiring()
    {
        return $this->AccreditationExpiring;
    }

    /**
     * @param \DateTimeInterface $AccreditationExpiring
     *
     * @return LearningActivityRecord
     */
    public function withAccreditationExpiring($AccreditationExpiring)
    {
        $new = clone $this;
        $new->AccreditationExpiring = $AccreditationExpiring;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param \DateTimeInterface $DueDate
     *
     * @return LearningActivityRecord
     */
    public function withDueDate($DueDate)
    {
        $new = clone $this;
        $new->DueDate = $DueDate;

        return $new;
    }
}
