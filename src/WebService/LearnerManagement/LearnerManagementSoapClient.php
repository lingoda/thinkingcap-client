<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LearnerManagementSoapClient
{
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\GetAllUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetAllUsersResponse
     */
    public function getAllUsers(Type\GetAllUsers $parameters): Type\GetAllUsersResponse
    {
        $response = ($this->caller)('GetAllUsers', $parameters);

        \Psl\Type\instance_of(Type\GetAllUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDomainUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetDomainUsersResponse
     */
    public function getDomainUsers(Type\GetDomainUsers $parameters): Type\GetDomainUsersResponse
    {
        $response = ($this->caller)('GetDomainUsers', $parameters);

        \Psl\Type\instance_of(Type\GetDomainUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\RegisterUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\RegisterUserResponse
     */
    public function registerUser(Type\RegisterUser $parameters): Type\RegisterUserResponse
    {
        $response = ($this->caller)('RegisterUser', $parameters);

        \Psl\Type\instance_of(Type\RegisterUserResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\RegisterBulkUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\RegisterBulkUserResponse
     */
    public function registerBulkUser(Type\RegisterBulkUser $parameters): Type\RegisterBulkUserResponse
    {
        $response = ($this->caller)('RegisterBulkUser', $parameters);

        \Psl\Type\instance_of(Type\RegisterBulkUserResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateUserResponse
     */
    public function updateUser(Type\UpdateUser $parameters): Type\UpdateUserResponse
    {
        $response = ($this->caller)('UpdateUser', $parameters);

        \Psl\Type\instance_of(Type\UpdateUserResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUserMetadataValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateUserMetadataValuesResponse
     */
    public function updateUserMetadataValues(Type\UpdateUserMetadataValues $parameters): Type\UpdateUserMetadataValuesResponse
    {
        $response = ($this->caller)('UpdateUserMetadataValues', $parameters);

        \Psl\Type\instance_of(Type\UpdateUserMetadataValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUserProfile $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateUserProfileResponse
     */
    public function updateUserProfile(Type\UpdateUserProfile $parameters): Type\UpdateUserProfileResponse
    {
        $response = ($this->caller)('UpdateUserProfile', $parameters);

        \Psl\Type\instance_of(Type\UpdateUserProfileResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateStudentSupervisors $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateStudentSupervisorsResponse
     */
    public function updateStudentSupervisors(Type\UpdateStudentSupervisors $parameters): Type\UpdateStudentSupervisorsResponse
    {
        $response = ($this->caller)('UpdateStudentSupervisors', $parameters);

        \Psl\Type\instance_of(Type\UpdateStudentSupervisorsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSupervisorUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetSupervisorUsersResponse
     */
    public function getSupervisorUsers(Type\GetSupervisorUsers $parameters): Type\GetSupervisorUsersResponse
    {
        $response = ($this->caller)('GetSupervisorUsers', $parameters);

        \Psl\Type\instance_of(Type\GetSupervisorUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserSupervisors $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUserSupervisorsResponse
     */
    public function getUserSupervisors(Type\GetUserSupervisors $parameters): Type\GetUserSupervisorsResponse
    {
        $response = ($this->caller)('GetUserSupervisors', $parameters);

        \Psl\Type\instance_of(Type\GetUserSupervisorsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUserByIDResponse
     */
    public function getUserByID(Type\GetUserByID $parameters): Type\GetUserByIDResponse
    {
        $response = ($this->caller)('GetUserByID', $parameters);

        \Psl\Type\instance_of(Type\GetUserByIDResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByEmail $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUserByEmailResponse
     */
    public function getUserByEmail(Type\GetUserByEmail $parameters): Type\GetUserByEmailResponse
    {
        $response = ($this->caller)('GetUserByEmail', $parameters);

        \Psl\Type\instance_of(Type\GetUserByEmailResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByEmail $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\FindUserIDByEmailResponse
     */
    public function findUserIDByEmail(Type\FindUserIDByEmail $parameters): Type\FindUserIDByEmailResponse
    {
        $response = ($this->caller)('FindUserIDByEmail', $parameters);

        \Psl\Type\instance_of(Type\FindUserIDByEmailResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByUserName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUserByUserNameResponse
     */
    public function getUserByUserName(Type\GetUserByUserName $parameters): Type\GetUserByUserNameResponse
    {
        $response = ($this->caller)('GetUserByUserName', $parameters);

        \Psl\Type\instance_of(Type\GetUserByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByUserName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\FindUserIDByUserNameResponse
     */
    public function findUserIDByUserName(Type\FindUserIDByUserName $parameters): Type\FindUserIDByUserNameResponse
    {
        $response = ($this->caller)('FindUserIDByUserName', $parameters);

        \Psl\Type\instance_of(Type\FindUserIDByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUsersByScreenName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUsersByScreenNameResponse
     */
    public function getUsersByScreenName(Type\GetUsersByScreenName $parameters): Type\GetUsersByScreenNameResponse
    {
        $response = ($this->caller)('GetUsersByScreenName', $parameters);

        \Psl\Type\instance_of(Type\GetUsersByScreenNameResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUsersByCustomField $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetUsersByCustomFieldResponse
     */
    public function getUsersByCustomField(Type\GetUsersByCustomField $parameters): Type\GetUsersByCustomFieldResponse
    {
        $response = ($this->caller)('GetUsersByCustomField', $parameters);

        \Psl\Type\instance_of(Type\GetUsersByCustomFieldResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByCustomField $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\FindUserIDByCustomFieldResponse
     */
    public function findUserIDByCustomField(Type\FindUserIDByCustomField $parameters): Type\FindUserIDByCustomFieldResponse
    {
        $response = ($this->caller)('FindUserIDByCustomField', $parameters);

        \Psl\Type\instance_of(Type\FindUserIDByCustomFieldResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\DeleteUserResponse
     */
    public function deleteUser(Type\DeleteUser $parameters): Type\DeleteUserResponse
    {
        $response = ($this->caller)('DeleteUser', $parameters);

        \Psl\Type\instance_of(Type\DeleteUserResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteUserByLookup $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\DeleteUserByLookupResponse
     */
    public function deleteUserByLookup(Type\DeleteUserByLookup $parameters): Type\DeleteUserByLookupResponse
    {
        $response = ($this->caller)('DeleteUserByLookup', $parameters);

        \Psl\Type\instance_of(Type\DeleteUserByLookupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddUserToDomain $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\AddUserToDomainResponse
     */
    public function addUserToDomain(Type\AddUserToDomain $parameters): Type\AddUserToDomainResponse
    {
        $response = ($this->caller)('AddUserToDomain', $parameters);

        \Psl\Type\instance_of(Type\AddUserToDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddUserToDomainWithEnrollments $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\AddUserToDomainWithEnrollmentsResponse
     */
    public function addUserToDomainWithEnrollments(Type\AddUserToDomainWithEnrollments $parameters): Type\AddUserToDomainWithEnrollmentsResponse
    {
        $response = ($this->caller)('AddUserToDomainWithEnrollments', $parameters);

        \Psl\Type\instance_of(Type\AddUserToDomainWithEnrollmentsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetUserActive $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetUserActiveResponse
     */
    public function setUserActive(Type\SetUserActive $parameters): Type\SetUserActiveResponse
    {
        $response = ($this->caller)('SetUserActive', $parameters);

        \Psl\Type\instance_of(Type\SetUserActiveResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetUserActiveByLookup $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetUserActiveByLookupResponse
     */
    public function setUserActiveByLookup(Type\SetUserActiveByLookup $parameters): Type\SetUserActiveByLookupResponse
    {
        $response = ($this->caller)('SetUserActiveByLookup', $parameters);

        \Psl\Type\instance_of(Type\SetUserActiveByLookupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentTranscript $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetStudentTranscriptResponse
     */
    public function getStudentTranscript(Type\GetStudentTranscript $parameters): Type\GetStudentTranscriptResponse
    {
        $response = ($this->caller)('GetStudentTranscript', $parameters);

        \Psl\Type\instance_of(Type\GetStudentTranscriptResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudentWithDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\EnrollStudentWithDetailsResponse
     */
    public function enrollStudentWithDetails(Type\EnrollStudentWithDetails $parameters): Type\EnrollStudentWithDetailsResponse
    {
        $response = ($this->caller)('EnrollStudentWithDetails', $parameters);

        \Psl\Type\instance_of(Type\EnrollStudentWithDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudent $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\EnrollStudentResponse
     */
    public function enrollStudent(Type\EnrollStudent $parameters): Type\EnrollStudentResponse
    {
        $response = ($this->caller)('EnrollStudent', $parameters);

        \Psl\Type\instance_of(Type\EnrollStudentResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudentReservation $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\EnrollStudentReservationResponse
     */
    public function enrollStudentReservation(Type\EnrollStudentReservation $parameters): Type\EnrollStudentReservationResponse
    {
        $response = ($this->caller)('EnrollStudentReservation', $parameters);

        \Psl\Type\instance_of(Type\EnrollStudentReservationResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\StudentSelfEnroll $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\StudentSelfEnrollResponse
     */
    public function studentSelfEnroll(Type\StudentSelfEnroll $parameters): Type\StudentSelfEnrollResponse
    {
        $response = ($this->caller)('StudentSelfEnroll', $parameters);

        \Psl\Type\instance_of(Type\StudentSelfEnrollResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\WithdrawStudent $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\WithdrawStudentResponse
     */
    public function withdrawStudent(Type\WithdrawStudent $parameters): Type\WithdrawStudentResponse
    {
        $response = ($this->caller)('WithdrawStudent', $parameters);

        \Psl\Type\instance_of(Type\WithdrawStudentResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\MarkStudentSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\MarkStudentSessionResponse
     */
    public function markStudentSession(Type\MarkStudentSession $parameters): Type\MarkStudentSessionResponse
    {
        $response = ($this->caller)('MarkStudentSession', $parameters);

        \Psl\Type\instance_of(Type\MarkStudentSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLPDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetStudentLPDetailsResponse
     */
    public function getStudentLPDetails(Type\GetStudentLPDetails $parameters): Type\GetStudentLPDetailsResponse
    {
        $response = ($this->caller)('GetStudentLPDetails', $parameters);

        \Psl\Type\instance_of(Type\GetStudentLPDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetRecordDetailsResponse
     */
    public function getRecordDetails(Type\GetRecordDetails $parameters): Type\GetRecordDetailsResponse
    {
        $response = ($this->caller)('GetRecordDetails', $parameters);

        \Psl\Type\instance_of(Type\GetRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLearningActivityRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetStudentLearningActivityRecordDetailsResponse
     */
    public function getStudentLearningActivityRecordDetails(Type\GetStudentLearningActivityRecordDetails $parameters): Type\GetStudentLearningActivityRecordDetailsResponse
    {
        $response = ($this->caller)('GetStudentLearningActivityRecordDetails', $parameters);

        \Psl\Type\instance_of(Type\GetStudentLearningActivityRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLearningActivityRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetStudentLearningActivityRecordsResponse
     */
    public function getStudentLearningActivityRecords(Type\GetStudentLearningActivityRecords $parameters): Type\GetStudentLearningActivityRecordsResponse
    {
        $response = ($this->caller)('GetStudentLearningActivityRecords', $parameters);

        \Psl\Type\instance_of(Type\GetStudentLearningActivityRecordsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAllStudentLearningActivityRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetAllStudentLearningActivityRecordsResponse
     */
    public function getAllStudentLearningActivityRecords(Type\GetAllStudentLearningActivityRecords $parameters): Type\GetAllStudentLearningActivityRecordsResponse
    {
        $response = ($this->caller)('GetAllStudentLearningActivityRecords', $parameters);

        \Psl\Type\instance_of(Type\GetAllStudentLearningActivityRecordsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetRecordDetailsResponse
     */
    public function setRecordDetails(Type\SetRecordDetails $parameters): Type\SetRecordDetailsResponse
    {
        $response = ($this->caller)('SetRecordDetails', $parameters);

        \Psl\Type\instance_of(Type\SetRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GenerateTimedSeed $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GenerateTimedSeedResponse
     */
    public function generateTimedSeed(Type\GenerateTimedSeed $parameters): Type\GenerateTimedSeedResponse
    {
        $response = ($this->caller)('GenerateTimedSeed', $parameters);

        \Psl\Type\instance_of(Type\GenerateTimedSeedResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ValidateTimedSeed $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\ValidateTimedSeedResponse
     */
    public function validateTimedSeed(Type\ValidateTimedSeed $parameters): Type\ValidateTimedSeedResponse
    {
        $response = ($this->caller)('ValidateTimedSeed', $parameters);

        \Psl\Type\instance_of(Type\ValidateTimedSeedResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\MergeStudentTranscripts $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\MergeStudentTranscriptsResponse
     */
    public function mergeStudentTranscripts(Type\MergeStudentTranscripts $parameters): Type\MergeStudentTranscriptsResponse
    {
        $response = ($this->caller)('MergeStudentTranscripts', $parameters);

        \Psl\Type\instance_of(Type\MergeStudentTranscriptsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentAvailableCourses $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetStudentAvailableCoursesResponse
     */
    public function getStudentAvailableCourses(Type\GetStudentAvailableCourses $parameters): Type\GetStudentAvailableCoursesResponse
    {
        $response = ($this->caller)('GetStudentAvailableCourses', $parameters);

        \Psl\Type\instance_of(Type\GetStudentAvailableCoursesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseCompletionStatusByDateRange $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseCompletionStatusByDateRangeResponse
     */
    public function getCourseCompletionStatusByDateRange(Type\GetCourseCompletionStatusByDateRange $parameters): Type\GetCourseCompletionStatusByDateRangeResponse
    {
        $response = ($this->caller)('GetCourseCompletionStatusByDateRange', $parameters);

        \Psl\Type\instance_of(Type\GetCourseCompletionStatusByDateRangeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityListEnrollments $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityListEnrollmentsResponse
     */
    public function getLearningActivityListEnrollments(Type\GetLearningActivityListEnrollments $parameters): Type\GetLearningActivityListEnrollmentsResponse
    {
        $response = ($this->caller)('getLearningActivityListEnrollments', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityListEnrollmentsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityListEnrollmentsTruncated $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityListEnrollmentsTruncatedResponse
     */
    public function getLearningActivityListEnrollmentsTruncated(Type\GetLearningActivityListEnrollmentsTruncated $parameters): Type\GetLearningActivityListEnrollmentsTruncatedResponse
    {
        $response = ($this->caller)('getLearningActivityListEnrollmentsTruncated', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityListEnrollmentsTruncatedResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLMSUserAutoLoginURL $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLMSUserAutoLoginURLResponse
     */
    public function getLMSUserAutoLoginURL(Type\GetLMSUserAutoLoginURL $parameters): Type\GetLMSUserAutoLoginURLResponse
    {
        $response = ($this->caller)('GetLMSUserAutoLoginURL', $parameters);

        \Psl\Type\instance_of(Type\GetLMSUserAutoLoginURLResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLMSUserAutoLoginURLByUsername $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLMSUserAutoLoginURLByUsernameResponse
     */
    public function getLMSUserAutoLoginURLByUsername(Type\GetLMSUserAutoLoginURLByUsername $parameters): Type\GetLMSUserAutoLoginURLByUsernameResponse
    {
        $response = ($this->caller)('GetLMSUserAutoLoginURLByUsername', $parameters);

        \Psl\Type\instance_of(Type\GetLMSUserAutoLoginURLByUsernameResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetActiveDirectorySynchSettings $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetActiveDirectorySynchSettingsResponse
     */
    public function getActiveDirectorySynchSettings(Type\GetActiveDirectorySynchSettings $parameters): Type\GetActiveDirectorySynchSettingsResponse
    {
        $response = ($this->caller)('GetActiveDirectorySynchSettings', $parameters);

        \Psl\Type\instance_of(Type\GetActiveDirectorySynchSettingsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TestPost $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\TestPostResponse
     */
    public function testPost(Type\TestPost $parameters): Type\TestPostResponse
    {
        $response = ($this->caller)('TestPost', $parameters);

        \Psl\Type\instance_of(Type\TestPostResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSCORMDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetSCORMDetailsResponse
     */
    public function getSCORMDetails(Type\GetSCORMDetails $parameters): Type\GetSCORMDetailsResponse
    {
        $response = ($this->caller)('GetSCORMDetails', $parameters);

        \Psl\Type\instance_of(Type\GetSCORMDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetSCORMValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetSCORMValuesResponse
     */
    public function setSCORMValues(Type\SetSCORMValues $parameters): Type\SetSCORMValuesResponse
    {
        $response = ($this->caller)('SetSCORMValues', $parameters);

        \Psl\Type\instance_of(Type\SetSCORMValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetFeedbackCompleted $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetFeedbackCompletedResponse
     */
    public function setFeedbackCompleted(Type\SetFeedbackCompleted $parameters): Type\SetFeedbackCompletedResponse
    {
        $response = ($this->caller)('SetFeedbackCompleted', $parameters);

        \Psl\Type\instance_of(Type\SetFeedbackCompletedResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
