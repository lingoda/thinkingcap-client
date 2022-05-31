<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement;

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;

class LearnerManagementClassmap
{
    public static function getCollection(): \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetAllUsers', Type\GetAllUsers::class),
            new ClassMap('GetAllUsersResponse', Type\GetAllUsersResponse::class),
            new ClassMap('ServiceResultOfUserList', Type\ServiceResultOfUserList::class),
            new ClassMap('ArrayOfUser', Type\ArrayOfUser::class),
            new ClassMap('User', Type\User::class),
            new ClassMap('CustomFields', Type\CustomFields::class),
            new ClassMap('ArrayOfDomainURLsCollection', Type\ArrayOfDomainURLsCollection::class),
            new ClassMap('DomainURLsCollection', Type\DomainURLsCollection::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('ArrayOfRole', Type\ArrayOfRole::class),
            new ClassMap('Role', Type\Role::class),
            new ClassMap('ArrayOfPermission', Type\ArrayOfPermission::class),
            new ClassMap('Permission', Type\Permission::class),
            new ClassMap('ArrayOfProgram', Type\ArrayOfProgram::class),
            new ClassMap('Program', Type\Program::class),
            new ClassMap('RegistrationIntroXmlNode', Type\RegistrationIntroXmlNode::class),
            new ClassMap('RegistrationDuplicateAccountInstrXmlNode', Type\RegistrationDuplicateAccountInstrXmlNode::class),
            new ClassMap('RegistrationDisclaimerXmlNode', Type\RegistrationDisclaimerXmlNode::class),
            new ClassMap('RegistrationConfirmationTextXmlNode', Type\RegistrationConfirmationTextXmlNode::class),
            new ClassMap('RegistrationRequestConfirmationTextXmlNode', Type\RegistrationRequestConfirmationTextXmlNode::class),
            new ClassMap('RegistrationConfirmationEmailXmlNode', Type\RegistrationConfirmationEmailXmlNode::class),
            new ClassMap('RegistrationRequestEmailXmlNode', Type\RegistrationRequestEmailXmlNode::class),
            new ClassMap('RegistrationRequestApprovalEmailXmlNode', Type\RegistrationRequestApprovalEmailXmlNode::class),
            new ClassMap('RegistrationRequestDenialEmailXmlNode', Type\RegistrationRequestDenialEmailXmlNode::class),
            new ClassMap('UserDomainDisplayLabelXmlNode', Type\UserDomainDisplayLabelXmlNode::class),
            new ClassMap('ArrayOfAnyType', Type\ArrayOfAnyType::class),
            new ClassMap('ArrayOfCourse', Type\ArrayOfCourse::class),
            new ClassMap('Course', Type\Course::class),
            new ClassMap('LearningType', Type\LearningType::class),
            new ClassMap('CaptionInfo', Type\CaptionInfo::class),
            new ClassMap('AccreditationDetails', Type\AccreditationDetails::class),
            new ClassMap('ArrayOfReference', Type\ArrayOfReference::class),
            new ClassMap('Reference', Type\Reference::class),
            new ClassMap('ArrayOfAssignment', Type\ArrayOfAssignment::class),
            new ClassMap('Assignment', Type\Assignment::class),
            new ClassMap('ArrayOfCourseAssignment', Type\ArrayOfCourseAssignment::class),
            new ClassMap('CourseAssignment', Type\CourseAssignment::class),
            new ClassMap('ArrayOfCourseStylesheet', Type\ArrayOfCourseStylesheet::class),
            new ClassMap('CourseStylesheet', Type\CourseStylesheet::class),
            new ClassMap('ArrayOfCourseVersion', Type\ArrayOfCourseVersion::class),
            new ClassMap('CourseVersion', Type\CourseVersion::class),
            new ClassMap('ActivityMapVersion', Type\ActivityMapVersion::class),
            new ClassMap('FeedbackSection', Type\FeedbackSection::class),
            new ClassMap('ArrayOfFeedbackQuestion', Type\ArrayOfFeedbackQuestion::class),
            new ClassMap('FeedbackQuestion', Type\FeedbackQuestion::class),
            new ClassMap('ArrayOfCourseNotification', Type\ArrayOfCourseNotification::class),
            new ClassMap('CourseNotification', Type\CourseNotification::class),
            new ClassMap('ActivityMap', Type\ActivityMap::class),
            new ClassMap('ArrayOfMail', Type\ArrayOfMail::class),
            new ClassMap('Mail', Type\Mail::class),
            new ClassMap('ArrayOfMailFolder', Type\ArrayOfMailFolder::class),
            new ClassMap('MailFolder', Type\MailFolder::class),
            new ClassMap('ArrayOfContact', Type\ArrayOfContact::class),
            new ClassMap('Contact', Type\Contact::class),
            new ClassMap('TimeZone', Type\TimeZone::class),
            new ClassMap('TimeZoneOffset', Type\TimeZoneOffset::class),
            new ClassMap('CourseAlternativePrice', Type\CourseAlternativePrice::class),
            new ClassMap('CourseSession', Type\CourseSession::class),
            new ClassMap('TrainingLocation', Type\TrainingLocation::class),
            new ClassMap('CourseTALoad', Type\CourseTALoad::class),
            new ClassMap('GetDomainUsers', Type\GetDomainUsers::class),
            new ClassMap('ServiceResultOfListOfServiceUser', Type\ServiceResultOfListOfServiceUser::class),
            new ClassMap('ArrayOfServiceUser', Type\ArrayOfServiceUser::class),
            new ClassMap('ServiceUser', Type\ServiceUser::class),
            new ClassMap('ArrayOfCustomField', Type\ArrayOfCustomField::class),
            new ClassMap('CustomField', Type\CustomField::class),
            new ClassMap('ArrayOfString1', Type\ArrayOfString1::class),
            new ClassMap('GetDomainUsersResponse', Type\GetDomainUsersResponse::class),
            new ClassMap('RegisterUser', Type\RegisterUser::class),
            new ClassMap('ServiceResultOfString', Type\ServiceResultOfString::class),
            new ClassMap('RegisterUserResponse', Type\RegisterUserResponse::class),
            new ClassMap('UpdateUser', Type\UpdateUser::class),
            new ClassMap('UpdateUserResponse', Type\UpdateUserResponse::class),
            new ClassMap('UpdateUserMetadataValues', Type\UpdateUserMetadataValues::class),
            new ClassMap('UpdateUserMetadataValuesResponse', Type\UpdateUserMetadataValuesResponse::class),
            new ClassMap('UpdateUserProfile', Type\UpdateUserProfile::class),
            new ClassMap('UpdateUserProfileResponse', Type\UpdateUserProfileResponse::class),
            new ClassMap('UpdateStudentSupervisors', Type\UpdateStudentSupervisors::class),
            new ClassMap('UpdateStudentSupervisorsResponse', Type\UpdateStudentSupervisorsResponse::class),
            new ClassMap('GetSupervisorUsers', Type\GetSupervisorUsers::class),
            new ClassMap('GetSupervisorUsersResponse', Type\GetSupervisorUsersResponse::class),
            new ClassMap('GetUserByID', Type\GetUserByID::class),
            new ClassMap('ServiceResultOfServiceUser', Type\ServiceResultOfServiceUser::class),
            new ClassMap('GetUserByIDResponse', Type\GetUserByIDResponse::class),
            new ClassMap('GetUserByEmail', Type\GetUserByEmail::class),
            new ClassMap('ServiceResultOfUser', Type\ServiceResultOfUser::class),
            new ClassMap('GetUserByEmailResponse', Type\GetUserByEmailResponse::class),
            new ClassMap('FindUserIDByEmail', Type\FindUserIDByEmail::class),
            new ClassMap('FindUserIDByEmailResponse', Type\FindUserIDByEmailResponse::class),
            new ClassMap('GetUserByUserName', Type\GetUserByUserName::class),
            new ClassMap('GetUserByUserNameResponse', Type\GetUserByUserNameResponse::class),
            new ClassMap('FindUserIDByUserName', Type\FindUserIDByUserName::class),
            new ClassMap('FindUserIDByUserNameResponse', Type\FindUserIDByUserNameResponse::class),
            new ClassMap('GetUsersByScreenName', Type\GetUsersByScreenName::class),
            new ClassMap('GetUsersByScreenNameResponse', Type\GetUsersByScreenNameResponse::class),
            new ClassMap('GetUsersByCustomField', Type\GetUsersByCustomField::class),
            new ClassMap('GetUsersByCustomFieldResponse', Type\GetUsersByCustomFieldResponse::class),
            new ClassMap('FindUserIDByCustomField', Type\FindUserIDByCustomField::class),
            new ClassMap('FindUserIDByCustomFieldResponse', Type\FindUserIDByCustomFieldResponse::class),
            new ClassMap('DeleteUser', Type\DeleteUser::class),
            new ClassMap('DeleteUserResponse', Type\DeleteUserResponse::class),
            new ClassMap('DeleteUserByLookup', Type\DeleteUserByLookup::class),
            new ClassMap('DeleteUserByLookupResponse', Type\DeleteUserByLookupResponse::class),
            new ClassMap('AddUserToDomain', Type\AddUserToDomain::class),
            new ClassMap('AddUserToDomainResponse', Type\AddUserToDomainResponse::class),
            new ClassMap('AddUserToDomainWithEnrollments', Type\AddUserToDomainWithEnrollments::class),
            new ClassMap('AddUserToDomainWithEnrollmentsResponse', Type\AddUserToDomainWithEnrollmentsResponse::class),
            new ClassMap('SetUserActive', Type\SetUserActive::class),
            new ClassMap('SetUserActiveResponse', Type\SetUserActiveResponse::class),
            new ClassMap('SetUserActiveByLookup', Type\SetUserActiveByLookup::class),
            new ClassMap('SetUserActiveByLookupResponse', Type\SetUserActiveByLookupResponse::class),
            new ClassMap('GetStudentTranscript', Type\GetStudentTranscript::class),
            new ClassMap('ServiceResultOfStudentRecordList', Type\ServiceResultOfStudentRecordList::class),
            new ClassMap('ArrayOfStudentRecord', Type\ArrayOfStudentRecord::class),
            new ClassMap('StudentRecord', Type\StudentRecord::class),
            new ClassMap('StudentActivityMap', Type\StudentActivityMap::class),
            new ClassMap('Xml', Type\Xml::class),
            new ClassMap('GetStudentTranscriptResponse', Type\GetStudentTranscriptResponse::class),
            new ClassMap('EnrollStudentWithDetails', Type\EnrollStudentWithDetails::class),
            new ClassMap('EnrollStudentWithDetailsResponse', Type\EnrollStudentWithDetailsResponse::class),
            new ClassMap('EnrollStudent', Type\EnrollStudent::class),
            new ClassMap('EnrollStudentResponse', Type\EnrollStudentResponse::class),
            new ClassMap('EnrollStudentReservation', Type\EnrollStudentReservation::class),
            new ClassMap('EnrollStudentReservationResponse', Type\EnrollStudentReservationResponse::class),
            new ClassMap('StudentSelfEnroll', Type\StudentSelfEnroll::class),
            new ClassMap('StudentSelfEnrollResponse', Type\StudentSelfEnrollResponse::class),
            new ClassMap('WithdrawStudent', Type\WithdrawStudent::class),
            new ClassMap('WithdrawStudentResponse', Type\WithdrawStudentResponse::class),
            new ClassMap('MarkStudentSession', Type\MarkStudentSession::class),
            new ClassMap('MarkStudentSessionResponse', Type\MarkStudentSessionResponse::class),
            new ClassMap('GetStudentLPDetails', Type\GetStudentLPDetails::class),
            new ClassMap('GetStudentLPDetailsResponse', Type\GetStudentLPDetailsResponse::class),
            new ClassMap('GetRecordDetails', Type\GetRecordDetails::class),
            new ClassMap('ServiceResultOfStudentRecord', Type\ServiceResultOfStudentRecord::class),
            new ClassMap('GetRecordDetailsResponse', Type\GetRecordDetailsResponse::class),
            new ClassMap('GetStudentLearningActivityRecordDetails', Type\GetStudentLearningActivityRecordDetails::class),
            new ClassMap('ServiceResultOfLearningActivityRecord', Type\ServiceResultOfLearningActivityRecord::class),
            new ClassMap('LearningActivityRecord', Type\LearningActivityRecord::class),
            new ClassMap('GetStudentLearningActivityRecordDetailsResponse', Type\GetStudentLearningActivityRecordDetailsResponse::class),
            new ClassMap('GetStudentLearningActivityRecords', Type\GetStudentLearningActivityRecords::class),
            new ClassMap('ServiceResultOfListOfLearningActivityRecord', Type\ServiceResultOfListOfLearningActivityRecord::class),
            new ClassMap('ArrayOfLearningActivityRecord', Type\ArrayOfLearningActivityRecord::class),
            new ClassMap('GetStudentLearningActivityRecordsResponse', Type\GetStudentLearningActivityRecordsResponse::class),
            new ClassMap('GetAllStudentLearningActivityRecords', Type\GetAllStudentLearningActivityRecords::class),
            new ClassMap('GetAllStudentLearningActivityRecordsResponse', Type\GetAllStudentLearningActivityRecordsResponse::class),
            new ClassMap('SetRecordDetails', Type\SetRecordDetails::class),
            new ClassMap('SetRecordDetailsResponse', Type\SetRecordDetailsResponse::class),
            new ClassMap('GenerateTimedSeed', Type\GenerateTimedSeed::class),
            new ClassMap('GenerateTimedSeedResponse', Type\GenerateTimedSeedResponse::class),
            new ClassMap('ValidateTimedSeed', Type\ValidateTimedSeed::class),
            new ClassMap('ServiceResultOfBoolean', Type\ServiceResultOfBoolean::class),
            new ClassMap('ValidateTimedSeedResponse', Type\ValidateTimedSeedResponse::class),
            new ClassMap('MergeStudentTranscripts', Type\MergeStudentTranscripts::class),
            new ClassMap('MergeStudentTranscriptsResponse', Type\MergeStudentTranscriptsResponse::class),
            new ClassMap('GetStudentAvailableCourses', Type\GetStudentAvailableCourses::class),
            new ClassMap('GetStudentAvailableCoursesResponse', Type\GetStudentAvailableCoursesResponse::class),
            new ClassMap('GetCourseCompletionStatusByDateRange', Type\GetCourseCompletionStatusByDateRange::class),
            new ClassMap('GetCourseCompletionStatusByDateRangeResponse', Type\GetCourseCompletionStatusByDateRangeResponse::class),
            new ClassMap('getLearningActivityListEnrollments', Type\GetLearningActivityListEnrollments::class),
            new ClassMap('ServiceResultOfXmlDocument', Type\ServiceResultOfXmlDocument::class),
            new ClassMap('Result', Type\Result::class),
            new ClassMap('getLearningActivityListEnrollmentsResponse', Type\GetLearningActivityListEnrollmentsResponse::class),
            new ClassMap('getLearningActivityListEnrollmentsTruncated', Type\GetLearningActivityListEnrollmentsTruncated::class),
            new ClassMap('getLearningActivityListEnrollmentsTruncatedResponse', Type\GetLearningActivityListEnrollmentsTruncatedResponse::class),
            new ClassMap('GetLMSUserAutoLoginURL', Type\GetLMSUserAutoLoginURL::class),
            new ClassMap('GetLMSUserAutoLoginURLResponse', Type\GetLMSUserAutoLoginURLResponse::class),
            new ClassMap('GetLMSUserAutoLoginURLByUsername', Type\GetLMSUserAutoLoginURLByUsername::class),
            new ClassMap('GetLMSUserAutoLoginURLByUsernameResponse', Type\GetLMSUserAutoLoginURLByUsernameResponse::class),
            new ClassMap('GetActiveDirectorySynchSettings', Type\GetActiveDirectorySynchSettings::class),
            new ClassMap('GetActiveDirectorySynchSettingsResponse', Type\GetActiveDirectorySynchSettingsResponse::class),
            new ClassMap('TestPost', Type\TestPost::class),
            new ClassMap('TestPostResponse', Type\TestPostResponse::class),
            new ClassMap('GetSCORMDetails', Type\GetSCORMDetails::class),
            new ClassMap('GetSCORMDetailsResponse', Type\GetSCORMDetailsResponse::class),
            new ClassMap('SetSCORMValues', Type\SetSCORMValues::class),
            new ClassMap('SetSCORMValuesResponse', Type\SetSCORMValuesResponse::class),
        ]);
    }
}
