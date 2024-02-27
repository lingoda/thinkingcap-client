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
     * Returns a course with the specified ID. Deprecated, use GetLearningActivityByID!
     *
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
     * Returns a learning activity with the passed ID.
     *
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
     * Returns a course with the specified code. Deprecated, use GetLearningActivityByCode!
     *
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
     * Returns the total number of remaining places, the total allowed and the total for waitlisting of an ILT passed by its code. If an ILT code is not passed, returns the details for all ILTs in the domain
     *
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
     * Returns a learning activity with the passed code.
     *
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
     * Returns a list of learning activities in the API key domain and subdomains or only from the passed domain descendant of the API key domain. <br/><br/>Parameters: <br/>- API key, <br/>- domain ID (optional, string in GUID format). If a domain ID is passed, includes only learning activities from the passed domain; <br/>If a domain ID is not passed, includes learning activities that are visible in the API key domain and its child domains, <br/>- learning activity type filter (optional, string). If a learning activity filter is passed, returns only the matching activities. Allowed values (case insensitive): "eLearning", "Learning Path", "Instructor Led", "Portfolio", "Comprehension", "Demonstration", "Assessment", "Survey", "Assignment", "Attestation", <br/>- include inactive learning activities (required, boolean True/False), <br/>- include the learning activities metadata (required, boolean True/False). <br/>- offset (required, integer). A page consisting of the specified number of learning activities starting from the specified offset is retrieved. If a negative or 0 offset is passed, returns the first page of learning activities in title order,<br/>- take (required, integer). The size of the page containing learning activities to be returned. If a negative or 0 number of learning activities is passed, max. 50 learning activities are returned by default.
     *
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
     * Reserve a spot in a Instructor-led Training activity. <br/>- learningActivityCode (optional, string). Either the learning activity code or ID has to be passed. <br/>- learningActivityID (optional, string). If a learning activity code is not passed, this is required. <br/>- number of seats (required, integer), <br/>- duration (required, integer) - in minutes, <br/>- check waitlist (required, boolean True/False) - if True and the class is full and the activity allows waitlist, checks if an available spot exists in the waitlist.
     *
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
     * Creates a learning activity shell of the passed type in the passed domain or in the API key domain if the domain parameter is omitted.<br/><br/>Parameters: <br/>- API key, <br/>- learning activity domainID (optional, string in GUID format), <br/>- learning activity type (required, "eLearning", "Learning Path", "Instructor-Led", "Comprehension", "Portfolio", "Demonstration", "Assessment", "Survey", "Assignment", "Attestation" or the name of a custom learning activity type), <br/>- learning activity ID (optional, string in GUID format), <br/>- learning activity title (optional, string), <br/>- learning activity code (required, string), <br/>- learning activity description (optional, string), <br/>- language (optional, string), <br/>- equivalency code (optional, string), <br/>- tags (optional, comma separated strings),<br/>- estimated learning time in minutes (required, 0 if not applicable), <br/>- show supervisor login (required, boolean True/False, only used for demonstration type activities), <br/>- learning activity requires evidence (required, boolean True/False, only used for portfolio type activities),<br/>- certificate template name (optional, string), <br/>- certificate min score (required, 0 if not applicable), <br/>- learning activity custom metadata (optional, XML string). Format for learningActivityCustomMetadata parameter: &lt;field_list&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;...&lt;/field_list&gt;, <br/><br/>Returns: if successful, the new learning activity LMS ID (GUID) or else an error code.
     *
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
     * Updates the basic information of an existing learning activity in the API key domain or a subdomain of it. <br/><br/>Parameters: <br/>- API key, <br/>- ID of the learning activity to update (required, string in GUID format), <br/>- learning activity type (optional, string, only used for changing a custom learning activity type; the activity cannot be changed from a base type to another), <br/>- learning activity title (optional, string), not changed if not passed, <br/>- learning activity code (optional, string), not changed if not passed, <br/>- learning activity description (optional, string), not changed if not passed, <br/>- language (optional, string), not changed if not passed, <br/>- equivalency code (optional, string), not changed if not passed, <br/>- tags (optional, comma separated strings), not changed if not passed, <br/>- estimated learning time in minutes (required, integer), 0 if not applicable or not to be changed, <br/>- show supervisor login (required, boolean True/False, only used for demonstration type activities), <br/>- learning activity requires evidence (required, boolean True/False, only used for portfolio type activities), <br/>- certificate template name (optional, string), not changed if not passed, <br/>- certificate min score (required, integer), 0 if not applicable or not to be changed, <br/>- learning activity custom metadata (optional, XML string), not changed if not passed. Format for learningActivityCustomMetadata parameter: &lt;field_list&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;&lt;field id='...'&gt;&lt;value&gt;...&lt;/value&gt;&lt;value&gt;...&lt;/value&gt;...&lt;/field&gt;...&lt;/field_list&gt;, <br/><br/>Returns: if successful, the updated learning activity LMS ID (GUID) or else an error code.
     *
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
     * Deletes the learning activity with the passed LMS ID.
     *
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
     * Updates a learning activity information with parameters passed in the xml. <br/>The learning activity settings to be updated are passed in the XML parameter. Settings nodes that should not change can be ommitted.<br/><br/>Parameters: <br/>- API key, <br/>- ID of the learning activity to update (required, string in GUID format), <br/>- learning activity settings in XML format: &lt;SettingsXML&gt;&lt;Title&gt;the new learning activity title&lt;/Title&gt;&lt;Description&gt;the new learning activity description&lt;/Description&gt;&lt;FirstEnrollmentDate&gt;the new first enrollment date in format yyyy-MM-dd&lt;/FirstEnrollmentDate&gt;&lt;LastEnrollmentDate&gt;the new last enrollment date ["unlimited","date in format yyyy-MM-dd"]&lt;/LastEnrollmentDate&gt;&lt;StartDate&gt;the new start date in format yyyy-MM-dd (not for ILTs)&lt;/StartDate&gt;&lt;HasForum&gt;["True","False"]&lt;/HasForum&gt;&lt;Prerequisites&gt;&lt;Prerequisite&gt;ID in LMS of a prerequisite learning activity&lt;/Prerequisite&gt;...&lt;Prerequisite&gt;ID in LMS of a prerequisite learning activity&lt;/Prerequisite&gt;&lt;/Prerequisites&gt;&lt;/SettingsXML&gt;,<br/><br/>Returns: if successful, the updated learning activity LMS ID (GUID).
     *
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
     * Sets the TAs for a course from a comma separated list of user IDs
     *
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
     * Sets who can mark a course. If moderator = true, moderator can mark the course. If ta = true, teaching assistants can mark the course. If both true, then both moderator AND ta can mark course.
     *
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
     * Returns a list of a course's assignments.
     *
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
     * Returns a course's assignments in XML format.
     *
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
     * Returns a list of the passed course student records, optionally filtered by users in the filter domain passed as a GUID. Deprecated, use GetLearningActivityStudents instead.
     *
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
     * Returns a list of the passed learning activity student records.
     *
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
     * Returns the value(s) of a learning activity custom metadata field.
     *
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
     * Activates or deactivates the learning activity with the passed LMS ID.
     *
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
     * Returns a unique token for an eCommerce Course.
     *
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
     * Adds a new training location. <br/><br/>Parameters: <br/>- API Key, <br/>- country (50 characters max), <br/>- state (50 characters max), <br/>- city (50 characters max), <br/>- address (500 characters max), <br/>- postal code (50 characters max), <br/>- room number (50 characters max), <br/>- time zone code (3 characters max, defaults to the server time zone if not passed), <br/>- location uses Daylight Saving Time ('True', 'true' or '1'). <br/><br/>Returns the new location ID.
     *
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
     * Returns a list of training locations available for a domain. Include global and domain training locations.
     *
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
     * Returns a training location by its LMS ID.
     *
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
     * Checks if a training location is available for the passed times (in location timezone).
     *
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
     * Returns a list of users that can be moderators for a course in the passed domain. Course type can be "Course" or "Learning Path". Does not check for user availability in an ILT.
     *
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
     * Adds a new session to an IL Course. If webinar information is passed, creates a meeting for the webinar provider passed. <br/>The start and end times are assumed to be in the domain default timezone if custom URL or TBD location session, location timezone if room session and webinar provider timezone if web session.<br/><br/>Parameters: <br/>- API key, <br/>- ILT ID (required, string in GUID format), <br/>- session title (required, string), <br/>- session description (optional, string), <br/>- session is required (required, boolean True/False), <br/>- time is TBD (required, boolean True/False), <br/>- session start date/time (optional, format yyyy-MM-dd HH:mm e.g. "2022-10-21 09:00") - required if time is not TBD, <br/>- session end date/time (optional, format yyyy-MM-dd HH:mm e.g. "2022-10-21 17:00") - required if time is not TBD, <br/>- location is TBD (required, boolean True/False), <br/>- location ID in LMS (optional, string in GUID format) - if the location is not TBD and a physical location ID is passed, the location to be set for the session, <br/>- webinar provider ID in LMS (optional, string in GUID format) - if the location is not TBD and a physical location ID is not passed, the webinar to create a meeting and set it as the session location, <br/>- Zoom sub-account host ID (optional, string) - only used if the location is not TBD and of type Zoom sub-account webinar - a webinar provider ID must be passed as well, <br/>- custom session meeting URL (optional, string) - if the location is not TBD and a physical location ID or a webinar ID are not passed, the custom meeting URL for the session, <br/>- session is recurring (required, boolean True/False), <br/>- recurring interval (optional, "Daily","Weekly|Monday","Monthly") - required if the session is recurring, <br/>- the number of times the session will repeat base on the recurring interval (required, integer) - only used if the session is recurring (min 1 if recurring, 0 if not recurring), <br/>- code to verify attendance (optional, string), <br/>- update admin view (required, boolean) - True to update the admin view catalogs, <br/>- update learner catalogs (required, boolean) - True to update the learner view branch and page catalogs.<br/><br/>Returns: if successful, the new session LMS ID (string in GUID format) or else an error code.
     *
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
     * Updates an existing IL Course session. If webinar information is passed, creates a meeting for the webinar provider passed. If no location, webinar or custom meeting URL are passed, the session location is not modified. All optional parameters not passed will not be modified. <br/>The start and end times are assumed to be in the domain default timezone if custom URL or TBD location session, location timezone if room session and webinar provider timezone if web session.<br/><br/>Parameters: <br/>- API key, <br/>- ILT ID (required, string in GUID format), <br/>- session ID (required, string in GUID format), <br/>- session title (optional, string - if not passed will not be modified), <br/>- session description (optional, string - if not passed will not be modified), <br/>- session is required (required, boolean True/False), <br/>- time is TBD (required, boolean True/False), <br/>- session start date/time (optional, format yyyy-MM-dd HH:mm e.g. "2022-10-21 09:00" - if not passed will not be modified), <br/>- session end date/time (optional, format yyyy-MM-dd HH:mm e.g. "2022-10-21 17:00" - if not passed will not be modified), <br/>- location is TBD (required, boolean True/False), <br/>- location ID in LMS (optional, string in GUID format) - if the location is not TBD and a physical location ID is passed, the location to be set for the session, <br/>- webinar provider ID in LMS (optional, string in GUID format) - if the location is not TBD and a physical location ID is not passed, the webinar to create a meeting and set it as the session location, <br/>- Zoom sub-account host ID (optional, string) - only used if the location is not TBD and of type Zoom sub-account webinar - a webinar provider ID must be passed as well, <br/>- custom session meeting URL (optional, string) - if the location is not TBD and a physical location ID or a webinar ID are not passed, the custom meeting URL for the session, <br/>- code to verify attendance (optional, string - if not passed will not be modified).<br/><br/>Returns: if successful, the updated session LMS ID (string in GUID format) or else an error code.
     *
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
     * Returns a list of an IL Course's sessions. Sessions times are returned in UTC.
     *
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
     * Returns the ID of an ongoing session of an IL Course (if any). If a UTC timestamp is passed (in format yyyy-MM-ddTHH:mm:ss), the timestamp is used as reference for finding an ongoing session.
     *
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
     * Creates a new equivalency. The parameter 'programID' should be null or empty for global series. A successful operation returns the equivalency LMS ID.<br/><br/> Parameters: <br/>- API key, <br/>- programID (optional, if passed string in GUID format) - if not passed, the equivalency will be created in the API key domain, <br/>- code (required, string max 50 characters), <br/>- name (required, string) - will be set as the English name, <br/>- description (required, string) - will be set as the English description, <br/>- tags (optional, comma separated string list), <br/>- denyInheritance (required, boolean True/False) - if True, the equivalency will not be inherited/seen in subdomains of the owner domain
     *
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
     * Returns a learning activity equivalency with the passed ID.
     *
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
     * Returns a learning activity equivalency with the passed code.
     *
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
     * Returns a list of equivalencies available for a domain. Includes global and Domain Series.
     *
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
     * Returns a list of learning activities members of an equivalency.
     *
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
     * Returns an XML string containing courses/learning paths/both available in the system or for a domain. Course type can be 'Course' or 'Learning Path' or empty to return all course types. If self enrollment is passed as a false then courses with self enrollment and without self enrollment are returned. If a program ID is passed, only courses in the passed domain are returned. If a language is passed, only courses for the passed language are returned. The returned list includes links to the catalogue course details pages.
     *
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
     * Returns an XML string with activity details. <br />Activity ID (Guid)<br />CustomFieldIDs (Optional), the IDs (separated by comma) of the Custom Field that are required in the result.
     *
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
