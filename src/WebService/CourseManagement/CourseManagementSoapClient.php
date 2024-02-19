<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CourseManagementSoapClient
{
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\FindCourse $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\FindCourseResponse
     */
    public function findCourse(Type\FindCourse $parameters): Type\FindCourseResponse
    {
        $response = ($this->caller)('FindCourse', $parameters);

        \Psl\Type\instance_of(Type\FindCourseResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityByIDResponse
     */
    public function getLearningActivityByID(Type\GetLearningActivityByID $parameters): Type\GetLearningActivityByIDResponse
    {
        $response = ($this->caller)('GetLearningActivityByID', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityByIDResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseByCodeResponse
     */
    public function getCourseByCode(Type\GetCourseByCode $parameters): Type\GetCourseByCodeResponse
    {
        $response = ($this->caller)('GetCourseByCode', $parameters);

        \Psl\Type\instance_of(Type\GetCourseByCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetILTClassSizeDetailsXML $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetILTClassSizeDetailsXMLResponse
     */
    public function getILTClassSizeDetailsXML(Type\GetILTClassSizeDetailsXML $parameters): Type\GetILTClassSizeDetailsXMLResponse
    {
        $response = ($this->caller)('GetILTClassSizeDetailsXML', $parameters);

        \Psl\Type\instance_of(Type\GetILTClassSizeDetailsXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityByCodeResponse
     */
    public function getLearningActivityByCode(Type\GetLearningActivityByCode $parameters): Type\GetLearningActivityByCodeResponse
    {
        $response = ($this->caller)('GetLearningActivityByCode', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityByCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDomainLearningActivities $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetDomainLearningActivitiesResponse
     */
    public function getDomainLearningActivities(Type\GetDomainLearningActivities $parameters): Type\GetDomainLearningActivitiesResponse
    {
        $response = ($this->caller)('GetDomainLearningActivities', $parameters);

        \Psl\Type\instance_of(Type\GetDomainLearningActivitiesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ReserveSpotILT $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\ReserveSpotILTResponse
     */
    public function reserveSpotILT(Type\ReserveSpotILT $parameters): Type\ReserveSpotILTResponse
    {
        $response = ($this->caller)('ReserveSpotILT', $parameters);

        \Psl\Type\instance_of(Type\ReserveSpotILTResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddLearningActivity $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\AddLearningActivityResponse
     */
    public function addLearningActivity(Type\AddLearningActivity $parameters): Type\AddLearningActivityResponse
    {
        $response = ($this->caller)('AddLearningActivity', $parameters);

        \Psl\Type\instance_of(Type\AddLearningActivityResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateLearningActivity $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateLearningActivityResponse
     */
    public function updateLearningActivity(Type\UpdateLearningActivity $parameters): Type\UpdateLearningActivityResponse
    {
        $response = ($this->caller)('UpdateLearningActivity', $parameters);

        \Psl\Type\instance_of(Type\UpdateLearningActivityResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteLearningActivity $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\DeleteLearningActivityResponse
     */
    public function deleteLearningActivity(Type\DeleteLearningActivity $parameters): Type\DeleteLearningActivityResponse
    {
        $response = ($this->caller)('DeleteLearningActivity', $parameters);

        \Psl\Type\instance_of(Type\DeleteLearningActivityResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateLearningActivityInfo $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateLearningActivityInfoResponse
     */
    public function updateLearningActivityInfo(Type\UpdateLearningActivityInfo $parameters): Type\UpdateLearningActivityInfoResponse
    {
        $response = ($this->caller)('UpdateLearningActivityInfo', $parameters);

        \Psl\Type\instance_of(Type\UpdateLearningActivityInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetCourseTAs $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetCourseTAsResponse
     */
    public function setCourseTAs(Type\SetCourseTAs $parameters): Type\SetCourseTAsResponse
    {
        $response = ($this->caller)('SetCourseTAs', $parameters);

        \Psl\Type\instance_of(Type\SetCourseTAsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetCourseMarkedBy $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\SetCourseMarkedByResponse
     */
    public function setCourseMarkedBy(Type\SetCourseMarkedBy $parameters): Type\SetCourseMarkedByResponse
    {
        $response = ($this->caller)('SetCourseMarkedBy', $parameters);

        \Psl\Type\instance_of(Type\SetCourseMarkedByResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseAssignmentsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseAssignmentsListResponse
     */
    public function getCourseAssignmentsList(Type\GetCourseAssignmentsList $parameters): Type\GetCourseAssignmentsListResponse
    {
        $response = ($this->caller)('GetCourseAssignmentsList', $parameters);

        \Psl\Type\instance_of(Type\GetCourseAssignmentsListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseAssignmentsXml $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseAssignmentsXmlResponse
     */
    public function getCourseAssignmentsXml(Type\GetCourseAssignmentsXml $parameters): Type\GetCourseAssignmentsXmlResponse
    {
        $response = ($this->caller)('GetCourseAssignmentsXml', $parameters);

        \Psl\Type\instance_of(Type\GetCourseAssignmentsXmlResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseStudentsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseStudentsListResponse
     */
    public function getCourseStudentsList(Type\GetCourseStudentsList $parameters): Type\GetCourseStudentsListResponse
    {
        $response = ($this->caller)('GetCourseStudentsList', $parameters);

        \Psl\Type\instance_of(Type\GetCourseStudentsListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityStudentRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityStudentRecordsResponse
     */
    public function getLearningActivityStudentRecords(Type\GetLearningActivityStudentRecords $parameters): Type\GetLearningActivityStudentRecordsResponse
    {
        $response = ($this->caller)('GetLearningActivityStudentRecords', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityStudentRecordsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityCustomFieldValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityCustomFieldValuesResponse
     */
    public function getLearningActivityCustomFieldValues(Type\GetLearningActivityCustomFieldValues $parameters): Type\GetLearningActivityCustomFieldValuesResponse
    {
        $response = ($this->caller)('GetLearningActivityCustomFieldValues', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityCustomFieldValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ChangeLearningActivityActiveStatus $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\ChangeLearningActivityActiveStatusResponse
     */
    public function changeLearningActivityActiveStatus(Type\ChangeLearningActivityActiveStatus $parameters): Type\ChangeLearningActivityActiveStatusResponse
    {
        $response = ($this->caller)('ChangeLearningActivityActiveStatus', $parameters);

        \Psl\Type\instance_of(Type\ChangeLearningActivityActiveStatusResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GenerateECommerceCourseToken $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GenerateECommerceCourseTokenResponse
     */
    public function generateECommerceCourseToken(Type\GenerateECommerceCourseToken $parameters): Type\GenerateECommerceCourseTokenResponse
    {
        $response = ($this->caller)('GenerateECommerceCourseToken', $parameters);

        \Psl\Type\instance_of(Type\GenerateECommerceCourseTokenResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddTrainingLocationWithTimeZone $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\AddTrainingLocationWithTimeZoneResponse
     */
    public function addTrainingLocation(Type\AddTrainingLocationWithTimeZone $parameters): Type\AddTrainingLocationWithTimeZoneResponse
    {
        $response = ($this->caller)('AddTrainingLocation', $parameters);

        \Psl\Type\instance_of(Type\AddTrainingLocationWithTimeZoneResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetTrainingLocationsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetTrainingLocationsListResponse
     */
    public function getTrainingLocationsList(Type\GetTrainingLocationsList $parameters): Type\GetTrainingLocationsListResponse
    {
        $response = ($this->caller)('GetTrainingLocationsList', $parameters);

        \Psl\Type\instance_of(Type\GetTrainingLocationsListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetTrainingLocation $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetTrainingLocationResponse
     */
    public function getTrainingLocation(Type\GetTrainingLocation $parameters): Type\GetTrainingLocationResponse
    {
        $response = ($this->caller)('GetTrainingLocation', $parameters);

        \Psl\Type\instance_of(Type\GetTrainingLocationResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\IsTrainingLocationAvailable $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\IsTrainingLocationAvailableResponse
     */
    public function isTrainingLocationAvailable(Type\IsTrainingLocationAvailable $parameters): Type\IsTrainingLocationAvailableResponse
    {
        $response = ($this->caller)('IsTrainingLocationAvailable', $parameters);

        \Psl\Type\instance_of(Type\IsTrainingLocationAvailableResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseModeratorsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseModeratorsListResponse
     */
    public function getCourseModeratorsList(Type\GetCourseModeratorsList $parameters): Type\GetCourseModeratorsListResponse
    {
        $response = ($this->caller)('GetCourseModeratorsList', $parameters);

        \Psl\Type\instance_of(Type\GetCourseModeratorsListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddCourseSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\AddCourseSessionResponse
     */
    public function addCourseSession(Type\AddCourseSession $parameters): Type\AddCourseSessionResponse
    {
        $response = ($this->caller)('AddCourseSession', $parameters);

        \Psl\Type\instance_of(Type\AddCourseSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateCourseSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\UpdateCourseSessionResponse
     */
    public function updateCourseSession(Type\UpdateCourseSession $parameters): Type\UpdateCourseSessionResponse
    {
        $response = ($this->caller)('UpdateCourseSession', $parameters);

        \Psl\Type\instance_of(Type\UpdateCourseSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseSessionsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseSessionsListResponse
     */
    public function getCourseSessionsList(Type\GetCourseSessionsList $parameters): Type\GetCourseSessionsListResponse
    {
        $response = ($this->caller)('GetCourseSessionsList', $parameters);

        \Psl\Type\instance_of(Type\GetCourseSessionsListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetILTCourseCurrentSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetILTCourseCurrentSessionResponse
     */
    public function getILTCourseCurrentSession(Type\GetILTCourseCurrentSession $parameters): Type\GetILTCourseCurrentSessionResponse
    {
        $response = ($this->caller)('GetILTCourseCurrentSession', $parameters);

        \Psl\Type\instance_of(Type\GetILTCourseCurrentSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateCourseSeries $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\CreateCourseSeriesResponse
     */
    public function createCourseSeries(Type\CreateCourseSeries $parameters): Type\CreateCourseSeriesResponse
    {
        $response = ($this->caller)('CreateCourseSeries', $parameters);

        \Psl\Type\instance_of(Type\CreateCourseSeriesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityEquivalencyByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityEquivalencyByIDResponse
     */
    public function getLearningActivityEquivalencyByID(Type\GetLearningActivityEquivalencyByID $parameters): Type\GetLearningActivityEquivalencyByIDResponse
    {
        $response = ($this->caller)('GetLearningActivityEquivalencyByID', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityEquivalencyByIDResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityEquivalencyByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityEquivalencyByCodeResponse
     */
    public function getLearningActivityEquivalencyByCode(Type\GetLearningActivityEquivalencyByCode $parameters): Type\GetLearningActivityEquivalencyByCodeResponse
    {
        $response = ($this->caller)('GetLearningActivityEquivalencyByCode', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityEquivalencyByCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCourseSeriesList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetCourseSeriesListResponse
     */
    public function getCourseSeriesList(Type\GetCourseSeriesList $parameters): Type\GetCourseSeriesListResponse
    {
        $response = ($this->caller)('GetCourseSeriesList', $parameters);

        \Psl\Type\instance_of(Type\GetCourseSeriesListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEquivalencyLearningActivities $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetEquivalencyLearningActivitiesResponse
     */
    public function getEquivalencyLearningActivities(Type\GetEquivalencyLearningActivities $parameters): Type\GetEquivalencyLearningActivitiesResponse
    {
        $response = ($this->caller)('GetEquivalencyLearningActivities', $parameters);

        \Psl\Type\instance_of(Type\GetEquivalencyLearningActivitiesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAvailableCourses $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetAvailableCoursesResponse
     */
    public function getAvailableCourses(Type\GetAvailableCourses $parameters): Type\GetAvailableCoursesResponse
    {
        $response = ($this->caller)('GetAvailableCourses', $parameters);

        \Psl\Type\instance_of(Type\GetAvailableCoursesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLearningActivityDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface & Type\GetLearningActivityDetailsResponse
     */
    public function getLearningActivityDetails(Type\GetLearningActivityDetails $parameters): Type\GetLearningActivityDetailsResponse
    {
        $response = ($this->caller)('getLearningActivityDetails', $parameters);

        \Psl\Type\instance_of(Type\GetLearningActivityDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
