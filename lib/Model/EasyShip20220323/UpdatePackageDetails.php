<?php
/**
 * UpdatePackageDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShip20220323;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * UpdatePackageDetails Class Doc Comment
 *
 * @category Class
 * @description Request to update the time slot of a package.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdatePackageDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdatePackageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scheduledPackageId' => '\SellingPartnerApi\Model\EasyShip20220323\ScheduledPackageId',
'packageTimeSlot' => '\SellingPartnerApi\Model\EasyShip20220323\TimeSlot'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scheduledPackageId' => null,
'packageTimeSlot' => null    ];

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
        'scheduledPackageId' => 'scheduledPackageId',
'packageTimeSlot' => 'packageTimeSlot'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduledPackageId' => 'setScheduledPackageId',
'packageTimeSlot' => 'setPackageTimeSlot'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduledPackageId' => 'getScheduledPackageId',
'packageTimeSlot' => 'getPackageTimeSlot'    ];

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
        $this->container['scheduledPackageId'] = isset($data['scheduledPackageId']) ? $data['scheduledPackageId'] : null;
        $this->container['packageTimeSlot'] = isset($data['packageTimeSlot']) ? $data['packageTimeSlot'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scheduledPackageId'] === null) {
            $invalidProperties[] = "'scheduledPackageId' can't be null";
        }
        if ($this->container['packageTimeSlot'] === null) {
            $invalidProperties[] = "'packageTimeSlot' can't be null";
        }
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
     * Gets scheduledPackageId
     *
     * @return \SellingPartnerApi\Model\EasyShip20220323\ScheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->container['scheduledPackageId'];
    }

    /**
     * Sets scheduledPackageId
     *
     * @param \SellingPartnerApi\Model\EasyShip20220323\ScheduledPackageId $scheduledPackageId scheduledPackageId
     *
     * @return $this
     */
    public function setScheduledPackageId($scheduledPackageId)
    {
        $this->container['scheduledPackageId'] = $scheduledPackageId;

        return $this;
    }

    /**
     * Gets packageTimeSlot
     *
     * @return \SellingPartnerApi\Model\EasyShip20220323\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['packageTimeSlot'];
    }

    /**
     * Sets packageTimeSlot
     *
     * @param \SellingPartnerApi\Model\EasyShip20220323\TimeSlot $packageTimeSlot packageTimeSlot
     *
     * @return $this
     */
    public function setPackageTimeSlot($packageTimeSlot)
    {
        $this->container['packageTimeSlot'] = $packageTimeSlot;

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
