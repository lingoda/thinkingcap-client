<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use DateTimeInterface;

class User
{
    private ?CustomFields $CustomFields;

    
    private ?string $ID;

    
    private ?string $DisplayID;

    
    private ?string $HomeDomain;

    
    private ?string $HomeDomainName;

    
    private ?ArrayOfDomainURLsCollection $BaseURLs;

    
    private ?string $FirstName;

    
    private DateTimeInterface $LastLoginDate;

    
    private ?string $LastLoginBrowser;

    
    private ?string $LastLoginDevice;

    
    private bool $IsLoginLocked;

    
    private bool $IsMFACheck;

    
    private DateTimeInterface $MFACreatedDate;

    
    private DateTimeInterface $MFACheckDate;

    
    private bool $CompletedUserSetup;

    
    private ?string $LastName;

    
    private ?string $ScreenName;

    
    private ?string $Title;

    
    private ?string $Email;

    
    private ?string $UserName;

    
    private DateTimeInterface $CreationDate;

    
    private DateTimeInterface $LastModifiedDate;

    
    private ?string $CreationMethod;

    
    private bool $ProtectFromManualChange;

    
    private bool $ProtectFromManualDeletion;

    
    private ?string $SyncDomain;

    
    private DateTimeInterface $PasswordChangeDate;

    
    private ?string $Password;

    
    private bool $MustChangePassword;

    
    private ?string $Language;

    
    private bool $Active;

    
    private bool $StatusLocked;

    
    private bool $Pending;

    
    private bool $SuperUser;

    
    private bool $CanUseLMSLogin;

    
    private ?string $OutsideEmail;

    
    private bool $NewsLetterEmailOptOutDisabled;

    
    private ?ArrayOfMail $Mails;

    
    private ?ArrayOfMailFolder $PersonalFolders;

    
    private ?ArrayOfContact $Contacts;

    
    private ?ArrayOfRole $Roles;

    
    private ?ArrayOfPermission $Permissions;

    
    private bool $BlockNotifications;

    
    private ?string $BlockNotificationsReason;

    
    private bool $BlockDomainAnnouncements;

    
    private ?ArrayOfProgram $Programs;

    
    private bool $ProgramMgr;

    
    private ?ArrayOfCourse $Courses;

    
    private ?ArrayOfString $CourseTitles;

    
    private ?ArrayOfCourse $ActivityMaps;

    
    private ?ArrayOfString $ActivityMapTitles;

    
    private ?Course $CurrentCourse;

    
    private ?ArrayOfCourse $TACourses;

    
    private ?ArrayOfString $TACourseTitles;

    
    private ?ArrayOfCourse $TAActivityMaps;

    
    private ?ArrayOfString $TAActivityMapTitles;

    
    private ?string $Impersonator;

    
    private ?TimeZone $TimeZone;

    
    private ?string $DateFormat;

    
    private ?string $FieldsXml;

    
    public function getCustomFields(): ?CustomFields
    {
        return $this->CustomFields;
    }

    
    public function withCustomFields(?CustomFields $CustomFields): static
    {
        $new = clone $this;
        $new->CustomFields = $CustomFields;

        return $new;
    }

    
    public function getID(): ?string
    {
        return $this->ID;
    }

    
    public function withID(?string $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    
    public function getDisplayID(): ?string
    {
        return $this->DisplayID;
    }

    
    public function withDisplayID(?string $DisplayID): static
    {
        $new = clone $this;
        $new->DisplayID = $DisplayID;

        return $new;
    }

    
    public function getHomeDomain(): ?string
    {
        return $this->HomeDomain;
    }

    
    public function withHomeDomain(?string $HomeDomain): static
    {
        $new = clone $this;
        $new->HomeDomain = $HomeDomain;

        return $new;
    }

    
    public function getHomeDomainName(): ?string
    {
        return $this->HomeDomainName;
    }

    
    public function withHomeDomainName(?string $HomeDomainName): static
    {
        $new = clone $this;
        $new->HomeDomainName = $HomeDomainName;

        return $new;
    }

    
    public function getBaseURLs(): ?ArrayOfDomainURLsCollection
    {
        return $this->BaseURLs;
    }

    
    public function withBaseURLs(?ArrayOfDomainURLsCollection $BaseURLs): static
    {
        $new = clone $this;
        $new->BaseURLs = $BaseURLs;

        return $new;
    }

    
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    
    public function withFirstName(?string $FirstName): static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    
    public function getLastLoginDate(): DateTimeInterface
    {
        return $this->LastLoginDate;
    }

    
    public function withLastLoginDate(DateTimeInterface $LastLoginDate): static
    {
        $new = clone $this;
        $new->LastLoginDate = $LastLoginDate;

        return $new;
    }

    
    public function getLastLoginBrowser(): ?string
    {
        return $this->LastLoginBrowser;
    }

    
    public function withLastLoginBrowser(?string $LastLoginBrowser): static
    {
        $new = clone $this;
        $new->LastLoginBrowser = $LastLoginBrowser;

        return $new;
    }

    
    public function getLastLoginDevice(): ?string
    {
        return $this->LastLoginDevice;
    }

    
    public function withLastLoginDevice(?string $LastLoginDevice): static
    {
        $new = clone $this;
        $new->LastLoginDevice = $LastLoginDevice;

        return $new;
    }

    
    public function getIsLoginLocked(): bool
    {
        return $this->IsLoginLocked;
    }

    
    public function withIsLoginLocked(bool $IsLoginLocked): static
    {
        $new = clone $this;
        $new->IsLoginLocked = $IsLoginLocked;

        return $new;
    }

    
    public function getIsMFACheck(): bool
    {
        return $this->IsMFACheck;
    }

    
    public function withIsMFACheck(bool $IsMFACheck): static
    {
        $new = clone $this;
        $new->IsMFACheck = $IsMFACheck;

        return $new;
    }

    
    public function getMFACreatedDate(): DateTimeInterface
    {
        return $this->MFACreatedDate;
    }

    
    public function withMFACreatedDate(DateTimeInterface $MFACreatedDate): static
    {
        $new = clone $this;
        $new->MFACreatedDate = $MFACreatedDate;

        return $new;
    }

    
    public function getMFACheckDate(): DateTimeInterface
    {
        return $this->MFACheckDate;
    }

    
    public function withMFACheckDate(DateTimeInterface $MFACheckDate): static
    {
        $new = clone $this;
        $new->MFACheckDate = $MFACheckDate;

        return $new;
    }

    
    public function getCompletedUserSetup(): bool
    {
        return $this->CompletedUserSetup;
    }

    
    public function withCompletedUserSetup(bool $CompletedUserSetup): static
    {
        $new = clone $this;
        $new->CompletedUserSetup = $CompletedUserSetup;

        return $new;
    }

    
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    
    public function withLastName(?string $LastName): static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    
    public function getScreenName(): ?string
    {
        return $this->ScreenName;
    }

    
    public function withScreenName(?string $ScreenName): static
    {
        $new = clone $this;
        $new->ScreenName = $ScreenName;

        return $new;
    }

    
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    
    public function withTitle(?string $Title): static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    
    public function withEmail(?string $Email): static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    
    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    
    public function withUserName(?string $UserName): static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    
    public function getCreationDate(): DateTimeInterface
    {
        return $this->CreationDate;
    }

    
    public function withCreationDate(DateTimeInterface $CreationDate): static
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

        return $new;
    }

    
    public function getLastModifiedDate(): DateTimeInterface
    {
        return $this->LastModifiedDate;
    }

    
    public function withLastModifiedDate(DateTimeInterface $LastModifiedDate): static
    {
        $new = clone $this;
        $new->LastModifiedDate = $LastModifiedDate;

        return $new;
    }

    
    public function getCreationMethod(): ?string
    {
        return $this->CreationMethod;
    }

    
    public function withCreationMethod(?string $CreationMethod): static
    {
        $new = clone $this;
        $new->CreationMethod = $CreationMethod;

        return $new;
    }

    
    public function getProtectFromManualChange(): bool
    {
        return $this->ProtectFromManualChange;
    }

    
    public function withProtectFromManualChange(bool $ProtectFromManualChange): static
    {
        $new = clone $this;
        $new->ProtectFromManualChange = $ProtectFromManualChange;

        return $new;
    }

    
    public function getProtectFromManualDeletion(): bool
    {
        return $this->ProtectFromManualDeletion;
    }

    
    public function withProtectFromManualDeletion(bool $ProtectFromManualDeletion): static
    {
        $new = clone $this;
        $new->ProtectFromManualDeletion = $ProtectFromManualDeletion;

        return $new;
    }

    
    public function getSyncDomain(): ?string
    {
        return $this->SyncDomain;
    }

    
    public function withSyncDomain(?string $SyncDomain): static
    {
        $new = clone $this;
        $new->SyncDomain = $SyncDomain;

        return $new;
    }

    
    public function getPasswordChangeDate(): DateTimeInterface
    {
        return $this->PasswordChangeDate;
    }

    
    public function withPasswordChangeDate(DateTimeInterface $PasswordChangeDate): static
    {
        $new = clone $this;
        $new->PasswordChangeDate = $PasswordChangeDate;

        return $new;
    }

    
    public function getPassword(): ?string
    {
        return $this->Password;
    }

    
    public function withPassword(?string $Password): static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    
    public function getMustChangePassword(): bool
    {
        return $this->MustChangePassword;
    }

    
    public function withMustChangePassword(bool $MustChangePassword): static
    {
        $new = clone $this;
        $new->MustChangePassword = $MustChangePassword;

        return $new;
    }

    
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    
    public function withLanguage(?string $Language): static
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    
    public function getActive(): bool
    {
        return $this->Active;
    }

    
    public function withActive(bool $Active): static
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    
    public function getStatusLocked(): bool
    {
        return $this->StatusLocked;
    }

    
    public function withStatusLocked(bool $StatusLocked): static
    {
        $new = clone $this;
        $new->StatusLocked = $StatusLocked;

        return $new;
    }

    
    public function getPending(): bool
    {
        return $this->Pending;
    }

    
    public function withPending(bool $Pending): static
    {
        $new = clone $this;
        $new->Pending = $Pending;

        return $new;
    }

    
    public function getSuperUser(): bool
    {
        return $this->SuperUser;
    }

    
    public function withSuperUser(bool $SuperUser): static
    {
        $new = clone $this;
        $new->SuperUser = $SuperUser;

        return $new;
    }

    
    public function getCanUseLMSLogin(): bool
    {
        return $this->CanUseLMSLogin;
    }

    
    public function withCanUseLMSLogin(bool $CanUseLMSLogin): static
    {
        $new = clone $this;
        $new->CanUseLMSLogin = $CanUseLMSLogin;

        return $new;
    }

    
    public function getOutsideEmail(): ?string
    {
        return $this->OutsideEmail;
    }

    
    public function withOutsideEmail(?string $OutsideEmail): static
    {
        $new = clone $this;
        $new->OutsideEmail = $OutsideEmail;

        return $new;
    }

    
    public function getNewsLetterEmailOptOutDisabled(): bool
    {
        return $this->NewsLetterEmailOptOutDisabled;
    }

    
    public function withNewsLetterEmailOptOutDisabled(bool $NewsLetterEmailOptOutDisabled): static
    {
        $new = clone $this;
        $new->NewsLetterEmailOptOutDisabled = $NewsLetterEmailOptOutDisabled;

        return $new;
    }

    
    public function getMails(): ?ArrayOfMail
    {
        return $this->Mails;
    }

    
    public function withMails(?ArrayOfMail $Mails): static
    {
        $new = clone $this;
        $new->Mails = $Mails;

        return $new;
    }

    
    public function getPersonalFolders(): ?ArrayOfMailFolder
    {
        return $this->PersonalFolders;
    }

    
    public function withPersonalFolders(?ArrayOfMailFolder $PersonalFolders): static
    {
        $new = clone $this;
        $new->PersonalFolders = $PersonalFolders;

        return $new;
    }

    
    public function getContacts(): ?ArrayOfContact
    {
        return $this->Contacts;
    }

    
    public function withContacts(?ArrayOfContact $Contacts): static
    {
        $new = clone $this;
        $new->Contacts = $Contacts;

        return $new;
    }

    
    public function getRoles(): ?ArrayOfRole
    {
        return $this->Roles;
    }

    
    public function withRoles(?ArrayOfRole $Roles): static
    {
        $new = clone $this;
        $new->Roles = $Roles;

        return $new;
    }

    
    public function getPermissions(): ?ArrayOfPermission
    {
        return $this->Permissions;
    }

    
    public function withPermissions(?ArrayOfPermission $Permissions): static
    {
        $new = clone $this;
        $new->Permissions = $Permissions;

        return $new;
    }

    
    public function getBlockNotifications(): bool
    {
        return $this->BlockNotifications;
    }

    
    public function withBlockNotifications(bool $BlockNotifications): static
    {
        $new = clone $this;
        $new->BlockNotifications = $BlockNotifications;

        return $new;
    }

    
    public function getBlockNotificationsReason(): ?string
    {
        return $this->BlockNotificationsReason;
    }

    
    public function withBlockNotificationsReason(?string $BlockNotificationsReason): static
    {
        $new = clone $this;
        $new->BlockNotificationsReason = $BlockNotificationsReason;

        return $new;
    }

    
    public function getBlockDomainAnnouncements(): bool
    {
        return $this->BlockDomainAnnouncements;
    }

    
    public function withBlockDomainAnnouncements(bool $BlockDomainAnnouncements): static
    {
        $new = clone $this;
        $new->BlockDomainAnnouncements = $BlockDomainAnnouncements;

        return $new;
    }

    
    public function getPrograms(): ?ArrayOfProgram
    {
        return $this->Programs;
    }

    
    public function withPrograms(?ArrayOfProgram $Programs): static
    {
        $new = clone $this;
        $new->Programs = $Programs;

        return $new;
    }

    
    public function getProgramMgr(): bool
    {
        return $this->ProgramMgr;
    }

    
    public function withProgramMgr(bool $ProgramMgr): static
    {
        $new = clone $this;
        $new->ProgramMgr = $ProgramMgr;

        return $new;
    }

    
    public function getCourses(): ?ArrayOfCourse
    {
        return $this->Courses;
    }

    
    public function withCourses(?ArrayOfCourse $Courses): static
    {
        $new = clone $this;
        $new->Courses = $Courses;

        return $new;
    }

    
    public function getCourseTitles(): ?ArrayOfString
    {
        return $this->CourseTitles;
    }

    
    public function withCourseTitles(?ArrayOfString $CourseTitles): static
    {
        $new = clone $this;
        $new->CourseTitles = $CourseTitles;

        return $new;
    }

    
    public function getActivityMaps(): ?ArrayOfCourse
    {
        return $this->ActivityMaps;
    }

    
    public function withActivityMaps(?ArrayOfCourse $ActivityMaps): static
    {
        $new = clone $this;
        $new->ActivityMaps = $ActivityMaps;

        return $new;
    }

    
    public function getActivityMapTitles(): ?ArrayOfString
    {
        return $this->ActivityMapTitles;
    }

    
    public function withActivityMapTitles(?ArrayOfString $ActivityMapTitles): static
    {
        $new = clone $this;
        $new->ActivityMapTitles = $ActivityMapTitles;

        return $new;
    }

    
    public function getCurrentCourse(): ?Course
    {
        return $this->CurrentCourse;
    }

    
    public function withCurrentCourse(?Course $CurrentCourse): static
    {
        $new = clone $this;
        $new->CurrentCourse = $CurrentCourse;

        return $new;
    }

    
    public function getTACourses(): ?ArrayOfCourse
    {
        return $this->TACourses;
    }

    
    public function withTACourses(?ArrayOfCourse $TACourses): static
    {
        $new = clone $this;
        $new->TACourses = $TACourses;

        return $new;
    }

    
    public function getTACourseTitles(): ?ArrayOfString
    {
        return $this->TACourseTitles;
    }

    
    public function withTACourseTitles(?ArrayOfString $TACourseTitles): static
    {
        $new = clone $this;
        $new->TACourseTitles = $TACourseTitles;

        return $new;
    }

    
    public function getTAActivityMaps(): ?ArrayOfCourse
    {
        return $this->TAActivityMaps;
    }

    
    public function withTAActivityMaps(?ArrayOfCourse $TAActivityMaps): static
    {
        $new = clone $this;
        $new->TAActivityMaps = $TAActivityMaps;

        return $new;
    }

    
    public function getTAActivityMapTitles(): ?ArrayOfString
    {
        return $this->TAActivityMapTitles;
    }

    
    public function withTAActivityMapTitles(?ArrayOfString $TAActivityMapTitles): static
    {
        $new = clone $this;
        $new->TAActivityMapTitles = $TAActivityMapTitles;

        return $new;
    }

    
    public function getImpersonator(): ?string
    {
        return $this->Impersonator;
    }

    
    public function withImpersonator(?string $Impersonator): static
    {
        $new = clone $this;
        $new->Impersonator = $Impersonator;

        return $new;
    }

    
    public function getTimeZone(): ?TimeZone
    {
        return $this->TimeZone;
    }

    
    public function withTimeZone(?TimeZone $TimeZone): static
    {
        $new = clone $this;
        $new->TimeZone = $TimeZone;

        return $new;
    }

    
    public function getDateFormat(): ?string
    {
        return $this->DateFormat;
    }

    
    public function withDateFormat(?string $DateFormat): static
    {
        $new = clone $this;
        $new->DateFormat = $DateFormat;

        return $new;
    }

    
    public function getFieldsXml(): ?string
    {
        return $this->FieldsXml;
    }

    
    public function withFieldsXml(?string $FieldsXml): static
    {
        $new = clone $this;
        $new->FieldsXml = $FieldsXml;

        return $new;
    }
}
