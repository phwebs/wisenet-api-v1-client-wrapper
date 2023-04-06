<?php
/**
 * LearnerAuNextOfKinLocalNextOfKin
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
 * LearnerAuNextOfKinLocalNextOfKin Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearnerAuNextOfKinLocalNextOfKin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LearnerAuNextOfKinLocalNextOfKin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'relationship_id' => 'int',
'first_name' => 'string',
'middle_name' => 'string',
'last_name' => 'string',
'address' => '\Phwebs\Wisenet\Model\LearnerAuNextOfKinLocalNextOfKinAddress',
'occupation' => 'string',
'passport_number' => 'string',
'passport_country_id' => 'int',
'phone_home' => 'string',
'phone_work' => 'string',
'mobile' => 'string',
'email' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'relationship_id' => 'int32',
'first_name' => '20',
'middle_name' => '20',
'last_name' => '40',
'address' => null,
'occupation' => '100',
'passport_number' => '20',
'passport_country_id' => 'int32',
'phone_home' => '20',
'phone_work' => '20',
'mobile' => '20',
'email' => '100'    ];

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
        'relationship_id' => 'RelationshipId',
'first_name' => 'FirstName',
'middle_name' => 'MiddleName',
'last_name' => 'LastName',
'address' => 'Address',
'occupation' => 'Occupation',
'passport_number' => 'PassportNumber',
'passport_country_id' => 'PassportCountryId',
'phone_home' => 'PhoneHome',
'phone_work' => 'PhoneWork',
'mobile' => 'Mobile',
'email' => 'Email'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relationship_id' => 'setRelationshipId',
'first_name' => 'setFirstName',
'middle_name' => 'setMiddleName',
'last_name' => 'setLastName',
'address' => 'setAddress',
'occupation' => 'setOccupation',
'passport_number' => 'setPassportNumber',
'passport_country_id' => 'setPassportCountryId',
'phone_home' => 'setPhoneHome',
'phone_work' => 'setPhoneWork',
'mobile' => 'setMobile',
'email' => 'setEmail'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relationship_id' => 'getRelationshipId',
'first_name' => 'getFirstName',
'middle_name' => 'getMiddleName',
'last_name' => 'getLastName',
'address' => 'getAddress',
'occupation' => 'getOccupation',
'passport_number' => 'getPassportNumber',
'passport_country_id' => 'getPassportCountryId',
'phone_home' => 'getPhoneHome',
'phone_work' => 'getPhoneWork',
'mobile' => 'getMobile',
'email' => 'getEmail'    ];

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
        $this->container['relationship_id'] = isset($data['relationship_id']) ? $data['relationship_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['passport_country_id'] = isset($data['passport_country_id']) ? $data['passport_country_id'] : null;
        $this->container['phone_home'] = isset($data['phone_home']) ? $data['phone_home'] : null;
        $this->container['phone_work'] = isset($data['phone_work']) ? $data['phone_work'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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
     * Gets relationship_id
     *
     * @return int
     */
    public function getRelationshipId()
    {
        return $this->container['relationship_id'];
    }

    /**
     * Sets relationship_id
     *
     * @param int $relationship_id See combo NextOfKinRelationships
     *
     * @return $this
     */
    public function setRelationshipId($relationship_id)
    {
        $this->container['relationship_id'] = $relationship_id;

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
     * @param string $first_name First Name of local next of kin
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
     * @param string $middle_name Middle Name of local next of kin
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
     * @param string $last_name Last Name of local next of kin
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Phwebs\Wisenet\Model\LearnerAuNextOfKinLocalNextOfKinAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Phwebs\Wisenet\Model\LearnerAuNextOfKinLocalNextOfKinAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string $occupation Occupation of local next of kin
     *
     * @return $this
     */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string $passport_number Passport number of local next of kin
     *
     * @return $this
     */
    public function setPassportNumber($passport_number)
    {
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets passport_country_id
     *
     * @return int
     */
    public function getPassportCountryId()
    {
        return $this->container['passport_country_id'];
    }

    /**
     * Sets passport_country_id
     *
     * @param int $passport_country_id See combo Countries
     *
     * @return $this
     */
    public function setPassportCountryId($passport_country_id)
    {
        $this->container['passport_country_id'] = $passport_country_id;

        return $this;
    }

    /**
     * Gets phone_home
     *
     * @return string
     */
    public function getPhoneHome()
    {
        return $this->container['phone_home'];
    }

    /**
     * Sets phone_home
     *
     * @param string $phone_home Home Number of local next of kin
     *
     * @return $this
     */
    public function setPhoneHome($phone_home)
    {
        $this->container['phone_home'] = $phone_home;

        return $this;
    }

    /**
     * Gets phone_work
     *
     * @return string
     */
    public function getPhoneWork()
    {
        return $this->container['phone_work'];
    }

    /**
     * Sets phone_work
     *
     * @param string $phone_work Work Number of local next of kin
     *
     * @return $this
     */
    public function setPhoneWork($phone_work)
    {
        $this->container['phone_work'] = $phone_work;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile Mobile Number of local next of kin. Accepts numbers only. International format is preferable eg. +614xxxxxxxxx\".
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email Address of local next of kin
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
