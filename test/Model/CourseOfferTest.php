<?php
/**
 * CourseOfferTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wisenet Api
 *
 * # Introduction Welcome to Wisenet’s API documentation. The instructions will assist you in how to best use the API. Our API is RESTful and designed to simplify the integration between your 3rd party applications and Wisenet. Because the API taps into our workflow automation, it reduces the need for developers to build complex integrations that generates documents, sends emails or creates tasks. We recommend using a test environment when developing an integration with the API. The API is only available on specific Wisenet licenses. Please contact us if you require access.         # Authentication An API key is required to make an authorised request with the Wisenet API. We recommend using Postman for testing your API development.    - API keys can be generated from within Wisenet LRM > Settings by a Portal Admin user that has the API license enabled. [See instructions](https://learn.wisenet.co/how-to-generate-an-api-key/)    - You must add the API key as an ‘x-api-key’ header in requests to the API.    - Configure ‘Content-Type’ key with corresponding value ‘application/json’ in the header for POST, PUT and PATCH requests.     # Usage Limits Usage limits are designed to reduce excess usage of the API and to encourage more efficient usage. A response of 429: Too Many Requests, will be returned if the limit is reached. The API Usage Limits are:   - Basic Usage Plan: 1000 per day   - Full Usage Plan: 10000 per day # Rate Limiting Rate limiting is designed to prevent individual API users spiking our services. The limit is per API key. A response of 429: Too Many Requests, will be returned if the limit is reached. The API Rate Limits are:   - Basic Usage Plan: 10 requests per second   - Full Usage Plan: 10 requests per second # Paging Paging is implemented within most of our endpoints to control the number of records returned. We have limited the result set to contain up to 1000 records. Combos do not have paging. It is encouraged to use paging to prevent missing records. This is achieved using skip and take parameters. Append the following to an endpoint ?skip={SkipRecordCount}&take={TakeRecordCount}     # Filtering Most filtering will use simple equals syntax (=) such as https://api.wisenet.co/v1/course-enrolments?courseOfferIdFilter={CourseOfferID}    Some field filtering however can be implemented as a query parameter depending on your requirements. The operators available are:   - Greater Than (=gt:)   - Lesser Than (=lt:)   - Greater Than Or Equal (=ge:)   - Lesser Than Or Equal (=le:)   - Equal (=eq:)   - Not Equal (=ne:)   - Between (=bt:)   - In (=in:)   - Not In (=ni:)   - Contains (=ct:)   - Not Contains (=nc:)  For example: To get all course enrolments with the last modified timestamp greater than 02 November 2018 10:15AM  https://api.wisenet.co/v1/course-enrolments?lastModifiedTimeStampFilter=gt:2018-11-02T10:15:00.000  # PATCH The PATCH endpoint allows patching of individual fields. When calling the endpoint provide a list of patch operations you want to be performed.   Each patch operation consists of the following:   - op = Which operation you want to be performed on the field. This is usually set to \"replace\".   - path = Path to the field in model's Data section including all nested nodes. Note that only fields under Data section of the model can be modified.   - value = The value to update the field with. Note the format requirements for the selected field.  Example: Replace the IsActive field in LearnersAU endpoint to False. ``` [   {     \"op\": \"replace\",     \"path\": \"Personal/IsActive\",     \"value\": false   } ] ```  # Formatting Each field has a datatype and information regarding allowable values. You can see this by expanding the responses 200 ok section for any endpoint. There you will find the response schema data array.  Special notes:  Mobile number - It is best to supply an international format if possible as this ensures that it is SMS ready. E.g. in Australia \"+61412345678\"  # Documents and Files A document can be attached to a Filenote by performing the following the steps below. The maximum size for a file is 10MB. The file name must contain a file extension. The file size must be greater than zero.      1. Use the [document-file](#tag/DocumentFile) endpoint to return a DocumentId and a DocumentPreSignedUrl.    2. Use the DocumentPreSignedUrl returned from step 1 to upload the actual file. An example request is as follows:      ```       curl -X PUT \"<Insert DocumentPreSignedUrl>\" -H \"content-length: <Insert content-length>\" --data-binary \"<path to file eg. @path/to/filename.txt>\"      ```   3. Use the retrieved DocumentId to link the Document to the Filenote using the [Filenote](#tag/Filenote) endpoint.  A document can be downloaded from a Filenote by performing the following steps:    1. Use the relevant [Filenote](#tag/Filenote) endpoint to retrieve the DocumentId to download      2. Use the [document-file](#tag/DocumentFile) endpoint to return a DocumentUrl to download the file.    3. Download the file using the DocumentUrl returned from step 2 using a standard GET request or from a browser such as Chrome or Firefox etc.  # SDKs [View and download](https://www.myget.org/gallery/wisenet-public) Wisenet SDKs.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Phwebs\Wisenet;

use PHPUnit\Framework\TestCase;

/**
 * CourseOfferTest Class Doc Comment
 *
 * @category    Class
 * @description CourseOffer
 * @package     Phwebs\Wisenet
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CourseOfferTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "CourseOffer"
     */
    public function testCourseOffer()
    {
    }

    /**
     * Test attribute "course_offer_id"
     */
    public function testPropertyCourseOfferId()
    {
    }

    /**
     * Test attribute "course_id"
     */
    public function testPropertyCourseId()
    {
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "course_offer_status_id"
     */
    public function testPropertyCourseOfferStatusId()
    {
    }

    /**
     * Test attribute "course_offer_start_date"
     */
    public function testPropertyCourseOfferStartDate()
    {
    }

    /**
     * Test attribute "course_offer_end_date"
     */
    public function testPropertyCourseOfferEndDate()
    {
    }

    /**
     * Test attribute "application_start_date"
     */
    public function testPropertyApplicationStartDate()
    {
    }

    /**
     * Test attribute "application_end_date"
     */
    public function testPropertyApplicationEndDate()
    {
    }

    /**
     * Test attribute "expected_award_date"
     */
    public function testPropertyExpectedAwardDate()
    {
    }

    /**
     * Test attribute "orientation_date"
     */
    public function testPropertyOrientationDate()
    {
    }

    /**
     * Test attribute "max_registrations"
     */
    public function testPropertyMaxRegistrations()
    {
    }

    /**
     * Test attribute "min_registrations"
     */
    public function testPropertyMinRegistrations()
    {
    }

    /**
     * Test attribute "publish_number"
     */
    public function testPropertyPublishNumber()
    {
    }

    /**
     * Test attribute "publish_name"
     */
    public function testPropertyPublishName()
    {
    }

    /**
     * Test attribute "publish_start_date"
     */
    public function testPropertyPublishStartDate()
    {
    }

    /**
     * Test attribute "publish_end_date"
     */
    public function testPropertyPublishEndDate()
    {
    }

    /**
     * Test attribute "publish_flag"
     */
    public function testPropertyPublishFlag()
    {
    }

    /**
     * Test attribute "accept_enrolments_flag"
     */
    public function testPropertyAcceptEnrolmentsFlag()
    {
    }

    /**
     * Test attribute "coordinator_id"
     */
    public function testPropertyCoordinatorId()
    {
    }

    /**
     * Test attribute "course_offer_type_id"
     */
    public function testPropertyCourseOfferTypeId()
    {
    }

    /**
     * Test attribute "delivery_language_id"
     */
    public function testPropertyDeliveryLanguageId()
    {
    }

    /**
     * Test attribute "duration_type_id"
     */
    public function testPropertyDurationTypeId()
    {
    }

    /**
     * Test attribute "duration_full_time"
     */
    public function testPropertyDurationFullTime()
    {
    }

    /**
     * Test attribute "duration_part_time"
     */
    public function testPropertyDurationPartTime()
    {
    }

    /**
     * Test attribute "delivery_workplace_id"
     */
    public function testPropertyDeliveryWorkplaceId()
    {
    }

    /**
     * Test attribute "for_govt_reporting_flag"
     */
    public function testPropertyForGovtReportingFlag()
    {
    }

    /**
     * Test attribute "program_status_id"
     */
    public function testPropertyProgramStatusId()
    {
    }

    /**
     * Test attribute "contract_type_id"
     */
    public function testPropertyContractTypeId()
    {
    }

    /**
     * Test attribute "commencing_course_id"
     */
    public function testPropertyCommencingCourseId()
    {
    }

    /**
     * Test attribute "av_study_reason_id"
     */
    public function testPropertyAvStudyReasonId()
    {
    }

    /**
     * Test attribute "study_mode_id"
     */
    public function testPropertyStudyModeId()
    {
    }

    /**
     * Test attribute "location_id"
     */
    public function testPropertyLocationId()
    {
    }

    /**
     * Test attribute "delivery_mode_id"
     */
    public function testPropertyDeliveryModeId()
    {
    }

    /**
     * Test attribute "delivery_mode_av8_id"
     */
    public function testPropertyDeliveryModeAv8Id()
    {
    }

    /**
     * Test attribute "predominant_delivery_mode_id"
     */
    public function testPropertyPredominantDeliveryModeId()
    {
    }

    /**
     * Test attribute "fund_source_national_id"
     */
    public function testPropertyFundSourceNationalId()
    {
    }

    /**
     * Test attribute "fund_source_state_id"
     */
    public function testPropertyFundSourceStateId()
    {
    }

    /**
     * Test attribute "contract_id"
     */
    public function testPropertyContractId()
    {
    }

    /**
     * Test attribute "fee_exemption_id"
     */
    public function testPropertyFeeExemptionId()
    {
    }

    /**
     * Test attribute "fee_exemption_waiver_id"
     */
    public function testPropertyFeeExemptionWaiverId()
    {
    }

    /**
     * Test attribute "concession_flag"
     */
    public function testPropertyConcessionFlag()
    {
    }

    /**
     * Test attribute "vet_in_school_flag"
     */
    public function testPropertyVetInSchoolFlag()
    {
    }

    /**
     * Test attribute "internet_based_learning_id"
     */
    public function testPropertyInternetBasedLearningId()
    {
    }

    /**
     * Test attribute "main_subject1_id"
     */
    public function testPropertyMainSubject1Id()
    {
    }

    /**
     * Test attribute "main_subject2_id"
     */
    public function testPropertyMainSubject2Id()
    {
    }

    /**
     * Test attribute "main_subject3_id"
     */
    public function testPropertyMainSubject3Id()
    {
    }

    /**
     * Test attribute "fund_source_id"
     */
    public function testPropertyFundSourceId()
    {
    }

    /**
     * Test attribute "fee_assessment_category_id"
     */
    public function testPropertyFeeAssessmentCategoryId()
    {
    }

    /**
     * Test attribute "mural_attendance_id"
     */
    public function testPropertyMuralAttendanceId()
    {
    }

    /**
     * Test attribute "delivery_mode_wa1_id"
     */
    public function testPropertyDeliveryModeWa1Id()
    {
    }

    /**
     * Test attribute "delivery_mode_wa2_id"
     */
    public function testPropertyDeliveryModeWa2Id()
    {
    }

    /**
     * Test attribute "delivery_mode_wa3_id"
     */
    public function testPropertyDeliveryModeWa3Id()
    {
    }

    /**
     * Test attribute "delivery_option_ids"
     */
    public function testPropertyDeliveryOptionIds()
    {
    }

    /**
     * Test attribute "employer_invoiced_flag"
     */
    public function testPropertyEmployerInvoicedFlag()
    {
    }

    /**
     * Test attribute "funding_removed_flag"
     */
    public function testPropertyFundingRemovedFlag()
    {
    }

    /**
     * Test attribute "overseas_student_fee"
     */
    public function testPropertyOverseasStudentFee()
    {
    }

    /**
     * Test attribute "domestic_student_fee"
     */
    public function testPropertyDomesticStudentFee()
    {
    }

    /**
     * Test attribute "fee_type_indicator_id"
     */
    public function testPropertyFeeTypeIndicatorId()
    {
    }

    /**
     * Test attribute "offshore_delivery_indicator_id"
     */
    public function testPropertyOffshoreDeliveryIndicatorId()
    {
    }

    /**
     * Test attribute "offshore_delivery_mode_id"
     */
    public function testPropertyOffshoreDeliveryModeId()
    {
    }

    /**
     * Test attribute "campus_operation_type_id"
     */
    public function testPropertyCampusOperationTypeId()
    {
    }

    /**
     * Test attribute "commencing_student_identifier_id"
     */
    public function testPropertyCommencingStudentIdentifierId()
    {
    }

    /**
     * Test attribute "estimated_eftsl"
     */
    public function testPropertyEstimatedEftsl()
    {
    }

    /**
     * Test attribute "trainer_id"
     */
    public function testPropertyTrainerId()
    {
    }

    /**
     * Test attribute "assessor_id"
     */
    public function testPropertyAssessorId()
    {
    }

    /**
     * Test attribute "assessment_method_id"
     */
    public function testPropertyAssessmentMethodId()
    {
    }

    /**
     * Test attribute "venue_id"
     */
    public function testPropertyVenueId()
    {
    }

    /**
     * Test attribute "what_to_bring"
     */
    public function testPropertyWhatToBring()
    {
    }

    /**
     * Test attribute "where_to_go"
     */
    public function testPropertyWhereToGo()
    {
    }

    /**
     * Test attribute "unit_hourly_fee"
     */
    public function testPropertyUnitHourlyFee()
    {
    }

    /**
     * Test attribute "course_fees"
     */
    public function testPropertyCourseFees()
    {
    }

    /**
     * Test attribute "course_concession_fees"
     */
    public function testPropertyCourseConcessionFees()
    {
    }

    /**
     * Test attribute "ecaf_course_loan_cap"
     */
    public function testPropertyEcafCourseLoanCap()
    {
    }

    /**
     * Test attribute "is_gst_free_flag"
     */
    public function testPropertyIsGstFreeFlag()
    {
    }

    /**
     * Test attribute "deposit"
     */
    public function testPropertyDeposit()
    {
    }

    /**
     * Test attribute "fees_code"
     */
    public function testPropertyFeesCode()
    {
    }

    /**
     * Test attribute "qtac_flag"
     */
    public function testPropertyQtacFlag()
    {
    }

    /**
     * Test attribute "department_code_id"
     */
    public function testPropertyDepartmentCodeId()
    {
    }

    /**
     * Test attribute "approve1_flag"
     */
    public function testPropertyApprove1Flag()
    {
    }

    /**
     * Test attribute "approve2_flag"
     */
    public function testPropertyApprove2Flag()
    {
    }

    /**
     * Test attribute "approve3_flag"
     */
    public function testPropertyApprove3Flag()
    {
    }

    /**
     * Test attribute "stage"
     */
    public function testPropertyStage()
    {
    }

    /**
     * Test attribute "study_code"
     */
    public function testPropertyStudyCode()
    {
    }

    /**
     * Test attribute "number_of_forms"
     */
    public function testPropertyNumberOfForms()
    {
    }

    /**
     * Test attribute "funding_code"
     */
    public function testPropertyFundingCode()
    {
    }

    /**
     * Test attribute "program_id"
     */
    public function testPropertyProgramId()
    {
    }

    /**
     * Test attribute "cricos_code"
     */
    public function testPropertyCricosCode()
    {
    }

    /**
     * Test attribute "general_notes"
     */
    public function testPropertyGeneralNotes()
    {
    }

    /**
     * Test attribute "hdr_engagement_code"
     */
    public function testPropertyHdrEngagementCode()
    {
    }

    /**
     * Test attribute "specialisation_name"
     */
    public function testPropertySpecialisationName()
    {
    }

    /**
     * Test attribute "last_modified_time_stamp"
     */
    public function testPropertyLastModifiedTimeStamp()
    {
    }
}
