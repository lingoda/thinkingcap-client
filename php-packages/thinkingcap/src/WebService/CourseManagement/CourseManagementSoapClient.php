<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CourseManagementSoapClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\FindCourse $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\FindCourseResponse
     */
    public function findCourse(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FindCourse $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\FindCourseResponse
    {
        return $this->call('FindCourse', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityByIDResponse
     */
    public function getLearningActivityByID(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityByID $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityByIDResponse
    {
        return $this->call('GetLearningActivityByID', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseByCodeResponse
     */
    public function getCourseByCode(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseByCode $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseByCodeResponse
    {
        return $this->call('GetCourseByCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetILTClassSizeDetailsXML $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetILTClassSizeDetailsXMLResponse
     */
    public function getILTClassSizeDetailsXML(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetILTClassSizeDetailsXML $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetILTClassSizeDetailsXMLResponse
    {
        return $this->call('GetILTClassSizeDetailsXML', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityByCodeResponse
     */
    public function getLearningActivityByCode(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityByCode $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityByCodeResponse
    {
        return $this->call('GetLearningActivityByCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDomainLearningActivities $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetDomainLearningActivitiesResponse
     */
    public function getDomainLearningActivities(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetDomainLearningActivities $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetDomainLearningActivitiesResponse
    {
        return $this->call('GetDomainLearningActivities', $parameters);
    }

    /**
     * @param RequestInterface|Type\ReserveSpotILT $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\ReserveSpotILTResponse
     */
    public function reserveSpotILT(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ReserveSpotILT $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ReserveSpotILTResponse
    {
        return $this->call('ReserveSpotILT', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddLearningActivity $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\AddLearningActivityResponse
     */
    public function addLearningActivity(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddLearningActivity $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddLearningActivityResponse
    {
        return $this->call('AddLearningActivity', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeleteLearningActivity $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\DeleteLearningActivityResponse
     */
    public function deleteLearningActivity(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DeleteLearningActivity $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\DeleteLearningActivityResponse
    {
        return $this->call('DeleteLearningActivity', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateLearningActivityInfo $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateLearningActivityInfoResponse
     */
    public function updateLearningActivityInfo(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UpdateLearningActivityInfo $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UpdateLearningActivityInfoResponse
    {
        return $this->call('UpdateLearningActivityInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetCourseTAs $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\SetCourseTAsResponse
     */
    public function setCourseTAs(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\SetCourseTAs $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\SetCourseTAsResponse
    {
        return $this->call('SetCourseTAs', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetCourseMarkedBy $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\SetCourseMarkedByResponse
     */
    public function setCourseMarkedBy(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\SetCourseMarkedBy $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\SetCourseMarkedByResponse
    {
        return $this->call('SetCourseMarkedBy', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseAssignmentsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseAssignmentsListResponse
     */
    public function getCourseAssignmentsList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseAssignmentsList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseAssignmentsListResponse
    {
        return $this->call('GetCourseAssignmentsList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseAssignmentsXml $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseAssignmentsXmlResponse
     */
    public function getCourseAssignmentsXml(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseAssignmentsXml $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseAssignmentsXmlResponse
    {
        return $this->call('GetCourseAssignmentsXml', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseStudentsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseStudentsListResponse
     */
    public function getCourseStudentsList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseStudentsList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseStudentsListResponse
    {
        return $this->call('GetCourseStudentsList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityStudentRecords $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityStudentRecordsResponse
     */
    public function getLearningActivityStudentRecords(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityStudentRecords $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityStudentRecordsResponse
    {
        return $this->call('GetLearningActivityStudentRecords', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityCustomFieldValues $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityCustomFieldValuesResponse
     */
    public function getLearningActivityCustomFieldValues(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityCustomFieldValues $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityCustomFieldValuesResponse
    {
        return $this->call('GetLearningActivityCustomFieldValues', $parameters);
    }

    /**
     * @param RequestInterface|Type\ChangeLearningActivityActiveStatus $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\ChangeLearningActivityActiveStatusResponse
     */
    public function changeLearningActivityActiveStatus(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ChangeLearningActivityActiveStatus $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\ChangeLearningActivityActiveStatusResponse
    {
        return $this->call('ChangeLearningActivityActiveStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\GenerateECommerceCourseToken $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GenerateECommerceCourseTokenResponse
     */
    public function generateECommerceCourseToken(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GenerateECommerceCourseToken $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GenerateECommerceCourseTokenResponse
    {
        return $this->call('GenerateECommerceCourseToken', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddTrainingLocationWithTimeZone $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\AddTrainingLocationWithTimeZoneResponse
     */
    public function addTrainingLocation(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddTrainingLocationWithTimeZone $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddTrainingLocationWithTimeZoneResponse
    {
        return $this->call('AddTrainingLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTrainingLocationsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetTrainingLocationsListResponse
     */
    public function getTrainingLocationsList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetTrainingLocationsList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetTrainingLocationsListResponse
    {
        return $this->call('GetTrainingLocationsList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTrainingLocation $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetTrainingLocationResponse
     */
    public function getTrainingLocation(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetTrainingLocation $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetTrainingLocationResponse
    {
        return $this->call('GetTrainingLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\IsTrainingLocationAvailable $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\IsTrainingLocationAvailableResponse
     */
    public function isTrainingLocationAvailable(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\IsTrainingLocationAvailable $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\IsTrainingLocationAvailableResponse
    {
        return $this->call('IsTrainingLocationAvailable', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseModeratorsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseModeratorsListResponse
     */
    public function getCourseModeratorsList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseModeratorsList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseModeratorsListResponse
    {
        return $this->call('GetCourseModeratorsList', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddCourseSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\AddCourseSessionResponse
     */
    public function addCourseSession(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddCourseSession $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\AddCourseSessionResponse
    {
        return $this->call('AddCourseSession', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateCourseSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\UpdateCourseSessionResponse
     */
    public function updateCourseSession(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UpdateCourseSession $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\UpdateCourseSessionResponse
    {
        return $this->call('UpdateCourseSession', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseSessionsList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseSessionsListResponse
     */
    public function getCourseSessionsList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseSessionsList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseSessionsListResponse
    {
        return $this->call('GetCourseSessionsList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetILTCourseCurrentSession $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetILTCourseCurrentSessionResponse
     */
    public function getILTCourseCurrentSession(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetILTCourseCurrentSession $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetILTCourseCurrentSessionResponse
    {
        return $this->call('GetILTCourseCurrentSession', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateCourseSeries $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\CreateCourseSeriesResponse
     */
    public function createCourseSeries(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CreateCourseSeries $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\CreateCourseSeriesResponse
    {
        return $this->call('CreateCourseSeries', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityEquivalencyByID $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityEquivalencyByIDResponse
     */
    public function getLearningActivityEquivalencyByID(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityEquivalencyByID $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityEquivalencyByIDResponse
    {
        return $this->call('GetLearningActivityEquivalencyByID', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityEquivalencyByCode $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityEquivalencyByCodeResponse
     */
    public function getLearningActivityEquivalencyByCode(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityEquivalencyByCode $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityEquivalencyByCodeResponse
    {
        return $this->call('GetLearningActivityEquivalencyByCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCourseSeriesList $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetCourseSeriesListResponse
     */
    public function getCourseSeriesList(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseSeriesList $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetCourseSeriesListResponse
    {
        return $this->call('GetCourseSeriesList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetEquivalencyLearningActivities $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetEquivalencyLearningActivitiesResponse
     */
    public function getEquivalencyLearningActivities(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetEquivalencyLearningActivities $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetEquivalencyLearningActivitiesResponse
    {
        return $this->call('GetEquivalencyLearningActivities', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAvailableCourses $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetAvailableCoursesResponse
     */
    public function getAvailableCourses(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetAvailableCourses $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetAvailableCoursesResponse
    {
        return $this->call('GetAvailableCourses', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLearningActivityDetails $parameters
     *
     * @throws SoapException
     *
     * @return ResultInterface|Type\GetLearningActivityDetailsResponse
     */
    public function getLearningActivityDetails(\Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityDetails $parameters): \Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type\GetLearningActivityDetailsResponse
    {
        return $this->call('getLearningActivityDetails', $parameters);
    }
}
