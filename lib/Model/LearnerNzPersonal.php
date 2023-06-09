<?php
/**
 * LearnerNzPersonal
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
 * Do not edit the class manually.
 */

namespace Phwebs\Wisenet\Model;

use \ArrayAccess;
use \Phwebs\Wisenet\ObjectSerializer;

/**
 * LearnerNzPersonal Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerNzPersonal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerNzPersonal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_active' => 'bool',
'title' => 'string',
'first_name' => 'string',
'middle_name' => 'string',
'last_name' => 'string',
'suffix' => 'string',
'preferred_named' => 'string',
'previous_name' => 'string',
'date_of_birth' => '\DateTime',
'gender_id' => 'int',
'national_student_number' => 'string',
'ird_number' => 'string',
'public_trust_number' => 'string',
'winz_number' => 'string',
'learner_alt1_number' => 'string',
'learner_alt2_number' => 'string',
'learner_number' => 'string',
'learner_export_number' => 'string',
'driver_license' => 'string',
'target_group_id' => 'int',
'sync_to_xero' => 'bool',
'phone_numbers' => '\Phwebs\Wisenet\Model\LearnerNzPersonalPhoneNumbers',
'email_addresses' => '\Phwebs\Wisenet\Model\LearnerNzPersonalEmailAddresses',
'website_url' => 'string',
'request_privacy' => 'bool',
'street_address' => '\Phwebs\Wisenet\Model\LearnerNzPersonalStreetAddress',
'postal_address' => '\Phwebs\Wisenet\Model\LearnerNzPersonalPostalAddress',
'permanent_address' => '\Phwebs\Wisenet\Model\LearnerNzPersonalPermanentAddress',
'healthcare_opt_out' => 'bool',
'healthcare_number' => 'string',
'healthcare_expiry_date' => '\DateTime',
'general_notes' => 'string',
'special_requirements' => 'string',
'fees_free_eligible_id' => 'int',
'total_fee2018' => 'double',
'total_fee2019' => 'double',
'total_fee2020' => 'double',
'total_fee2021' => 'double',
'total_fee2022' => 'double',
'total_fee2023' => 'double',
'vaccine_status_id' => 'int',
'vaccine_status_notes' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_active' => null,
'title' => '20',
'first_name' => '50',
'middle_name' => '50',
'last_name' => '50',
'suffix' => '50',
'preferred_named' => '20',
'previous_name' => '50',
'date_of_birth' => 'date-time',
'gender_id' => 'int32',
'national_student_number' => '10',
'ird_number' => '10',
'public_trust_number' => '50',
'winz_number' => '50',
'learner_alt1_number' => '50',
'learner_alt2_number' => '50',
'learner_number' => '10',
'learner_export_number' => '25',
'driver_license' => '50',
'target_group_id' => 'int32',
'sync_to_xero' => null,
'phone_numbers' => null,
'email_addresses' => null,
'website_url' => '100',
'request_privacy' => null,
'street_address' => null,
'postal_address' => null,
'permanent_address' => null,
'healthcare_opt_out' => null,
'healthcare_number' => '20',
'healthcare_expiry_date' => 'date-time',
'general_notes' => '3000',
'special_requirements' => '1000',
'fees_free_eligible_id' => 'int32',
'total_fee2018' => 'double',
'total_fee2019' => 'double',
'total_fee2020' => 'double',
'total_fee2021' => 'double',
'total_fee2022' => 'double',
'total_fee2023' => 'double',
'vaccine_status_id' => 'int32',
'vaccine_status_notes' => '1000'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_active' => 'IsActive',
'title' => 'Title',
'first_name' => 'FirstName',
'middle_name' => 'MiddleName',
'last_name' => 'LastName',
'suffix' => 'Suffix',
'preferred_named' => 'PreferredNamed',
'previous_name' => 'PreviousName',
'date_of_birth' => 'DateOfBirth',
'gender_id' => 'GenderId',
'national_student_number' => 'NationalStudentNumber',
'ird_number' => 'IrdNumber',
'public_trust_number' => 'PublicTrustNumber',
'winz_number' => 'WinzNumber',
'learner_alt1_number' => 'LearnerAlt1Number',
'learner_alt2_number' => 'LearnerAlt2Number',
'learner_number' => 'LearnerNumber',
'learner_export_number' => 'LearnerExportNumber',
'driver_license' => 'DriverLicense',
'target_group_id' => 'TargetGroupId',
'sync_to_xero' => 'SyncToXero',
'phone_numbers' => 'PhoneNumbers',
'email_addresses' => 'EmailAddresses',
'website_url' => 'WebsiteUrl',
'request_privacy' => 'RequestPrivacy',
'street_address' => 'StreetAddress',
'postal_address' => 'PostalAddress',
'permanent_address' => 'PermanentAddress',
'healthcare_opt_out' => 'HealthcareOptOut',
'healthcare_number' => 'HealthcareNumber',
'healthcare_expiry_date' => 'HealthcareExpiryDate',
'general_notes' => 'GeneralNotes',
'special_requirements' => 'SpecialRequirements',
'fees_free_eligible_id' => 'FeesFreeEligibleId',
'total_fee2018' => 'TotalFee2018',
'total_fee2019' => 'TotalFee2019',
'total_fee2020' => 'TotalFee2020',
'total_fee2021' => 'TotalFee2021',
'total_fee2022' => 'TotalFee2022',
'total_fee2023' => 'TotalFee2023',
'vaccine_status_id' => 'VaccineStatusId',
'vaccine_status_notes' => 'VaccineStatusNotes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_active' => 'setIsActive',
'title' => 'setTitle',
'first_name' => 'setFirstName',
'middle_name' => 'setMiddleName',
'last_name' => 'setLastName',
'suffix' => 'setSuffix',
'preferred_named' => 'setPreferredNamed',
'previous_name' => 'setPreviousName',
'date_of_birth' => 'setDateOfBirth',
'gender_id' => 'setGenderId',
'national_student_number' => 'setNationalStudentNumber',
'ird_number' => 'setIrdNumber',
'public_trust_number' => 'setPublicTrustNumber',
'winz_number' => 'setWinzNumber',
'learner_alt1_number' => 'setLearnerAlt1Number',
'learner_alt2_number' => 'setLearnerAlt2Number',
'learner_number' => 'setLearnerNumber',
'learner_export_number' => 'setLearnerExportNumber',
'driver_license' => 'setDriverLicense',
'target_group_id' => 'setTargetGroupId',
'sync_to_xero' => 'setSyncToXero',
'phone_numbers' => 'setPhoneNumbers',
'email_addresses' => 'setEmailAddresses',
'website_url' => 'setWebsiteUrl',
'request_privacy' => 'setRequestPrivacy',
'street_address' => 'setStreetAddress',
'postal_address' => 'setPostalAddress',
'permanent_address' => 'setPermanentAddress',
'healthcare_opt_out' => 'setHealthcareOptOut',
'healthcare_number' => 'setHealthcareNumber',
'healthcare_expiry_date' => 'setHealthcareExpiryDate',
'general_notes' => 'setGeneralNotes',
'special_requirements' => 'setSpecialRequirements',
'fees_free_eligible_id' => 'setFeesFreeEligibleId',
'total_fee2018' => 'setTotalFee2018',
'total_fee2019' => 'setTotalFee2019',
'total_fee2020' => 'setTotalFee2020',
'total_fee2021' => 'setTotalFee2021',
'total_fee2022' => 'setTotalFee2022',
'total_fee2023' => 'setTotalFee2023',
'vaccine_status_id' => 'setVaccineStatusId',
'vaccine_status_notes' => 'setVaccineStatusNotes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_active' => 'getIsActive',
'title' => 'getTitle',
'first_name' => 'getFirstName',
'middle_name' => 'getMiddleName',
'last_name' => 'getLastName',
'suffix' => 'getSuffix',
'preferred_named' => 'getPreferredNamed',
'previous_name' => 'getPreviousName',
'date_of_birth' => 'getDateOfBirth',
'gender_id' => 'getGenderId',
'national_student_number' => 'getNationalStudentNumber',
'ird_number' => 'getIrdNumber',
'public_trust_number' => 'getPublicTrustNumber',
'winz_number' => 'getWinzNumber',
'learner_alt1_number' => 'getLearnerAlt1Number',
'learner_alt2_number' => 'getLearnerAlt2Number',
'learner_number' => 'getLearnerNumber',
'learner_export_number' => 'getLearnerExportNumber',
'driver_license' => 'getDriverLicense',
'target_group_id' => 'getTargetGroupId',
'sync_to_xero' => 'getSyncToXero',
'phone_numbers' => 'getPhoneNumbers',
'email_addresses' => 'getEmailAddresses',
'website_url' => 'getWebsiteUrl',
'request_privacy' => 'getRequestPrivacy',
'street_address' => 'getStreetAddress',
'postal_address' => 'getPostalAddress',
'permanent_address' => 'getPermanentAddress',
'healthcare_opt_out' => 'getHealthcareOptOut',
'healthcare_number' => 'getHealthcareNumber',
'healthcare_expiry_date' => 'getHealthcareExpiryDate',
'general_notes' => 'getGeneralNotes',
'special_requirements' => 'getSpecialRequirements',
'fees_free_eligible_id' => 'getFeesFreeEligibleId',
'total_fee2018' => 'getTotalFee2018',
'total_fee2019' => 'getTotalFee2019',
'total_fee2020' => 'getTotalFee2020',
'total_fee2021' => 'getTotalFee2021',
'total_fee2022' => 'getTotalFee2022',
'total_fee2023' => 'getTotalFee2023',
'vaccine_status_id' => 'getVaccineStatusId',
'vaccine_status_notes' => 'getVaccineStatusNotes'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['preferred_named'] = isset($data['preferred_named']) ? $data['preferred_named'] : null;
        $this->container['previous_name'] = isset($data['previous_name']) ? $data['previous_name'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['gender_id'] = isset($data['gender_id']) ? $data['gender_id'] : null;
        $this->container['national_student_number'] = isset($data['national_student_number']) ? $data['national_student_number'] : null;
        $this->container['ird_number'] = isset($data['ird_number']) ? $data['ird_number'] : null;
        $this->container['public_trust_number'] = isset($data['public_trust_number']) ? $data['public_trust_number'] : null;
        $this->container['winz_number'] = isset($data['winz_number']) ? $data['winz_number'] : null;
        $this->container['learner_alt1_number'] = isset($data['learner_alt1_number']) ? $data['learner_alt1_number'] : null;
        $this->container['learner_alt2_number'] = isset($data['learner_alt2_number']) ? $data['learner_alt2_number'] : null;
        $this->container['learner_number'] = isset($data['learner_number']) ? $data['learner_number'] : null;
        $this->container['learner_export_number'] = isset($data['learner_export_number']) ? $data['learner_export_number'] : null;
        $this->container['driver_license'] = isset($data['driver_license']) ? $data['driver_license'] : null;
        $this->container['target_group_id'] = isset($data['target_group_id']) ? $data['target_group_id'] : null;
        $this->container['sync_to_xero'] = isset($data['sync_to_xero']) ? $data['sync_to_xero'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['request_privacy'] = isset($data['request_privacy']) ? $data['request_privacy'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['permanent_address'] = isset($data['permanent_address']) ? $data['permanent_address'] : null;
        $this->container['healthcare_opt_out'] = isset($data['healthcare_opt_out']) ? $data['healthcare_opt_out'] : null;
        $this->container['healthcare_number'] = isset($data['healthcare_number']) ? $data['healthcare_number'] : null;
        $this->container['healthcare_expiry_date'] = isset($data['healthcare_expiry_date']) ? $data['healthcare_expiry_date'] : null;
        $this->container['general_notes'] = isset($data['general_notes']) ? $data['general_notes'] : null;
        $this->container['special_requirements'] = isset($data['special_requirements']) ? $data['special_requirements'] : null;
        $this->container['fees_free_eligible_id'] = isset($data['fees_free_eligible_id']) ? $data['fees_free_eligible_id'] : null;
        $this->container['total_fee2018'] = isset($data['total_fee2018']) ? $data['total_fee2018'] : null;
        $this->container['total_fee2019'] = isset($data['total_fee2019']) ? $data['total_fee2019'] : null;
        $this->container['total_fee2020'] = isset($data['total_fee2020']) ? $data['total_fee2020'] : null;
        $this->container['total_fee2021'] = isset($data['total_fee2021']) ? $data['total_fee2021'] : null;
        $this->container['total_fee2022'] = isset($data['total_fee2022']) ? $data['total_fee2022'] : null;
        $this->container['total_fee2023'] = isset($data['total_fee2023']) ? $data['total_fee2023'] : null;
        $this->container['vaccine_status_id'] = isset($data['vaccine_status_id']) ? $data['vaccine_status_id'] : null;
        $this->container['vaccine_status_notes'] = isset($data['vaccine_status_notes']) ? $data['vaccine_status_notes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active To indicate if the learner is active or not
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Preferred title of the learner. For example: Mr, Mrs, Miss, Ms, Dr, Rev, Hon etc.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of learner
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name Middle name of learner
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of learner
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix Suffix of the learner. For example: Jr, Sr etc.
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets preferred_named
     *
     * @return string
     */
    public function getPreferredNamed()
    {
        return $this->container['preferred_named'];
    }

    /**
     * Sets preferred_named
     *
     * @param string $preferred_named Preferred informal name of learner
     *
     * @return $this
     */
    public function setPreferredNamed($preferred_named)
    {
        $this->container['preferred_named'] = $preferred_named;

        return $this;
    }

    /**
     * Gets previous_name
     *
     * @return string
     */
    public function getPreviousName()
    {
        return $this->container['previous_name'];
    }

    /**
     * Sets previous_name
     *
     * @param string $previous_name Maiden name or any previous name of the learner
     *
     * @return $this
     */
    public function setPreviousName($previous_name)
    {
        $this->container['previous_name'] = $previous_name;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth Date of the birth of the learner
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender_id
     *
     * @return int
     */
    public function getGenderId()
    {
        return $this->container['gender_id'];
    }

    /**
     * Sets gender_id
     *
     * @param int $gender_id See combos NzGenders
     *
     * @return $this
     */
    public function setGenderId($gender_id)
    {
        $this->container['gender_id'] = $gender_id;

        return $this;
    }

    /**
     * Gets national_student_number
     *
     * @return string
     */
    public function getNationalStudentNumber()
    {
        return $this->container['national_student_number'];
    }

    /**
     * Sets national_student_number
     *
     * @param string $national_student_number National Student Number of the learner
     *
     * @return $this
     */
    public function setNationalStudentNumber($national_student_number)
    {
        $this->container['national_student_number'] = $national_student_number;

        return $this;
    }

    /**
     * Gets ird_number
     *
     * @return string
     */
    public function getIrdNumber()
    {
        return $this->container['ird_number'];
    }

    /**
     * Sets ird_number
     *
     * @param string $ird_number IRD number of the learner
     *
     * @return $this
     */
    public function setIrdNumber($ird_number)
    {
        $this->container['ird_number'] = $ird_number;

        return $this;
    }

    /**
     * Gets public_trust_number
     *
     * @return string
     */
    public function getPublicTrustNumber()
    {
        return $this->container['public_trust_number'];
    }

    /**
     * Sets public_trust_number
     *
     * @param string $public_trust_number Related Public Trust Number
     *
     * @return $this
     */
    public function setPublicTrustNumber($public_trust_number)
    {
        $this->container['public_trust_number'] = $public_trust_number;

        return $this;
    }

    /**
     * Gets winz_number
     *
     * @return string
     */
    public function getWinzNumber()
    {
        return $this->container['winz_number'];
    }

    /**
     * Sets winz_number
     *
     * @param string $winz_number WINZ Number of the learner
     *
     * @return $this
     */
    public function setWinzNumber($winz_number)
    {
        $this->container['winz_number'] = $winz_number;

        return $this;
    }

    /**
     * Gets learner_alt1_number
     *
     * @return string
     */
    public function getLearnerAlt1Number()
    {
        return $this->container['learner_alt1_number'];
    }

    /**
     * Sets learner_alt1_number
     *
     * @param string $learner_alt1_number RefExternal. An alternative custom identifier for external purposes
     *
     * @return $this
     */
    public function setLearnerAlt1Number($learner_alt1_number)
    {
        $this->container['learner_alt1_number'] = $learner_alt1_number;

        return $this;
    }

    /**
     * Gets learner_alt2_number
     *
     * @return string
     */
    public function getLearnerAlt2Number()
    {
        return $this->container['learner_alt2_number'];
    }

    /**
     * Sets learner_alt2_number
     *
     * @param string $learner_alt2_number Ref External Plus. An alternative custom identifier
     *
     * @return $this
     */
    public function setLearnerAlt2Number($learner_alt2_number)
    {
        $this->container['learner_alt2_number'] = $learner_alt2_number;

        return $this;
    }

    /**
     * Gets learner_number
     *
     * @return string
     */
    public function getLearnerNumber()
    {
        return $this->container['learner_number'];
    }

    /**
     * Sets learner_number
     *
     * @param string $learner_number Auto generated unique learner identifier
     *
     * @return $this
     */
    public function setLearnerNumber($learner_number)
    {
        $this->container['learner_number'] = $learner_number;

        return $this;
    }

    /**
     * Gets learner_export_number
     *
     * @return string
     */
    public function getLearnerExportNumber()
    {
        return $this->container['learner_export_number'];
    }

    /**
     * Sets learner_export_number
     *
     * @param string $learner_export_number Auto generated unique learner identifier used for export purposes
     *
     * @return $this
     */
    public function setLearnerExportNumber($learner_export_number)
    {
        $this->container['learner_export_number'] = $learner_export_number;

        return $this;
    }

    /**
     * Gets driver_license
     *
     * @return string
     */
    public function getDriverLicense()
    {
        return $this->container['driver_license'];
    }

    /**
     * Sets driver_license
     *
     * @param string $driver_license Driver License
     *
     * @return $this
     */
    public function setDriverLicense($driver_license)
    {
        $this->container['driver_license'] = $driver_license;

        return $this;
    }

    /**
     * Gets target_group_id
     *
     * @return int
     */
    public function getTargetGroupId()
    {
        return $this->container['target_group_id'];
    }

    /**
     * Sets target_group_id
     *
     * @param int $target_group_id See combo TargetGroupsLearner
     *
     * @return $this
     */
    public function setTargetGroupId($target_group_id)
    {
        $this->container['target_group_id'] = $target_group_id;

        return $this;
    }

    /**
     * Gets sync_to_xero
     *
     * @return bool
     */
    public function getSyncToXero()
    {
        return $this->container['sync_to_xero'];
    }

    /**
     * Sets sync_to_xero
     *
     * @param bool $sync_to_xero To indicate if the learner should be synced to Xero or not
     *
     * @return $this
     */
    public function setSyncToXero($sync_to_xero)
    {
        $this->container['sync_to_xero'] = $sync_to_xero;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalPhoneNumbers
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzPersonalPhoneNumbers $phone_numbers phone_numbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalEmailAddresses
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzPersonalEmailAddresses $email_addresses email_addresses
     *
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Any website URL relevant to learner contact details
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets request_privacy
     *
     * @return bool
     */
    public function getRequestPrivacy()
    {
        return $this->container['request_privacy'];
    }

    /**
     * Sets request_privacy
     *
     * @param bool $request_privacy To indicate if the learner requests privacy or not
     *
     * @return $this
     */
    public function setRequestPrivacy($request_privacy)
    {
        $this->container['request_privacy'] = $request_privacy;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalStreetAddress
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzPersonalStreetAddress $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalPostalAddress
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzPersonalPostalAddress $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets permanent_address
     *
     * @return \Phwebs\Wisenet\Model\LearnerNzPersonalPermanentAddress
     */
    public function getPermanentAddress()
    {
        return $this->container['permanent_address'];
    }

    /**
     * Sets permanent_address
     *
     * @param \Phwebs\Wisenet\Model\LearnerNzPersonalPermanentAddress $permanent_address permanent_address
     *
     * @return $this
     */
    public function setPermanentAddress($permanent_address)
    {
        $this->container['permanent_address'] = $permanent_address;

        return $this;
    }

    /**
     * Gets healthcare_opt_out
     *
     * @return bool
     */
    public function getHealthcareOptOut()
    {
        return $this->container['healthcare_opt_out'];
    }

    /**
     * Sets healthcare_opt_out
     *
     * @param bool $healthcare_opt_out To indicate if the learner opts out of health care
     *
     * @return $this
     */
    public function setHealthcareOptOut($healthcare_opt_out)
    {
        $this->container['healthcare_opt_out'] = $healthcare_opt_out;

        return $this;
    }

    /**
     * Gets healthcare_number
     *
     * @return string
     */
    public function getHealthcareNumber()
    {
        return $this->container['healthcare_number'];
    }

    /**
     * Sets healthcare_number
     *
     * @param string $healthcare_number Health Care Number of the learner
     *
     * @return $this
     */
    public function setHealthcareNumber($healthcare_number)
    {
        $this->container['healthcare_number'] = $healthcare_number;

        return $this;
    }

    /**
     * Gets healthcare_expiry_date
     *
     * @return \DateTime
     */
    public function getHealthcareExpiryDate()
    {
        return $this->container['healthcare_expiry_date'];
    }

    /**
     * Sets healthcare_expiry_date
     *
     * @param \DateTime $healthcare_expiry_date Expiry Date of learner's health care
     *
     * @return $this
     */
    public function setHealthcareExpiryDate($healthcare_expiry_date)
    {
        $this->container['healthcare_expiry_date'] = $healthcare_expiry_date;

        return $this;
    }

    /**
     * Gets general_notes
     *
     * @return string
     */
    public function getGeneralNotes()
    {
        return $this->container['general_notes'];
    }

    /**
     * Sets general_notes
     *
     * @param string $general_notes General notes related to the learner
     *
     * @return $this
     */
    public function setGeneralNotes($general_notes)
    {
        $this->container['general_notes'] = $general_notes;

        return $this;
    }

    /**
     * Gets special_requirements
     *
     * @return string
     */
    public function getSpecialRequirements()
    {
        return $this->container['special_requirements'];
    }

    /**
     * Sets special_requirements
     *
     * @param string $special_requirements Any special requirements that the learner might have
     *
     * @return $this
     */
    public function setSpecialRequirements($special_requirements)
    {
        $this->container['special_requirements'] = $special_requirements;

        return $this;
    }

    /**
     * Gets fees_free_eligible_id
     *
     * @return int
     */
    public function getFeesFreeEligibleId()
    {
        return $this->container['fees_free_eligible_id'];
    }

    /**
     * Sets fees_free_eligible_id
     *
     * @param int $fees_free_eligible_id See combo FeesFreeEligibles
     *
     * @return $this
     */
    public function setFeesFreeEligibleId($fees_free_eligible_id)
    {
        $this->container['fees_free_eligible_id'] = $fees_free_eligible_id;

        return $this;
    }

    /**
     * Gets total_fee2018
     *
     * @return double
     */
    public function getTotalFee2018()
    {
        return $this->container['total_fee2018'];
    }

    /**
     * Sets total_fee2018
     *
     * @param double $total_fee2018 Total Tuition Fee in 2018
     *
     * @return $this
     */
    public function setTotalFee2018($total_fee2018)
    {
        $this->container['total_fee2018'] = $total_fee2018;

        return $this;
    }

    /**
     * Gets total_fee2019
     *
     * @return double
     */
    public function getTotalFee2019()
    {
        return $this->container['total_fee2019'];
    }

    /**
     * Sets total_fee2019
     *
     * @param double $total_fee2019 Total Tuition Fee in 2019
     *
     * @return $this
     */
    public function setTotalFee2019($total_fee2019)
    {
        $this->container['total_fee2019'] = $total_fee2019;

        return $this;
    }

    /**
     * Gets total_fee2020
     *
     * @return double
     */
    public function getTotalFee2020()
    {
        return $this->container['total_fee2020'];
    }

    /**
     * Sets total_fee2020
     *
     * @param double $total_fee2020 Total Tuition Fee in 2020
     *
     * @return $this
     */
    public function setTotalFee2020($total_fee2020)
    {
        $this->container['total_fee2020'] = $total_fee2020;

        return $this;
    }

    /**
     * Gets total_fee2021
     *
     * @return double
     */
    public function getTotalFee2021()
    {
        return $this->container['total_fee2021'];
    }

    /**
     * Sets total_fee2021
     *
     * @param double $total_fee2021 Total Tuition Fee in 2021
     *
     * @return $this
     */
    public function setTotalFee2021($total_fee2021)
    {
        $this->container['total_fee2021'] = $total_fee2021;

        return $this;
    }

    /**
     * Gets total_fee2022
     *
     * @return double
     */
    public function getTotalFee2022()
    {
        return $this->container['total_fee2022'];
    }

    /**
     * Sets total_fee2022
     *
     * @param double $total_fee2022 Total Tuition Fee in 2022
     *
     * @return $this
     */
    public function setTotalFee2022($total_fee2022)
    {
        $this->container['total_fee2022'] = $total_fee2022;

        return $this;
    }

    /**
     * Gets total_fee2023
     *
     * @return double
     */
    public function getTotalFee2023()
    {
        return $this->container['total_fee2023'];
    }

    /**
     * Sets total_fee2023
     *
     * @param double $total_fee2023 Total Tuition Fee in 2023
     *
     * @return $this
     */
    public function setTotalFee2023($total_fee2023)
    {
        $this->container['total_fee2023'] = $total_fee2023;

        return $this;
    }

    /**
     * Gets vaccine_status_id
     *
     * @return int
     */
    public function getVaccineStatusId()
    {
        return $this->container['vaccine_status_id'];
    }

    /**
     * Sets vaccine_status_id
     *
     * @param int $vaccine_status_id Vaccine Status Id
     *
     * @return $this
     */
    public function setVaccineStatusId($vaccine_status_id)
    {
        $this->container['vaccine_status_id'] = $vaccine_status_id;

        return $this;
    }

    /**
     * Gets vaccine_status_notes
     *
     * @return string
     */
    public function getVaccineStatusNotes()
    {
        return $this->container['vaccine_status_notes'];
    }

    /**
     * Sets vaccine_status_notes
     *
     * @param string $vaccine_status_notes Vaccination notes
     *
     * @return $this
     */
    public function setVaccineStatusNotes($vaccine_status_notes)
    {
        $this->container['vaccine_status_notes'] = $vaccine_status_notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
