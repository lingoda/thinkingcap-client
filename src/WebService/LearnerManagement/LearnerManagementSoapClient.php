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
     * Returns a list of all the users registered in the API key domain. Deprecated, use GetDomainUsers.
     *
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
     * Returns a list of the users in the optional passed domain or the API key domain if a domain is not passed. Includes or not inactive users. Includes or not the users metadata. Retrieves a specified number of users starting from the specified offset. If a negative or 0 number of users is passed for the take parameter, returns 100 by default. If a negative or 0 offset is passed, returns the first page of users in last name, first name order.
     *
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
     * Registers a new user account and set its metadata. Returns the new user ID (GUID). Parameters: api key, userID (optional GUID, system generated if not provided), user first name (required, 100 characters max), user last name (required, 100 characters max), user title (optional, 100 characters max), user email (required, 100 characters max), user password (optional, 50 characters max), user screen name (optional, 200 characters max), learner language (optional, 10 characters max - example: "en"), user custom metadata (optional, XML string). Format for userCustomMetadata parameter: &lt;field_list&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;...&lt;/field_list&gt;
     *
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
     * Registers a new user account and set its metadata. Returns the new user ID (GUID). Parameters: api key, userID (optional, system generated if not provided), user first name (required, 100 characters max), user last name (required, 100 characters max), user title (optional, 100 characters max), user email (required, 100 characters max), user password (optional, 50 characters max), user screen name (optional, 200 characters max), learner language (optional, 10 characters max - example: "en"), user custom metadata (optional, XML string). Format for userCustomMetadata parameter: &lt;field_list&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;...&lt;/field_list&gt;, +source of bulk users registration (optional, 20 characters max), synch domain (optional, GUID - the domain where the bulk users import settings are found), protect added user from manual change (required, boolean - if True, the user fields mapped in the synch settings will be read only for manual oprations)
     *
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
     * Updates the account information for the user with the passed LMS ID. Any information not passed for the user will be left unchanged. Format for userCustomMetadata parameter: &lt;field_list&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;...&lt;/field_list&gt;
     *
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
     * Updates one or more custom metadata fields values for a user specified by its LMS ID. Parameters: user LMS ID (GUID), fieldsValuesXml - represents the user custom metadata fields values to be updated (XML string). If a metadata node is not found, it is created. Either the field ID or the field name has to be passed. The language assumed for the field names and values is english. Format: &lt;fields&gt;&lt;field id='' name='test'&gt;&lt;values&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;&lt;/values&gt;&lt;/field&gt;&lt;/fields&gt;.
     *
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
     * Updates a user's biography and photo.
     *
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
     * Updates the supervisors list for a student. Parameters: student LMS ID (GUID), supervisors list as a comma separated list of IDs (GUIDs). Pass an empty supervisors list string to remove all supervisors.
     *
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
     * Retrieves the list of users supervised by the passed supervisor specified by its LMS ID. Includes or not inactive users. Includes or not the users metadata. Retrieves a specified number of users starting from the specified offset. If a negative or 0 number of users is passed, returns 100 by default. If a negative or 0 offset is passed, returns the first page of users in last name, first name order.
     *
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
     * Retrieves the list of supervisors for the passed user specified by its LMS ID. Includes or not the supervisor users metadata.
     *
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
     * Returns a user with the specified LMS ID. Includes or not the user metadata.
     *
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
     * Returns a user with the specified email address. Includes or not the user metadata.
     *
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
     * Finds the LMS ID for a user with the specified email address.
     *
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
     * Finds a user with the specified login name (may not be email).
     *
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
     * Finds the LMS ID for a user with the passed login name.
     *
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
     * Returns a list of users with the specified screen name.
     *
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
     * Returns a user with the specified custom user field value.
     *
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
     * Finds the LMS ID for a user with the specified custom user field value.
     *
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
     * Deletes a user account.
     *
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
     * Deletes a user account. Finds the user by LMS ID, email or any login field defined in the API key domain.
     *
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
     * Adds a user to a domain. The user will be enrolled in the domain learning activities set to auto-enroll domain users.
     *
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
     * Adds a user to a domain. If doAutoEnrollment=True, then the user will be enrolled in the domain learning activities set to auto-enroll domain users.
     *
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
     * Sets a user active or not.
     *
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
     * Updates a user active status. Finds the user by the LMS ID, email or any login field defined in the API key domain.
     *
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
     * Returns a student's transcript (all enrollments in learning activities). If a learning activity type is passed, returns the student transcript for the passed learning activity type ('Course', 'Learning Path' or 'Activity') only. All returned times are in UTC.
     *
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
     * Enrolls a student in a learning activity (Course, Learning Path or Activity). If the learning object is shared between domains, the optional enrollmentDomainID parameter specifies the domain required for enrollment. If no domain specified, the user will be enrolled in the original learning object domain. The learner must belong to this domain and satisfy the enrollment requirements. If successful, returns the student record ID. Detailed results are recorded in the ActionLog.
     *
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
     * Enrolls a student in a learning activity (Course, Learning Path or Activity). If the learning object is shared between domains, the optional enrollmentDomainID parameter specifies the domain required for enrollment. If no domain specified, the user will be enrolled in the original learning object domain. The learner must belong to this domain and satisfy the enrollment requirements. If successful, returns the student record ID. Detailed results are recorded in the ActionLog.
     *
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
     * Enrolls a student in a learning activity(Course, Learning Path or Activity) followed by a reservation of spot. If the learning object is shared between domains, the optional enrollmentDomainID parameter specifies the domain required for enrollment. If no domain specified, the user will be enrolled in the original learning object domain. The learner must belong to this domain and satisfy the enrollment requirements. Returns a summary of the enrollment result. Detailed results are recorded in the ActionLog.
     *
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
     * Allows a student to enroll in a learning activity (Course, Learning Path or Activity). If the learning object is shared between domains, the optional enrollmentDomainID parameter specifies the domain required for enrollment. If no domain specified, the user will be enrolled in the original learning object domain. The learner must belong to this domain and satisfy the enrollment requirements. If successful, returns the student record ID. Detailed results are recorded in the ActionLog.
     *
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
     * Withdraws a student from a learning activity. If successful, returns the withdrawn record enrollment domain ID
     *
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
     * Marks a student's attendance in an IL course session. <br/>Enrolls the student in the course if not already enrolled and sets the attendance, score and comments in the ILT session to the passed values. <br/>If no score is to be set, a negative value should be passed. <br/>The allowed values for the attendanceValue are "attended", "not attended" or the ID of a withdrawal reason available in the domain.
     *
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
     * Returns the details of a Learning Path in which a student is enrolled, including metadata.
     *
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
     * Returns the details of a student learning activity record passed by its LMS ID.
     *
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
     * Returns the details of a student learning activity record passed by its LMS ID in a simplified object.
     *
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
     * Returns the student record information for all enrollments of the passed student in the learning activity passed.
     *
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
     * Returns the student record information for all student enrollments. If a learning activity type filter is passed ("course","learning path","activity"), the records are filtered by the passed type.
     *
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
     * Sets the details of a student learning activity record. Status valid values are ['Completed','Active'] The date completed is optional; if passed, the date completed should be in the format 'yyyy/MM/dd HH:mm:ss' and in UTC timezone. The last module name, percent completed, score and credits are optional. The time spent by the learner in the learning activity is optional; if passed, it should be in seconds.
     *
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
     * Generate an expiring seed string that can be appended to a request. Returns the timed seed as string.
     *
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
     * Validates an expiring seed string appended to a request. Returns true if seed is valid.
     *
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
     * Merges two accounts student records. All records will be transfered to studentToRemainID, then studentToGoID will be set inactive and optional pending. The accounts information is not merged. The studentToGoID account is set inactive and pending if the parameter is set so. The email and login fields for the merged account are modified so the original values can be reused.
     *
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
     * Returns a list of courses a learner can enroll in. If a student ID is passed, returns only the courses that student can enroll in. If not, returns courses any student can enroll in. If a domain ID is passed, returns only the courses available for enrollment in that domain for the student or for any students.
     *
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
     * Gets a report of a learner or all learners completion status for a course or all courses in the passed domain or in all domains. <br/>If a learning activity code is passed, users completion status for that course only will be returned. <br/>If a learning activity code is not passed but a learning activity type is passed, completions for all learning activities of the passed type will be returned. <br/>The valid learning activity codes are: 'course','learning path','auth_self','auth_self_doc','auth_approver','watch_understand','read_understand'. <br/>If a learner LMS ID is passed, the completion status for only that learner will be returned. <br/>If a date range is passed in format MM/dd/yyyy, return is limited to status changes in that date range. <br/>If the course is an ILT the last date attendance was taken for a session in that course can be used instead of the completion date.
     *
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
     * Returns an XML string containing courses/learning paths/both available for self enroll in the system or for a domain based on the user custom metadata (XML string) provided. Format for userCustomMetadata parameter: &lt;field_list&gt;&lt;field id='..'&gt;&lt;values&gt;&lt;value&gt;..&lt;/value&gt;&lt;value&gt;..&lt;/value&gt;..&lt;/values&gt;&lt;/field&gt;...&lt;/field_list&gt;<br />CustomFieldIDs (Optional), the IDs (separated by comma) of the Custom Field that are required in the result.
     *
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
     * Returns an XML string containing courses/learning paths/both available for self enroll in the system or for a domain based on the user custom metadata (XML string) provided. Format for userCustomMetadata parameter: &lt;field_list&gt;&lt;field id='..'&gt;&lt;values&gt;&lt;value&gt;..&lt;/value&gt;&lt;value&gt;..&lt;/value&gt;..&lt;/values&gt;&lt;/field&gt;...&lt;/field_list&gt;
     *
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
     * Returns URL used to log in a user in LMS. No password expected for federated authentication. If domain not passed, the domain will be retrieved from the service URL. If this is not possible, root domain is used. The user belonging to the domain is validated. If a return URL is passed, the user will be redirected there after login.
     *
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
     * Returns a URL to log in a user found by username in LMS. If domainID is null or empty, sign in user in root domain using the root domain authentication provider; if not, verify user against the user set authentication provider for the passed domain.
     *
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
     * Returns the Active Directory synchronization settings for a client and domain. To be replaced by the more generic method GetUsersSynchSettings.
     *
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
     * Test POST-ing to web service
     *
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
     * Gets the SCORM details of a Course in which a student is enrolled.
     *
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
     * Sets SCORM values for a course and student. Parameters: userLogin,userPassword,courseID (GUID),scormObjectJson (varchar, json format).
     *
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
     * Sets the details of a student learning activity record. Status valid values are ['Completed','Active'] The date completed is optional; if passed, the date completed should be in the format 'yyyy/MM/dd HH:mm:ss' and in UTC timezone. The last module name, percent completed, score and credits are optional. The time spent by the learner in the learning activity is optional; if passed, it should be in seconds.
     *
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
