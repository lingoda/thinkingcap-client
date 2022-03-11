<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LearnerManagementSoapClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\GetAllUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetAllUsersResponse
     */
    public function getAllUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllUsersResponse
    {
        return $this->call('GetAllUsers', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDomainUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetDomainUsersResponse
     */
    public function getDomainUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetDomainUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetDomainUsersResponse
    {
        return $this->call('GetDomainUsers', $parameters);
    }

    /**
     * @param RequestInterface|Type\RegisterUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\RegisterUserResponse
     */
    public function registerUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterUserResponse
    {
        return $this->call('RegisterUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateUserResponse
     */
    public function updateUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserResponse
    {
        return $this->call('UpdateUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateUserMetadataValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateUserMetadataValuesResponse
     */
    public function updateUserMetadataValues(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserMetadataValues $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserMetadataValuesResponse
    {
        return $this->call('UpdateUserMetadataValues', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateUserProfile $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateUserProfileResponse
     */
    public function updateUserProfile(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserProfile $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserProfileResponse
    {
        return $this->call('UpdateUserProfile', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateStudentSupervisors $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateStudentSupervisorsResponse
     */
    public function updateStudentSupervisors(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateStudentSupervisors $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateStudentSupervisorsResponse
    {
        return $this->call('UpdateStudentSupervisors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetSupervisorUsers $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetSupervisorUsersResponse
     */
    public function getSupervisorUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSupervisorUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSupervisorUsersResponse
    {
        return $this->call('GetSupervisorUsers', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUserByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetUserByIDResponse
     */
    public function getUserByID(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByID $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByIDResponse
    {
        return $this->call('GetUserByID', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUserByEmail $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetUserByEmailResponse
     */
    public function getUserByEmail(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmailResponse
    {
        return $this->call('GetUserByEmail', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindUserIDByEmail $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\FindUserIDByEmailResponse
     */
    public function findUserIDByEmail(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByEmail $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByEmailResponse
    {
        return $this->call('FindUserIDByEmail', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUserByUserName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetUserByUserNameResponse
     */
    public function getUserByUserName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByUserName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByUserNameResponse
    {
        return $this->call('GetUserByUserName', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindUserIDByUserName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\FindUserIDByUserNameResponse
     */
    public function findUserIDByUserName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByUserName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByUserNameResponse
    {
        return $this->call('FindUserIDByUserName', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUsersByScreenName $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetUsersByScreenNameResponse
     */
    public function getUsersByScreenName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByScreenName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByScreenNameResponse
    {
        return $this->call('GetUsersByScreenName', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetUsersByCustomField $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetUsersByCustomFieldResponse
     */
    public function getUsersByCustomField(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByCustomField $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByCustomFieldResponse
    {
        return $this->call('GetUsersByCustomField', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindUserIDByCustomField $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\FindUserIDByCustomFieldResponse
     */
    public function findUserIDByCustomField(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByCustomField $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByCustomFieldResponse
    {
        return $this->call('FindUserIDByCustomField', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeleteUser $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\DeleteUserResponse
     */
    public function deleteUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserResponse
    {
        return $this->call('DeleteUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddUserToDomain $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\AddUserToDomainResponse
     */
    public function addUserToDomain(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomain $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainResponse
    {
        return $this->call('AddUserToDomain', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddUserToDomainWithEnrollments $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\AddUserToDomainWithEnrollmentsResponse
     */
    public function addUserToDomainWithEnrollments(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainWithEnrollments $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainWithEnrollmentsResponse
    {
        return $this->call('AddUserToDomainWithEnrollments', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetUserActive $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\SetUserActiveResponse
     */
    public function setUserActive(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActive $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveResponse
    {
        return $this->call('SetUserActive', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStudentTranscript $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetStudentTranscriptResponse
     */
    public function getStudentTranscript(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentTranscript $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentTranscriptResponse
    {
        return $this->call('GetStudentTranscript', $parameters);
    }

    /**
     * @param RequestInterface|Type\EnrollStudentWithDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\EnrollStudentWithDetailsResponse
     */
    public function enrollStudentWithDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentWithDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentWithDetailsResponse
    {
        return $this->call('EnrollStudentWithDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\EnrollStudent $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\EnrollStudentResponse
     */
    public function enrollStudent(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudent $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentResponse
    {
        return $this->call('EnrollStudent', $parameters);
    }

    /**
     * @param RequestInterface|Type\EnrollStudentReservation $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\EnrollStudentReservationResponse
     */
    public function enrollStudentReservation(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentReservation $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentReservationResponse
    {
        return $this->call('EnrollStudentReservation', $parameters);
    }

    /**
     * @param RequestInterface|Type\StudentSelfEnroll $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\StudentSelfEnrollResponse
     */
    public function studentSelfEnroll(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentSelfEnroll $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentSelfEnrollResponse
    {
        return $this->call('StudentSelfEnroll', $parameters);
    }

    /**
     * @param RequestInterface|Type\MarkStudentSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\MarkStudentSessionResponse
     */
    public function markStudentSession(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MarkStudentSession $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MarkStudentSessionResponse
    {
        return $this->call('MarkStudentSession', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStudentLPDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetStudentLPDetailsResponse
     */
    public function getStudentLPDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLPDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLPDetailsResponse
    {
        return $this->call('GetStudentLPDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetRecordDetailsResponse
     */
    public function getRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetRecordDetailsResponse
    {
        return $this->call('GetRecordDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStudentLearningActivityRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetStudentLearningActivityRecordDetailsResponse
     */
    public function getStudentLearningActivityRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordDetailsResponse
    {
        return $this->call('GetStudentLearningActivityRecordDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStudentLearningActivityRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetStudentLearningActivityRecordsResponse
     */
    public function getStudentLearningActivityRecords(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecords $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordsResponse
    {
        return $this->call('GetStudentLearningActivityRecords', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAllStudentLearningActivityRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetAllStudentLearningActivityRecordsResponse
     */
    public function getAllStudentLearningActivityRecords(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllStudentLearningActivityRecords $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllStudentLearningActivityRecordsResponse
    {
        return $this->call('GetAllStudentLearningActivityRecords', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetRecordDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\SetRecordDetailsResponse
     */
    public function setRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetRecordDetailsResponse
    {
        return $this->call('SetRecordDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GenerateTimedSeed $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GenerateTimedSeedResponse
     */
    public function generateTimedSeed(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GenerateTimedSeed $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GenerateTimedSeedResponse
    {
        return $this->call('GenerateTimedSeed', $parameters);
    }

    /**
     * @param RequestInterface|Type\ValidateTimedSeed $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\ValidateTimedSeedResponse
     */
    public function validateTimedSeed(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ValidateTimedSeed $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ValidateTimedSeedResponse
    {
        return $this->call('ValidateTimedSeed', $parameters);
    }

    /**
     * @param RequestInterface|Type\MergeStudentTranscripts $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\MergeStudentTranscriptsResponse
     */
    public function mergeStudentTranscripts(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MergeStudentTranscripts $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MergeStudentTranscriptsResponse
    {
        return $this->call('MergeStudentTranscripts', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStudentAvailableCourses $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetStudentAvailableCoursesResponse
     */
    public function getStudentAvailableCourses(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentAvailableCourses $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentAvailableCoursesResponse
    {
        return $this->call('GetStudentAvailableCourses', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseCompletionStatusByDateRange $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseCompletionStatusByDateRangeResponse
     */
    public function getCourseCompletionStatusByDateRange(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCourseCompletionStatusByDateRange $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCourseCompletionStatusByDateRangeResponse
    {
        return $this->call('GetCourseCompletionStatusByDateRange', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityListEnrollments $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityListEnrollmentsResponse
     */
    public function getLearningActivityListEnrollments(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollments $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsResponse
    {
        return $this->call('getLearningActivityListEnrollments', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityListEnrollmentsTruncated $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityListEnrollmentsTruncatedResponse
     */
    public function getLearningActivityListEnrollmentsTruncated(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsTruncated $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsTruncatedResponse
    {
        return $this->call('getLearningActivityListEnrollmentsTruncated', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLMSUserAutoLoginURL $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLMSUserAutoLoginURLResponse
     */
    public function getLMSUserAutoLoginURL(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURL $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLResponse
    {
        return $this->call('GetLMSUserAutoLoginURL', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLMSUserAutoLoginURLByUsername $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLMSUserAutoLoginURLByUsernameResponse
     */
    public function getLMSUserAutoLoginURLByUsername(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLByUsername $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLByUsernameResponse
    {
        return $this->call('GetLMSUserAutoLoginURLByUsername', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetActiveDirectorySynchSettings $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetActiveDirectorySynchSettingsResponse
     */
    public function getActiveDirectorySynchSettings(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetActiveDirectorySynchSettings $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetActiveDirectorySynchSettingsResponse
    {
        return $this->call('GetActiveDirectorySynchSettings', $parameters);
    }

    /**
     * @param RequestInterface|Type\TestPost $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\TestPostResponse
     */
    public function testPost(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TestPost $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TestPostResponse
    {
        return $this->call('TestPost', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetSCORMDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetSCORMDetailsResponse
     */
    public function getSCORMDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSCORMDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSCORMDetailsResponse
    {
        return $this->call('GetSCORMDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetSCORMValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\SetSCORMValuesResponse
     */
    public function setSCORMValues(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetSCORMValues $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetSCORMValuesResponse
    {
        return $this->call('SetSCORMValues', $parameters);
    }
}
