<?php
/**
 * ElementEnrolment
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
 * ElementEnrolment Class Doc Comment
 *
 * @category Class
 * @package  Phwebs\Wisenet
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementEnrolment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ElementEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'element_enrolment_id' => 'int',
'element_id' => 'int',
'unit_enrolment_id' => 'int',
'trainer_id' => 'int',
'element_enrolment_status_id' => 'int',
'date_assessed' => '\DateTime',
'result' => 'string',
'last_modified_time_stamp' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'element_enrolment_id' => 'int32',
'element_id' => 'int32',
'unit_enrolment_id' => 'int32',
'trainer_id' => 'int32',
'element_enrolment_status_id' => 'int32',
'date_assessed' => 'date-time',
'result' => null,
'last_modified_time_stamp' => 'date-time'    ];

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
        'element_enrolment_id' => 'ElementEnrolmentId',
'element_id' => 'ElementId',
'unit_enrolment_id' => 'UnitEnrolmentId',
'trainer_id' => 'TrainerId',
'element_enrolment_status_id' => 'ElementEnrolmentStatusId',
'date_assessed' => 'DateAssessed',
'result' => 'Result',
'last_modified_time_stamp' => 'LastModifiedTimeStamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'element_enrolment_id' => 'setElementEnrolmentId',
'element_id' => 'setElementId',
'unit_enrolment_id' => 'setUnitEnrolmentId',
'trainer_id' => 'setTrainerId',
'element_enrolment_status_id' => 'setElementEnrolmentStatusId',
'date_assessed' => 'setDateAssessed',
'result' => 'setResult',
'last_modified_time_stamp' => 'setLastModifiedTimeStamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'element_enrolment_id' => 'getElementEnrolmentId',
'element_id' => 'getElementId',
'unit_enrolment_id' => 'getUnitEnrolmentId',
'trainer_id' => 'getTrainerId',
'element_enrolment_status_id' => 'getElementEnrolmentStatusId',
'date_assessed' => 'getDateAssessed',
'result' => 'getResult',
'last_modified_time_stamp' => 'getLastModifiedTimeStamp'    ];

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
        $this->container['element_enrolment_id'] = isset($data['element_enrolment_id']) ? $data['element_enrolment_id'] : null;
        $this->container['element_id'] = isset($data['element_id']) ? $data['element_id'] : null;
        $this->container['unit_enrolment_id'] = isset($data['unit_enrolment_id']) ? $data['unit_enrolment_id'] : null;
        $this->container['trainer_id'] = isset($data['trainer_id']) ? $data['trainer_id'] : null;
        $this->container['element_enrolment_status_id'] = isset($data['element_enrolment_status_id']) ? $data['element_enrolment_status_id'] : null;
        $this->container['date_assessed'] = isset($data['date_assessed']) ? $data['date_assessed'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['last_modified_time_stamp'] = isset($data['last_modified_time_stamp']) ? $data['last_modified_time_stamp'] : null;
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
     * Gets element_enrolment_id
     *
     * @return int
     */
    public function getElementEnrolmentId()
    {
        return $this->container['element_enrolment_id'];
    }

    /**
     * Sets element_enrolment_id
     *
     * @param int $element_enrolment_id Primary Id for ElementEnrolment that is auto generated
     *
     * @return $this
     */
    public function setElementEnrolmentId($element_enrolment_id)
    {
        $this->container['element_enrolment_id'] = $element_enrolment_id;

        return $this;
    }

    /**
     * Gets element_id
     *
     * @return int
     */
    public function getElementId()
    {
        return $this->container['element_id'];
    }

    /**
     * Sets element_id
     *
     * @param int $element_id See entity Elements
     *
     * @return $this
     */
    public function setElementId($element_id)
    {
        $this->container['element_id'] = $element_id;

        return $this;
    }

    /**
     * Gets unit_enrolment_id
     *
     * @return int
     */
    public function getUnitEnrolmentId()
    {
        return $this->container['unit_enrolment_id'];
    }

    /**
     * Sets unit_enrolment_id
     *
     * @param int $unit_enrolment_id See entity UnitEnrolments
     *
     * @return $this
     */
    public function setUnitEnrolmentId($unit_enrolment_id)
    {
        $this->container['unit_enrolment_id'] = $unit_enrolment_id;

        return $this;
    }

    /**
     * Gets trainer_id
     *
     * @return int
     */
    public function getTrainerId()
    {
        return $this->container['trainer_id'];
    }

    /**
     * Sets trainer_id
     *
     * @param int $trainer_id See entity Trainers
     *
     * @return $this
     */
    public function setTrainerId($trainer_id)
    {
        $this->container['trainer_id'] = $trainer_id;

        return $this;
    }

    /**
     * Gets element_enrolment_status_id
     *
     * @return int
     */
    public function getElementEnrolmentStatusId()
    {
        return $this->container['element_enrolment_status_id'];
    }

    /**
     * Sets element_enrolment_status_id
     *
     * @param int $element_enrolment_status_id Element enrolment status
     *
     * @return $this
     */
    public function setElementEnrolmentStatusId($element_enrolment_status_id)
    {
        $this->container['element_enrolment_status_id'] = $element_enrolment_status_id;

        return $this;
    }

    /**
     * Gets date_assessed
     *
     * @return \DateTime
     */
    public function getDateAssessed()
    {
        return $this->container['date_assessed'];
    }

    /**
     * Sets date_assessed
     *
     * @param \DateTime $date_assessed Date ElementEnrolment is Assessed
     *
     * @return $this
     */
    public function setDateAssessed($date_assessed)
    {
        $this->container['date_assessed'] = $date_assessed;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result Result of ElementEnrolment
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets last_modified_time_stamp
     *
     * @return \DateTime
     */
    public function getLastModifiedTimeStamp()
    {
        return $this->container['last_modified_time_stamp'];
    }

    /**
     * Sets last_modified_time_stamp
     *
     * @param \DateTime $last_modified_time_stamp Date when the ElementEnrolment was last modified
     *
     * @return $this
     */
    public function setLastModifiedTimeStamp($last_modified_time_stamp)
    {
        $this->container['last_modified_time_stamp'] = $last_modified_time_stamp;

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
