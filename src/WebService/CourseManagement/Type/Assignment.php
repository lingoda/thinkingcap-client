<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class Assignment
{
    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Instructions;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $CourseTitle;

    /**
     * @var string
     */
    private $StudentID;

    /**
     * @var string
     */
    private $StudentDisplayID;

    /**
     * @var string
     */
    private $StudentName;

    /**
     * @var bool
     */
    private $AllowTextSubmission;

    /**
     * @var bool
     */
    private $AllowFilesSubmission;

    /**
     * @var bool
     */
    private $AllowAudioRecordingSubmission;

    /**
     * @var bool
     */
    private $Mastery;

    /**
     * @var bool
     */
    private $Completed;

    /**
     * @var \DateTimeInterface
     */
    private $SubmitDate;

    /**
     * @var int
     */
    private $Score;

    /**
     * @var int
     */
    private $MaxAttempts;

    /**
     * @var string
     */
    private $Comments;

    /**
     * @var string
     */
    private $FacultyID;

    /**
     * @var string
     */
    private $ContentType;

    /**
     * @var string
     */
    private $AudioRecordingContentType;

    /**
     * @var string
     */
    private $AdditionalFileContentType;

    /**
     * @var string
     */
    private $ReviewercontentType;

    /**
     * @var string
     */
    private $ReviewerfileName;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $AdditionalFileExtension;

    /**
     * @var string
     */
    private $AdditionalFileExtension1;

    /**
     * @var string
     */
    private $AdditionalFileExtension2;

    /**
     * @var string
     */
    private $AdditionalFileExtension3;

    /**
     * @var string
     */
    private $AdditionalFileExtension4;

    /**
     * @var string
     */
    private $Rubric;

    /**
     * @var string
     */
    private $StudentNotes;

    /**
     * @var string
     */
    private $StudentTextData;

    /**
     * @var string
     */
    private $Status;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     *
     * @return Assignment
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return Assignment
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     *
     * @return Assignment
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

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
     * @return Assignment
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->CourseTitle;
    }

    /**
     * @param string $CourseTitle
     *
     * @return Assignment
     */
    public function withCourseTitle($CourseTitle)
    {
        $new = clone $this;
        $new->CourseTitle = $CourseTitle;

        return $new;
    }

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
     * @return Assignment
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
    public function getStudentDisplayID()
    {
        return $this->StudentDisplayID;
    }

    /**
     * @param string $StudentDisplayID
     *
     * @return Assignment
     */
    public function withStudentDisplayID($StudentDisplayID)
    {
        $new = clone $this;
        $new->StudentDisplayID = $StudentDisplayID;

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
     * @return Assignment
     */
    public function withStudentName($StudentName)
    {
        $new = clone $this;
        $new->StudentName = $StudentName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowTextSubmission()
    {
        return $this->AllowTextSubmission;
    }

    /**
     * @param bool $AllowTextSubmission
     *
     * @return Assignment
     */
    public function withAllowTextSubmission($AllowTextSubmission)
    {
        $new = clone $this;
        $new->AllowTextSubmission = $AllowTextSubmission;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowFilesSubmission()
    {
        return $this->AllowFilesSubmission;
    }

    /**
     * @param bool $AllowFilesSubmission
     *
     * @return Assignment
     */
    public function withAllowFilesSubmission($AllowFilesSubmission)
    {
        $new = clone $this;
        $new->AllowFilesSubmission = $AllowFilesSubmission;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowAudioRecordingSubmission()
    {
        return $this->AllowAudioRecordingSubmission;
    }

    /**
     * @param bool $AllowAudioRecordingSubmission
     *
     * @return Assignment
     */
    public function withAllowAudioRecordingSubmission($AllowAudioRecordingSubmission)
    {
        $new = clone $this;
        $new->AllowAudioRecordingSubmission = $AllowAudioRecordingSubmission;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMastery()
    {
        return $this->Mastery;
    }

    /**
     * @param bool $Mastery
     *
     * @return Assignment
     */
    public function withMastery($Mastery)
    {
        $new = clone $this;
        $new->Mastery = $Mastery;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompleted()
    {
        return $this->Completed;
    }

    /**
     * @param bool $Completed
     *
     * @return Assignment
     */
    public function withCompleted($Completed)
    {
        $new = clone $this;
        $new->Completed = $Completed;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSubmitDate()
    {
        return $this->SubmitDate;
    }

    /**
     * @param \DateTimeInterface $SubmitDate
     *
     * @return Assignment
     */
    public function withSubmitDate($SubmitDate)
    {
        $new = clone $this;
        $new->SubmitDate = $SubmitDate;

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
     * @return Assignment
     */
    public function withScore($Score)
    {
        $new = clone $this;
        $new->Score = $Score;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAttempts()
    {
        return $this->MaxAttempts;
    }

    /**
     * @param int $MaxAttempts
     *
     * @return Assignment
     */
    public function withMaxAttempts($MaxAttempts)
    {
        $new = clone $this;
        $new->MaxAttempts = $MaxAttempts;

        return $new;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     *
     * @return Assignment
     */
    public function withComments($Comments)
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    /**
     * @return string
     */
    public function getFacultyID()
    {
        return $this->FacultyID;
    }

    /**
     * @param string $FacultyID
     *
     * @return Assignment
     */
    public function withFacultyID($FacultyID)
    {
        $new = clone $this;
        $new->FacultyID = $FacultyID;

        return $new;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }

    /**
     * @param string $ContentType
     *
     * @return Assignment
     */
    public function withContentType($ContentType)
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getAudioRecordingContentType()
    {
        return $this->AudioRecordingContentType;
    }

    /**
     * @param string $AudioRecordingContentType
     *
     * @return Assignment
     */
    public function withAudioRecordingContentType($AudioRecordingContentType)
    {
        $new = clone $this;
        $new->AudioRecordingContentType = $AudioRecordingContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileContentType()
    {
        return $this->AdditionalFileContentType;
    }

    /**
     * @param string $AdditionalFileContentType
     *
     * @return Assignment
     */
    public function withAdditionalFileContentType($AdditionalFileContentType)
    {
        $new = clone $this;
        $new->AdditionalFileContentType = $AdditionalFileContentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getReviewercontentType()
    {
        return $this->ReviewercontentType;
    }

    /**
     * @param string $ReviewercontentType
     *
     * @return Assignment
     */
    public function withReviewercontentType($ReviewercontentType)
    {
        $new = clone $this;
        $new->ReviewercontentType = $ReviewercontentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getReviewerfileName()
    {
        return $this->ReviewerfileName;
    }

    /**
     * @param string $ReviewerfileName
     *
     * @return Assignment
     */
    public function withReviewerfileName($ReviewerfileName)
    {
        $new = clone $this;
        $new->ReviewerfileName = $ReviewerfileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     *
     * @return Assignment
     */
    public function withExtension($Extension)
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileExtension()
    {
        return $this->AdditionalFileExtension;
    }

    /**
     * @param string $AdditionalFileExtension
     *
     * @return Assignment
     */
    public function withAdditionalFileExtension($AdditionalFileExtension)
    {
        $new = clone $this;
        $new->AdditionalFileExtension = $AdditionalFileExtension;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileExtension1()
    {
        return $this->AdditionalFileExtension1;
    }

    /**
     * @param string $AdditionalFileExtension1
     *
     * @return Assignment
     */
    public function withAdditionalFileExtension1($AdditionalFileExtension1)
    {
        $new = clone $this;
        $new->AdditionalFileExtension1 = $AdditionalFileExtension1;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileExtension2()
    {
        return $this->AdditionalFileExtension2;
    }

    /**
     * @param string $AdditionalFileExtension2
     *
     * @return Assignment
     */
    public function withAdditionalFileExtension2($AdditionalFileExtension2)
    {
        $new = clone $this;
        $new->AdditionalFileExtension2 = $AdditionalFileExtension2;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileExtension3()
    {
        return $this->AdditionalFileExtension3;
    }

    /**
     * @param string $AdditionalFileExtension3
     *
     * @return Assignment
     */
    public function withAdditionalFileExtension3($AdditionalFileExtension3)
    {
        $new = clone $this;
        $new->AdditionalFileExtension3 = $AdditionalFileExtension3;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalFileExtension4()
    {
        return $this->AdditionalFileExtension4;
    }

    /**
     * @param string $AdditionalFileExtension4
     *
     * @return Assignment
     */
    public function withAdditionalFileExtension4($AdditionalFileExtension4)
    {
        $new = clone $this;
        $new->AdditionalFileExtension4 = $AdditionalFileExtension4;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubric()
    {
        return $this->Rubric;
    }

    /**
     * @param string $Rubric
     *
     * @return Assignment
     */
    public function withRubric($Rubric)
    {
        $new = clone $this;
        $new->Rubric = $Rubric;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentNotes()
    {
        return $this->StudentNotes;
    }

    /**
     * @param string $StudentNotes
     *
     * @return Assignment
     */
    public function withStudentNotes($StudentNotes)
    {
        $new = clone $this;
        $new->StudentNotes = $StudentNotes;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudentTextData()
    {
        return $this->StudentTextData;
    }

    /**
     * @param string $StudentTextData
     *
     * @return Assignment
     */
    public function withStudentTextData($StudentTextData)
    {
        $new = clone $this;
        $new->StudentTextData = $StudentTextData;

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
     * @return Assignment
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }
}
