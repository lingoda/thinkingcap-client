<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class User
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomFields
     */
    private $CustomFields;

    /**
     * @var string
     */
    private $ID;

    /**
     * @var string
     */
    private $DisplayID;

    /**
     * @var string
     */
    private $HomeDomain;

    /**
     * @var string
     */
    private $HomeDomainName;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfDomainURLsCollection
     */
    private $BaseURLs;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var \DateTimeInterface
     */
    private $LastLoginDate;

    /**
     * @var string
     */
    private $LastLoginBrowser;

    /**
     * @var string
     */
    private $LastLoginDevice;

    /**
     * @var bool
     */
    private $IsLoginLocked;

    /**
     * @var bool
     */
    private $IsMFACheck;

    /**
     * @var \DateTimeInterface
     */
    private $MFACreatedDate;

    /**
     * @var \DateTimeInterface
     */
    private $MFACheckDate;

    /**
     * @var bool
     */
    private $CompletedUserSetup;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $ScreenName;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $UserName;

    /**
     * @var \DateTimeInterface
     */
    private $CreationDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastModifiedDate;

    /**
     * @var string
     */
    private $CreationMethod;

    /**
     * @var bool
     */
    private $ProtectFromManualChange;

    /**
     * @var bool
     */
    private $ProtectFromManualDeletion;

    /**
     * @var string
     */
    private $SyncDomain;

    /**
     * @var \DateTimeInterface
     */
    private $PasswordChangeDate;

    /**
     * @var string
     */
    private $Password;

    /**
     * @var bool
     */
    private $MustChangePassword;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var bool
     */
    private $StatusLocked;

    /**
     * @var bool
     */
    private $Pending;

    /**
     * @var bool
     */
    private $SuperUser;

    /**
     * @var bool
     */
    private $CanUseLMSLogin;

    /**
     * @var string
     */
    private $OutsideEmail;

    /**
     * @var bool
     */
    private $NewsLetterEmailOptOutDisabled;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfRole
     */
    private $Roles;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission
     */
    private $Permissions;

    /**
     * @var bool
     */
    private $BlockNotifications;

    /**
     * @var string
     */
    private $BlockNotificationsReason;

    /**
     * @var bool
     */
    private $BlockDomainAnnouncements;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    private $Programs;

    /**
     * @var bool
     */
    private $ProgramMgr;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    private $Courses;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $CourseTitles;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    private $ActivityMaps;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $ActivityMapTitles;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    private $CurrentCourse;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    private $TACourses;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $TACourseTitles;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    private $TAActivityMaps;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    private $TAActivityMapTitles;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMail
     */
    private $Mails;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMailFolder
     */
    private $PersonalFolders;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfContact
     */
    private $Contacts;

    /**
     * @var string
     */
    private $Impersonator;

    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone
     */
    private $TimeZone;

    /**
     * @var string
     */
    private $DateFormat;

    /**
     * @var string
     */
    private $FieldsXml;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomFields
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CustomFields $CustomFields
     *
     * @return User
     */
    public function withCustomFields($CustomFields)
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }

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
     * @return User
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
    public function getDisplayID()
    {
        return $this->DisplayID;
    }

    /**
     * @param string $DisplayID
     *
     * @return User
     */
    public function withDisplayID($DisplayID)
    {
        $new = clone $this;
        $new->DisplayID = $DisplayID;

        return $new;
    }

    /**
     * @return string
     */
    public function getHomeDomain()
    {
        return $this->HomeDomain;
    }

    /**
     * @param string $HomeDomain
     *
     * @return User
     */
    public function withHomeDomain($HomeDomain)
    {
        $new = clone $this;
        $new->HomeDomain = $HomeDomain;

        return $new;
    }

    /**
     * @return string
     */
    public function getHomeDomainName()
    {
        return $this->HomeDomainName;
    }

    /**
     * @param string $HomeDomainName
     *
     * @return User
     */
    public function withHomeDomainName($HomeDomainName)
    {
        $new = clone $this;
        $new->HomeDomainName = $HomeDomainName;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfDomainURLsCollection
     */
    public function getBaseURLs()
    {
        return $this->BaseURLs;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfDomainURLsCollection $BaseURLs
     *
     * @return User
     */
    public function withBaseURLs($BaseURLs)
    {
        $new = clone $this;
        $new->BaseURLs = $BaseURLs;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     *
     * @return User
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastLoginDate()
    {
        return $this->LastLoginDate;
    }

    /**
     * @param \DateTimeInterface $LastLoginDate
     *
     * @return User
     */
    public function withLastLoginDate($LastLoginDate)
    {
        $new = clone $this;
        $new->LastLoginDate = $LastLoginDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastLoginBrowser()
    {
        return $this->LastLoginBrowser;
    }

    /**
     * @param string $LastLoginBrowser
     *
     * @return User
     */
    public function withLastLoginBrowser($LastLoginBrowser)
    {
        $new = clone $this;
        $new->LastLoginBrowser = $LastLoginBrowser;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastLoginDevice()
    {
        return $this->LastLoginDevice;
    }

    /**
     * @param string $LastLoginDevice
     *
     * @return User
     */
    public function withLastLoginDevice($LastLoginDevice)
    {
        $new = clone $this;
        $new->LastLoginDevice = $LastLoginDevice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsLoginLocked()
    {
        return $this->IsLoginLocked;
    }

    /**
     * @param bool $IsLoginLocked
     *
     * @return User
     */
    public function withIsLoginLocked($IsLoginLocked)
    {
        $new = clone $this;
        $new->IsLoginLocked = $IsLoginLocked;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsMFACheck()
    {
        return $this->IsMFACheck;
    }

    /**
     * @param bool $IsMFACheck
     *
     * @return User
     */
    public function withIsMFACheck($IsMFACheck)
    {
        $new = clone $this;
        $new->IsMFACheck = $IsMFACheck;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMFACreatedDate()
    {
        return $this->MFACreatedDate;
    }

    /**
     * @param \DateTimeInterface $MFACreatedDate
     *
     * @return User
     */
    public function withMFACreatedDate($MFACreatedDate)
    {
        $new = clone $this;
        $new->MFACreatedDate = $MFACreatedDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMFACheckDate()
    {
        return $this->MFACheckDate;
    }

    /**
     * @param \DateTimeInterface $MFACheckDate
     *
     * @return User
     */
    public function withMFACheckDate($MFACheckDate)
    {
        $new = clone $this;
        $new->MFACheckDate = $MFACheckDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompletedUserSetup()
    {
        return $this->CompletedUserSetup;
    }

    /**
     * @param bool $CompletedUserSetup
     *
     * @return User
     */
    public function withCompletedUserSetup($CompletedUserSetup)
    {
        $new = clone $this;
        $new->CompletedUserSetup = $CompletedUserSetup;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     *
     * @return User
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getScreenName()
    {
        return $this->ScreenName;
    }

    /**
     * @param string $ScreenName
     *
     * @return User
     */
    public function withScreenName($ScreenName)
    {
        $new = clone $this;
        $new->ScreenName = $ScreenName;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     *
     * @return User
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return User
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     *
     * @return User
     */
    public function withUserName($UserName)
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTimeInterface $CreationDate
     *
     * @return User
     */
    public function withCreationDate($CreationDate)
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $LastModifiedDate
     *
     * @return User
     */
    public function withLastModifiedDate($LastModifiedDate)
    {
        $new = clone $this;
        $new->LastModifiedDate = $LastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreationMethod()
    {
        return $this->CreationMethod;
    }

    /**
     * @param string $CreationMethod
     *
     * @return User
     */
    public function withCreationMethod($CreationMethod)
    {
        $new = clone $this;
        $new->CreationMethod = $CreationMethod;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProtectFromManualChange()
    {
        return $this->ProtectFromManualChange;
    }

    /**
     * @param bool $ProtectFromManualChange
     *
     * @return User
     */
    public function withProtectFromManualChange($ProtectFromManualChange)
    {
        $new = clone $this;
        $new->ProtectFromManualChange = $ProtectFromManualChange;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProtectFromManualDeletion()
    {
        return $this->ProtectFromManualDeletion;
    }

    /**
     * @param bool $ProtectFromManualDeletion
     *
     * @return User
     */
    public function withProtectFromManualDeletion($ProtectFromManualDeletion)
    {
        $new = clone $this;
        $new->ProtectFromManualDeletion = $ProtectFromManualDeletion;

        return $new;
    }

    /**
     * @return string
     */
    public function getSyncDomain()
    {
        return $this->SyncDomain;
    }

    /**
     * @param string $SyncDomain
     *
     * @return User
     */
    public function withSyncDomain($SyncDomain)
    {
        $new = clone $this;
        $new->SyncDomain = $SyncDomain;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPasswordChangeDate()
    {
        return $this->PasswordChangeDate;
    }

    /**
     * @param \DateTimeInterface $PasswordChangeDate
     *
     * @return User
     */
    public function withPasswordChangeDate($PasswordChangeDate)
    {
        $new = clone $this;
        $new->PasswordChangeDate = $PasswordChangeDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     *
     * @return User
     */
    public function withPassword($Password)
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMustChangePassword()
    {
        return $this->MustChangePassword;
    }

    /**
     * @param bool $MustChangePassword
     *
     * @return User
     */
    public function withMustChangePassword($MustChangePassword)
    {
        $new = clone $this;
        $new->MustChangePassword = $MustChangePassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     *
     * @return User
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     *
     * @return User
     */
    public function withActive($Active)
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStatusLocked()
    {
        return $this->StatusLocked;
    }

    /**
     * @param bool $StatusLocked
     *
     * @return User
     */
    public function withStatusLocked($StatusLocked)
    {
        $new = clone $this;
        $new->StatusLocked = $StatusLocked;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPending()
    {
        return $this->Pending;
    }

    /**
     * @param bool $Pending
     *
     * @return User
     */
    public function withPending($Pending)
    {
        $new = clone $this;
        $new->Pending = $Pending;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuperUser()
    {
        return $this->SuperUser;
    }

    /**
     * @param bool $SuperUser
     *
     * @return User
     */
    public function withSuperUser($SuperUser)
    {
        $new = clone $this;
        $new->SuperUser = $SuperUser;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseLMSLogin()
    {
        return $this->CanUseLMSLogin;
    }

    /**
     * @param bool $CanUseLMSLogin
     *
     * @return User
     */
    public function withCanUseLMSLogin($CanUseLMSLogin)
    {
        $new = clone $this;
        $new->CanUseLMSLogin = $CanUseLMSLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getOutsideEmail()
    {
        return $this->OutsideEmail;
    }

    /**
     * @param string $OutsideEmail
     *
     * @return User
     */
    public function withOutsideEmail($OutsideEmail)
    {
        $new = clone $this;
        $new->OutsideEmail = $OutsideEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNewsLetterEmailOptOutDisabled()
    {
        return $this->NewsLetterEmailOptOutDisabled;
    }

    /**
     * @param bool $NewsLetterEmailOptOutDisabled
     *
     * @return User
     */
    public function withNewsLetterEmailOptOutDisabled($NewsLetterEmailOptOutDisabled)
    {
        $new = clone $this;
        $new->NewsLetterEmailOptOutDisabled = $NewsLetterEmailOptOutDisabled;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfRole
     */
    public function getRoles()
    {
        return $this->Roles;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfRole $Roles
     *
     * @return User
     */
    public function withRoles($Roles)
    {
        $new = clone $this;
        $new->Roles = $Roles;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfPermission $Permissions
     *
     * @return User
     */
    public function withPermissions($Permissions)
    {
        $new = clone $this;
        $new->Permissions = $Permissions;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBlockNotifications()
    {
        return $this->BlockNotifications;
    }

    /**
     * @param bool $BlockNotifications
     *
     * @return User
     */
    public function withBlockNotifications($BlockNotifications)
    {
        $new = clone $this;
        $new->BlockNotifications = $BlockNotifications;

        return $new;
    }

    /**
     * @return string
     */
    public function getBlockNotificationsReason()
    {
        return $this->BlockNotificationsReason;
    }

    /**
     * @param string $BlockNotificationsReason
     *
     * @return User
     */
    public function withBlockNotificationsReason($BlockNotificationsReason)
    {
        $new = clone $this;
        $new->BlockNotificationsReason = $BlockNotificationsReason;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBlockDomainAnnouncements()
    {
        return $this->BlockDomainAnnouncements;
    }

    /**
     * @param bool $BlockDomainAnnouncements
     *
     * @return User
     */
    public function withBlockDomainAnnouncements($BlockDomainAnnouncements)
    {
        $new = clone $this;
        $new->BlockDomainAnnouncements = $BlockDomainAnnouncements;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram
     */
    public function getPrograms()
    {
        return $this->Programs;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfProgram $Programs
     *
     * @return User
     */
    public function withPrograms($Programs)
    {
        $new = clone $this;
        $new->Programs = $Programs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getProgramMgr()
    {
        return $this->ProgramMgr;
    }

    /**
     * @param bool $ProgramMgr
     *
     * @return User
     */
    public function withProgramMgr($ProgramMgr)
    {
        $new = clone $this;
        $new->ProgramMgr = $ProgramMgr;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    public function getCourses()
    {
        return $this->Courses;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse $Courses
     *
     * @return User
     */
    public function withCourses($Courses)
    {
        $new = clone $this;
        $new->Courses = $Courses;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getCourseTitles()
    {
        return $this->CourseTitles;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $CourseTitles
     *
     * @return User
     */
    public function withCourseTitles($CourseTitles)
    {
        $new = clone $this;
        $new->CourseTitles = $CourseTitles;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    public function getActivityMaps()
    {
        return $this->ActivityMaps;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse $ActivityMaps
     *
     * @return User
     */
    public function withActivityMaps($ActivityMaps)
    {
        $new = clone $this;
        $new->ActivityMaps = $ActivityMaps;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getActivityMapTitles()
    {
        return $this->ActivityMapTitles;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $ActivityMapTitles
     *
     * @return User
     */
    public function withActivityMapTitles($ActivityMapTitles)
    {
        $new = clone $this;
        $new->ActivityMapTitles = $ActivityMapTitles;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course
     */
    public function getCurrentCourse()
    {
        return $this->CurrentCourse;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\Course $CurrentCourse
     *
     * @return User
     */
    public function withCurrentCourse($CurrentCourse)
    {
        $new = clone $this;
        $new->CurrentCourse = $CurrentCourse;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    public function getTACourses()
    {
        return $this->TACourses;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse $TACourses
     *
     * @return User
     */
    public function withTACourses($TACourses)
    {
        $new = clone $this;
        $new->TACourses = $TACourses;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getTACourseTitles()
    {
        return $this->TACourseTitles;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $TACourseTitles
     *
     * @return User
     */
    public function withTACourseTitles($TACourseTitles)
    {
        $new = clone $this;
        $new->TACourseTitles = $TACourseTitles;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse
     */
    public function getTAActivityMaps()
    {
        return $this->TAActivityMaps;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfCourse $TAActivityMaps
     *
     * @return User
     */
    public function withTAActivityMaps($TAActivityMaps)
    {
        $new = clone $this;
        $new->TAActivityMaps = $TAActivityMaps;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString
     */
    public function getTAActivityMapTitles()
    {
        return $this->TAActivityMapTitles;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfString $TAActivityMapTitles
     *
     * @return User
     */
    public function withTAActivityMapTitles($TAActivityMapTitles)
    {
        $new = clone $this;
        $new->TAActivityMapTitles = $TAActivityMapTitles;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMail
     */
    public function getMails()
    {
        return $this->Mails;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMail $Mails
     *
     * @return User
     */
    public function withMails($Mails)
    {
        $new = clone $this;
        $new->Mails = $Mails;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMailFolder
     */
    public function getPersonalFolders()
    {
        return $this->PersonalFolders;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfMailFolder $PersonalFolders
     *
     * @return User
     */
    public function withPersonalFolders($PersonalFolders)
    {
        $new = clone $this;
        $new->PersonalFolders = $PersonalFolders;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfContact
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ArrayOfContact $Contacts
     *
     * @return User
     */
    public function withContacts($Contacts)
    {
        $new = clone $this;
        $new->Contacts = $Contacts;

        return $new;
    }

    /**
     * @return string
     */
    public function getImpersonator()
    {
        return $this->Impersonator;
    }

    /**
     * @param string $Impersonator
     *
     * @return User
     */
    public function withImpersonator($Impersonator)
    {
        $new = clone $this;
        $new->Impersonator = $Impersonator;

        return $new;
    }

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\TimeZone $TimeZone
     *
     * @return User
     */
    public function withTimeZone($TimeZone)
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return $this->DateFormat;
    }

    /**
     * @param string $DateFormat
     *
     * @return User
     */
    public function withDateFormat($DateFormat)
    {
        $new = clone $this;
        $new->DateFormat = $DateFormat;

        return $new;
    }

    /**
     * @return string
     */
    public function getFieldsXml()
    {
        return $this->FieldsXml;
    }

    /**
     * @param string $FieldsXml
     *
     * @return User
     */
    public function withFieldsXml($FieldsXml)
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }
}
