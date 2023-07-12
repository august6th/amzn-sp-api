<?php
/**
 * AppointmentSlotReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * AppointmentSlotReport Class Doc Comment
 *
 * @category Class
 * @description Availability information as per the service context queried.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppointmentSlotReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppointmentSlotReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scheduling_type' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'appointment_slots' => '\SellingPartnerApi\Model\AppointmentSlot[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scheduling_type' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'appointment_slots' => null
    ];

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
        'scheduling_type' => 'schedulingType',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'appointment_slots' => 'appointmentSlots'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduling_type' => 'setSchedulingType',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'appointment_slots' => 'setAppointmentSlots'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduling_type' => 'getSchedulingType',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'appointment_slots' => 'getAppointmentSlots'
    ];

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

    const SCHEDULING_TYPE_REAL_TIME_SCHEDULING = 'REAL_TIME_SCHEDULING';
    const SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING = 'NON_REAL_TIME_SCHEDULING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchedulingTypeAllowableValues()
    {
        return [
            self::SCHEDULING_TYPE_REAL_TIME_SCHEDULING,
            self::SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING,
        ];
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
        $this->container['scheduling_type'] = isset($data['scheduling_type']) ? $data['scheduling_type'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['appointment_slots'] = isset($data['appointment_slots']) ? $data['appointment_slots'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSchedulingTypeAllowableValues();
        if (!is_null($this->container['scheduling_type']) && !in_array($this->container['scheduling_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scheduling_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets scheduling_type
     *
     * @return string
     */
    public function getSchedulingType()
    {
        return $this->container['scheduling_type'];
    }

    /**
     * Sets scheduling_type
     *
     * @param string $scheduling_type Defines the type of slots.
     *
     * @return $this
     */
    public function setSchedulingType($scheduling_type)
    {
        $allowedValues = $this->getSchedulingTypeAllowableValues();
        if (!is_null($scheduling_type) && !in_array($scheduling_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scheduling_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scheduling_type'] = $scheduling_type;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Start Time from which the appointment slots are generated in ISO 8601 format.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time End Time up to which the appointment slots are generated in ISO 8601 format.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets appointment_slots
     *
     * @return \SellingPartnerApi\Model\AppointmentSlot[]
     */
    public function getAppointmentSlots()
    {
        return $this->container['appointment_slots'];
    }

    /**
     * Sets appointment_slots
     *
     * @param \SellingPartnerApi\Model\AppointmentSlot[] $appointment_slots A list of time windows along with associated capacity in which the service can be performed.
     *
     * @return $this
     */
    public function setAppointmentSlots($appointment_slots)
    {
        $this->container['appointment_slots'] = $appointment_slots;

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


