<?php

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement;

use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class LearnerManagementSoapClient
{
    private \Phpro\SoapClient\Caller\Caller $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\GetAllUsers $parameters
     * @return ResultInterface & Type\GetAllUsersResponse
     * @throws SoapException
     */
    public function getAllUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllUsersResponse
    {
        $response = ($this->caller)('GetAllUsers', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDomainUsers $parameters
     * @return ResultInterface & Type\GetDomainUsersResponse
     * @throws SoapException
     */
    public function getDomainUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetDomainUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetDomainUsersResponse
    {
        $response = ($this->caller)('GetDomainUsers', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetDomainUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\RegisterUser $parameters
     * @return ResultInterface & Type\RegisterUserResponse
     * @throws SoapException
     */
    public function registerUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterUserResponse
    {
        $response = ($this->caller)('RegisterUser', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\RegisterBulkUser $parameters
     * @return ResultInterface & Type\RegisterBulkUserResponse
     * @throws SoapException
     */
    public function registerBulkUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterBulkUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterBulkUserResponse
    {
        $response = ($this->caller)('RegisterBulkUser', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\RegisterBulkUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUser $parameters
     * @return ResultInterface & Type\UpdateUserResponse
     * @throws SoapException
     */
    public function updateUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserResponse
    {
        $response = ($this->caller)('UpdateUser', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUserMetadataValues $parameters
     * @return ResultInterface & Type\UpdateUserMetadataValuesResponse
     * @throws SoapException
     */
    public function updateUserMetadataValues(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserMetadataValues $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserMetadataValuesResponse
    {
        $response = ($this->caller)('UpdateUserMetadataValues', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserMetadataValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateUserProfile $parameters
     * @return ResultInterface & Type\UpdateUserProfileResponse
     * @throws SoapException
     */
    public function updateUserProfile(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserProfile $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserProfileResponse
    {
        $response = ($this->caller)('UpdateUserProfile', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateUserProfileResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateStudentSupervisors $parameters
     * @return ResultInterface & Type\UpdateStudentSupervisorsResponse
     * @throws SoapException
     */
    public function updateStudentSupervisors(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateStudentSupervisors $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateStudentSupervisorsResponse
    {
        $response = ($this->caller)('UpdateStudentSupervisors', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\UpdateStudentSupervisorsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSupervisorUsers $parameters
     * @return ResultInterface & Type\GetSupervisorUsersResponse
     * @throws SoapException
     */
    public function getSupervisorUsers(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSupervisorUsers $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSupervisorUsersResponse
    {
        $response = ($this->caller)('GetSupervisorUsers', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSupervisorUsersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserSupervisors $parameters
     * @return ResultInterface & Type\GetUserSupervisorsResponse
     * @throws SoapException
     */
    public function getUserSupervisors(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserSupervisors $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserSupervisorsResponse
    {
        $response = ($this->caller)('GetUserSupervisors', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserSupervisorsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByID $parameters
     * @return ResultInterface & Type\GetUserByIDResponse
     * @throws SoapException
     */
    public function getUserByID(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByID $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByIDResponse
    {
        $response = ($this->caller)('GetUserByID', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByEmail $parameters
     * @return ResultInterface & Type\GetUserByEmailResponse
     * @throws SoapException
     */
    public function getUserByEmail(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmailResponse
    {
        $response = ($this->caller)('GetUserByEmail', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmailResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByEmail $parameters
     * @return ResultInterface & Type\FindUserIDByEmailResponse
     * @throws SoapException
     */
    public function findUserIDByEmail(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByEmail $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByEmailResponse
    {
        $response = ($this->caller)('FindUserIDByEmail', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByEmailResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserByUserName $parameters
     * @return ResultInterface & Type\GetUserByUserNameResponse
     * @throws SoapException
     */
    public function getUserByUserName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByUserName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByUserNameResponse
    {
        $response = ($this->caller)('GetUserByUserName', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByUserName $parameters
     * @return ResultInterface & Type\FindUserIDByUserNameResponse
     * @throws SoapException
     */
    public function findUserIDByUserName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByUserName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByUserNameResponse
    {
        $response = ($this->caller)('FindUserIDByUserName', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUsersByScreenName $parameters
     * @return ResultInterface & Type\GetUsersByScreenNameResponse
     * @throws SoapException
     */
    public function getUsersByScreenName(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByScreenName $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByScreenNameResponse
    {
        $response = ($this->caller)('GetUsersByScreenName', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByScreenNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUsersByCustomField $parameters
     * @return ResultInterface & Type\GetUsersByCustomFieldResponse
     * @throws SoapException
     */
    public function getUsersByCustomField(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByCustomField $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByCustomFieldResponse
    {
        $response = ($this->caller)('GetUsersByCustomField', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUsersByCustomFieldResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FindUserIDByCustomField $parameters
     * @return ResultInterface & Type\FindUserIDByCustomFieldResponse
     * @throws SoapException
     */
    public function findUserIDByCustomField(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByCustomField $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByCustomFieldResponse
    {
        $response = ($this->caller)('FindUserIDByCustomField', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\FindUserIDByCustomFieldResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteUser $parameters
     * @return ResultInterface & Type\DeleteUserResponse
     * @throws SoapException
     */
    public function deleteUser(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUser $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserResponse
    {
        $response = ($this->caller)('DeleteUser', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteUserByLookup $parameters
     * @return ResultInterface & Type\DeleteUserByLookupResponse
     * @throws SoapException
     */
    public function deleteUserByLookup(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserByLookup $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserByLookupResponse
    {
        $response = ($this->caller)('DeleteUserByLookup', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\DeleteUserByLookupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddUserToDomain $parameters
     * @return ResultInterface & Type\AddUserToDomainResponse
     * @throws SoapException
     */
    public function addUserToDomain(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomain $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainResponse
    {
        $response = ($this->caller)('AddUserToDomain', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddUserToDomainWithEnrollments $parameters
     * @return ResultInterface & Type\AddUserToDomainWithEnrollmentsResponse
     * @throws SoapException
     */
    public function addUserToDomainWithEnrollments(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainWithEnrollments $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainWithEnrollmentsResponse
    {
        $response = ($this->caller)('AddUserToDomainWithEnrollments', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\AddUserToDomainWithEnrollmentsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetUserActive $parameters
     * @return ResultInterface & Type\SetUserActiveResponse
     * @throws SoapException
     */
    public function setUserActive(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActive $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveResponse
    {
        $response = ($this->caller)('SetUserActive', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetUserActiveByLookup $parameters
     * @return ResultInterface & Type\SetUserActiveByLookupResponse
     * @throws SoapException
     */
    public function setUserActiveByLookup(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveByLookup $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveByLookupResponse
    {
        $response = ($this->caller)('SetUserActiveByLookup', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetUserActiveByLookupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentTranscript $parameters
     * @return ResultInterface & Type\GetStudentTranscriptResponse
     * @throws SoapException
     */
    public function getStudentTranscript(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentTranscript $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentTranscriptResponse
    {
        $response = ($this->caller)('GetStudentTranscript', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentTranscriptResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudentWithDetails $parameters
     * @return ResultInterface & Type\EnrollStudentWithDetailsResponse
     * @throws SoapException
     */
    public function enrollStudentWithDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentWithDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentWithDetailsResponse
    {
        $response = ($this->caller)('EnrollStudentWithDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentWithDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudentQueued $parameters
     * @return ResultInterface & Type\EnrollStudentQueuedResponse
     * @throws SoapException
     */
    public function enrollStudentQueued(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentQueued $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentQueuedResponse
    {
        $response = ($this->caller)('EnrollStudentQueued', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentQueuedResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudent $parameters
     * @return ResultInterface & Type\EnrollStudentResponse
     * @throws SoapException
     */
    public function enrollStudent(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudent $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentResponse
    {
        $response = ($this->caller)('EnrollStudent', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\EnrollStudentReservation $parameters
     * @return ResultInterface & Type\EnrollStudentReservationResponse
     * @throws SoapException
     */
    public function enrollStudentReservation(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentReservation $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentReservationResponse
    {
        $response = ($this->caller)('EnrollStudentReservation', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\EnrollStudentReservationResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\StudentSelfEnroll $parameters
     * @return ResultInterface & Type\StudentSelfEnrollResponse
     * @throws SoapException
     */
    public function studentSelfEnroll(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentSelfEnroll $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentSelfEnrollResponse
    {
        $response = ($this->caller)('StudentSelfEnroll', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\StudentSelfEnrollResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\WithdrawStudent $parameters
     * @return ResultInterface & Type\WithdrawStudentResponse
     * @throws SoapException
     */
    public function withdrawStudent(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\WithdrawStudent $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\WithdrawStudentResponse
    {
        $response = ($this->caller)('WithdrawStudent', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\WithdrawStudentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\MarkStudentSession $parameters
     * @return ResultInterface & Type\MarkStudentSessionResponse
     * @throws SoapException
     */
    public function markStudentSession(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MarkStudentSession $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MarkStudentSessionResponse
    {
        $response = ($this->caller)('MarkStudentSession', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MarkStudentSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLPDetails $parameters
     * @return ResultInterface & Type\GetStudentLPDetailsResponse
     * @throws SoapException
     */
    public function getStudentLPDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLPDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLPDetailsResponse
    {
        $response = ($this->caller)('GetStudentLPDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLPDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetRecordDetails $parameters
     * @return ResultInterface & Type\GetRecordDetailsResponse
     * @throws SoapException
     */
    public function getRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetRecordDetailsResponse
    {
        $response = ($this->caller)('GetRecordDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLearningActivityRecordDetails $parameters
     * @return ResultInterface & Type\GetStudentLearningActivityRecordDetailsResponse
     * @throws SoapException
     */
    public function getStudentLearningActivityRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordDetailsResponse
    {
        $response = ($this->caller)('GetStudentLearningActivityRecordDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentLearningActivityRecords $parameters
     * @return ResultInterface & Type\GetStudentLearningActivityRecordsResponse
     * @throws SoapException
     */
    public function getStudentLearningActivityRecords(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecords $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordsResponse
    {
        $response = ($this->caller)('GetStudentLearningActivityRecords', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentLearningActivityRecordsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAllStudentLearningActivityRecords $parameters
     * @return ResultInterface & Type\GetAllStudentLearningActivityRecordsResponse
     * @throws SoapException
     */
    public function getAllStudentLearningActivityRecords(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllStudentLearningActivityRecords $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllStudentLearningActivityRecordsResponse
    {
        $response = ($this->caller)('GetAllStudentLearningActivityRecords', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetAllStudentLearningActivityRecordsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCompletedStudentRecordsWithPreset $parameters
     * @return ResultInterface & Type\GetCompletedStudentRecordsWithPresetResponse
     * @throws SoapException
     */
    public function getCompletedStudentRecordsWithPreset(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCompletedStudentRecordsWithPreset $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCompletedStudentRecordsWithPresetResponse
    {
        $response = ($this->caller)('GetCompletedStudentRecordsWithPreset', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCompletedStudentRecordsWithPresetResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetRecordDetails $parameters
     * @return ResultInterface & Type\SetRecordDetailsResponse
     * @throws SoapException
     */
    public function setRecordDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetRecordDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetRecordDetailsResponse
    {
        $response = ($this->caller)('SetRecordDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetRecordDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ExtendRecordDueDate $parameters
     * @return ResultInterface & Type\ExtendRecordDueDateResponse
     * @throws SoapException
     */
    public function extendRecordDueDate(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ExtendRecordDueDate $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ExtendRecordDueDateResponse
    {
        $response = ($this->caller)('ExtendRecordDueDate', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ExtendRecordDueDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GenerateTimedSeed $parameters
     * @return ResultInterface & Type\GenerateTimedSeedResponse
     * @throws SoapException
     */
    public function generateTimedSeed(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GenerateTimedSeed $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GenerateTimedSeedResponse
    {
        $response = ($this->caller)('GenerateTimedSeed', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GenerateTimedSeedResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ValidateTimedSeed $parameters
     * @return ResultInterface & Type\ValidateTimedSeedResponse
     * @throws SoapException
     */
    public function validateTimedSeed(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ValidateTimedSeed $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ValidateTimedSeedResponse
    {
        $response = ($this->caller)('ValidateTimedSeed', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ValidateTimedSeedResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\MergeStudentTranscripts $parameters
     * @return ResultInterface & Type\MergeStudentTranscriptsResponse
     * @throws SoapException
     */
    public function mergeStudentTranscripts(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MergeStudentTranscripts $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MergeStudentTranscriptsResponse
    {
        $response = ($this->caller)('MergeStudentTranscripts', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\MergeStudentTranscriptsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStudentAvailableCourses $parameters
     * @return ResultInterface & Type\GetStudentAvailableCoursesResponse
     * @throws SoapException
     */
    public function getStudentAvailableCourses(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentAvailableCourses $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentAvailableCoursesResponse
    {
        $response = ($this->caller)('GetStudentAvailableCourses', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetStudentAvailableCoursesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseCompletionStatusByDateRange $parameters
     * @return ResultInterface & Type\GetCourseCompletionStatusByDateRangeResponse
     * @throws SoapException
     */
    public function getCourseCompletionStatusByDateRange(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCourseCompletionStatusByDateRange $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCourseCompletionStatusByDateRangeResponse
    {
        $response = ($this->caller)('GetCourseCompletionStatusByDateRange', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetCourseCompletionStatusByDateRangeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityListEnrollments $parameters
     * @return ResultInterface & Type\GetLearningActivityListEnrollmentsResponse
     * @throws SoapException
     */
    public function getLearningActivityListEnrollments(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollments $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsResponse
    {
        $response = ($this->caller)('getLearningActivityListEnrollments', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityListEnrollmentsTruncated $parameters
     * @return ResultInterface & Type\GetLearningActivityListEnrollmentsTruncatedResponse
     * @throws SoapException
     */
    public function getLearningActivityListEnrollmentsTruncated(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsTruncated $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsTruncatedResponse
    {
        $response = ($this->caller)('getLearningActivityListEnrollmentsTruncated', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLearningActivityListEnrollmentsTruncatedResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLMSUserAutoLoginURL $parameters
     * @return ResultInterface & Type\GetLMSUserAutoLoginURLResponse
     * @throws SoapException
     */
    public function getLMSUserAutoLoginURL(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURL $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLResponse
    {
        $response = ($this->caller)('GetLMSUserAutoLoginURL', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLMSUserAutoLoginURLByUsername $parameters
     * @return ResultInterface & Type\GetLMSUserAutoLoginURLByUsernameResponse
     * @throws SoapException
     */
    public function getLMSUserAutoLoginURLByUsername(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLByUsername $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLByUsernameResponse
    {
        $response = ($this->caller)('GetLMSUserAutoLoginURLByUsername', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetLMSUserAutoLoginURLByUsernameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetActiveDirectorySynchSettings $parameters
     * @return ResultInterface & Type\GetActiveDirectorySynchSettingsResponse
     * @throws SoapException
     */
    public function getActiveDirectorySynchSettings(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetActiveDirectorySynchSettings $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetActiveDirectorySynchSettingsResponse
    {
        $response = ($this->caller)('GetActiveDirectorySynchSettings', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetActiveDirectorySynchSettingsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TestPost $parameters
     * @return ResultInterface & Type\TestPostResponse
     * @throws SoapException
     */
    public function testPost(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TestPost $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TestPostResponse
    {
        $response = ($this->caller)('TestPost', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\TestPostResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSCORMDetails $parameters
     * @return ResultInterface & Type\GetSCORMDetailsResponse
     * @throws SoapException
     */
    public function getSCORMDetails(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSCORMDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSCORMDetailsResponse
    {
        $response = ($this->caller)('GetSCORMDetails', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetSCORMDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetSCORMValues $parameters
     * @return ResultInterface & Type\SetSCORMValuesResponse
     * @throws SoapException
     */
    public function setSCORMValues(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetSCORMValues $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetSCORMValuesResponse
    {
        $response = ($this->caller)('SetSCORMValues', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetSCORMValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetFeedbackCompleted $parameters
     * @return ResultInterface & Type\SetFeedbackCompletedResponse
     * @throws SoapException
     */
    public function setFeedbackCompleted(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetFeedbackCompleted $parameters): \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetFeedbackCompletedResponse
    {
        $response = ($this->caller)('SetFeedbackCompleted', $parameters);

        \Psl\Type\instance_of(\Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\SetFeedbackCompletedResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

