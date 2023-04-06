<?php
/**
 * UnitEnrolmentRelationshipsTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client;

use PHPUnit\Framework\TestCase;

/**
 * UnitEnrolmentRelationshipsTest Class Doc Comment
 *
 * @category    Class
 * @description UnitEnrolmentRelationships
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UnitEnrolmentRelationshipsTest extends TestCase
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
     * Test "UnitEnrolmentRelationships"
     */
    public function testUnitEnrolmentRelationships()
    {
    }

    /**
     * Test attribute "assessment_method"
     */
    public function testPropertyAssessmentMethod()
    {
    }

    /**
     * Test attribute "unit"
     */
    public function testPropertyUnit()
    {
    }

    /**
     * Test attribute "unit_offer"
     */
    public function testPropertyUnitOffer()
    {
    }

    /**
     * Test attribute "course_enrolment"
     */
    public function testPropertyCourseEnrolment()
    {
    }

    /**
     * Test attribute "learner"
     */
    public function testPropertyLearner()
    {
    }

    /**
     * Test attribute "course_offer"
     */
    public function testPropertyCourseOffer()
    {
    }

    /**
     * Test attribute "contract"
     */
    public function testPropertyContract()
    {
    }

    /**
     * Test attribute "location"
     */
    public function testPropertyLocation()
    {
    }

    /**
     * Test attribute "assessor"
     */
    public function testPropertyAssessor()
    {
    }

    /**
     * Test attribute "trainer"
     */
    public function testPropertyTrainer()
    {
    }

    /**
     * Test attribute "specific_program_identifier"
     */
    public function testPropertySpecificProgramIdentifier()
    {
    }

    /**
     * Test attribute "fee_exemption"
     */
    public function testPropertyFeeExemption()
    {
    }

    /**
     * Test attribute "fee_exemption_waiver"
     */
    public function testPropertyFeeExemptionWaiver()
    {
    }

    /**
     * Test attribute "result"
     */
    public function testPropertyResult()
    {
    }

    /**
     * Test attribute "outcome"
     */
    public function testPropertyOutcome()
    {
    }

    /**
     * Test attribute "delivery_mode"
     */
    public function testPropertyDeliveryMode()
    {
    }

    /**
     * Test attribute "fund_source_national"
     */
    public function testPropertyFundSourceNational()
    {
    }

    /**
     * Test attribute "fund_source_state"
     */
    public function testPropertyFundSourceState()
    {
    }

    /**
     * Test attribute "nz_fee_assessment_category"
     */
    public function testPropertyNzFeeAssessmentCategory()
    {
    }

    /**
     * Test attribute "nz_murual_attendance"
     */
    public function testPropertyNzMurualAttendance()
    {
    }

    /**
     * Test attribute "nz_outcome"
     */
    public function testPropertyNzOutcome()
    {
    }

    /**
     * Test attribute "nz_result"
     */
    public function testPropertyNzResult()
    {
    }

    /**
     * Test attribute "nz_fund_source"
     */
    public function testPropertyNzFundSource()
    {
    }

    /**
     * Test attribute "work_place"
     */
    public function testPropertyWorkPlace()
    {
    }

    /**
     * Test attribute "delivery_mode_av8"
     */
    public function testPropertyDeliveryModeAv8()
    {
    }

    /**
     * Test attribute "predominant_delivery_mode"
     */
    public function testPropertyPredominantDeliveryMode()
    {
    }

    /**
     * Test attribute "delivery_mode_wa1"
     */
    public function testPropertyDeliveryModeWa1()
    {
    }

    /**
     * Test attribute "delivery_mode_wa2"
     */
    public function testPropertyDeliveryModeWa2()
    {
    }

    /**
     * Test attribute "delivery_mode_wa3"
     */
    public function testPropertyDeliveryModeWa3()
    {
    }
}